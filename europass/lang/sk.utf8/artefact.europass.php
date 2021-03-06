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
$string['europassCV'] = 'Europass - životopis';
$string['europassLP'] = 'Europass - jazykový pas';
$string['photograph'] = 'Fotografia';
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
$string['externaldate-text-long'] = 'dd. mesiac rrrr';
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
$string['identification'] = 'Osobné údaje';
$string['identification-birthdate'] = 'Dátum narodenia';
$string['identification-birthplace'] = 'Miesto narodenia';
$string['identification-lastname'] = 'Priezvisko(á)';
$string['identification-firstname'] = 'Meno(á)';
$string['identification-addressLine'] = 'Ulica / Číslo domu';
$string['identification-municipality'] = 'Mesto';
$string['identification-postalCode'] = 'PSC';
$string['identification-country'] = 'Krajina';
$string['identification-contactinfo-telephone'] = 'Telefón(y)';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax(y)';
$string['identification-contactinfo-email'] = 'E-mail(y)';
$string['identification-nationality'] = 'Štátna príslušnosť';
$string['identification-gender'] = 'Pohlavie';

// Europass CV - STEP 2
$string['application'] = 'Zamestnanie / Oblasť činnosti, o ktoré sa zaujímate';

// Europass CV - STEP 3
$string['workexperience'] = 'Prax';

// Europass CV - STEP 4
$string['education'] = 'Vzdelávanie a príprava';

// Europass CV - STEP 5
$string['mothertongue'] = 'Materinský(é) jazyk(y)';
$string['otherlanguage'] = 'Ďalší(ie) jazyk(y)';

$string['language-foreign-listening'] = 'Počúvanie';
$string['language-foreign-listening-th'] = 'Počúvanie';
$string['language-foreign-reading'] = 'Čítanie';
$string['language-foreign-reading-th'] = 'Čítanie';
$string['language-foreign-spokeninteraction'] = 'Ústna interakcia';
$string['language-foreign-spokeninteraction-th'] = 'Ústna<br>interakcia';
$string['language-foreign-spokenproduction'] = 'Samostatný ústny prejav';
$string['language-foreign-spokenproduction-th'] = 'Samostatný<br>ústny prejav';
$string['language-foreign-writing'] = 'Písanie';
$string['language-foreign-writing-th'] = 'Písanie';
$string['language-foreign-CEF-level'] = 'Úroveň podľa Spoločného európskeho referenčného rámca (CEF)';

