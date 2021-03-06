<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2012 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2012 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator 
 *
 * @package    Europass Online Tools Labels and Help texts
 * @purpose    Provides the labels and help texts used in the Europass Online Tools.
 * @author(s)  Europass team
 * @copyright  (C) European Communities, 2002-2011 http://europass.cedefop.europa.eu
 * @license    http://europass.cedefop.europa.eu/europass/home/botnav/LegalNotice.csp
 * @version    20110907
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/cv_en_GB.xhtml
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/lp_en_GB.xhtml
 *
 * ISO 639-1   http://europass.cedefop.europa.eu/xml/EUROPASS_ISOLanguages_V1.1.xsd
 * ISO 3166-1  http://europass.cedefop.europa.eu/xml/EUROPASS_ISOCountries_V1.1.xsd
 * List of nationalities  http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd
 *(based on ISO 3166-1)
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass curriculum vitae saved sucessfully';
$string['europassexportgenerated'] = 'Please wait while your export is being generated...';
$string['europassexportnoconncetion'] = 'There was an error with connection to WSDL server. Please try again later.';
$string['europassexportservererror'] = 'There was an error on WSDL server. Please try again later.';
$string['europassextensionmissing'] = 'Sorry, you cannot use Europass plugin because your PHP installation is missing required extension:';
$string['newerversionforcompatibility'] = 'For better performance and compatibility you should upgrade to Mahara version 1.3.0 or newer.';

$string['languagesaved'] = 'Language saved sucessfully';
$string['languagesavefailed'] = 'Failed to save language';
$string['languagedeleteconfirm'] = 'Are you sure you want to delete this language?';
$string['languagedeleted'] = 'Language deleted sucessfully';

$string['moveup'] = 'Move up';
$string['movedown'] = 'Move down';

$string['languagediploma'] = 'Language diploma';
$string['languageexperience'] = 'Linguistic experience';
$string['languagediplomadeleteconfirm'] = 'Are you sure you want to delete this language diploma?';
$string['languageexperiencedeleteconfirm'] = 'Are you sure you want to delete this linguistic experience?';
$string['languagediplomadeleted'] = 'Language diploma deleted sucessfully';
$string['languageexperiencedeleted'] = 'Linguistic experience deleted sucessfully';
$string['languagediplomasaved'] = 'Language diploma saved sucessfully';
$string['languagediplomasavefailed'] = 'Failed to save language diploma';
$string['languageexperiencesaved'] = 'Linguistic experience saved sucessfully';
$string['languageexperiencesavefailed'] = 'Failed to save linguistic experience';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Export Europass';
$string['exportstep1'] = '1 - Document language and type';
$string['selectlocale&type'] = 'Select document language and type';
$string['selectlocale'] = 'Language';
$string['selectlocaledesc'] = 'Europass document language';
$string['selectdocumenttype'] = 'Document';
$string['europassCV'] = 'Europass - životopis (CV)';
$string['europassLP'] = 'Europass - jazykový pas';
$string['photograph'] = 'Fotografie';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/rrrr';
$string['internaldate-dmy12'] = 'dd.mm.rrrr';
$string['internaldate-dmy13'] = 'dd-mm-rrrr';
$string['internaldate-dmy21'] = 'dd/mm/rr';
$string['internaldate-dmy22'] = 'dd.mm.rr';
$string['internaldate-dmy23'] = 'dd-mm-rr';
$string['internaldate-mdy11'] = 'mm/dd/rrrr';
$string['internaldate-mdy12'] = 'mm.dd.rrrr';
$string['internaldate-mdy13'] = 'mm-dd-rrrr';
$string['internaldate-mdy21'] = 'mm/dd/rr';
$string['internaldate-mdy22'] = 'mm.dd.rr';
$string['internaldate-mdy23'] = 'mm-dd-rr';
$string['internaldate-ymd11'] = 'rrrr/mm/dd';
$string['internaldate-ymd12'] = 'rrrr.mm.dd';
$string['internaldate-ymd13'] = 'rrrr-mm-dd';
$string['internaldate-ymd21'] = 'rr/mm/dd';
$string['internaldate-ymd22'] = 'rr.mm.dd';
$string['internaldate-ymd23'] = 'rr-mm-dd';
$string['internaldate-yonly'] = 'rrrr';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/rrrr';
$string['externaldate-text-long'] = 'dd. měsíc rrrr';
$string['exportfile'] = 'File';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Export';
$string['generate'] = 'Generate export';
$string['generateexport'] = 'Export';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Import Europass';
$string['importstep1'] = '1 - Import file and options';
$string['selectfile&options'] = 'Upload Europass XML file and select import options';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Execute import';
$string['executeimport'] = 'Import';
$string['importfile'] = 'Europass XML file';
$string['importfiledesc'] = 'Select valid Europass XML file to import to Mahara';
$string['notvalidxmlfile'] = 'The uploaded file is not a valid XML file.';
$string['importoptions'] = 'What to import?';
$string['importoptionsdesc'] = 'Locked profile fields will not be changed/updated';
$string['nocheckedoptions'] = 'You have to check at least one option to import.';
$string['fieldnotimported'] = 'Field "%s" not imported.';
$string['lockedfieldnotimported'] = 'Locked field "%s" not imported.';
$string['languagecodemissing'] = 'Field "%s" not imported. Language code is missing.';
$string['importdate'] = 'Import dates as';
$string['europassimportexecuted'] = 'The data from Europass XML successfully imported into Mahara.';

