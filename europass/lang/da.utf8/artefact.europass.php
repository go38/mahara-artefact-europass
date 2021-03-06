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
$string['europassCV'] = 'Europass-curriculum vitae';
$string['europassLP'] = 'Europass-sprogpas';
$string['photograph'] = 'Foto';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/åååå';
$string['internaldate-dmy12'] = 'dd.mm.åååå';
$string['internaldate-dmy13'] = 'dd-mm-åååå';
$string['internaldate-dmy21'] = 'dd/mm/åå';
$string['internaldate-dmy22'] = 'dd.mm.åå';
$string['internaldate-dmy23'] = 'dd-mm-åå';
$string['internaldate-mdy11'] = 'mm/dd/åååå';
$string['internaldate-mdy12'] = 'mm.dd.åååå';
$string['internaldate-mdy13'] = 'mm-dd-åååå';
$string['internaldate-mdy21'] = 'mm/dd/åå';
$string['internaldate-mdy22'] = 'mm.dd.åå';
$string['internaldate-mdy23'] = 'mm-dd-åå';
$string['internaldate-ymd11'] = 'åååå/mm/dd';
$string['internaldate-ymd12'] = 'åååå.mm.dd';
$string['internaldate-ymd13'] = 'åååå-mm-dd';
$string['internaldate-ymd21'] = 'åå/mm/dd';
$string['internaldate-ymd22'] = 'åå.mm.dd';
$string['internaldate-ymd23'] = 'åå-mm-dd';
$string['internaldate-yonly'] = 'åååå';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/åååå';
$string['externaldate-text-long'] = 'dd. måned åååå';
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
$string['generate'] = 'Click the button to generate export';
$string['generateexport'] = 'Generate export';

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
$string['identification'] = 'Personlige oplysninger';
$string['identification-birthdate'] = 'Fødselsdato';
$string['identification-birthplace'] = 'Fødested';
$string['identification-lastname'] = 'Efternavn(e)';
$string['identification-firstname'] = 'Fornavn(e)';
$string['identification-addressLine'] = 'Gade / gadenr';
$string['identification-municipality'] = 'By';
$string['identification-postalCode'] = 'Postnr';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Mobiltelefon';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail';
$string['identification-nationality'] = 'Nationalitet';
$string['identification-gender'] = 'Køn';

// Europass CV - STEP 2
$string['application'] = 'Ønsket beskæftigelse / erhvervsområde';

// Europass CV - STEP 3
$string['workexperience'] = 'Erhvervserfaring';

// Europass CV - STEP 4
$string['education'] = 'Almen og erhvervsrettet uddannelse';

// Europass CV - STEP 5
$string['mothertongue'] = 'Modersmål';
$string['otherlanguage'] = 'Andre sprog';

$string['language-foreign-listening'] = 'Lytte';
$string['language-foreign-listening-th'] = 'Lytte';
$string['language-foreign-reading'] = 'Læse';
$string['language-foreign-reading-th'] = 'Læse';
$string['language-foreign-spokeninteraction'] = 'Samtale';
$string['language-foreign-spokeninteraction-th'] = 'Samtale';
$string['language-foreign-spokenproduction'] = 'Redegøre';
$string['language-foreign-spokenproduction-th'] = 'Redegøre';
$string['language-foreign-writing'] = 'Skrive';
$string['language-foreign-writing-th'] = 'Skrive';
$string['language-foreign-CEF-level'] = 'Europæiske Referencerammes (CEF) niveau';