$string['language-foreign-level.A1'] = 'Používateľ základného jazyka (A1)';
$string['language-foreign-level.A2'] = 'Používateľ základného jazyka (A2)';
$string['language-foreign-level.B1'] = 'Samostatný používateľ (B1)';
$string['language-foreign-level.B2'] = 'Samostatný používateľ (B2)';
$string['language-foreign-level.C1'] = 'Skúsený používateľ (C1)';
$string['language-foreign-level.C2'] = 'Skúsený používateľ (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vodičský(é) preukaz(y)';
$string['skills-and-competences'] = 'Osobná spôsobilosť';
$string['socialskill'] = 'Sociálne zručnosti a kompetencie';
$string['organisationalskill'] = 'Organizačné zručnosti a kompetencie';
$string['technicalskill'] = 'Technické zručnosti a kompetencie';
$string['computerskill'] = 'Počítačové zručnosti a kompetencie';
$string['artisticskill'] = 'Umelecké zručnosti a kompetencie';
$string['otherskill'] = 'Ďalšie zručnosti a kompetencie';
$string['additionalinfo'] = 'Doplňujúce informácie';
$string['annexes'] = 'Prílohy';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplom(y), vysvedčenie(ia)/osvedčenie(ia)';
$string['diploma-title'] = 'Názov';
$string['diploma-awardingBody'] = 'Vydávajúca inštitúcia';
$string['diploma-date'] = 'Dátum';
$string['diploma-level'] = 'Európska úroveň';
$string['language-experiences'] = 'Jazyková(é) skúsenosť(ti)';
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
$string['language.ab'] = 'abcházčina';
$string['language.af'] = 'afrikánčina';
$string['language.an'] = 'aragónská španielčina';
$string['language.ar'] = 'arabčina';
$string['language.as'] = 'asámčina';
$string['language.az'] = 'azerbajdžančina';
$string['language.be'] = 'bieloruština';
$string['language.bg'] = 'bulharčina';
$string['language.bn'] = 'bengálčina';
$string['language.bo'] = 'tibetčina';
$string['language.br'] = 'bretónčina';
$string['language.bs'] = 'bosniačtina';
$string['language.ca'] = 'katalánčina';
$string['language.ce'] = 'čečenčina';
$string['language.co'] = 'korzičtina';
$string['language.cs'] = 'čeština';
$string['language.cy'] = 'waleština';
$string['language.da'] = 'dánčina';
$string['language.de'] = 'nemčina';
$string['language.el'] = 'gréčtina';
$string['language.en'] = 'angličtina';
$string['language.es'] = 'španielčina / kastílčina';
$string['language.et'] = 'estónčina';
$string['language.eu'] = 'baskilčtina';
$string['language.fa'] = 'perzština';
$string['language.fi'] = 'fínčina';
$string['language.fj'] = 'fidžijčina';
$string['language.fo'] = 'faerčina';
$string['language.fr'] = 'francúzština';
$string['language.fy'] = 'frízština';
$string['language.ga'] = 'írčina';
$string['language.gd'] = 'škótska gaelčina';
$string['language.gl'] = 'galicijčina';
$string['language.gv'] = 'mančina';
$string['language.he'] = 'hebrejčina';
$string['language.hi'] = 'hindčina';
$string['language.hr'] = 'chorvátčina';
$string['language.ht'] = 'haitská francúzska kreolčina';
$string['language.hu'] = 'maďarčina';
$string['language.hy'] = 'arménčina';
$string['language.id'] = 'indonézsky jazyk';
$string['language.is'] = 'islandčina';
$string['language.it'] = 'taliančina';
$string['language.ja'] = 'japončina';
$string['language.jv'] = 'jávčina';
$string['language.ka'] = 'gruzínčina';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'kórejčina';
$string['language.ku'] = 'kurdčina';
$string['language.kw'] = 'kornčina';
$string['language.ky'] = 'kirgizština';
$string['language.lb'] = 'luxemburčina';
$string['language.li'] = 'limburčina';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litovčina';
$string['language.lv'] = 'lotyština';
$string['language.mg'] = 'malagaština';
$string['language.mk'] = 'macedónčina';
$string['language.mn'] = 'mongolčina';
$string['language.mo'] = 'moldavčina';
$string['language.ms'] = 'malajčina';
$string['language.mt'] = 'maltčina';
$string['language.my'] = 'barmčina';
$string['language.nb'] = 'nórčina (Bokmal)';
$string['language.ne'] = 'nepálčina';
$string['language.nl'] = 'holandčina';
$string['language.nn'] = 'nórčina (nynorsk)';
$string['language.no'] = 'nórčina';
$string['language.pl'] = 'poľština';
$string['language.pt'] = 'portugalčina';
$string['language.rm'] = 'rétorománčina';
$string['language.ro'] = 'rumunčina';
$string['language.ru'] = 'ruština';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardínsky jazyk';
$string['language.se'] = 'sami (laponské) jazyky, severné';
$string['language.sk'] = 'slovenčina';
$string['language.sl'] = 'slovinčina';
$string['language.so'] = 'somálčina';
$string['language.sq'] = 'albánčina';
$string['language.sr'] = 'srbčina';
$string['language.sv'] = 'švédčina';
$string['language.sw'] = 'svahilčina';
$string['language.tk'] = 'turkménčina';
$string['language.tr'] = 'turečtina';
$string['language.ty'] = 'tahitčina';
$string['language.uk'] = 'ukrajinčina';
$string['language.ur'] = 'urdčina';
$string['language.uz'] = 'uzbečtina';
$string['language.vi'] = 'vietnamčina';
$string['language.yi'] = 'jidiš';
$string['language.zh'] = 'čínština';
$string['language.cu'] = 'cirkevnoslovanské jazyky';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latinčina';
$string['language.oc'] = 'ocitánčina (po roku 1500); provensalčina';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestan';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharic';
$string['language.av'] = 'Avaric';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari languages';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Dhivehi; Maldivian';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Sichuan Yi; Nuosu';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu; Gikuyu';
$string['language.kj'] = 'Kuanyama; Kwanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Kalaallisut; Greenlandic';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'Ndebele, North';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele, South';
$string['language.nv'] = 'Navajo; Navaho';
$string['language.ny'] = 'Chichewa; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetian; Ossetic';
$string['language.pa'] = 'Panjabi; Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pushto; Pashto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhala; Sinhalese';
$string['language.sm'] = 'Samoan';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho, Southern';
$string['language.su'] = 'Sundanese';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga (Tonga Islands)';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uighur; Uyghur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang; Chuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Spojené arabské emiráty';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua a Barbuda';
$string['country.al'] = 'Albánsko';
$string['country.am'] = 'Arménsko';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentína';
$string['country.at'] = 'Rakúsko';
$string['country.au'] = 'Austrália';
$string['country.az'] = 'Azerbajdžan';
$string['country.ba'] = 'Bosna a Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladéš';
$string['country.be'] = 'Belgicko';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulharsko';
$string['country.bh'] = 'Bahrajn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunej';
$string['country.bo'] = 'Bolívia';
$string['country.br'] = 'Brazília';
$string['country.bs'] = 'Bahamy';
$string['country.bt'] = 'Bhután';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Bielorusko';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Konžská demokratická republika';
$string['country.cf'] = 'Stredoafrická republika';
$string['country.cg'] = 'Republika Kongo';
$string['country.ch'] = 'Švajciarsko';
$string['country.ci'] = 'Pobrežie Slonoviny';
$string['country.cl'] = 'Cile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Čína';
$string['country.co'] = 'Kolumbia';
$string['country.cr'] = 'Kostarika';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Kapverdy';
$string['country.cy'] = 'Cyprus';
$string['country.cz'] = 'Česká republika';
$string['country.de'] = 'Nemecko';
$string['country.dj'] = 'Džibutsko';
$string['country.dk'] = 'Dánsko';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikánska republika';
$string['country.dz'] = 'Alžírsko';
$string['country.ec'] = 'Ekvádor';
$string['country.ee'] = 'Estónsko';
$string['country.eg'] = 'Egypt';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Španielsko';
$string['country.et'] = 'Etiópia';
$string['country.fi'] = 'Fínsko';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikronézia';
$string['country.fr'] = 'Francúzsko';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Spojené královstvo';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzínsko';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grónsko';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Rovníková Guinea';
$string['country.gr'] = 'Grécko';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Chorvátsko';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Madarsko';
$string['country.id'] = 'Indonézia';
$string['country.ie'] = 'Írsko';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'India';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Irán';
$string['country.is'] = 'Island';
$string['country.it'] = 'Taliansko';
$string['country.jm'] = 'Jamajka';
$string['country.jo'] = 'Jordánsko';
$string['country.jp'] = 'Japonsko';
$string['country.ke'] = 'Kena';
$string['country.kg'] = 'Kirgizsko';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komory';
$string['country.kn'] = 'Svätý Krištof a Nevis';
$string['country.kp'] = 'Severná Kórea';
$string['country.kr'] = 'Južná Kórea';
$string['country.kw'] = 'Kuvajt';
$string['country.kz'] = 'Kazachstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Svätá Lucia';
$string['country.li'] = 'Lichtenštajnsko';
$string['country.lk'] = 'Srí Lanka';
$string['country.lr'] = 'Libéria';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litva';
$string['country.lu'] = 'Luxembursko';
$string['country.lv'] = 'Lotyšsko';
$string['country.ly'] = 'Líbya';
$string['country.ma'] = 'Maroko';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldavsko';
$string['country.me'] = 'Cierna Hora';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshallove ostrovy';
$string['country.mk'] = 'Bývalá juhoslovanská republika Macedónsko';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Mjanmarsko';
$string['country.mn'] = 'Mongolsko';
$string['country.mr'] = 'Mauretánia';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Maurícius';
$string['country.mv'] = 'Maldivy';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexiko';
$string['country.my'] = 'Malajzia';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namíbia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigéria';
$string['country.ni'] = 'Nikaragua';
$string['country.nl'] = 'Holandsko';
$string['country.no'] = 'Nórsko';
$string['country.np'] = 'Nepál';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nový Zéland';
$string['country.om'] = 'Omán';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Nová Guinea';
$string['country.ph'] = 'Filipíny';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polsko';
$string['country.pr'] = 'Portoriko';
$string['country.ps'] = '';
$string['country.pt'] = 'Portugalsko';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguaj';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumunsko';
$string['country.rs'] = 'Srbsko';
$string['country.ru'] = 'Rusko';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudská Arábia';
$string['country.sb'] = 'Šalamúnove ostrovy';
$string['country.sc'] = 'Seychely';
$string['country.sd'] = 'Sudán';
$string['country.se'] = 'Švédsko';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slovinsko';
$string['country.sk'] = 'Slovensko';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Maríno';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somálsko';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Svätý Tomáš a Princov ostrov';
$string['country.sv'] = 'Salvador';
$string['country.sy'] = 'Sýria';
$string['country.sz'] = 'Svazijsko';
$string['country.td'] = 'Cad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thajsko';
$string['country.tj'] = 'Tadžikistan';
$string['country.tl'] = 'Východný Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisko';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turecko';
$string['country.tt'] = 'Trinidad a Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzánia';
$string['country.ua'] = 'Ukrajina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Spojené štáty americké';
$string['country.uy'] = 'Uruguaj';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Vatikán';
$string['country.vc'] = 'Svätý Vincent a Grenadíny';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Južná Afrika';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorská';
$string['nationality.ae'] = 'Arabská';
$string['nationality.af'] = 'Afganská';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albánska';
$string['nationality.am'] = 'Arménska';
$string['nationality.ao'] = 'Angolská';
$string['nationality.ar'] = 'Argentínská';
$string['nationality.at'] = 'Rakúska';
$string['nationality.au'] = 'Austrálska';
$string['nationality.az'] = 'Azerbajdžanská';
$string['nationality.ba'] = '';
$string['nationality.bb'] = 'Barbadosská';
$string['nationality.bd'] = 'Bangladešká';
$string['nationality.be'] = 'Belgická';
$string['nationality.bf'] = '';
$string['nationality.bg'] = 'Bulharská';
$string['nationality.bh'] = 'Bahrajnská';
$string['nationality.bi'] = 'Burundská';
$string['nationality.bj'] = 'Beninská';
$string['nationality.bn'] = 'Brunejská';
$string['nationality.bo'] = 'Bolívijská';
$string['nationality.br'] = 'Brazílska';
$string['nationality.bs'] = 'Bahamská';
$string['nationality.bt'] = 'Bhutánska';
$string['nationality.bw'] = 'Botswanská';
$string['nationality.by'] = 'Bieloruská';
$string['nationality.bz'] = 'Belizská';
$string['nationality.ca'] = 'Kanadská';
$string['nationality.cd'] = 'Kongská (Konžská demokratická republika)';
$string['nationality.cf'] = 'Stredoafrická';
$string['nationality.cg'] = 'Kongská (Republika Kongo)';
$string['nationality.ch'] = 'Švajčiarská';
$string['nationality.ci'] = '';
$string['nationality.cl'] = 'Čílske';
$string['nationality.cm'] = 'Kamerunská';
$string['nationality.cn'] = 'Čínska';
$string['nationality.co'] = 'Kolumbijská';
$string['nationality.cr'] = 'Kostarická';
$string['nationality.cu'] = 'Kubánska';
$string['nationality.cv'] = '';
$string['nationality.cy'] = 'Cyperská';
$string['nationality.cz'] = 'Česká';
$string['nationality.de'] = 'Nemecká';
$string['nationality.dj'] = 'Ďžibutská';
$string['nationality.dk'] = 'Dánska';
$string['nationality.dm'] = 'Dominikánska';
$string['nationality.do'] = '';
$string['nationality.dz'] = 'Alžírska';
$string['nationality.ec'] = 'Ekvadorská';
$string['nationality.ee'] = 'Estónska';
$string['nationality.eg'] = 'Egyptská';
$string['nationality.er'] = 'Eritrejská';
$string['nationality.es'] = 'Španielská';
$string['nationality.et'] = 'Etiópska';
$string['nationality.fi'] = 'Fínska';
$string['nationality.fj'] = 'Fiďžijská';
$string['nationality.fm'] = 'Mikronézska';
$string['nationality.fr'] = 'Francúzska';
$string['nationality.ga'] = 'Gabonská';
$string['nationality.gb'] = 'Britská';
$string['nationality.gd'] = 'Grenadská';
$string['nationality.ge'] = 'Gruzijská';
$string['nationality.gh'] = 'Gánska';
$string['nationality.gl'] = 'Grónska';
$string['nationality.gm'] = 'Gambijská';
$string['nationality.gn'] = 'Novoguinejská';
$string['nationality.gq'] = '';
$string['nationality.gr'] = 'Grécka';
$string['nationality.gt'] = 'Guatemalská';
$string['nationality.gw'] = '';
$string['nationality.gy'] = '';
$string['nationality.hn'] = 'Hondurašská';
$string['nationality.hr'] = 'Chorvátska';
$string['nationality.ht'] = 'Haitská';
$string['nationality.hu'] = 'Maďarská';
$string['nationality.id'] = 'Indonézska';
$string['nationality.ie'] = 'Írska';
$string['nationality.il'] = 'Izraelská';
$string['nationality.in'] = 'Indická';
$string['nationality.iq'] = 'Iránska';
$string['nationality.ir'] = 'Iracká';
$string['nationality.is'] = 'Izlandská';
$string['nationality.it'] = 'Talianská';
$string['nationality.jm'] = 'Jamajská';
$string['nationality.jo'] = 'Jordánska';
$string['nationality.jp'] = 'Japonská';
$string['nationality.ke'] = 'Keňská';
$string['nationality.kg'] = 'Kyrgizská';
$string['nationality.kh'] = 'Kamboďžská';
$string['nationality.ki'] = 'Kiribatská';
$string['nationality.km'] = 'Komorksá';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Severokorejská';
$string['nationality.kr'] = 'Juhokorejská';
$string['nationality.kw'] = 'Kuvajtská';
$string['nationality.kz'] = 'Kazašská';
$string['nationality.la'] = 'Laoská';
$string['nationality.lb'] = 'Libanonská';
$string['nationality.lc'] = 'Svätolucijská';
$string['nationality.li'] = 'Lichtenštajnská';
$string['nationality.lk'] = 'Srílanská';
$string['nationality.lr'] = 'Liberijská';
$string['nationality.ls'] = 'Lesothská';
$string['nationality.lt'] = 'Litovská';
$string['nationality.lu'] = 'Luxemburgská';
$string['nationality.lv'] = 'lotyšská';
$string['nationality.ly'] = 'líbijská';
$string['nationality.ma'] = 'Marocká';
$string['nationality.mc'] = 'Monašská';
$string['nationality.md'] = 'Moldavská';
$string['nationality.me'] = 'Čiernohorská';
$string['nationality.mg'] = '';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'Macedónska';
$string['nationality.ml'] = 'Malijská';
$string['nationality.mm'] = 'Burmská';
$string['nationality.mn'] = 'Mongolská';
$string['nationality.mr'] = 'Maurícijská';
$string['nationality.mt'] = 'Maltská';
$string['nationality.mu'] = 'Mauritánska';
$string['nationality.mv'] = 'Maldivská';
$string['nationality.mw'] = 'Malawijská';
$string['nationality.mx'] = 'Mexická';
$string['nationality.my'] = 'Malajská';
$string['nationality.mz'] = 'Mozambická';
$string['nationality.na'] = 'Namíbijská';
$string['nationality.ne'] = 'Nigerská';
$string['nationality.ng'] = 'Nigérijská';
$string['nationality.ni'] = 'Nikaragujská';
$string['nationality.nl'] = 'Holandská';
$string['nationality.no'] = 'Nórska';
$string['nationality.np'] = 'Nepálska';
$string['nationality.nr'] = 'Naurská';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Novozélandská';
$string['nationality.om'] = 'Ománska';
$string['nationality.pa'] = 'Panamská';
$string['nationality.pe'] = 'Peruánska';
$string['nationality.pg'] = 'Papuanovoguinejská';
$string['nationality.ph'] = 'Filipínska';
$string['nationality.pk'] = 'Pakistánska';
$string['nationality.pl'] = 'Poľská';
$string['nationality.pr'] = 'Puertorická';
$string['nationality.ps'] = 'Palestínska';
$string['nationality.pt'] = 'portugalská';
$string['nationality.pw'] = 'Palauská';
$string['nationality.py'] = 'paragvajská';
$string['nationality.qa'] = 'Katarská';
$string['nationality.ro'] = 'Rumunská';
$string['nationality.rs'] = 'Srbská';
$string['nationality.ru'] = 'Ruská';
$string['nationality.rw'] = 'Rwandská';
$string['nationality.sa'] = '';
$string['nationality.sb'] = '';
$string['nationality.sc'] = 'Seychelská';
$string['nationality.sd'] = 'Sudánska';
$string['nationality.se'] = 'švédska';
$string['nationality.sg'] = 'Singapúrska';
$string['nationality.si'] = 'Slovinská';
$string['nationality.sk'] = 'Slovenská';
$string['nationality.sl'] = '';
$string['nationality.sm'] = 'Sanmarínska';
$string['nationality.sn'] = 'Senegálska';
$string['nationality.so'] = 'Somálska';
$string['nationality.sr'] = 'Surinamská';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'Salvadorská';
$string['nationality.sy'] = 'Sýrijská';
$string['nationality.sz'] = 'Svazijská';
$string['nationality.td'] = 'čadská';
$string['nationality.tg'] = 'Tožská';
$string['nationality.th'] = 'Thajská';
$string['nationality.tj'] = 'Tadžická';
$string['nationality.tl'] = 'Východotimorská';
$string['nationality.tm'] = 'Turkmenská';
$string['nationality.tn'] = 'Tuniská';
$string['nationality.to'] = 'Tonžská';
$string['nationality.tr'] = 'Turecká';
$string['nationality.tt'] = '';
$string['nationality.tv'] = 'Tuvalujská';
$string['nationality.tz'] = 'Tanzanijská';
$string['nationality.ua'] = 'Ukrajinská';
$string['nationality.ug'] = 'Ugandská';
$string['nationality.us'] = 'Americká';
$string['nationality.uy'] = 'Uruguajská';
$string['nationality.uz'] = 'Uzbecká';
$string['nationality.va'] = 'Vatikánska';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venezuelská';
$string['nationality.vn'] = 'Vietnamská';
$string['nationality.vu'] = 'Vanuatská';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jemenská';
$string['nationality.za'] = 'Juhoafrická';
$string['nationality.zm'] = 'Zmabijská';
$string['nationality.zw'] = 'Zimbabwijanska';

?>