// Europass GUI form tabs
$string['application-tab'] = 'Application';
$string['workexperience-tab'] = 'Employment';
$string['education-tab'] = 'Education';
$string['languages-tab'] = 'Languages';
$string['skills-tab'] = 'Skills';

// Europass CV - STEP 1
$string['identification'] = 'Osobní údaje';
$string['identification-birthdate'] = 'Datum narození';
$string['identification-birthplace'] = 'Místo narození';
$string['identification-lastname'] = 'Příjmení';
$string['identification-firstname'] = 'Jméno';
$string['identification-addressLine'] = 'Ulice / Číslo domu';
$string['identification-municipality'] = 'Obec';
$string['identification-postalCode'] = 'Poštovní smerovací číslo';
$string['identification-country'] = 'Země';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Mobilní telefon';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail';
$string['identification-nationality'] = 'Státní příslušnost';
$string['identification-gender'] = 'Pohlaví';

// Europass CV - STEP 2
$string['application'] = 'Požadované zaměstnání / profese';

// Europass CV - STEP 3
$string['workexperience'] = 'Pracovní zkušenosti';

// Europass CV - STEP 4
$string['education'] = 'Vzdělání, odborná příprava a školení';

// Europass CV - STEP 5
$string['mothertongue'] = 'Mateřský jazyk(y)';
$string['otherlanguage'] = 'Další jazyk(y)';

$string['language-foreign-listening'] = 'Poslech';
$string['language-foreign-listening-th'] = 'Poslech';
$string['language-foreign-reading'] = 'Čtení';
$string['language-foreign-reading-th'] = 'Čtení';
$string['language-foreign-spokeninteraction'] = 'Ústní interakce';
$string['language-foreign-spokeninteraction-th'] = 'Ústní<br>interakce';
$string['language-foreign-spokenproduction'] = 'Samostatný ústní projev';
$string['language-foreign-spokenproduction-th'] = 'Samostatný<br>ústní projev';
$string['language-foreign-writing'] = 'Psaní';
$string['language-foreign-writing-th'] = 'Psaní';
$string['language-foreign-CEF-level'] = 'Společný evropský referenční rámec pro jazyky';

