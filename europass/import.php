<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2015 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */
 
define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'import');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
require_once(get_config('docroot') . 'artefact/europass/lib/locale.php');
require_once(get_config('docroot') . 'artefact/europass/lib/europassxml.php');


$eform = array(
    'name' => 'importeuropassform',
    'jsform' => false,
	'method' => 'post',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
	'template'   => 'importform.php',
    //'configdirs' => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/europass/form/'),
    'elements' => array(
		'file' => array(
			'type' => 'file',
			'labelhtml' => get_string('importfile','artefact.europass'),
			'description' => get_string('importfiledesc','artefact.europass'),
            'rules' => array('required' => true)
		),
		'identification' => array(
			'type' => 'checkbox', 
			'title' => get_string('identification', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'application' => array(
			'type' => 'checkbox', 
			'title' => get_string('application-tab', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'workexperience' => array(
			'type' => 'checkbox', 
			'title' => get_string('workexperience', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'education' => array(
			'type' => 'checkbox', 
			'title' => get_string('education', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'languages' => array(
			'type' => 'checkbox', 
			'title' => get_string('languages-tab', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'skills' => array(
			'type' => 'checkbox', 
			'title' => get_string('skills-and-competences', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'additionalinfo' => array(
			'type' => 'checkbox', 
			'title' => get_string('additionalinfo', 'artefact.europass'),
			'defaultvalue' => true,
		),
		'internaldate' => array(
			'type' => 'select',
            'title' => get_string('exportdate', 'artefact.europass'),
			'options' => array(
				'dmy11' => get_string('internaldate-dmy11', 'artefact.europass'),
				'dmy12' => get_string('internaldate-dmy12', 'artefact.europass'),
				'dmy13' => get_string('internaldate-dmy13', 'artefact.europass'),
				'dmy21' => get_string('internaldate-dmy21', 'artefact.europass'),
				'dmy22' => get_string('internaldate-dmy22', 'artefact.europass'),
				'dmy23' => get_string('internaldate-dmy23', 'artefact.europass'),
				'mdy11' => get_string('internaldate-mdy11', 'artefact.europass'),
				'mdy12' => get_string('internaldate-mdy12', 'artefact.europass'),
				'mdy13' => get_string('internaldate-mdy13', 'artefact.europass'),
				'mdy21' => get_string('internaldate-mdy21', 'artefact.europass'),
				'mdy22' => get_string('internaldate-mdy22', 'artefact.europass'),
				'mdy23' => get_string('internaldate-mdy23', 'artefact.europass'),
				'ymd11' => get_string('internaldate-ymd11', 'artefact.europass'),
				'ymd12' => get_string('internaldate-ymd12', 'artefact.europass'),
				'ymd13' => get_string('internaldate-ymd13', 'artefact.europass'),
				'ymd21' => get_string('internaldate-ymd21', 'artefact.europass'),
				'ymd22' => get_string('internaldate-ymd22', 'artefact.europass'),
				'ymd23' => get_string('internaldate-ymd23', 'artefact.europass'),
				'yonly' => get_string('internaldate-yonly', 'artefact.europass'),
				'other' => get_string('internaldate-other', 'artefact.europass'),
			),
			'description' => get_string('selectinternaldatedesc', 'artefact.europass'),
			'defaultvalue' => 'ymd11',
		),
		'submit' => array(
			'type' => 'submit',
			'value' => get_string('executeimport', 'artefact.europass'),
		),
	),
);


function importeuropassform_validate(Pieform $form, $values) {
    global $USER, $SESSION;
	
    $filetype = $values['file']['type'];
    if (!$filetype || $filetype <> 'text/xml') {
        $form->set_error('file', get_string('notvalidxmlfile', 'artefact.europass'));
    }
	// Check if at least one import option is checked...
	$options = array();
	if (!empty($values['identification'])) $options[] = 'identification';
	if (!empty($values['application']))    $options[] = 'application';
	if (!empty($values['workexperience'])) $options[] = 'workexperience';
	if (!empty($values['education']))      $options[] = 'education';
	if (!empty($values['languages']))      $options[] = 'languages';
	if (!empty($values['skills']))         $options[] = 'skills';
	if (!empty($values['additionalinfo'])) $options[] = 'additionalinfo';
    if (empty($options)) {
        $form->set_error('additionalinfo', get_string('nocheckedoptions', 'artefact.europass'));
    }
}

function importeuropassform_submit(Pieform $form, $values) {
    global $SESSION, $USER;
	$userid = $USER->get('id');
	$dbnow = db_format_timestamp(time());
	
	// Get locked fields of the institution that the user belongs to...
	$lockedfields = array();
	$records = get_records_sql_array('
		SELECT ilpf.profilefield
		FROM {usr} u INNER JOIN {auth_instance} ai
			ON u.authinstance = ai.id JOIN {institution_locked_profile_field} ilpf
			ON ai.institution = ilpf.name
		WHERE u.id = ?
		ORDER BY ilpf.profilefield', array($userid));
	if ($records) {
		foreach ($records as $record) {
			$lockedfields[] = $record->profilefield;
		}
	}
	
	$filename = $values['file']['tmp_name'];
	if ($filename <> null) {
		$xmlDoc = new DOMDocument('1.0', 'UTF-8');
		//$xmlDoc->load($filename);
		// Upper line not working, so try another approach...
		// SEE: http://php.net/manual/en/function.dom-import-simplexml.php
		//$simplexmlDoc = simplexml_load_file($filename); // not working...
		$contents = file_get_contents($filename);
		$simplexmlDoc = simplexml_load_string($contents);
		$xmlNode = dom_import_simplexml($simplexmlDoc);
		$xmlNode = $xmlDoc->importNode($xmlNode, true);
		$xmlDoc->appendChild($xmlNode);

		// ======================================
		// Step 1: Import personal information...
		// ======================================
		// These are only fields that can be locked!
		if (!empty($values['identification']) && is_object($xmlDoc->getElementsByTagName('identification')->item(0))) {
			$SESSION->add_info_msg(get_string('fieldnotimported', 'artefact.europass', 'firstname'));
			$SESSION->add_info_msg(get_string('fieldnotimported', 'artefact.europass', 'lastname'));
			// Import address info...
			if (!in_array('address', $lockedfields)) {
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($xmlDoc->getElementsByTagName('addressLine')->item(0))) {
					$address = $xmlDoc->getElementsByTagName('addressLine')->item(0)->nodeValue;
					if ($address != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'address', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $address, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'address', 'owner' => $userid, 'author' => $userid, 'title' => $address, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'address'));
			}
			// Import municipality/city...
			if (!in_array('city', $lockedfields)) {
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($xmlDoc->getElementsByTagName('municipality')->item(0))) {
					$municipality = $xmlDoc->getElementsByTagName('municipality')->item(0)->nodeValue;
					if ($municipality != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'city', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $municipality, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'city', 'owner' => $userid, 'author' => $userid, 'title' => $municipality, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'municipality'));
			}
			// Import (home) telephone number...
			if (!in_array('homenumber', $lockedfields)) {
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($xmlDoc->getElementsByTagName('telephone')->item(0))) {
					$telephone = $xmlDoc->getElementsByTagName('telephone')->item(0)->nodeValue;
					if ($telephone != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'homenumber', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $telephone, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'homenumber', 'owner' => $userid, 'author' => $userid, 'title' => $telephone, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'telephone'));
			}
			// Import mobile number...
			if (!in_array('mobilenumber', $lockedfields)) {
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($xmlDoc->getElementsByTagName('mobile')->item(0))) {
					$mobile = $xmlDoc->getElementsByTagName('mobile')->item(0)->nodeValue;
					if ($mobile != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'mobilenumber', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $mobile, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'mobilenumber', 'owner' => $userid, 'author' => $userid, 'title' => $mobile, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'mobile'));
			}
			// Import fax number...
			if (!in_array('faxnumber', $lockedfields)) {
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($xmlDoc->getElementsByTagName('fax')->item(0))) {
					$fax = $xmlDoc->getElementsByTagName('fax')->item(0)->nodeValue;
					if ($fax != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'faxnumber', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $fax, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'faxnumber', 'owner' => $userid, 'author' => $userid, 'title' => $fax, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'fax'));
			}
			// Import country...
			if (!in_array('country', $lockedfields) && is_object($xmlDoc->getElementsByTagName('country')->item(0))) {
				$parent = $xmlDoc->getElementsByTagName('country')->item(0);
				$clone = $parent->cloneNode(true);
				// Check if object exists - it only exists in Europass CV XML
				if (is_object($clone->getElementsByTagName('code')->item(0))) {
					$country = strtolower($clone->getElementsByTagName('code')->item(0)->nodeValue);
					if ($country != null) {
						$id = get_field('artefact', 'id', 'artefacttype', 'country', 'owner', $userid);
						if ($id != false) {
							update_record('artefact', array('title' => $country, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
						} else {
							insert_record('artefact', array('artefacttype' => 'country', 'owner' => $userid, 'author' => $userid, 'title' => $country, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
						}
					}
				}
			} else {
				$SESSION->add_info_msg(get_string('lockedfieldnotimported', 'artefact.europass', 'fax'));
			}
			// -------------------
			// Import demographics
			// -------------------
			// No locked fields from here on...
			$personalinfo = get_record('artefact', 'artefacttype', 'personalinformation', 'owner', $userid);
			if (!$personalinfo) {
				$artefactid = insert_record('artefact',
					array(
						'artefacttype' => 'personalinformation',
						'owner' => $userid,
						'title' => get_string('identification', 'artefact.europass'),
						'author' => $userid,
						'mtime' => $dbnow,
						'atime' => $dbnow,
						'ctime' => $dbnow
					),
					'id', true
				);
				insert_record('artefact_resume_personal_information', array('artefact' => $artefactid));
			} else {
				$artefactid = $personalinfo->id;
			}
			// Get birthdate...
			$birthdate = null;
			if (is_object($xmlDoc->getElementsByTagName('birthdate')->item(0))) {
				$birthdate = $xmlDoc->getElementsByTagName('birthdate')->item(0)->nodeValue;
				$birthdate = strftime('%Y-%m-%d %H:%M:%S', strtotime($birthdate));
			}
			// Get gender...
			$gender = null;
			if (is_object($xmlDoc->getElementsByTagName('gender')->item(0))) {
				$gendervalue = $xmlDoc->getElementsByTagName('gender')->item(0)->nodeValue;
				switch ($gendervalue) {
					case 'M': $gender = 'male'; break;
					case 'F': $gender = 'female'; break;
					default: $gender = null; // When NA option is set.
				}
			}
			// Get nationality...
			$citizenship = null;
			if (is_object($xmlDoc->getElementsByTagName('nationality'))) {
				$nationalities = $xmlDoc->getElementsByTagName('nationality');
				foreach ($nationalities as $nationality) {
					$citizenship .= $nationality->getElementsByTagName('label')->item(0)->nodeValue . ', ';
				}
				$citizenship = substr($citizenship, 0, -2); // Remove ', ' at the end of string.
			}
			// Import demographics...
			$demographics = array();
			if ($birthdate != null) {
				$demographics = array_merge($demographics, array('dateofbirth' => $birthdate));
			}
			if ($gender != null) {
				$demographics = array_merge($demographics, array('gender' => $gender));
			}
			if ($citizenship != null) {
				$demographics = array_merge($demographics, array('citizenship' => $citizenship));
			}
			$id = get_field('artefact_resume_personal_information', 'artefact', 'artefact', $artefactid);
			if ($id != false) {
				if (!empty($demographics)) {
					update_record('artefact_resume_personal_information', $demographics, array('artefact' => $artefactid));
					update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $artefactid));
				}
			} else {
				insert_record('artefact_resume_personal_information', array_merge($demographics, array('artefact' => $artefactid)));
				update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $artefactid));
			}
		}

		// =============================
		// Step 2: Import application...
		// =============================
		// Check if object exists - it only exists in Europass CV XML
		if (!empty($values['application']) && is_object($xmlDoc->getElementsByTagName('application')->item(0))) {
			// Import application code...
			$parent = $xmlDoc->getElementsByTagName('application')->item(0);
			$clone = $parent->cloneNode(true);
			if (is_object($clone->getElementsByTagName('code')->item(0))) {
				$application = $clone->getElementsByTagName('code')->item(0)->nodeValue;
				if ($application != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'application', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('application', 'artefact.europass'), 'description' => 'i'.$application, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'application', 'owner' => $userid, 'author' => $userid, 'title' => get_string('application', 'artefact.europass'), 'description' => 'i'.$application, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
			}
		}

		// =================================
		// Step 3: Import work experience...
		// =================================
		// Check if object exists - it only exists in Europass CV XML
		if (!empty($values['workexperience']) && is_object($xmlDoc->getElementsByTagName('workexperiencelist')->item(0))) {
			$employment = get_record('artefact', 'artefacttype', 'employmenthistory', 'owner', $userid);
			if (!$employment) {
				$artefactid = insert_record('artefact',
					array(
						'artefacttype' => 'employmenthistory',
						'owner' => $userid,
						'title' => get_string('employmenthistory', 'artefact.resume'),
						'author' => $userid,
						'mtime' => $dbnow,
						'atime' => $dbnow,
						'ctime' => $dbnow
					),
					'id', true
				);
			} else {
				$artefactid = $employment->id;
			}
			// -----------------------
			// Import work experiences
			// -----------------------
			$workexperiences = $xmlDoc->getElementsByTagName('workexperience');
			$getgender = $xmlDoc->getElementsByTagName('gender')->item(0)->nodeValue;
			switch ($getgender) {
				case 'F': $gender = 'female'; break;
				case 'M': $gender = 'male'; break;
				default: $gender = null;
			}
			foreach ($workexperiences as $workexperience) {
				// Get startdate...
				$startdate = null;
				if ($workexperience->getElementsByTagName('from')->item(0)->hasChildNodes()) {
					$parent = $workexperience->getElementsByTagName('from')->item(0);
					$clone = $parent->cloneNode(true);
					$start = array('year' => 0, 'month' => 0, 'day' => 0);
					// Get year, if it exists...
					if (is_object($clone->getElementsByTagName('year')->item(0))) {
						$start['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
					}
					// Get month, if it exists...
					if (is_object($clone->getElementsByTagName('month')->item(0))) {
						$start['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
					}
					// Get day, if it exists...
					if (is_object($clone->getElementsByTagName('day')->item(0))) {
						$start['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
					}
					$startdate = mahara_date($start, $values['internaldate']);
				}
				// Get enddate...
				$enddate = null;
				if ($workexperience->getElementsByTagName('to')->item(0)->hasChildNodes()) {
					$parent = $workexperience->getElementsByTagName('to')->item(0);
					$clone = $parent->cloneNode(true);
					$end = array('year' => 0, 'month' => 0, 'day' => 0);
					// Get year, if it exists...
					if (is_object($clone->getElementsByTagName('year')->item(0))) {
						$end['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
					}
					// Get month, if it exists...
					if (is_object($clone->getElementsByTagName('month')->item(0))) {
						$end['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
					}
					// Get day, if it exists...
					if (is_object($clone->getElementsByTagName('day')->item(0))) {
						$end['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
					}
					$enddate = mahara_date($end, $values['internaldate']);
				}
				// Get employer (name & address)...
				$employer = null;
				$employeraddress = null;
				if ($workexperience->getElementsByTagName('employer')->item(0)->hasChildNodes()) {
					$parent = $workexperience->getElementsByTagName('employer')->item(0);
					$clone = $parent->cloneNode(true);
					// Get employer's name...
					if (is_object($clone->getElementsByTagName('name')->item(0))) {
						$employer = $clone->getElementsByTagName('name')->item(0)->nodeValue;
					}
					// Get employer's address...
					if (is_object($clone->getElementsByTagName('addressLine')->item(0))) {
						$employeraddress = $clone->getElementsByTagName('addressLine')->item(0)->nodeValue;
					}
					if (is_object($clone->getElementsByTagName('postalCode')->item(0))) {
						$employeraddress .= ', ' . $clone->getElementsByTagName('postalCode')->item(0)->nodeValue;
					}
					if (is_object($clone->getElementsByTagName('municipality')->item(0))) {
						$employeraddress .= ' ' . $clone->getElementsByTagName('municipality')->item(0)->nodeValue;
					}
					if ($clone->getElementsByTagName('country')->item(0)->hasChildNodes()) {
						$country = $clone->getElementsByTagName('country')->item(0)->cloneNode(true);
						if (is_object($country->getElementsByTagName('code')->item(0))) {
							$countrycode = strtolower($country->getElementsByTagName('code')->item(0)->nodeValue);
							$countryname = get_string_from_file('country.'.$countrycode, get_config('docroot').'artefact/europass/lang/'.get_config('lang').'/artefact.europass.php');
							$employeraddress .= ', ' . $countryname;
						} else {
							if (is_object($country->getElementsByTagName('label')->item(0))) {
								$employeraddress .= ', ' . $country->getElementsByTagName('label')->item(0)->nodeValue;
							}
						}
					}
				}
				// Get jobtitle...
				$jobtitle = null;
				if ($workexperience->getElementsByTagName('position')->item(0)->hasChildNodes()) {
					$parent = $workexperience->getElementsByTagName('position')->item(0);
					$clone = $parent->cloneNode(true);
					// Get position code if it exists, else get label
					if (is_object($clone->getElementsByTagName('code')->item(0))) {
						$code = 'i' . $clone->getElementsByTagName('code')->item(0)->nodeValue;
						$occupation = get_occupation($code, set_default_locale(get_config('lang')), $gender);
						$jobtitle = $occupation['label'];
					} elseif (is_object($clone->getElementsByTagName('label')->item(0))) {
						$jobtitle = $clone->getElementsByTagName('label')->item(0)->nodeValue;
					}
				}
				// Get positiondescription...
				$positiondescription = null;
				if (is_object($workexperience->getElementsByTagName('activities')->item(0))) {
					$positiondescription = $workexperience->getElementsByTagName('activities')->item(0)->nodeValue;
				}
				
				// Import employment history...
				$employmentdata = array(
					'artefact'  => $artefactid,
					'startdate' => $startdate,
					'employer'  => $employer,
				);
				if ($enddate != null) {
					$employmentdata = array_merge($employmentdata, array('enddate' => $enddate));
				}
				if ($employeraddress != null) {
					$employmentdata = array_merge($employmentdata, array('employeraddress' => $employeraddress));
				}
				if ($jobtitle != null) {
					$employmentdata = array_merge($employmentdata, array('jobtitle' => $jobtitle));
				}
				if ($positiondescription != null) {
					$employmentdata = array_merge($employmentdata, array('positiondescription' => $positiondescription));
				}
				$id = get_field('artefact_resume_employmenthistory', 'id', 'artefact', $artefactid, 'startdate', $startdate, 'employer', $employer);
				if ($id != false) {
					update_record('artefact_resume_employmenthistory', $employmentdata, array('id' => $id));
				} else {
					insert_record('artefact_resume_employmenthistory', $employmentdata);
				}
			}
			update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $artefactid));
		}

		// ===========================
		// Step 4: Import education...
		// ===========================
		// Check if object exists - it only exists in Europass CV XML
		if (!empty($values['education']) && is_object($xmlDoc->getElementsByTagName('educationlist')->item(0))) {
			$education = get_record('artefact', 'artefacttype', 'educationhistory', 'owner', $userid);
			if (!$education) {
				$artefactid = insert_record('artefact',
					array(
						'artefacttype' => 'educationhistory',
						'owner' => $userid,
						'title' => get_string('educationhistory', 'artefact.resume'),
						'author' => $userid,
						'mtime' => $dbnow,
						'atime' => $dbnow,
						'ctime' => $dbnow
					),
					'id', true
				);
			} else {
				$artefactid = $education->id;
			}
			// ----------------
			// Import education
			// ----------------
			$educationlist = $xmlDoc->getElementsByTagName('education');
			foreach ($educationlist as $education) {
				// Get startdate...
				$startdate = null;
				if ($education->getElementsByTagName('from')->item(0)->hasChildNodes()) {
					$parent = $education->getElementsByTagName('from')->item(0);
					$clone = $parent->cloneNode(true);
					$start = array('year' => 0, 'month' => 0, 'day' => 0);
					// Get year, if it exists...
					if (is_object($clone->getElementsByTagName('year')->item(0))) {
						$start['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
					}
					// Get month, if it exists...
					if (is_object($clone->getElementsByTagName('month')->item(0))) {
						$start['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
					}
					// Get day, if it exists...
					if (is_object($clone->getElementsByTagName('day')->item(0))) {
						$start['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
					}
					$startdate = mahara_date($start, $values['internaldate']);
				}
				// Get enddate...
				$enddate = null;
				if ($education->getElementsByTagName('to')->item(0)->hasChildNodes()) {
					$parent = $education->getElementsByTagName('to')->item(0);
					$clone = $parent->cloneNode(true);
					$end = array('year' => 0, 'month' => 0, 'day' => 0);
					// Get year, if it exists...
					if (is_object($clone->getElementsByTagName('year')->item(0))) {
						$end['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
					}
					// Get month, if it exists...
					if (is_object($clone->getElementsByTagName('month')->item(0))) {
						$end['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
					}
					// Get day, if it exists...
					if (is_object($clone->getElementsByTagName('day')->item(0))) {
						$end['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
					}
					$enddate = mahara_date($end, $values['internaldate']);
				}
				// Get qualification type...
				$qualtype = null;
				if ($education->getElementsByTagName('level')->item(0)->hasChildNodes()) {
					$parent = $education->getElementsByTagName('level')->item(0);
					$clone = $parent->cloneNode(true);
					// Get employer's name...
					if (is_object($clone->getElementsByTagName('label')->item(0))) {
						$qualtype = $clone->getElementsByTagName('label')->item(0)->nodeValue;
					}
				}
				// Get qualification name...
				$qualname = null;
				if (is_object($education->getElementsByTagName('title')->item(0))) {
					$qualname = $education->getElementsByTagName('title')->item(0)->nodeValue;
				}
				// Get qualification description...
				$qualdescription = null;
				if (is_object($education->getElementsByTagName('skills')->item(0))) {
					$qualdescription = $education->getElementsByTagName('skills')->item(0)->nodeValue;
				}
				// Get insitution (name & address)...
				$institution = null;
				$institutionaddress = null;
				if ($education->getElementsByTagName('organisation')->item(0)->hasChildNodes()) {
					$parent = $education->getElementsByTagName('organisation')->item(0);
					$clone = $parent->cloneNode(true);
					// Get institution's name...
					if (is_object($clone->getElementsByTagName('name')->item(0))) {
						$institution = $clone->getElementsByTagName('name')->item(0)->nodeValue;
					}
					// Get institution's address...
					if (is_object($clone->getElementsByTagName('addressLine')->item(0))) {
						$institutionaddress = $clone->getElementsByTagName('addressLine')->item(0)->nodeValue;
					}
					if (is_object($clone->getElementsByTagName('postalCode')->item(0))) {
						$institutionaddress .= ', ' . $clone->getElementsByTagName('postalCode')->item(0)->nodeValue;
					}
					if (is_object($clone->getElementsByTagName('municipality')->item(0))) {
						$institutionaddress .= ' ' . $clone->getElementsByTagName('municipality')->item(0)->nodeValue;
					}
					if ($clone->getElementsByTagName('country')->item(0)->hasChildNodes()) {
						$country = $clone->getElementsByTagName('country')->item(0)->cloneNode(true);
						if (is_object($country->getElementsByTagName('code')->item(0))) {
							$countrycode = strtolower($country->getElementsByTagName('code')->item(0)->nodeValue);
							$countryname = get_string_from_file('country.'.$countrycode, get_config('docroot').'artefact/europass/lang/'.get_config('lang').'/artefact.europass.php');
							$institutionaddress .= ', ' . $countryname;
						} else {
							if (is_object($country->getElementsByTagName('label')->item(0))) {
								$institutionaddress .= ', ' . $country->getElementsByTagName('label')->item(0)->nodeValue;
							}
						}
					}
				}
				
				// Import education history...
				$educationdata = array(
					'artefact'  => $artefactid,
					'startdate' => $startdate,
					'institution'  => $institution,
				);
				if ($enddate != null) {
					$educationdata = array_merge($educationdata, array('enddate' => $enddate));
				}
				if ($qualtype != null) {
					$educationdata = array_merge($educationdata, array('qualtype' => $qualtype));
				}
				if ($qualname != null) {
					$educationdata = array_merge($educationdata, array('qualname' => $qualname));
				}
				if ($institutionaddress != null) {
					$educationdata = array_merge($educationdata, array('institutionaddress' => $institutionaddress));
				}
				if ($qualdescription != null) {
					$educationdata = array_merge($educationdata, array('qualdescription' => $qualdescription));
				}
				$id = get_field('artefact_resume_educationhistory', 'id', 'artefact', $artefactid, 'startdate', $startdate, 'institution', $institution);
				if ($id != false) {
					update_record('artefact_resume_educationhistory', $educationdata, array('id' => $id));
				} else {
					insert_record('artefact_resume_educationhistory', $educationdata);
				}
			}
			update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $artefactid));
		}

		// ===========================
		// Step 5: Import languages...
		// ===========================
		if (!empty($values['languages']) && is_object($xmlDoc->getElementsByTagName('languagelist')->item(0))) {
			$mothertongue = get_record('artefact', 'artefacttype', 'mothertongue', 'owner', $userid);
			if (!$mothertongue) {
				$mothertongueid = insert_record('artefact',
					array(
						'artefacttype' => 'mothertongue',
						'owner' => $userid,
						'title' => get_string('mothertongue', 'artefact.europass'),
						'author' => $userid,
						'mtime' => $dbnow,
						'atime' => $dbnow,
						'ctime' => $dbnow
					),
					'id', true
				);
			} else {
				$mothertongueid = $mothertongue->id;
			}
			$otherlanguage = get_record('artefact', 'artefacttype', 'otherlanguage', 'owner', $userid);
			if (!$otherlanguage) {
				$otherlanguageid = insert_record('artefact',
					array(
						'artefacttype' => 'otherlanguage',
						'owner' => $userid,
						'title' => get_string('otherlanguage', 'artefact.europass'),
						'author' => $userid,
						'mtime' => $dbnow,
						'atime' => $dbnow,
						'ctime' => $dbnow
					),
					'id', true
				);
			} else {
				$otherlanguageid = $otherlanguage->id;
			}
			
			$parent = $xmlDoc->getElementsByTagName('languagelist')->item(0);
			$clone = $parent->cloneNode(true);
			$children = $clone->getElementsByTagName('language');
			foreach ($children as $child) {
				// --------------------
				// Import mother tongue
				// --------------------
				if ($child->getAttribute('xsi:type') == 'europass:mother' && $child->hasChildNodes()) {
					if (is_object($child->getElementsByTagName('code')->item(0))) {
						$languagecode = strtolower($child->getElementsByTagName('code')->item(0)->nodeValue);
						$id = get_field('artefact_europass_mothertongue', 'id', 'artefact', $mothertongueid, 'language', $languagecode);
						if ($id != false) {
							update_record('artefact_europass_mothertongue', array('artefact' => $mothertongueid, 'language' => $languagecode), array('id' => $id));
						} else {
							insert_record('artefact_europass_mothertongue', array('artefact' => $mothertongueid, 'language' => $languagecode));
						}
						update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $mothertongueid));
					} else {
						if (is_object($child->getElementsByTagName('label')->item(0))) {
							$SESSION->add_info_msg(get_string('languagecodemissing', 'artefact.europass', 'mothertongue'));
						}
					}
				}
				// --------------------------
				// Import foreign language(s)
				// --------------------------
				if ($child->getAttribute('xsi:type') == 'europass:foreign' && $child->hasChildNodes()) {
					$language = $child->cloneNode(true);
					if (is_object($language->getElementsByTagName('code')->item(0))) {
						$languagecode = strtolower($language->getElementsByTagName('code')->item(0)->nodeValue);
						$level = array();
						$level['listening'] = strtoupper($language->getElementsByTagName('listening')->item(0)->nodeValue);
						$level['reading'] = strtoupper($language->getElementsByTagName('reading')->item(0)->nodeValue);
						$level['spokeninteraction'] = strtoupper($language->getElementsByTagName('spokeninteraction')->item(0)->nodeValue);
						$level['spokenproduction'] = strtoupper($language->getElementsByTagName('spokenproduction')->item(0)->nodeValue);
						$level['writing'] = strtoupper($language->getElementsByTagName('writing')->item(0)->nodeValue);
						$languagedata = array(
							'artefact'          => $otherlanguageid,
							'language'          => $languagecode,
							'listening'         => $level['listening'],
							'reading'           => $level['reading'],
							'spokeninteraction' => $level['spokeninteraction'],
							'spokenproduction'  => $level['spokenproduction'],
							'writing'           => $level['writing']
						);
						$languageid = get_field('artefact_europass_otherlanguage', 'id', 'artefact', $otherlanguageid, 'language', $languagecode);
						if ($languageid != false) {
							update_record('artefact_europass_otherlanguage', $languagedata, array('id' => $languageid));
						} else {
							$languageid = insert_record('artefact_europass_otherlanguage', $languagedata, 'id', true);
						}
						
						// Import language diploma(s)
						// --------------------------
						$diplomalist = $language->getElementsByTagName('diploma');
						foreach ($diplomalist as $diploma) {
							// Get certificate (title)...
							$certificate = null;
							if (is_object($diploma->getElementsByTagName('title')->item(0))) {
								$certificate = $diploma->getElementsByTagName('title')->item(0)->nodeValue;
							}
							// Get awarding body...
							$awardingbody = null;
							if (is_object($diploma->getElementsByTagName('awardingBody')->item(0))) {
								$awardingbody = $diploma->getElementsByTagName('awardingBody')->item(0)->nodeValue;
							}
							// Get certificate date...
							$certificatedate = null;
							if ($diploma->getElementsByTagName('date')->item(0)->hasChildNodes()) {
								$parent = $diploma->getElementsByTagName('date')->item(0);
								$clone = $parent->cloneNode(true);
								$certdate = array('year' => 0, 'month' => 0, 'day' => 0);
								// Get year, if it exists...
								if (is_object($clone->getElementsByTagName('year')->item(0))) {
									$certdate['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
								}
								// Get month, if it exists...
								if (is_object($clone->getElementsByTagName('month')->item(0))) {
									$certdate['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
								}
								// Get day, if it exists...
								if (is_object($clone->getElementsByTagName('day')->item(0))) {
									$certdate['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
								}
								$certificatedate = mahara_date($certdate, $values['internaldate']);
							}
							// Get european level...
							$europeanlevel = null;
							if (is_object($diploma->getElementsByTagName('level')->item(0))) {
								$europeanlevel = strtoupper($diploma->getElementsByTagName('level')->item(0)->nodeValue);
							}
							
							// Import language diploma...
							$artefact = get_field('artefact', 'id', 'artefacttype', 'languagediploma', 'owner', $userid);
							if (!$artefact) {
								$artefact = insert_record('artefact',
									array(
										'artefacttype' => 'languagediploma',
										'owner' => $userid,
										'title' => get_string('languagediploma', 'artefact.europass'),
										'author' => $userid,
										'mtime' => $dbnow,
										'atime' => $dbnow,
										'ctime' => $dbnow
									),
									'id', true
								);
							}
							$diplomadata = array(
								'artefact'        => $artefact,
								'languageid'      => $languageid,
								'certificate'     => $certificate,
								'awardingbody'    => $awardingbody,
								'certificatedate' => $certificatedate,
							);
							if ($europeanlevel != null) {
								$diplomadata = array_merge($diplomadata, array('europeanlevel' => $europeanlevel));
							}
							$id = get_field('artefact_europass_languagediploma', 'id', 'artefact', $otherlanguageid, 'languageid', $languageid);
							if ($id != false) {
								update_record('artefact_europass_languagediploma', $diplomadata, array('id' => $id));
							} else {
								insert_record('artefact_europass_languagediploma', $diplomadata);
							}
						}

						// Import linguistic experience(s)
						// -------------------------------
						$experiencelist = $language->getElementsByTagName('experience');
						foreach ($experiencelist as $experience) {
							// Get startdate...
							$startdate = null;
							if ($experience->getElementsByTagName('from')->item(0)->hasChildNodes()) {
								$parent = $experience->getElementsByTagName('from')->item(0);
								$clone = $parent->cloneNode(true);
								$start = array('year' => 0, 'month' => 0, 'day' => 0);
								// Get year, if it exists...
								if (is_object($clone->getElementsByTagName('year')->item(0))) {
									$start['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
								}
								// Get month, if it exists...
								if (is_object($clone->getElementsByTagName('month')->item(0))) {
									$start['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
								}
								// Get day, if it exists...
								if (is_object($clone->getElementsByTagName('day')->item(0))) {
									$start['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
								}
								$startdate = mahara_date($start, $values['internaldate']);
							}
							// Get enddate...
							$enddate = null;
							if ($experience->getElementsByTagName('to')->item(0)->hasChildNodes()) {
								$parent = $experience->getElementsByTagName('to')->item(0);
								$clone = $parent->cloneNode(true);
								$end = array('year' => 0, 'month' => 0, 'day' => 0);
								// Get year, if it exists...
								if (is_object($clone->getElementsByTagName('year')->item(0))) {
									$end['year'] = trim($clone->getElementsByTagName('year')->item(0)->nodeValue);
								}
								// Get month, if it exists...
								if (is_object($clone->getElementsByTagName('month')->item(0))) {
									$end['month'] = ltrim(trim($clone->getElementsByTagName('month')->item(0)->nodeValue), '-');
								}
								// Get day, if it exists...
								if (is_object($clone->getElementsByTagName('day')->item(0))) {
									$end['day'] = ltrim(trim($clone->getElementsByTagName('day')->item(0)->nodeValue), '-');
								}
								$enddate = mahara_date($end, $values['internaldate']);
							}
							// Get qualification name...
							$description = null;
							if (is_object($experience->getElementsByTagName('description')->item(0))) {
								$description = $experience->getElementsByTagName('description')->item(0)->nodeValue;
							}
							
							// Import linguistic experience...
							$artefact = get_field('artefact', 'id', 'artefacttype', 'languageexperience', 'owner', $userid);
							if (!$artefact) {
								$artefact = insert_record('artefact',
									array(
										'artefacttype' => 'languageexperience',
										'owner' => $userid,
										'title' => get_string('languageexperience', 'artefact.europass'),
										'author' => $userid,
										'mtime' => $dbnow,
										'atime' => $dbnow,
										'ctime' => $dbnow
									),
									'id', true
								);
							}
							$experiencedata = array(
								'artefact'    => $artefact,
								'languageid'  => $languageid,
								'startdate'   => $startdate,
								'description' => $description,
							);
							if ($enddate != null) {
								$experiencedata = array_merge($experiencedata, array('enddate' => $enddate));
							}
							$id = get_field('artefact_europass_languageexperience', 'id', 'artefact', $otherlanguageid, 'languageid', $languageid);
							if ($id != false) {
								update_record('artefact_europass_languageexperience', $experiencedata, array('id' => $id));
							} else {
								insert_record('artefact_europass_languageexperience', $experiencedata);
							}
						}
						update_record('artefact', array('mtime' => $dbnow, 'atime' => $dbnow), array('id' => $otherlanguageid));
					} else {
						if (is_object($child->getElementsByTagName('label')->item(0))) {
							$SESSION->add_info_msg(get_string('languagecodemissing', 'artefact.europass', 'otherlanguage'));
						}
					}
				}
			}
		}

		// ========================================
		// Step 6: Import skills and competences...
		// ========================================
		// Check if object exists - it only exists in Europass CV XML
		if (!empty($values['skills']) && is_object($xmlDoc->getElementsByTagName('skilllist')->item(0))) {
			$parent = $xmlDoc->getElementsByTagName('skilllist')->item(0);
			$clone = $parent->cloneNode(true);
			$children = $clone->getElementsByTagName('skill');
			foreach ($children as $child) {
				// Import social skills...
				if ($child->getAttribute('type') == 'social' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'socialskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('socialskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'socialskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('socialskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import organisatonal skills...
				if ($child->getAttribute('type') == 'organisational' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'organisationalskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('organisationalskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'organisationalskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('organisationalskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import technical skills...
				if ($child->getAttribute('type') == 'technical' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'technicalskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('technicalskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'technicalskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('technicalskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import computer skills...
				if ($child->getAttribute('type') == 'computer' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'computerskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('computerskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'computerskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('computerskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import artistic skills...
				if ($child->getAttribute('type') == 'artistic' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'artisticskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('artisticskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'artisticskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('artisticskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import other skills...
				if ($child->getAttribute('type') == 'other' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'otherskill', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('otherskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'otherskill', 'owner' => $userid, 'author' => $userid, 'title' => get_string('otherskill', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
			}
			// Import driving licences...
			$drivinglicence = array(
				'AM' => false, 'A1' => false, 'A'  => false,
				'B'  => false, 'BE' => false, 'B1' => false,
				'C'  => false, 'CE' => false, 'C1' => false, 'C1E' => false,
				'D'  => false, 'DE' => false, 'D1' => false, 'D1E' => false,
			);
			$licences = $clone->getElementsByTagName('drivinglicence');
			foreach ($licences as $licence) {
				$drivinglicence[$licence->nodeValue] = true;
			}
			$drivinglicence = serialize($drivinglicence);
			$id = get_field('artefact', 'id', 'artefacttype', 'drivinglicence', 'owner', $userid);
			if ($id != false) {
				update_record('artefact', array('title' => get_string('drivinglicence', 'artefact.europass'), 'description' => $drivinglicence, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
			} else {
				insert_record('artefact', array('artefacttype' => 'drivinglicence', 'owner' => $userid, 'author' => $userid, 'title' => get_string('drivinglicence', 'artefact.europass'), 'description' => $drivinglicence, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
			}
		}

		// ========================================
		// Step 7: Import additional information...
		// ========================================
		// Check if object exists - it only exists in Europass CV XML
		if (!empty($values['additionalinfo']) && is_object($xmlDoc->getElementsByTagName('misclist')->item(0))) {
			$parent = $xmlDoc->getElementsByTagName('misclist')->item(0);
			$clone = $parent->cloneNode(true);
			$children = $clone->getElementsByTagName('misc');
			foreach ($children as $child) {
				// Import additional information...
				if ($child->getAttribute('type') == 'additional' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'additionalinfo', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('additionalinfo', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'additionalinfo', 'owner' => $userid, 'author' => $userid, 'title' => get_string('additionalinfo', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
				// Import annexes...
				if ($child->getAttribute('type') == 'annexes' && $child->nodeValue != null) {
					$id = get_field('artefact', 'id', 'artefacttype', 'annexes', 'owner', $userid);
					if ($id != false) {
						update_record('artefact', array('title' => get_string('annexes', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow), array('id' => $id));
					} else {
						insert_record('artefact', array('artefacttype' => 'annexes', 'owner' => $userid, 'author' => $userid, 'title' => get_string('annexes', 'artefact.europass'), 'description' => $child->nodeValue, 'mtime' => $dbnow, 'atime' => $dbnow, 'ctime' => $dbnow));
					}
				}
			}
		}
	}
	
    $SESSION->add_ok_msg(get_string('europassimportexecuted', 'artefact.europass'));
    redirect('/artefact/europass/');
}

$importeuropassform = pieform($eform);
$smarty = smarty();
$smarty->assign('importeuropassform', $importeuropassform);
$smarty->assign('PAGEHEADING', hsc(get_string('importeuropass', 'artefact.europass')));
$smarty->display('artefact:europass:import.tpl');

?>