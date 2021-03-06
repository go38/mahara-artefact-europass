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
$string['europassCV'] = 'Europass curriculum vitae (CV)';
$string['europassLP'] = 'Europass språkpass';
$string['photograph'] = 'Bilde';
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
$string['identification'] = 'Personlige opplysninger';
$string['identification-birthdate'] = 'Fødselsdato';
$string['identification-birthplace'] = 'Fødested';
$string['identification-lastname'] = 'Etternavn';
$string['identification-firstname'] = 'Fornavn';
$string['identification-addressLine'] = 'Gateadresse ';
$string['identification-municipality'] = 'Poststed';
$string['identification-postalCode'] = 'Postnummer';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefon(er)';
$string['identification-contactinfo-mobile'] = 'Mobiltelefon';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-post';
$string['identification-nationality'] = 'Nasjonalitet';
$string['identification-gender'] = 'Kjønn';

// Europass CV - STEP 2
$string['application'] = 'Ønsket stilling / Yrkesområde';

// Europass CV - STEP 3
$string['workexperience'] = 'Yrkeserfaring';

// Europass CV - STEP 4
$string['education'] = 'Utdanning og opplæring';

// Europass CV - STEP 5
$string['mothertongue'] = 'Morsmål';
$string['otherlanguage'] = 'Andre språk';

$string['language-foreign-listening'] = 'Lytting';
$string['language-foreign-listening-th'] = 'Lytting';
$string['language-foreign-reading'] = 'Lesing';
$string['language-foreign-reading-th'] = 'Lesing';
$string['language-foreign-spokeninteraction'] = 'Muntlig interaksjon';
$string['language-foreign-spokeninteraction-th'] = 'Muntlig<br>interaksjon';
$string['language-foreign-spokenproduction'] = 'Muntlig produksjon';
$string['language-foreign-spokenproduction-th'] = 'Muntlig<br>produksjon';
$string['language-foreign-writing'] = 'Skrift';
$string['language-foreign-writing-th'] = 'Skrift';
$string['language-foreign-CEF-level'] = 'Felles europeisk rammeverket for språk';

$string['language-foreign-level.A1'] = 'Basisbruker (A1)';
$string['language-foreign-level.A2'] = 'Basisbruker (A2)';
$string['language-foreign-level.B1'] = 'Selvstendig bruker (B1)';
$string['language-foreign-level.B2'] = 'Selvstendig bruker (B2)';
$string['language-foreign-level.C1'] = 'Dyktig bruker (C1)';
$string['language-foreign-level.C2'] = 'Dyktig bruker (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Førerkort (klasser)';
$string['skills-and-competences'] = 'Personlige evner og kompetanse';
$string['socialskill'] = 'Sosiale evner og egenskaper';
$string['organisationalskill'] = 'Organisatorisk evne og kompetanse';
$string['technicalskill'] = 'Tekniske ferdigheter og kompetanse';
$string['computerskill'] = 'Datakyndighet og kompetanse';
$string['artisticskill'] = 'Kunstneriske talenter og ferdigheter';
$string['otherskill'] = 'Andre talenter og ferdigheter';
$string['additionalinfo'] = 'Ytterligere opplysninger';
$string['annexes'] = 'Vedlegg';