$string['language-foreign-level.A1'] = 'Sprogbruger med basiskundskaber (A1)';
$string['language-foreign-level.A2'] = 'Sprogbruger med basiskundskaber (A2)';
$string['language-foreign-level.B1'] = 'Selvstændig sprogbruger (B1)';
$string['language-foreign-level.B2'] = 'Selvstændig sprogbruger (B2)';
$string['language-foreign-level.C1'] = 'Kompetent sprogbruger (C1)';
$string['language-foreign-level.C2'] = 'Kompetent sprogbruger (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Kørekort';
$string['skills-and-competences'] = 'Personlige færdigheder og kompetencer';
$string['socialskill'] = 'Sociale færdigheder og kompetencer';
$string['organisationalskill'] = 'Organisatoriske færdigheder og kompetencer';
$string['technicalskill'] = 'Tekniske færdigheder og kompetencer';
$string['computerskill'] = 'Computerfærdigheder og -kompetencer';
$string['artisticskill'] = 'Kunstneriske færdigheder og kompetencer';
$string['otherskill'] = 'Andre færdigheder og kompetencer';
$string['additionalinfo'] = 'Yderligere informationer';
$string['annexes'] = 'Bilag';

// Europass LP - STEP 2
$string['language-certificates'] = 'Uddannelses- eller eksamensbevis(er)';
$string['diploma-title'] = 'Betegnelse';
$string['diploma-awardingBody'] = 'Udstedende organ';
$string['diploma-date'] = 'Dato';
$string['diploma-level'] = 'Europæisk bniveau';
$string['language-experiences'] = 'Sproglig(e) erfaring(er)';
$string['experiences-period-from'] = 'Fra';
$string['experiences-period-to'] = 'Til';

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
$string['language.ab'] = 'Abkhazian';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonesisk';
$string['language.ar'] = 'Arabisk';
$string['language.as'] = 'Assamesisk';
$string['language.az'] = 'Aserbajdsjansk';
$string['language.be'] = 'Hviderussisk';
$string['language.bg'] = 'Bulgarsk';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetansk';
$string['language.br'] = 'Bretonsk';
$string['language.bs'] = 'Bosnisk';
$string['language.ca'] = 'Catalansk';
$string['language.ce'] = 'Tjetjensk';
$string['language.co'] = 'Korsikansk';
$string['language.cs'] = 'Tjekkisk';
$string['language.cy'] = 'Walisisk';
$string['language.da'] = 'Dansk';
$string['language.de'] = 'Tysk';
$string['language.el'] = 'Græsk';
$string['language.en'] = 'Engelsk';
$string['language.es'] = 'Spansk';
$string['language.et'] = 'Estisk';
$string['language.eu'] = 'Baskisk';
$string['language.fa'] = 'Persisk';
$string['language.fi'] = 'Finsk';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Færøsk';
$string['language.fr'] = 'Fransk';
$string['language.fy'] = 'Frisisk';
$string['language.ga'] = 'Irsk';
$string['language.gd'] = 'Gælisk / Skotsk';
$string['language.gl'] = 'Gallegan';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebraisk';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Kroatisk';
$string['language.ht'] = 'Haitisk';
$string['language.hu'] = 'Ungarsk';
$string['language.hy'] = 'Armensk';
$string['language.id'] = 'Indonesisk';
$string['language.is'] = 'Islandsk';
$string['language.it'] = 'Italiensk';
$string['language.ja'] = 'Japansk';
$string['language.jv'] = 'Javanesisk';
$string['language.ka'] = 'Georgisk';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Koreansk';
$string['language.ku'] = 'Kurdisk';
$string['language.kw'] = 'Cornisk';
$string['language.ky'] = 'Kirgisisk';
$string['language.lb'] = 'Letzeburgesch';
$string['language.li'] = 'Limburgish';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litauisk';
$string['language.lv'] = 'Lettisk';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Makedonsk';
$string['language.mn'] = 'Mongolsk';
$string['language.mo'] = 'Moldovisk';
$string['language.ms'] = 'Malajisk';
$string['language.mt'] = 'Maltesisk';
$string['language.my'] = 'Burmesisk';
$string['language.nb'] = 'Norsk (Riksmål)';
$string['language.ne'] = 'Nepalesisk';
$string['language.nl'] = 'Hollandsk';
$string['language.nn'] = 'Norsk (Nynorsk)';
$string['language.no'] = 'Norsk';
$string['language.pl'] = 'Polsk';
$string['language.pt'] = 'Portugisisk';
$string['language.rm'] = 'Rætoromansk';
$string['language.ro'] = 'Rumænsk';
$string['language.ru'] = 'Russisk';
$string['language.r0'] = 'Romani'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardinsk';
$string['language.se'] = 'Nordsamisk';
$string['language.sk'] = 'Slovakisk';
$string['language.sl'] = 'Slovensk';
$string['language.so'] = 'Somalisk';
$string['language.sq'] = 'Albansk';
$string['language.sr'] = 'Serbisk';
$string['language.sv'] = 'Svensk';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmensk';
$string['language.tr'] = 'Tyrkisk';
$string['language.ty'] = 'Tahitiansk';
$string['language.uk'] = 'Ukrainsk';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Usbekisk';
$string['language.vi'] = 'Vietnamesisk';
$string['language.yi'] = 'Jiddisch';
$string['language.zh'] = 'Kinesisk';
$string['language.cu'] = 'Kirkeslavisk';
$string['language.eo'] = 'Eperanto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Occitansk';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestansk';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharisk';
$string['language.av'] = 'Avarisk';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (Internat. Auxilary Language Assoc.)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Yi';
$string['language.ik'] = 'Inupiak';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut (Eskimoisk)';
$string['language.ki'] = 'Kikuyu';
$string['language.kj'] = 'Kuanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Grønlandsk';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmirsk';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda (Luganda)';
$string['language.lo'] = 'Laothisk (Lao)';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshall';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'Ndebele (Zimbabwe)';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele (Transvaal)';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo (Afan, Galla)';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetisk';
$string['language.pa'] = 'Panjabi (Punjabi)';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pushto (Pashto)';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Kirundi (Rundi)';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Singhalesisk';
$string['language.sm'] = 'Samoansk';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Siswati';
$string['language.st'] = 'Sotho';
$string['language.su'] = 'Sundanesisk';
$string['language.ta'] = 'Tamilsk';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uigur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'De Forenede Arabiske Emirater';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua og Barbuda';
$string['country.al'] = 'Albanien';
$string['country.am'] = 'Armenien';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Østrig';
$string['country.au'] = 'Australien';
$string['country.az'] = 'Aserbajdsjan';
$string['country.ba'] = 'Bosnien-Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgien';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarien';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasilien';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Den Demokratiske Republik Congo';
$string['country.cf'] = 'Den Centralafrikanske Republik';
$string['country.cg'] = 'Republikken Congo';
$string['country.ch'] = 'Schweiz';
$string['country.ci'] = 'Côte d\'Ivoire';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Cameroun';
$string['country.cn'] = 'Kina';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Kap Verde';
$string['country.cy'] = 'Cypern';
$string['country.cz'] = 'Den Tjekkiske Republik';
$string['country.de'] = 'Tyskland';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danmark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Den Dominikanske Republik';
$string['country.dz'] = 'Algeriet';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estland';
$string['country.eg'] = 'Egypten';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spanien';
$string['country.et'] = 'Etiopien';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Mikronesien';
$string['country.fr'] = 'Frankrig';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Det Forenede Kongerige';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgien';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grønland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Ækvatorialguinea';
$string['country.gr'] = 'Grækenland';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatien';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungarn';
$string['country.id'] = 'Indonesien';
$string['country.ie'] = 'Irland';
$string['country.il'] = 'Israel';
$string['country.in'] = 'Indien';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Island';
$string['country.it'] = 'Italien';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordan';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirgisistan';
$string['country.kh'] = 'Cambodja';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comorerne';
$string['country.kn'] = 'Saint Christopher og Nevis';
$string['country.kp'] = 'Nordkorea';
$string['country.kr'] = 'Sydkorea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kasakhstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litauen';
$string['country.lu'] = 'Luxembourg';
$string['country.lv'] = 'Letland';
$string['country.ly'] = 'Libyen';
$string['country.ma'] = 'Marokko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshalløerne';
$string['country.mk'] = 'Den Tidligere Jugoslaviske Republik Makedonien';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongoliet';
$string['country.mr'] = 'Mauretanien';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Malvinerne';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexico';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Nederlandene';
$string['country.no'] = 'Norge';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'New Zealand';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Ny Guinea';
$string['country.ph'] = 'Filippinerne';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polen';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Palæstinensiske Selvstyreområder';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Rumænien';
$string['country.rs'] = 'Serbien';
$string['country.ru'] = 'Rusland';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudi-Arabien';
$string['country.sb'] = 'Salomonøerne';
$string['country.sc'] = 'Seychellerne';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Sverige';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenien';
$string['country.sk'] = 'Slovakiet';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Saint Vincent og Grenadinerne';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrien';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Tchad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tadsjikistan';
$string['country.tl'] = 'Østtimor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunesien';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Tyrkiet';
$string['country.tt'] = 'Trinidad og Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ukraine';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Amerikas Forenede Stater';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Usbekistan';
$string['country.va'] = 'Vatikanstaten';
$string['country.vc'] = 'Saint Vincent og Grenadinerne';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Sydafrika';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorransk';
$string['nationality.ae'] = 'fra De Forenede Arabiske Emirater';
$string['nationality.af'] = 'Afghansk';
$string['nationality.ag'] = 'Anguillansk';
$string['nationality.al'] = 'Albansk';
$string['nationality.am'] = 'Armensk';
$string['nationality.ao'] = 'Angolansk';
$string['nationality.ar'] = 'Argentinsk';
$string['nationality.at'] = 'Østrigsk';
$string['nationality.au'] = 'Australsk';
$string['nationality.az'] = 'Aserbajdsjansk';
$string['nationality.ba'] = 'fra Bosnien-Hercegovina; bosnisk, hercegovinsk';
$string['nationality.bb'] = 'Barbadisk';
$string['nationality.bd'] = 'Bangladeshisk';
$string['nationality.be'] = 'Belgisk';
$string['nationality.bf'] = 'Burkinsk';
$string['nationality.bg'] = 'Bahrainsk';
$string['nationality.bh'] = 'Bulgarsk';
$string['nationality.bi'] = 'Burundisk';
$string['nationality.bj'] = 'Beninsk';
$string['nationality.bn'] = 'Bruneisk';
$string['nationality.bo'] = 'Boliviansk';
$string['nationality.br'] = 'Brasiliansk';
$string['nationality.bs'] = 'Bahamansk';
$string['nationality.bt'] = 'Bhutansk';
$string['nationality.bw'] = 'Botswansk';
$string['nationality.by'] = 'Belarussisk';
$string['nationality.bz'] = 'Belizisk';
$string['nationality.ca'] = 'Canadisk';
$string['nationality.cd'] = 'Congolesisk (Den Demokratiske Republik Congo)';
$string['nationality.cf'] = 'Centralafrikansk';
$string['nationality.cg'] = 'Congolesisk (Republikken Congo)';
$string['nationality.ch'] = 'Schweizisk';
$string['nationality.ci'] = 'Ivoriansk';
$string['nationality.cl'] = 'Chilensk';
$string['nationality.cm'] = 'Camerounsk';
$string['nationality.cn'] = 'Kinesisk';
$string['nationality.co'] = 'Colombiansk';
$string['nationality.cr'] = 'Costaricansk';
$string['nationality.cu'] = 'Cubansk';
$string['nationality.cv'] = 'Kapverdisk';
$string['nationality.cy'] = 'Cypriotisk';
$string['nationality.cz'] = 'Tjekkisk';
$string['nationality.de'] = 'Tysk';
$string['nationality.dj'] = 'Djiboutisk';
$string['nationality.dk'] = 'Dansk';
$string['nationality.dm'] = 'Dominicansk (Dominica)';
$string['nationality.do'] = 'Dominicansk (Dominikanske Republik)';
$string['nationality.dz'] = 'Algerisk';
$string['nationality.ec'] = 'Ecuadoriansk';
$string['nationality.ee'] = 'Estisk';
$string['nationality.eg'] = 'Egyptisk';
$string['nationality.er'] = 'Eritreisk';
$string['nationality.es'] = 'Spansk';
$string['nationality.et'] = 'Etiopisk';
$string['nationality.fi'] = 'Finsk, Finlandsk';
$string['nationality.fj'] = 'Fijiansk';
$string['nationality.fm'] = 'Mikronesisk';
$string['nationality.fr'] = 'Fransk';
$string['nationality.ga'] = 'Gabonesisk';
$string['nationality.gb'] = 'Britisk';
$string['nationality.gd'] = 'Grenadisk';
$string['nationality.ge'] = 'Georgisk';
$string['nationality.gh'] = 'Ghanesisk';
$string['nationality.gl'] = 'Grønlandsk';
$string['nationality.gm'] = 'Gambisk';
$string['nationality.gn'] = 'Guineansk (Republikken Guinea)';
$string['nationality.gq'] = 'Ækvatorialguineansk';
$string['nationality.gr'] = 'Græsk';
$string['nationality.gt'] = 'Guatemalansk';
$string['nationality.gw'] = 'Guineansk (Guinea-Bissau)';
$string['nationality.gy'] = 'Guyansk';
$string['nationality.hn'] = 'Honduransk';
$string['nationality.hr'] = 'Kkroatisk';
$string['nationality.ht'] = 'Haitiansk';
$string['nationality.hu'] = 'Ungarsk';
$string['nationality.id'] = 'Indonesisk';
$string['nationality.ie'] = 'Irlandsk';
$string['nationality.il'] = 'Israel';
$string['nationality.in'] = 'Indisk';
$string['nationality.iq'] = 'Irakisk';
$string['nationality.ir'] = 'Iransk';
$string['nationality.is'] = 'Islandsk';
$string['nationality.it'] = 'Italiensk';
$string['nationality.jm'] = 'Jamaicansk';
$string['nationality.jo'] = 'Jordansk';
$string['nationality.jp'] = 'Japansk';
$string['nationality.ke'] = 'Kenyansk';
$string['nationality.kg'] = 'Kirgisisk';
$string['nationality.kh'] = 'Cambodjansk';
$string['nationality.ki'] = 'Kiribatisk';
$string['nationality.km'] = 'Comorisk';
$string['nationality.kn'] = 'fra Saint Christopher og Nevis';
$string['nationality.kp'] = 'Nordkoreansk';
$string['nationality.kr'] = 'Sydkoreansk';
$string['nationality.kw'] = 'Kuwaitisk';
$string['nationality.kz'] = 'Kasakhisk';
$string['nationality.la'] = 'Laotisk';
$string['nationality.lb'] = 'Libanesisk';
$string['nationality.lc'] = 'Saintluciansk';
$string['nationality.li'] = 'Liechtensteinsk';
$string['nationality.lk'] = 'Srilankansk';
$string['nationality.lr'] = 'Liberiansk';
$string['nationality.ls'] = 'Lesothisk';
$string['nationality.lt'] = 'Litauisk';
$string['nationality.lu'] = 'Luxembourgsk';
$string['nationality.lv'] = 'Letlandsk';
$string['nationality.ly'] = 'Libysk';
$string['nationality.ma'] = 'Marokkansk';
$string['nationality.mc'] = 'Monegaskisk';
$string['nationality.md'] = 'Moldovisk';
$string['nationality.me'] = 'Montenegrinsk';
$string['nationality.mg'] = 'Madagaskisk';
$string['nationality.mh'] = 'fra Marshalløerne';
$string['nationality.mk'] = 'fra Den Tidligere Jugoslaviske Republik Makedonien';
$string['nationality.ml'] = 'Malisk';
$string['nationality.mm'] = 'Myanmarsk';
$string['nationality.mn'] = 'Mongolsk';
$string['nationality.mr'] = 'Mauretansk';
$string['nationality.mt'] = 'Maltesisk';
$string['nationality.mu'] = 'Mauritisk';
$string['nationality.mv'] = 'Maldivisk';
$string['nationality.mw'] = 'Malawisk';
$string['nationality.mx'] = 'Mexicansk';
$string['nationality.my'] = 'Malaysisk';
$string['nationality.mz'] = 'Mozambiquisk';
$string['nationality.na'] = 'Namibisk';
$string['nationality.ne'] = 'Nigersk (Niger)';
$string['nationality.ng'] = 'Nigeriansk (Nigeria)';
$string['nationality.ni'] = 'Nicaraguansk';
$string['nationality.nl'] = 'Nederlandsk';
$string['nationality.no'] = 'Norsk';
$string['nationality.np'] = 'Nepalesisk';
$string['nationality.nr'] = 'Naurisk';
$string['nationality.nu'] = 'fra Niue';
$string['nationality.nz'] = 'Newzealandsk';
$string['nationality.om'] = 'Omansk';
$string['nationality.pa'] = 'Panamansk';
$string['nationality.pe'] = 'Peruansk Peruviansk';
$string['nationality.pg'] = 'Papuansk';
$string['nationality.ph'] = 'Filippinsk';
$string['nationality.pk'] = 'Pakistansk';
$string['nationality.pl'] = 'Polsk';
$string['nationality.pr'] = 'Puertoricansk';
$string['nationality.ps'] = 'fra den Palæstinensiske Selvstyreområder';
$string['nationality.pt'] = 'Portugisisk';
$string['nationality.pw'] = 'Palausk';
$string['nationality.py'] = 'Paraguayansk';
$string['nationality.qa'] = 'Qatarsk';
$string['nationality.ro'] = 'Rumænsk';
$string['nationality.rs'] = 'Serbisk';
$string['nationality.ru'] = 'Rusisk';
$string['nationality.rw'] = 'Rwandisk';
$string['nationality.sa'] = 'Saudiarabisk';
$string['nationality.sb'] = 'Salomonsk';
$string['nationality.sc'] = 'Seychellisk';
$string['nationality.sd'] = 'Sudansk';
$string['nationality.se'] = 'Svensk';
$string['nationality.sg'] = 'Singaporeansk';
$string['nationality.si'] = 'Slovensk';
$string['nationality.sk'] = 'Slovakisk';
$string['nationality.sl'] = 'Sierraleonsk';
$string['nationality.sm'] = 'Sanmarinesisk';
$string['nationality.sn'] = 'Senegalesisk';
$string['nationality.so'] = 'Somalisk';
$string['nationality.sr'] = 'Surinamsk';
$string['nationality.st'] = 'fra São Tomé og Príncipe';
$string['nationality.sv'] = 'Salvadoransk';
$string['nationality.sy'] = 'Syrisk';
$string['nationality.sz'] = 'Swazilandsk';
$string['nationality.td'] = 'Tchadisk';
$string['nationality.tg'] = 'Togolesisk';
$string['nationality.th'] = 'Thailandsk';
$string['nationality.tj'] = 'Tadsjikisk';
$string['nationality.tl'] = 'Østtimorisk';
$string['nationality.tm'] = 'Turkmensk';
$string['nationality.tn'] = 'Tunesisk';
$string['nationality.to'] = 'Tongansk';
$string['nationality.tr'] = 'Tyrkisk';
$string['nationality.tt'] = 'Trinidadisk';
$string['nationality.tv'] = 'Tuvaluansk';
$string['nationality.tz'] = 'Tanzanisk';
$string['nationality.ua'] = 'Ukrainsk';
$string['nationality.ug'] = 'Ugandisk';
$string['nationality.us'] = 'Amerikansk';
$string['nationality.uy'] = 'Uruguayansk';
$string['nationality.uz'] = 'Usbekisk';
$string['nationality.va'] = 'Vatikansk';
$string['nationality.vc'] = 'Sanktvincentisk';
$string['nationality.ve'] = 'Venezuelansk';
$string['nationality.vn'] = 'Vietnamesisk';
$string['nationality.vu'] = 'Vanuatisk';
$string['nationality.ws'] = 'Samoansk';
$string['nationality.ye'] = 'Yemenitisk';
$string['nationality.za'] = 'Sydafrikansk';
$string['nationality.zm'] = 'Zambisk';
$string['nationality.zw'] = 'Zimbabwisk';

?>
