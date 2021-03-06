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
$string['europassCV'] = 'Europass curriculum vitae';
$string['europassLP'] = 'Europass Taalpaspoort';
$string['photograph'] = 'Foto';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/jjjj';
$string['internaldate-dmy12'] = 'dd.mm.jjjj';
$string['internaldate-dmy13'] = 'dd-mm-jjjj';
$string['internaldate-dmy21'] = 'dd/mm/jj';
$string['internaldate-dmy22'] = 'dd.mm.jj';
$string['internaldate-dmy23'] = 'dd-mm-jj';
$string['internaldate-mdy11'] = 'mm/dd/jjjj';
$string['internaldate-mdy12'] = 'mm.dd.jjjj';
$string['internaldate-mdy13'] = 'mm-dd-jjjj';
$string['internaldate-mdy21'] = 'mm/dd/jj';
$string['internaldate-mdy22'] = 'mm.dd.jj';
$string['internaldate-mdy23'] = 'mm-dd-jj';
$string['internaldate-ymd11'] = 'jjjj/mm/dd';
$string['internaldate-ymd12'] = 'jjjj.mm.dd';
$string['internaldate-ymd13'] = 'jjjj-mm-dd';
$string['internaldate-ymd21'] = 'jj/mm/dd';
$string['internaldate-ymd22'] = 'jj.mm.dd';
$string['internaldate-ymd23'] = 'jj-mm-dd';
$string['internaldate-yonly'] = 'jjjj';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/jjjj';
$string['externaldate-text-long'] = 'dd. maand jjjj';
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
$string['identification'] = 'Persoonlijke informatie';
$string['identification-birthdate'] = 'Geboortedatum';
$string['identification-birthplace'] = 'Geboorteplaats';
$string['identification-lastname'] = 'Achternaam (-namen)';
$string['identification-firstname'] = 'Voornaam (-namen)';
$string['identification-addressLine'] = 'Straat / Huisnummer';
$string['identification-municipality'] = 'Gemeente';
$string['identification-postalCode'] = 'Postcode';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefoon(-s)';
$string['identification-contactinfo-mobile'] = 'Mobiel';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(-s)';
$string['identification-nationality'] = 'Nationaliteit';
$string['identification-gender'] = 'Geslacht';

// Europass CV - STEP 2
$string['application'] = 'Gewenste functie / Gewenst werkterrein';

// Europass CV - STEP 3
$string['workexperience'] = 'Werkervaring';

// Europass CV - STEP 4
$string['education'] = 'Onderwijs en opleiding';

// Europass CV - STEP 5
$string['mothertongue'] = 'Moedertaal (-talen)';
$string['otherlanguage'] = 'Andere taal (talen)';

$string['language-foreign-listening'] = 'Luisteren';
$string['language-foreign-listening-th'] = 'Luisteren';
$string['language-foreign-reading'] = 'Lezen';
$string['language-foreign-reading-th'] = 'Lezen';
$string['language-foreign-spokeninteraction'] = 'Interactie';
$string['language-foreign-spokeninteraction-th'] = 'Interactie';
$string['language-foreign-spokenproduction'] = 'Productie';
$string['language-foreign-spokenproduction-th'] = 'Productie';
$string['language-foreign-writing'] = 'Schrijven';
$string['language-foreign-writing-th'] = 'Schrijven';
$string['language-foreign-CEF-level'] = 'Gemeenschappelijk Europees Referentiekader voor Talen';