$string['language-foreign-level.A1'] = 'uživatel základů jazyka (A1)';
$string['language-foreign-level.A2'] = 'uživatel základů jazyka (A2)';
$string['language-foreign-level.B1'] = 'samostatný uživatel (B1)';
$string['language-foreign-level.B2'] = 'samostatný uživatel (B2)';
$string['language-foreign-level.C1'] = 'zkušený uživatel (C1)';
$string['language-foreign-level.C2'] = 'zkušený uživatel (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Řidičský průkaz(y)';
$string['skills-and-competences'] = 'Schopnosti, znalosti a dovednosti';
$string['socialskill'] = 'Sociální schopnosti a dovednosti';
$string['organisationalskill'] = 'Organizační schopnosti a dovednosti';
$string['technicalskill'] = 'Technické znalosti a dovednosti';
$string['computerskill'] = 'Počítačové znalosti a dovednosti';
$string['artisticskill'] = 'Umělecké schopnosti a dovednosti';
$string['otherskill'] = 'Další schopnosti, znalosti a dovednosti';
$string['additionalinfo'] = 'Doplňující informace';
$string['annexes'] = 'Přílohy';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplom(y) nebo osvědčení';
$string['diploma-title'] = 'Název';
$string['diploma-awardingBody'] = 'Organizace, která diplom (osvědčení) udělila';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Evropská úroveň';
$string['language-experiences'] = 'Praktické zkušenosti s jazykem';
$string['experiences-period-from'] = 'Od';
$string['experiences-period-to'] = 'Do';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'Български – (bg)';
$string['locale.cs_CZ'] = 'čeština – (cs)';
$string['locale.da_DK'] = 'Dansk – (da)';
$string['locale.de_DE'] = 'Deutsch – (de)';
$string['locale.et_EE'] = 'eesti keel – (et)';
$string['locale.el_GR'] = 'Ελληνικά – (el)';
$string['locale.en_GB'] = 'English – (en)';
$string['locale.es_ES'] = 'Español – (es)';
$string['locale.fi_FI'] = 'suomi – (fi)';
$string['locale.fr_FR'] = 'Français – (fr)';
$string['locale.hr_HR'] = 'Hrvatski – (hr)';
$string['locale.hu_HU'] = 'magyar – (hu)';
$string['locale.is_IS'] = 'Íslenska – (is)';
$string['locale.it_IT'] = 'Italiano – (it)';
$string['locale.lt_LT'] = 'Lietuvių – (lt)';
$string['locale.lv_LV'] = 'Latviešu – (lv)';
$string['locale.mt_MT'] = 'Malti – (mt)';
$string['locale.nl_NL'] = 'Nederlands – (nl)';
$string['locale.no_NO'] = 'Norsk – (no)';
$string['locale.pl_PL'] = 'polski – (pl)';
$string['locale.pt_PT'] = 'Português – (pt)';
$string['locale.ro_RO'] = 'Română – (ro)';
$string['locale.sk_SK'] = 'slovenčina – (sk)';
$string['locale.sl_SI'] = 'slovenščina – (sl)';
$string['locale.sv_SE'] = 'Svenska – (sv)';
$string['locale.tr_TR'] = 'Türkçe – (tr)';