// Europass LP - STEP 2
$string['language-certificates'] = 'Vitnemål og eksamen(er)';
$string['diploma-title'] = 'Tittel';
$string['diploma-awardingBody'] = 'Utstedende organ';
$string['diploma-date'] = 'Dato';
$string['diploma-level'] = 'Europeisk nivå-klassifikasjon';
$string['language-experiences'] = 'Språklig(e) erfaring(er)';
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
$string['language.ab'] = 'Abkhasisk';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonesisk';
$string['language.ar'] = 'Arabisk';
$string['language.as'] = 'Assamesisk';
$string['language.az'] = 'Aserbajdsjansk';
$string['language.be'] = 'Hviterussisk';
$string['language.bg'] = 'Bulgarsk';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetansk';
$string['language.br'] = 'Bretonsk';
$string['language.bs'] = 'Bosnisk';
$string['language.ca'] = 'Katalansk';
$string['language.ce'] = 'Tsjetsjensk';
$string['language.co'] = 'Korsikansk';
$string['language.cs'] = 'Tsjekkisk';
$string['language.cy'] = 'Walisisk';
$string['language.da'] = 'Dansk';
$string['language.de'] = 'Tysk';
$string['language.el'] = 'Gresk';
$string['language.en'] = 'Engelsk';
$string['language.es'] = 'Spansk / Kastiljansk';
$string['language.et'] = 'Estisk';
$string['language.eu'] = 'Baskisk';
$string['language.fa'] = 'Persisk';
$string['language.fi'] = 'Finsk';
$string['language.fj'] = 'Fijisk';
$string['language.fo'] = 'Færøysk';
$string['language.fr'] = 'Fransk';
$string['language.fy'] = 'Frisisk';
$string['language.ga'] = 'Irsk';
$string['language.gd'] = 'Skotsk / Gælisk';
$string['language.gl'] = 'Galisisk';
$string['language.gv'] = 'Mansk';
$string['language.he'] = 'Hebraisk';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Kroatisk';
$string['language.ht'] = 'Haitisk kreolsk';
$string['language.hu'] = 'Ungarsk';
$string['language.hy'] = 'Armensk';
$string['language.id'] = 'Indonesisk';
$string['language.is'] = 'Islandsk';
$string['language.it'] = 'Italiensk';
$string['language.ja'] = 'Japansk';
$string['language.jv'] = 'Javanesisk';
$string['language.ka'] = 'Georgisk';
$string['language.kg'] = 'Kongolesisk';
$string['language.ko'] = 'Koreansk';
$string['language.ku'] = 'Kurdisk';
$string['language.kw'] = 'Kornisk';
$string['language.ky'] = 'Kirgisisk';
$string['language.lb'] = 'Luxembourgisk';
$string['language.li'] = 'Limburgisk';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litauisk';
$string['language.lv'] = 'Latvisk';
$string['language.mg'] = 'Gassisk';
$string['language.mk'] = 'Makedonsk';
$string['language.mn'] = 'Mongolsk';
$string['language.mo'] = 'Moldovsk';
$string['language.ms'] = 'Malayisk';
$string['language.mt'] = 'Maltesisk';
$string['language.my'] = 'Burmesisk';
$string['language.nb'] = 'Norsk (Bokmål)';
$string['language.ne'] = 'Nepali';
$string['language.nl'] = 'Nederlandsk';
$string['language.nn'] = 'Norsk (Nynorsk)';
$string['language.no'] = 'Norsk';
$string['language.pl'] = 'Polsk';
$string['language.pt'] = 'Portugisisk';
$string['language.rm'] = 'Retoromansk';
$string['language.ro'] = 'Rumensk';
$string['language.ru'] = 'Russisk';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
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
$string['language.ty'] = 'Tahitisk';
$string['language.uk'] = 'Ukrainsk';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Usbekisk';
$string['language.vi'] = 'Vietnamesisk';
$string['language.yi'] = 'Jiddisk';
$string['language.zh'] = 'Kinesisk';
$string['language.cu'] = 'Gammelslavisk';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Oksitansk';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestisk';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharisk';
$string['language.av'] = 'Avarisk';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Basjkirsk';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Tsjuvansk';
$string['language.dv'] = 'Dhivehi';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulfulde';
$string['language.gn'] = 'Guaraní';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Ibo';
$string['language.ii'] = 'Yi';
$string['language.ik'] = 'Inupiak';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuittisk';
$string['language.ki'] = 'Gikuyu';
$string['language.kj'] = 'Kwanyama';
$string['language.kk'] = 'Kasakhisk';
$string['language.kl'] = 'Kalaallisut';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Luganda';
$string['language.lo'] = 'Laotisk';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallesisk';
$string['language.mi'] = 'Maoriski';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Naurisk';
$string['language.nd'] = 'Nord-ndebele';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Sør-ndebele';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Chichewa';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetisk';
$string['language.pa'] = 'Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pashto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Kirundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Singalesisk';
$string['language.sm'] = 'Samoansk';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sesotho';
$string['language.su'] = 'Sundanesisk';
$string['language.ta'] = 'Tamilsk';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tadsjikisk';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonganesisk';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatarsk';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uighur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Vallonsk';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'De forente arabiske emirater';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua og Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Østerrike';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Aserbajdsjan';
$string['country.ba'] = 'Bosnia-Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgia';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Hviterussland';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Den demokratiske republikken Kongo';
$string['country.cf'] = 'Den sentralafrikanske republikken';
$string['country.cg'] = 'Republikken Kongo';
$string['country.ch'] = 'Sveits';
$string['country.ci'] = 'Elfenbenskysten';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kina';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Kapp Verde';
$string['country.cy'] = 'Kypros';
$string['country.cz'] = 'Den tsjekkiske republikk';
$string['country.de'] = 'Tyskland';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danmark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Den dominikanske republikken';
$string['country.dz'] = 'Algerie';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estland';
$string['country.eg'] = 'Egypt';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spania';
$string['country.et'] = 'Etiopia';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Mikronesia';
$string['country.fr'] = 'Frankrike';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Det forente kongerike';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grønland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Ekvatorial-Guinea';
$string['country.gr'] = 'Hellas';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungarn';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Irland';
$string['country.il'] = 'Israel';
$string['country.in'] = 'India';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Island';
$string['country.it'] = 'Italia';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordan';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirgisistan';
$string['country.kh'] = 'Kambodsja';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komorene';
$string['country.kn'] = 'Saint Kitts og Nevis';
$string['country.kp'] = 'Nord-Korea';
$string['country.kr'] = 'Sør-Korea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kasakhstan';
$string['country.la'] = 'Laos, Den demokratiske folkerepublikken';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litauen';
$string['country.lu'] = 'Luxembourg';
$string['country.lv'] = 'Latvia';
$string['country.ly'] = 'Libya';
$string['country.ma'] = 'Marokko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshalløyene';
$string['country.mk'] = 'Den tidligere jugoslaviske republikken Makedonia';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldivene';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexico';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mosambik';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Nederland';
$string['country.no'] = 'Norge';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'New Zealand';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Ny-Guinea';
$string['country.ph'] = 'Filippinene';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polen';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Den palestinske selvstyremyndigheten';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Romania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Russland';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudi-Arabia';
$string['country.sb'] = 'Solomonøyene';
$string['country.sc'] = 'Seychellene';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Sverige';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovakia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'São Tomé og Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syria';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Tsjad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tadsjikistan';
$string['country.tl'] = 'Øst-Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Tyrkia';
$string['country.tt'] = 'Trindidad og Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'De forente stater';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Usbekistan';
$string['country.va'] = 'Vatikanstaten (Den hellige stol)';
$string['country.vc'] = 'Saint Vincent og Grenadinene';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Sør-Afrika';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorransk';
$string['nationality.ae'] = 'Emiratarabisk';
$string['nationality.af'] = 'Afghansk';
$string['nationality.ag'] = 'Antiguansk';
$string['nationality.al'] = 'Albansk';
$string['nationality.am'] = 'Armensk';
$string['nationality.ao'] = 'Angolansk';
$string['nationality.ar'] = 'Argentinsk';
$string['nationality.at'] = 'Østerriksk';
$string['nationality.au'] = 'Australsk';
$string['nationality.az'] = 'Aserbajdsjaner';
$string['nationality.ba'] = 'Bosnisk';
$string['nationality.bb'] = 'Barbadisk';
$string['nationality.bd'] = 'Baladeshisk';
$string['nationality.be'] = 'Belgisk';
$string['nationality.bf'] = 'Burkinsk';
$string['nationality.bg'] = 'Bulgarsk';
$string['nationality.bh'] = 'Bahrainsk';
$string['nationality.bi'] = 'Burundisk';
$string['nationality.bj'] = 'Beninsk';
$string['nationality.bn'] = 'Bruneisk';
$string['nationality.bo'] = 'Boliviansk';
$string['nationality.br'] = 'Brasiliansk';
$string['nationality.bs'] = 'Bahamansk';
$string['nationality.bt'] = 'Bhutansk';
$string['nationality.bw'] = 'Botswansk';
$string['nationality.by'] = 'Hviterussisk';
$string['nationality.bz'] = 'Belizisk';
$string['nationality.ca'] = 'Kanadisk';
$string['nationality.cd'] = 'Kongolesisk (Den demokratiske republikken Kongo)';
$string['nationality.cf'] = 'Sentralafrikansk';
$string['nationality.cg'] = 'Kongolesisk (Republikken Kongo)';
$string['nationality.ch'] = 'Sveitsisk';
$string['nationality.ci'] = 'Ivoriansk';
$string['nationality.cl'] = 'Chilensk';
$string['nationality.cm'] = 'Kamerunsk';
$string['nationality.cn'] = 'Kinesisk';
$string['nationality.co'] = 'Colombiansk';
$string['nationality.cr'] = 'Kostarikansk';
$string['nationality.cu'] = 'Kubansk';
$string['nationality.cv'] = 'Kappverdisk';
$string['nationality.cy'] = 'Kypriotisk';
$string['nationality.cz'] = 'Tjekkisk';
$string['nationality.de'] = 'Tysk';
$string['nationality.dj'] = 'Djiboutisk';
$string['nationality.dk'] = 'Dansk';
$string['nationality.dm'] = 'Dominikisk';
$string['nationality.do'] = 'Dominikansk';
$string['nationality.dz'] = 'Algerisk';
$string['nationality.ec'] = 'Ecuadoriansk';
$string['nationality.ee'] = 'Estisk / Estlandsk';
$string['nationality.eg'] = 'Egyptisk';
$string['nationality.er'] = 'Eritreisk';
$string['nationality.es'] = 'Spansk';
$string['nationality.et'] = 'Etiopisk';
$string['nationality.fi'] = 'Finsk';
$string['nationality.fj'] = 'Fijiansk';
$string['nationality.fm'] = 'Mikronesisk';
$string['nationality.fr'] = 'Fransk';
$string['nationality.ga'] = 'Gabonsk';
$string['nationality.gb'] = 'Britisk';
$string['nationality.gd'] = 'Grenadisk';
$string['nationality.ge'] = 'Georgisk';
$string['nationality.gh'] = 'Ghanesisk';
$string['nationality.gl'] = 'Grønlandsk';
$string['nationality.gm'] = 'Gambisk';
$string['nationality.gn'] = 'Guineansk';
$string['nationality.gq'] = 'Ekvatorialguineansk';
$string['nationality.gr'] = 'Gresk';
$string['nationality.gt'] = 'Guatemalansk';
$string['nationality.gw'] = 'Bissauguineansk';
$string['nationality.gy'] = 'Guyansk';
$string['nationality.hn'] = 'Honduransk';
$string['nationality.hr'] = 'Kroatisk';
$string['nationality.ht'] = 'Haitisk';
$string['nationality.hu'] = 'Ungarsk';
$string['nationality.id'] = 'Indonesisk';
$string['nationality.ie'] = 'Irsk';
$string['nationality.il'] = 'Israelsk';
$string['nationality.in'] = 'Indisk';
$string['nationality.iq'] = 'Iransk';
$string['nationality.ir'] = 'Irakisk';
$string['nationality.is'] = 'Islandsk';
$string['nationality.it'] = 'Italiensk';
$string['nationality.jm'] = 'Jamaikansk';
$string['nationality.jo'] = 'Jordansk';
$string['nationality.jp'] = 'Japansk';
$string['nationality.ke'] = 'Kenyansk';
$string['nationality.kg'] = 'Kirgisisk';
$string['nationality.kh'] = 'kambodsjansk';
$string['nationality.ki'] = 'Kiribatisk';
$string['nationality.km'] = 'Komorisk';
$string['nationality.kn'] = 'Sanktkittisk';
$string['nationality.kp'] = 'Nordkoreansk';
$string['nationality.kr'] = 'Sørkoreansk';
$string['nationality.kw'] = 'Kuwaitisk';
$string['nationality.kz'] = 'Kasakhstansk';
$string['nationality.la'] = 'Laotisk';
$string['nationality.lb'] = 'Libanesisk';
$string['nationality.lc'] = 'Sanktlusiansk';
$string['nationality.li'] = 'Liechtensteinsk';
$string['nationality.lk'] = 'Srilankisk';
$string['nationality.lr'] = 'Liberisk';
$string['nationality.ls'] = 'Lesothisk';
$string['nationality.lt'] = 'Litauisk';
$string['nationality.lu'] = 'Luxemburgsk';
$string['nationality.lv'] = 'Latvisk';
$string['nationality.ly'] = 'Libysk';
$string['nationality.ma'] = 'Marokkansk';
$string['nationality.mc'] = 'Monegaskisk';
$string['nationality.md'] = 'Moldovsk';
$string['nationality.me'] = 'Montenegrisk';
$string['nationality.mg'] = 'Gassisk';
$string['nationality.mh'] = 'Marshallesisk';
$string['nationality.mk'] = 'Makedonsk';
$string['nationality.ml'] = 'Malisk';
$string['nationality.mm'] = 'Burmesisk / Myanmarsk';
$string['nationality.mn'] = 'Mongolsk';
$string['nationality.mr'] = 'Mauritansk';
$string['nationality.mt'] = 'Maltesisk';
$string['nationality.mu'] = 'Mauritisk';
$string['nationality.mv'] = 'Maldivisk';
$string['nationality.mw'] = 'Malawisk';
$string['nationality.mx'] = 'Mexikansk';
$string['nationality.my'] = 'Malaysisk';
$string['nationality.mz'] = 'Mosambikisk';
$string['nationality.na'] = 'Namibisk';
$string['nationality.ne'] = 'Nigersk';
$string['nationality.ng'] = 'Nigeriansk';
$string['nationality.ni'] = 'Nicaraguansk';
$string['nationality.nl'] = 'Nederlandsk';
$string['nationality.no'] = 'Norsk';
$string['nationality.np'] = 'Nepalsk';
$string['nationality.nr'] = 'Naurisk';
$string['nationality.nu'] = 'Niuisk';
$string['nationality.nz'] = 'Newzealandsk';
$string['nationality.om'] = 'Omansk';
$string['nationality.pa'] = 'Panamansk';
$string['nationality.pe'] = 'Peruansk';
$string['nationality.pg'] = 'Papuansk';
$string['nationality.ph'] = 'Filippinsk';
$string['nationality.pk'] = 'Pakistansk';
$string['nationality.pl'] = 'Polsk';
$string['nationality.pr'] = 'Puertorikansk';
$string['nationality.ps'] = 'Palestinsk';
$string['nationality.pt'] = 'Portugisisk';
$string['nationality.pw'] = 'Palauisk';
$string['nationality.py'] = 'Paraguyansk';
$string['nationality.qa'] = 'Qatarsk';
$string['nationality.ro'] = 'Rumensk';
$string['nationality.rs'] = 'Serbisk';
$string['nationality.ru'] = 'Russisk';
$string['nationality.rw'] = 'Rwandisk';
$string['nationality.sa'] = 'Saudiarabisk';
$string['nationality.sb'] = 'Salomonsk';
$string['nationality.sc'] = 'Seychellisk';
$string['nationality.sd'] = 'Sudansk';
$string['nationality.se'] = 'Svensk';
$string['nationality.sg'] = 'Singaporsk';
$string['nationality.si'] = 'Slovensk';
$string['nationality.sk'] = 'Slovakisk';
$string['nationality.sl'] = 'Sierraleonsk';
$string['nationality.sm'] = 'Sanmarinsk';
$string['nationality.sn'] = 'Senegalesisk';
$string['nationality.so'] = 'Somalisk';
$string['nationality.sr'] = 'Surinamsk';
$string['nationality.st'] = 'Saotomesisk';
$string['nationality.sv'] = 'Salvadoransk';
$string['nationality.sy'] = 'Syrisk';
$string['nationality.sz'] = 'Swazilandsk';
$string['nationality.td'] = 'Tsjadisk';
$string['nationality.tg'] = 'Togolesisk';
$string['nationality.th'] = 'Thailandsk';
$string['nationality.tj'] = 'Tadsjikisk';
$string['nationality.tl'] = 'Timoresisk';
$string['nationality.tm'] = 'Turkmensk';
$string['nationality.tn'] = 'Tunisisk';
$string['nationality.to'] = 'Tongansk';
$string['nationality.tr'] = 'Tyrkisk';
$string['nationality.tt'] = 'Trinidadisk';
$string['nationality.tv'] = 'Tuvalsk';
$string['nationality.tz'] = 'Tanzaniansk';
$string['nationality.ua'] = 'Ukrainsk';
$string['nationality.ug'] = 'Ungarsk';
$string['nationality.us'] = 'Amerikansk';
$string['nationality.uy'] = 'Uruguayansk';
$string['nationality.uz'] = 'Usbekisk';
$string['nationality.va'] = 'Vatikansk';
$string['nationality.vc'] = 'Sanktvinsentisk';
$string['nationality.ve'] = 'Venezuelansk';
$string['nationality.vn'] = 'Vietnamesisk';
$string['nationality.vu'] = 'Vanuatisk';
$string['nationality.ws'] = 'Samoansk';
$string['nationality.ye'] = 'Jemenittisk';
$string['nationality.za'] = 'Sørafrikansk';
$string['nationality.zm'] = 'Zambisk';
$string['nationality.zw'] = 'Zimbabwisk';

?>