$string['language-foreign-level.A1'] = 'Basisgebruiker (A1)';
$string['language-foreign-level.A2'] = 'Basisgebruiker (A2)';
$string['language-foreign-level.B1'] = 'Onafhankelijke gebruiker (B1)';
$string['language-foreign-level.B2'] = 'Onafhankelijke gebruiker (B2)';
$string['language-foreign-level.C1'] = 'Vaardige gebruiker (C1)';
$string['language-foreign-level.C2'] = 'Vaardige gebruiker (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Rijbewijs (-bewijzen)';
$string['skills-and-competences'] = 'Persoonlijke vaardigheden en competenties';
$string['socialskill'] = 'Sociale vaardigheden en competenties';
$string['organisationalskill'] = 'Organisatorische vaardigheden en competenties';
$string['technicalskill'] = 'Technische vaardigheden en competenties';
$string['computerskill'] = 'Computervaardigheden en -competenties';
$string['artisticskill'] = 'Artistieke vaardigheden en competenties';
$string['otherskill'] = 'Andere vaardigheden en competenties';
$string['additionalinfo'] = 'Aanvullende informatie';
$string['annexes'] = 'Bijlagen';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(\'s) of certificaat (certificaten)';
$string['diploma-title'] = 'Titel';
$string['diploma-awardingBody'] = 'Instantie die het diploma/certificaat heeft uitgereikt';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Europees niveau';
$string['language-experiences'] = 'Taalleerervaring (-en)';
$string['experiences-period-from'] = 'Van';
$string['experiences-period-to'] = 'Tot';

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
$string['language.ab'] = 'Abchazisch';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonees';
$string['language.ar'] = 'Arabisch';
$string['language.as'] = 'Assamees';
$string['language.az'] = 'Azerbeidzjaans';
$string['language.be'] = 'Wit-Russisch';
$string['language.bg'] = 'Bulgaars';
$string['language.bn'] = 'Bengalees';
$string['language.bo'] = 'Tibetaans';
$string['language.br'] = 'Bretons';
$string['language.bs'] = 'Bosnisch';
$string['language.ca'] = 'Catalaans / Valenciaans';
$string['language.ce'] = 'Chechen';
$string['language.co'] = 'Corsicaans';
$string['language.cs'] = 'Tsjechisch';
$string['language.cy'] = 'Welsh';
$string['language.da'] = 'Deens';
$string['language.de'] = 'Duits';
$string['language.el'] = 'Grieks';
$string['language.en'] = 'Engels';
$string['language.es'] = 'Spaans / Castiliaans';
$string['language.et'] = 'Estisch';
$string['language.eu'] = 'Baskisch';
$string['language.fa'] = 'Perzisch';
$string['language.fi'] = 'Fins';
$string['language.fj'] = 'Fijisch';
$string['language.fo'] = 'Faeröers';
$string['language.fr'] = 'Frans';
$string['language.fy'] = 'West-Fries';
$string['language.ga'] = 'Iers';
$string['language.gd'] = 'Gaelic / Schots Gaelic';
$string['language.gl'] = 'Galicisch';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebreeuws';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Kroatisch';
$string['language.ht'] = 'Haïtiaans; Haïtiaans Creools';
$string['language.hu'] = 'Hongaars';
$string['language.hy'] = 'Armeens';
$string['language.id'] = 'Indonesisch';
$string['language.is'] = 'IJslands';
$string['language.it'] = 'Italiaans';
$string['language.ja'] = 'Japans';
$string['language.jv'] = 'Javaans';
$string['language.ka'] = 'Georgisch';
$string['language.kg'] = 'Congolees';
$string['language.ko'] = 'Koreaans';
$string['language.ku'] = 'Koerdisch';
$string['language.kw'] = 'Cornish';
$string['language.ky'] = 'Kirgizisch';
$string['language.lb'] = 'Luxemburgs';
$string['language.li'] = 'Limburgs';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litouws';
$string['language.lv'] = 'Letlands';
$string['language.mg'] = 'Malagassisch';
$string['language.mk'] = 'Macedonisch';
$string['language.mn'] = 'Mongools';
$string['language.mo'] = 'Moldavisch';
$string['language.ms'] = 'Maleis';
$string['language.mt'] = 'Maltees';
$string['language.my'] = 'Birmees';
$string['language.nb'] = 'Noors (Bokmǻl)';
$string['language.ne'] = 'Nepalees';
$string['language.nl'] = 'Nederlands';
$string['language.nn'] = 'Noors (Nynorsk)';
$string['language.no'] = 'Noors';
$string['language.pl'] = 'Pools';
$string['language.pt'] = 'Portugees';
$string['language.rm'] = 'Retoromaans';
$string['language.ro'] = 'Roemeens';
$string['language.ru'] = 'Russisch';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardijns';
$string['language.se'] = 'Noord-Samisch';
$string['language.sk'] = 'Slowaaks';
$string['language.sl'] = 'Sloveens';
$string['language.so'] = 'Somalisch';
$string['language.sq'] = 'Albanees';
$string['language.sr'] = 'Servisch';
$string['language.sv'] = 'Zweeds';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmeens';
$string['language.tr'] = 'Turks';
$string['language.ty'] = 'Tahitisch';
$string['language.uk'] = 'Oekraïens';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Oezbeeks';
$string['language.vi'] = 'Vietnamees';
$string['language.yi'] = 'Jiddisch';
$string['language.zh'] = 'Chinees';
$string['language.cu'] = 'Kerkslavisch';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latijn';
$string['language.oc'] = 'Occitaans (na 1500); Provençaals';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar, Hamitisch';
$string['language.ae'] = 'Avestisch';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amhaars, Amharisch';
$string['language.av'] = 'Avaars';
$string['language.ay'] = 'Aymara, Aymará';
$string['language.ba'] = 'Basjkiers, Basjkirisch';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Tsjoevasjisch';
$string['language.dv'] = 'Divehi';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fula';
$string['language.gn'] = 'Guaraní';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Yi';
$string['language.ik'] = 'Inupiak';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Gikuyu';
$string['language.kj'] = 'Kwanyama';
$string['language.kk'] = 'Kazachs';
$string['language.kl'] = 'Groenlands';
$string['language.km'] = 'Khmer, Cambodjaans';
$string['language.kn'] = 'Kannada, Kanarees, Kanara';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kasjmiri, Kasjmiers, Kasjmirs';
$string['language.kv'] = 'Zurjeens';
$string['language.lg'] = 'Luganda';
$string['language.lo'] = 'Laotiaans';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallees';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauruaans';
$string['language.nd'] = 'Noord-Ndebele';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Zuid-Ndebele';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Nyanja';
$string['language.oj'] = 'Ojibweg';
$string['language.om'] = 'Afaan Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetisch';
$string['language.pa'] = 'Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pasjtoe, Pasjto, Pashtoe';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Kirundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskriet';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sangho';
$string['language.si'] = 'Singalees';
$string['language.sm'] = 'Samoaans';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swazi';
$string['language.st'] = 'Zuid-Sotho';
$string['language.su'] = 'Soendanees, Sundanees';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu, Teloegoe';
$string['language.tg'] = 'Tadzjieks';
$string['language.th'] = 'Thai, Thais';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tongaans, Tonga';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tataars, Tartaars';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Oeigoers, Oejgoers';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Waals';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang, Tsjoeang';
$string['language.zu'] = 'Zoeloe';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Verenigde Arabische Emiraten';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua en Barbuda';
$string['country.al'] = 'Albanië';
$string['country.am'] = 'Armenië';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentinië';
$string['country.at'] = 'Oostenrijk';
$string['country.au'] = 'Australië';
$string['country.az'] = 'Azerbeidzjan';
$string['country.ba'] = 'Bosnië-Herzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'België';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarije';
$string['country.bh'] = 'Bahrein';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brazilië';
$string['country.bs'] = 'Bahama\'s';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Wit-Rusland';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Democratische Republiek Congo';
$string['country.cf'] = 'Centraal-Afrikaanse Republiek';
$string['country.cg'] = 'Republiek Congo';
$string['country.ch'] = 'Zwitserland';
$string['country.ci'] = 'Ivoorkust';
$string['country.cl'] = 'Chili';
$string['country.cm'] = 'Kameroen';
$string['country.cn'] = 'China';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Kaapverdië';
$string['country.cy'] = 'Cyprus';
$string['country.cz'] = 'Tsjechische Republiek';
$string['country.de'] = 'Duitsland';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Denemarken';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominicaanse Republiek';
$string['country.dz'] = 'Algerije';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estland';
$string['country.eg'] = 'Egypte';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spanje';
$string['country.et'] = 'Ethiopië';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Micronesië';
$string['country.fr'] = 'Frankrijk';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Verenigd Koninkrijk';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgië';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Groenland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinee';
$string['country.gq'] = 'Equatoriaal-Guinea';
$string['country.gr'] = 'Griekenland';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinee-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatië';
$string['country.ht'] = 'Haïti';
$string['country.hu'] = 'Hongarije';
$string['country.id'] = 'Indonesië';
$string['country.ie'] = 'Ierland';
$string['country.il'] = 'Israël';
$string['country.in'] = 'India';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'IJsland';
$string['country.it'] = 'Italië';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordanië';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenia';
$string['country.kg'] = 'Kirgizië';
$string['country.kh'] = 'Cambodja';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comoren';
$string['country.kn'] = 'Saint Kitts en Nevis';
$string['country.kp'] = 'Noord-Korea';
$string['country.kr'] = 'Zuid-Korea';
$string['country.kw'] = 'Koeweit';
$string['country.kz'] = 'Kazachstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litouwen';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Letland';
$string['country.ly'] = 'Libië';
$string['country.ma'] = 'Marokko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldavië';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshalleilanden';
$string['country.mk'] = 'Voormalige Joegoslavische Republiek Macedonië';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolië';
$string['country.mr'] = 'Mauritanië';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Malediven';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexico';
$string['country.my'] = 'Maleisië';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibië';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Nederland';
$string['country.no'] = 'Noorwegen';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nieuw-Zeeland';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papoea-Nieuw-Guinea';
$string['country.ph'] = 'Filipijnen';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polen';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Palestijnse Autonome Gebieden';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Roemenië';
$string['country.rs'] = 'Servië';
$string['country.ru'] = 'Rusland';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saoedi-Arabië';
$string['country.sb'] = 'Salomonseilanden';
$string['country.sc'] = 'Seychellen';
$string['country.sd'] = 'Soedan';
$string['country.se'] = 'Zweden';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenië';
$string['country.sk'] = 'Slowakije';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalië';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'Sao Tomé en Principe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrië';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Tsjaad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tadzjikistan';
$string['country.tl'] = 'Oost-Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunesië';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkije';
$string['country.tt'] = 'Trinidad en Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Oekraïne';
$string['country.ug'] = 'Oeganda';
$string['country.us'] = 'Verenigde Staten';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Oezbekistan';
$string['country.va'] = 'Vaticaanstad';
$string['country.vc'] = 'Saint Vincent en de Grenadines';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Zuid-Afrika';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorrese';
$string['nationality.ae'] = 'Van de Verenigde Arabische Emiraten';
$string['nationality.af'] = 'Afghaanse';
$string['nationality.ag'] = 'Antiguaanse';
$string['nationality.al'] = 'Albanese';
$string['nationality.am'] = 'Armeense';
$string['nationality.ao'] = 'Angolese';
$string['nationality.ar'] = 'Argentijnse';
$string['nationality.at'] = 'Oostenrijkse';
$string['nationality.au'] = 'Australische';
$string['nationality.az'] = 'Azerbeidzjaanse';
$string['nationality.ba'] = 'Bosnische';
$string['nationality.bb'] = 'Barbadiaanse';
$string['nationality.bd'] = 'Bengalese';
$string['nationality.be'] = 'Belgische';
$string['nationality.bf'] = 'Burkinese';
$string['nationality.bg'] = 'Bulgaarse';
$string['nationality.bh'] = 'Bahreinse';
$string['nationality.bi'] = 'Burundese';
$string['nationality.bj'] = 'Beninse';
$string['nationality.bn'] = 'Bruneise';
$string['nationality.bo'] = 'Boliviaanse';
$string['nationality.br'] = 'Braziliaanse';
$string['nationality.bs'] = 'Bahamaanse';
$string['nationality.bt'] = 'Bhutaanse';
$string['nationality.bw'] = 'Botswaanse';
$string['nationality.by'] = 'Wit-Russische';
$string['nationality.bz'] = 'Belizaanse';
$string['nationality.ca'] = 'Canadese';
$string['nationality.cd'] = 'Congolese (Republiek Congo)';
$string['nationality.cf'] = 'Centraal-Afrikaanse';
$string['nationality.cg'] = 'Congolese (Democratische Republiek Congo)';
$string['nationality.ch'] = 'Zwitserse';
$string['nationality.ci'] = 'Ivoriaanse';
$string['nationality.cl'] = 'Chileense';
$string['nationality.cm'] = 'Kameroense';
$string['nationality.cn'] = 'Chinese';
$string['nationality.co'] = 'Colombiaanse';
$string['nationality.cr'] = 'Costa Ricaanse';
$string['nationality.cu'] = 'Cubaanse';
$string['nationality.cv'] = 'Kaapverdische';
$string['nationality.cy'] = 'Cypriotische';
$string['nationality.cz'] = 'Tsjechische';
$string['nationality.de'] = 'Duitse';
$string['nationality.dj'] = 'Djiboutiaanse';
$string['nationality.dk'] = 'Deense';
$string['nationality.dm'] = 'Dominicaanse (Dominica)';
$string['nationality.do'] = 'Dominicaanse (Dominicaanse Republiek)';
$string['nationality.dz'] = 'Algerijnse';
$string['nationality.ec'] = 'Ecuadoraanse';
$string['nationality.ee'] = 'Estse';
$string['nationality.eg'] = 'Egyptische';
$string['nationality.er'] = 'Eritrese';
$string['nationality.es'] = 'Spaanse';
$string['nationality.et'] = 'Ethiopische';
$string['nationality.fi'] = 'Finse';
$string['nationality.fj'] = 'Fijische';
$string['nationality.fm'] = 'Micronesische';
$string['nationality.fr'] = 'Franse';
$string['nationality.ga'] = 'Gabonese';
$string['nationality.gb'] = 'Britse';
$string['nationality.gd'] = 'Grenadaanse';
$string['nationality.ge'] = 'Georgische';
$string['nationality.gh'] = 'Ghanese';
$string['nationality.gl'] = 'Groenlandse';
$string['nationality.gm'] = 'Gambiaanse';
$string['nationality.gn'] = 'Guineese (Republiek Guinea)';
$string['nationality.gq'] = 'Equatoriaal-Guinese';
$string['nationality.gr'] = 'Griekse';
$string['nationality.gt'] = 'Guatemalteekse';
$string['nationality.gw'] = 'Guinee-Bissause (Republiek Guinee-Bissau)';
$string['nationality.gy'] = 'Guyaanse (Guyana)';
$string['nationality.hn'] = 'Hondurese';
$string['nationality.hr'] = 'Kroatische';
$string['nationality.ht'] = 'Haïtiaanse';
$string['nationality.hu'] = 'Hongaarse';
$string['nationality.id'] = 'Indonesische';
$string['nationality.ie'] = 'Ierse';
$string['nationality.il'] = 'Israëlische';
$string['nationality.in'] = 'Indiase';
$string['nationality.iq'] = 'Irakese';
$string['nationality.ir'] = 'Iraanse';
$string['nationality.is'] = 'IJslandse';
$string['nationality.it'] = 'Italiaanse';
$string['nationality.jm'] = 'Jamaicaanse';
$string['nationality.jo'] = 'Jordaanse';
$string['nationality.jp'] = 'Japanse';
$string['nationality.ke'] = 'Keniaanse';
$string['nationality.kg'] = 'Kirgizische';
$string['nationality.kh'] = 'Cambodjaanse';
$string['nationality.ki'] = 'Kiribatische';
$string['nationality.km'] = 'Comorese';
$string['nationality.kn'] = 'Van Saint Kitts en Nevis';
$string['nationality.kp'] = 'Noord-Koreaanse (Democratische Volksrepubliek Korea)';
$string['nationality.kr'] = 'Zuid-Koreaanse (Republiek Korea)';
$string['nationality.kw'] = 'Koeweitse';
$string['nationality.kz'] = 'Kazachse';
$string['nationality.la'] = 'Laotiaanse';
$string['nationality.lb'] = 'Libanese';
$string['nationality.lc'] = 'Saint Luciaanse';
$string['nationality.li'] = 'Liechtensteinse';
$string['nationality.lk'] = 'Sri Lankaanse';
$string['nationality.lr'] = 'Liberiaanse';
$string['nationality.ls'] = 'Lesothaanse';
$string['nationality.lt'] = 'Litouwse';
$string['nationality.lu'] = 'Luxemburgse';
$string['nationality.lv'] = 'Letse';
$string['nationality.ly'] = 'Libische';
$string['nationality.ma'] = 'Marokkaanse';
$string['nationality.mc'] = 'Monegaskische';
$string['nationality.md'] = 'Moldavische';
$string['nationality.me'] = 'Montenegrijnse';
$string['nationality.mg'] = 'Malagassische';
$string['nationality.mh'] = 'Marshalleilandse';
$string['nationality.mk'] = 'Voormalige Joegoslavische Republiek Macedonië';
$string['nationality.ml'] = 'Malinese';
$string['nationality.mm'] = 'Birmaanse/Myanmarese';
$string['nationality.mn'] = 'Mongolische';
$string['nationality.mr'] = 'Mauritaanse';
$string['nationality.mt'] = 'Maltese';
$string['nationality.mu'] = 'Mauritiaanse';
$string['nationality.mv'] = 'Maledivische';
$string['nationality.mw'] = 'Malawische';
$string['nationality.mx'] = 'Mexicaanse';
$string['nationality.my'] = 'Maleisische';
$string['nationality.mz'] = 'Mozambikaanse';
$string['nationality.na'] = 'Namibische';
$string['nationality.ne'] = 'Nigerese (Niger)';
$string['nationality.ng'] = 'Nigeriaanse (Nigeria)';
$string['nationality.ni'] = 'Nicaraguaanse';
$string['nationality.nl'] = 'Nederlandse';
$string['nationality.no'] = 'Noorse';
$string['nationality.np'] = 'Nepalese';
$string['nationality.nr'] = 'Nauruaanse';
$string['nationality.nu'] = 'Niuese';
$string['nationality.nz'] = 'Nieuw-Zeelandse';
$string['nationality.om'] = 'Omaanse';
$string['nationality.pa'] = 'Panamese';
$string['nationality.pe'] = 'Peruaanse';
$string['nationality.pg'] = 'Papuase';
$string['nationality.ph'] = 'Filipijnse';
$string['nationality.pk'] = 'Pakistaanse';
$string['nationality.pl'] = 'Poolse';
$string['nationality.pr'] = 'Puerto Ricaanse';
$string['nationality.ps'] = 'Palestijnse';
$string['nationality.pt'] = 'Portugese';
$string['nationality.pw'] = 'Palause';
$string['nationality.py'] = 'Paraguayaanse';
$string['nationality.qa'] = 'Qatarese';
$string['nationality.ro'] = 'Roemeense';
$string['nationality.rs'] = 'Servische';
$string['nationality.ru'] = 'Russische';
$string['nationality.rw'] = 'Rwandese';
$string['nationality.sa'] = 'Saudi-Arabische';
$string['nationality.sb'] = 'Salomonseilandse';
$string['nationality.sc'] = 'Seychelse';
$string['nationality.sd'] = 'Sudanese';
$string['nationality.se'] = 'Zweedse';
$string['nationality.sg'] = 'Singaporese';
$string['nationality.si'] = 'Sloveense';
$string['nationality.sk'] = 'Slovaakse';
$string['nationality.sl'] = 'Sierra Leoonse';
$string['nationality.sm'] = 'San Marinese';
$string['nationality.sn'] = 'Senegalese';
$string['nationality.so'] = 'Somalische';
$string['nationality.sr'] = 'Surinaamse';
$string['nationality.st'] = 'Santomese';
$string['nationality.sv'] = 'Salvadoraanse';
$string['nationality.sy'] = 'Syrische';
$string['nationality.sz'] = 'Swazische';
$string['nationality.td'] = 'Tsjadische';
$string['nationality.tg'] = 'Togolese';
$string['nationality.th'] = 'Thaise';
$string['nationality.tj'] = 'Tadzjiekse';
$string['nationality.tl'] = 'Oost-Timorese';
$string['nationality.tm'] = 'Turkmeense';
$string['nationality.tn'] = 'Tunesische';
$string['nationality.to'] = 'Tongaanse';
$string['nationality.tr'] = 'Turkse';
$string['nationality.tt'] = 'Trinidese';
$string['nationality.tv'] = 'Tuvaluaanse';
$string['nationality.tz'] = 'Tanzaniaanse';
$string['nationality.ua'] = 'Oekraïense';
$string['nationality.ug'] = 'Ugandese';
$string['nationality.us'] = 'Amerikaanse';
$string['nationality.uy'] = 'Uruguayaanse';
$string['nationality.uz'] = 'Oezbeekse';
$string['nationality.va'] = 'Vaticaanse';
$string['nationality.vc'] = 'Saint-Vincenter (Saint Vincent en de Grenadines)';
$string['nationality.ve'] = 'Venezolaanse';
$string['nationality.vn'] = 'Vietnamese';
$string['nationality.vu'] = 'Vanuatuaanse';
$string['nationality.ws'] = 'Samoaanse';
$string['nationality.ye'] = 'Jemenitische';
$string['nationality.za'] = 'Zuid-Afrikaanse';
$string['nationality.zm'] = 'Zambiaanse';
$string['nationality.zw'] = 'Zimbabwaanse';

?>