// ISO 639-1:2002 filtered by Europass, including the languages considered as "dead"
// (http://www.iso.org/iso/catalogue_detail?csnumber=22109)
$string['language.ab'] = 'abchazština';
$string['language.af'] = 'afrikánština';
$string['language.an'] = 'aragonština';
$string['language.ar'] = 'arabština';
$string['language.as'] = 'ásámština';
$string['language.az'] = 'ázerbajdžánština';
$string['language.be'] = 'běloruština';
$string['language.bg'] = 'bulharština';
$string['language.bn'] = 'bengálština';
$string['language.bo'] = 'tibetština';
$string['language.br'] = 'bretonština';
$string['language.bs'] = 'bosenština';
$string['language.ca'] = 'kataláština';
$string['language.ce'] = 'čečenština';
$string['language.co'] = 'korsičtina';
$string['language.cs'] = 'čeština';
$string['language.cy'] = 'velština';
$string['language.da'] = 'dánština';
$string['language.de'] = 'němčina';
$string['language.el'] = 'řečtina';
$string['language.en'] = 'angličtina';
$string['language.es'] = 'španělština / kastilština';
$string['language.et'] = 'estonština';
$string['language.eu'] = 'baskičtina';
$string['language.fa'] = 'perština';
$string['language.fi'] = 'finština';
$string['language.fj'] = 'fidžijština';
$string['language.fo'] = 'faerština';
$string['language.fr'] = 'francouzština';
$string['language.fy'] = 'západní fríština';
$string['language.ga'] = 'irština';
$string['language.gd'] = 'skotština';
$string['language.gl'] = 'galicijština';
$string['language.gv'] = 'manština';
$string['language.he'] = 'hebrejština';
$string['language.hi'] = 'hindština';
$string['language.hr'] = 'chorvatština';
$string['language.ht'] = 'haitská kreolština';
$string['language.hu'] = 'maďarština';
$string['language.hy'] = 'arménština';
$string['language.id'] = 'indonéština';
$string['language.is'] = 'islandština';
$string['language.it'] = 'italština';
$string['language.ja'] = 'japonština';
$string['language.jv'] = 'javánština';
$string['language.ka'] = 'gruzínština';
$string['language.kg'] = 'konžština';
$string['language.ko'] = 'korejština';
$string['language.ku'] = 'kurdština';
$string['language.kw'] = 'kornština';
$string['language.ky'] = 'kyrgyzština';
$string['language.lb'] = 'lucemburština';
$string['language.li'] = 'limburština';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litevština';
$string['language.lv'] = 'lotyšština';
$string['language.mg'] = 'malgaština';
$string['language.mk'] = 'makedonština';
$string['language.mn'] = 'mongolština';
$string['language.mo'] = 'moldavština';
$string['language.ms'] = 'malajština';
$string['language.mt'] = 'maltština';
$string['language.my'] = 'barmština';
$string['language.nb'] = 'norština (bokmål)';
$string['language.ne'] = 'nepálština';
$string['language.nl'] = 'nizozemština (holandština)';
$string['language.nn'] = 'norština (nynorsk)';
$string['language.no'] = 'norština';
$string['language.pl'] = 'polština';
$string['language.pt'] = 'portugalština';
$string['language.rm'] = 'rétorománština';
$string['language.ro'] = 'rumunština';
$string['language.ru'] = 'ruština';
$string['language.r0'] = 'romština'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardština';
$string['language.se'] = 'sami jazyky, severní';
$string['language.sk'] = 'slovenština';
$string['language.sl'] = 'slovinština';
$string['language.so'] = 'somálština';
$string['language.sq'] = 'albánština';
$string['language.sr'] = 'srbština';
$string['language.sv'] = 'švédština';
$string['language.sw'] = 'svahilština';
$string['language.tk'] = 'turkmenština';
$string['language.tr'] = 'turečtina';
$string['language.ty'] = 'tahitština';
$string['language.uk'] = 'ukrajinština';
$string['language.ur'] = 'urdština';
$string['language.uz'] = 'uzbečtina';
$string['language.vi'] = 'vietnamština';
$string['language.yi'] = 'jidiš';
$string['language.zh'] = 'čínština';
$string['language.cu'] = 'staroslověnština';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latina';
$string['language.oc'] = 'okcitánština';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'afarština';
$string['language.ae'] = 'avestánština';
$string['language.ak'] = 'akanština';
$string['language.am'] = 'amharština';
$string['language.av'] = 'avarština';
$string['language.ay'] = 'ajmarština';
$string['language.ba'] = 'baškirština';
$string['language.bh'] = 'bihárština';
$string['language.bi'] = 'bislamština';
$string['language.bm'] = 'bambarština';
$string['language.ch'] = 'chamorro';
$string['language.cr'] = 'kríjština';
$string['language.cv'] = 'čuvašština';
$string['language.dv'] = 'divehi';
$string['language.dz'] = 'dzongkha';
$string['language.ee'] = 'eweština';
$string['language.ff'] = 'fula';
$string['language.gn'] = 'guaraní';
$string['language.gu'] = 'gudžarátština';
$string['language.ha'] = 'hauština';
$string['language.ho'] = 'hiri motu';
$string['language.hz'] = 'hererština';
$string['language.ia'] = 'interlingua';
$string['language.ig'] = 'igbo';
$string['language.ii'] = 'yi';
$string['language.ik'] = 'inupiaq';
$string['language.io'] = 'ido';
$string['language.iu'] = 'inuitština';
$string['language.ki'] = 'kikujština';
$string['language.kj'] = 'kuanyama';
$string['language.kk'] = 'kazaština';
$string['language.kl'] = 'grónština';
$string['language.km'] = 'kmérština';
$string['language.kn'] = 'kannadština';
$string['language.kr'] = 'kanurijština';
$string['language.ks'] = 'kašmírština';
$string['language.kv'] = 'komijština';
$string['language.lg'] = 'lugandština';
$string['language.lo'] = 'laoština';
$string['language.lu'] = 'lubština';
$string['language.mh'] = 'maršálština';
$string['language.mi'] = 'maorština';
$string['language.ml'] = 'malajámština';
$string['language.mr'] = 'maráthština';
$string['language.na'] = 'nauruština';
$string['language.nd'] = 'severní ndebelština';
$string['language.ng'] = 'ndonga';
$string['language.nr'] = 'jižní ndebelština';
$string['language.nv'] = 'navažština';
$string['language.ny'] = 'čičevština';
$string['language.oj'] = 'odžibvejština';
$string['language.om'] = 'oromština';
$string['language.or'] = 'orijština';
$string['language.os'] = 'osetština';
$string['language.pa'] = 'pandžábština';
$string['language.pi'] = 'páli';
$string['language.ps'] = 'pašto, paštština';
$string['language.qu'] = 'kečuánština';
$string['language.rn'] = 'kirundština';
$string['language.rw'] = 'kinyarwandština';
$string['language.sa'] = 'sanskrt';
$string['language.sd'] = 'sindhština';
$string['language.sg'] = 'sangština';
$string['language.si'] = 'sinhalština';
$string['language.sm'] = 'samojština';
$string['language.sn'] = 'šonština';
$string['language.ss'] = 'swati';
$string['language.st'] = 'jihosotština';
$string['language.su'] = 'sundština';
$string['language.ta'] = 'tamilština';
$string['language.te'] = 'telugština';
$string['language.tg'] = 'tádžičtina';
$string['language.th'] = 'thajština';
$string['language.ti'] = 'tygriňa';
$string['language.tl'] = 'tagalština';
$string['language.tn'] = 'tswanština';
$string['language.to'] = 'tonžtina';
$string['language.ts'] = 'tsonga';
$string['language.tt'] = 'tatarština';
$string['language.tw'] = 'ťwiština';
$string['language.ug'] = 'ujgurština';
$string['language.ve'] = 'luvendština';
$string['language.wa'] = 'valonština';
$string['language.wo'] = 'volofština';
$string['language.xh'] = 'xhoština';
$string['language.yo'] = 'jorubština';
$string['language.za'] = 'zhuangština';
$string['language.zu'] = 'zuluština';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Spojené arabské emiráty';
$string['country.af'] = 'Afghánistán';
$string['country.ag'] = 'Antigua a Barbuda';
$string['country.al'] = 'Albánie';
$string['country.am'] = 'Arménie';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Rakousko';
$string['country.au'] = 'Austrálie';
$string['country.az'] = 'Ázerbájdžán';
$string['country.ba'] = 'Bosna a Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladéš';
$string['country.be'] = 'Belgie';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulharsko';
$string['country.bh'] = 'Bahrajn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunej';
$string['country.bo'] = 'Bolívie';
$string['country.br'] = 'Brazílie';
$string['country.bs'] = 'Bahamy';
$string['country.bt'] = 'Bhútán';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belorusko';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratická republika Kongo';
$string['country.cf'] = 'Stredoafrická republika';
$string['country.cg'] = 'Republika Kongo';
$string['country.ch'] = 'Švýcarsko';
$string['country.ci'] = 'Pobreží slonoviny';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Cína';
$string['country.co'] = 'Kolumbie';
$string['country.cr'] = 'Kostarika';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Kapverdy';
$string['country.cy'] = 'Kypr';
$string['country.cz'] = 'Česká republika';
$string['country.de'] = 'Nemecko';
$string['country.dj'] = 'Džibutsko';
$string['country.dk'] = 'Dánsko';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikánská republika';
$string['country.dz'] = 'Alžírsko';
$string['country.ec'] = 'Ekvádor';
$string['country.ee'] = 'Estonsko';
$string['country.eg'] = 'Egypt';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Španelsko';
$string['country.et'] = 'Etiopie';
$string['country.fi'] = 'Finsko';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikronésie';
$string['country.fr'] = 'Francie';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Spojené království';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzie';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grónsko';
$string['country.gm'] = 'Gambie';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Rovníková Guinea';
$string['country.gr'] = 'Recko';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Chorvatsko';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Madarsko';
$string['country.id'] = 'Indonésie';
$string['country.ie'] = 'Irsko';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'Indie';
$string['country.iq'] = 'Irák';
$string['country.ir'] = 'Írán';
$string['country.is'] = 'Island';
$string['country.it'] = 'Itálie';
$string['country.jm'] = 'Jamajka';
$string['country.jo'] = 'Jordánsko';
$string['country.jp'] = 'Japonsko';
$string['country.ke'] = 'Kena';
$string['country.kg'] = 'Kyrgyzstán';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komory';
$string['country.kn'] = 'Komory';
$string['country.kp'] = 'Severní Korea';
$string['country.kr'] = 'Jižní Korea';
$string['country.kw'] = 'Kuvajt';
$string['country.kz'] = 'Kazachstán';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Libanon';
$string['country.li'] = 'Lichtenštejnsko';
$string['country.lk'] = 'Šrí Lanka';
$string['country.lr'] = 'Libérie';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litva';
$string['country.lu'] = ' Lucemburk';
$string['country.lv'] = 'Lotyšsko';
$string['country.ly'] = 'Libye';
$string['country.ma'] = 'Maroko';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldávie';
$string['country.me'] = 'Cerná Hora';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshallovy ostrovy';
$string['country.mk'] = 'Bývalá Jugoslávská republika Makedonie';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolsko';
$string['country.mr'] = 'Mauritánie';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauricius';
$string['country.mv'] = 'Maledivy';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexiko';
$string['country.my'] = 'Malajzie';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namibie';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigérie';
$string['country.ni'] = 'Nikaragua';
$string['country.nl'] = 'Nizozemí';
$string['country.no'] = 'Norsko';
$string['country.np'] = 'Nepál';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nový Zéland';
$string['country.om'] = 'Omán';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Nová Guinea';
$string['country.ph'] = 'Filipíny';
$string['country.pk'] = 'Pákistán';
$string['country.pl'] = 'Polsko';
$string['country.pr'] = 'Portoriko';
$string['country.ps'] = 'Palestinská autonomní území';
$string['country.pt'] = 'Portugalsko';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumunsko';
$string['country.rs'] = 'Srbsko';
$string['country.ru'] = 'Rusko';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saúdská Arábie';
$string['country.sb'] = 'Šalamounovy ostrovy';
$string['country.sc'] = 'Seychely';
$string['country.sd'] = 'Súdán';
$string['country.se'] = 'Švédsko';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slovinsko';
$string['country.sk'] = 'Slovensko';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somálsko';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Svatý Tomáš a Princův ostrov';
$string['country.sv'] = 'Salvador';
$string['country.sy'] = 'Sýrie';
$string['country.sz'] = 'Svazijsko';
$string['country.td'] = 'Cad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thajsko';
$string['country.tj'] = 'Tádžikistán';
$string['country.tl'] = 'Východní Timor';
$string['country.tm'] = 'Turkmenistán';
$string['country.tn'] = 'Tunisko';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turecko';
$string['country.tt'] = 'Trinidad a Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanie';
$string['country.ua'] = 'Ukrajina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Spojené státy americké';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistán';
$string['country.va'] = 'Vatikán';
$string['country.vc'] = 'Svatý Vincenc a Grenadiny';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Jihoafrická republika';
$string['country.zm'] = 'Zambie';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Spojené arabské emiráty';
$string['nationality.af'] = 'Afghánistán';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albánie';
$string['nationality.am'] = 'Arménie';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentina';
$string['nationality.at'] = 'Rakousko';
$string['nationality.au'] = 'Austrálie';
$string['nationality.az'] = 'Ázerbájdžán';
$string['nationality.ba'] = 'Bosna a Hercegovina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladéš';
$string['nationality.be'] = 'Belgie';
$string['nationality.bf'] = 'Burkina Faso';
$string['nationality.bg'] = 'Bulharsko';
$string['nationality.bh'] = 'Bahrajn';
$string['nationality.bi'] = 'Burundi';
$string['nationality.bj'] = 'Benin';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Bolívie';
$string['nationality.br'] = 'Brazílie';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Bhútán';
$string['nationality.bw'] = 'Botswana';
$string['nationality.by'] = 'Belorusko';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanada';
$string['nationality.cd'] = 'Demokratická republika Kongo';
$string['nationality.cf'] = 'Stredoafrická republika';
$string['nationality.cg'] = 'Kongo';
$string['nationality.ch'] = 'Švýcarsko';
$string['nationality.ci'] = 'Pobreží slonoviny';
$string['nationality.cl'] = 'Chile';
$string['nationality.cm'] = 'Kamerun';
$string['nationality.cn'] = 'Cína';
$string['nationality.co'] = 'Kolumbie';
$string['nationality.cr'] = 'Kostarika';
$string['nationality.cu'] = 'Kuba';
$string['nationality.cv'] = 'Kapverdy';
$string['nationality.cy'] = 'Kypr';
$string['nationality.cz'] = 'Cesko';
$string['nationality.de'] = 'Nemecko';
$string['nationality.dj'] = 'Džibutsko';
$string['nationality.dk'] = 'Dánsko';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Dominikánská republika';
$string['nationality.dz'] = 'Alžírsko';
$string['nationality.ec'] = 'Ekvádor';
$string['nationality.ee'] = 'Estonsko';
$string['nationality.eg'] = 'Egypt';
$string['nationality.er'] = 'Eritrea';
$string['nationality.es'] = 'Španelsko';
$string['nationality.et'] = 'Etiopie';
$string['nationality.fi'] = 'Finsko';
$string['nationality.fj'] = 'Fidži';
$string['nationality.fm'] = 'Mikronésie';
$string['nationality.fr'] = 'Francie';
$string['nationality.ga'] = 'Gabon';
$string['nationality.gb'] = 'Spojené království';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Gruzie';
$string['nationality.gh'] = 'Ghana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gambie';
$string['nationality.gn'] = 'Guinea';
$string['nationality.gq'] = 'Rovníková Guinea';
$string['nationality.gr'] = 'Recko';
$string['nationality.gt'] = 'Guatemala';
$string['nationality.gw'] = 'Guinea-Bissau';
$string['nationality.gy'] = 'Guyana';
$string['nationality.hn'] = 'Honduras';
$string['nationality.hr'] = 'Chorvatsko';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Madarsko';
$string['nationality.id'] = 'Indonésie';
$string['nationality.ie'] = 'Irsko';
$string['nationality.il'] = 'Izrael';
$string['nationality.in'] = 'Indie';
$string['nationality.iq'] = 'Irák';
$string['nationality.ir'] = 'Írán';
$string['nationality.is'] = 'Island';
$string['nationality.it'] = 'Itálie';
$string['nationality.jm'] = 'Jamajka';
$string['nationality.jo'] = 'Jordánsko';
$string['nationality.jp'] = 'Japonsko';
$string['nationality.ke'] = 'Kena';
$string['nationality.kg'] = 'Kyrgyzstán';
$string['nationality.kh'] = 'Kambodža';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Komory';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Severní Korea';
$string['nationality.kr'] = 'Jižní Korea';
$string['nationality.kw'] = 'Kuvajt';
$string['nationality.kz'] = 'Kazachstán';
$string['nationality.la'] = 'Laos';
$string['nationality.lb'] = 'Libanon';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Lichtenštejnsko';
$string['nationality.lk'] = 'Šrí Lanka';
$string['nationality.lr'] = 'Libérie';
$string['nationality.ls'] = 'Lesotho';
$string['nationality.lt'] = 'Litva';
$string['nationality.lu'] = 'Lucemburk';
$string['nationality.lv'] = 'Lotyšsko';
$string['nationality.ly'] = 'Libye';
$string['nationality.ma'] = 'Maroko';
$string['nationality.mc'] = 'Monako';
$string['nationality.md'] = 'Moldávie';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagaskar';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'Bývalé Jugoslávské republiky Makedonie';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Myanmar';
$string['nationality.mn'] = 'Mongolsko';
$string['nationality.mr'] = 'Mauritánie';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Mauricius';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malawi';
$string['nationality.mx'] = 'Mexiko';
$string['nationality.my'] = 'Malajzie';
$string['nationality.mz'] = 'Mozambik';
$string['nationality.na'] = 'Namibie';
$string['nationality.ne'] = 'Niger';
$string['nationality.ng'] = 'Nigérie';
$string['nationality.ni'] = 'Nikaragua';
$string['nationality.nl'] = 'Nizozemí';
$string['nationality.no'] = 'Norsko';
$string['nationality.np'] = 'Nepál';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Nový Zéland';
$string['nationality.om'] = 'Omán';
$string['nationality.pa'] = 'Panama';
$string['nationality.pe'] = 'Peru';
$string['nationality.pg'] = 'Papua Nová Guinea';
$string['nationality.ph'] = 'Filipíny';
$string['nationality.pk'] = 'Pákistán';
$string['nationality.pl'] = 'Polsko';
$string['nationality.pr'] = 'Portoriko';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugalsko';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paraguay';
$string['nationality.qa'] = 'Katar';
$string['nationality.ro'] = 'Rumunsko';
$string['nationality.rs'] = 'Srbsko a Cerná Hora';
$string['nationality.ru'] = 'Rusko';
$string['nationality.rw'] = 'Rwanda';
$string['nationality.sa'] = 'Saúdská Arábie';
$string['nationality.sb'] = 'Šalamounovy ostrovy';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Súdán';
$string['nationality.se'] = 'Švédsko';
$string['nationality.sg'] = 'Singapur';
$string['nationality.si'] = 'Slovinsko';
$string['nationality.sk'] = 'Slovensko';
$string['nationality.sl'] = 'Sierra Leone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegal';
$string['nationality.so'] = 'Somálsko';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'Salvador';
$string['nationality.sy'] = 'Sýrie';
$string['nationality.sz'] = 'Svazijsko';
$string['nationality.td'] = 'Cad';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Thajsko';
$string['nationality.tj'] = 'Tádžikistán';
$string['nationality.tl'] = 'Východní Timor';
$string['nationality.tm'] = 'Turkmenistán';
$string['nationality.tn'] = 'Tunisko';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Turecko';
$string['nationality.tt'] = 'Trinidad a Tobago';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tanzanie';
$string['nationality.ua'] = 'Ukrajina';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Spojené státy americké';
$string['nationality.uy'] = 'Uruguay';
$string['nationality.uz'] = 'Uzbekistán';
$string['nationality.va'] = 'Vatikán';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venezuela';
$string['nationality.vn'] = 'Vietnam';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jemen';
$string['nationality.za'] = 'Jihoafrická republika';
$string['nationality.zm'] = 'Zambie';
$string['nationality.zw'] = 'Zimbabwe';

?>
