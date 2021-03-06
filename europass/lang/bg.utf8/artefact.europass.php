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
$string['europassCV'] = 'Europass автобиографията (CV)';
$string['europassLP'] = 'Europass езиковия паспорт';
$string['photograph'] = 'Снимка';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Дата';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'дд/мм/гггг';
$string['internaldate-dmy12'] = 'дд.мм.гггг';
$string['internaldate-dmy13'] = 'дд-мм-гггг';
$string['internaldate-dmy21'] = 'дд/мм/гг';
$string['internaldate-dmy22'] = 'дд.мм.гг';
$string['internaldate-dmy23'] = 'дд-мм-гг';
$string['internaldate-mdy11'] = 'мм/дд/гггг';
$string['internaldate-mdy12'] = 'мм.дд.гггг';
$string['internaldate-mdy13'] = 'мм-дд-гггг';
$string['internaldate-mdy21'] = 'мм/дд/гг';
$string['internaldate-mdy22'] = 'мм.дд.гг';
$string['internaldate-mdy23'] = 'мм-дд-гг';
$string['internaldate-ymd11'] = 'гггг/мм/дд';
$string['internaldate-ymd12'] = 'гггг.мм.дд';
$string['internaldate-ymd13'] = 'гггг-мм-дд';
$string['internaldate-ymd21'] = 'гг/мм/дд';
$string['internaldate-ymd22'] = 'гг.мм.дд';
$string['internaldate-ymd23'] = 'гг-мм-дд';
$string['internaldate-yonly'] = 'гггг';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'дд/мм/гггг';
$string['externaldate-text-long'] = 'дд. месец гггг';
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
$string['identification'] = 'Лична информация';
$string['identification-birthdate'] = 'Дата на раждане';
$string['identification-birthplace'] = 'Място на раждане';
$string['identification-lastname'] = 'Фамилия(и)';
$string['identification-firstname'] = 'Собствено име(на)';
$string['identification-addressLine'] = 'Улица и номер';
$string['identification-municipality'] = 'Γрад';
$string['identification-postalCode'] = 'Пощенски код';
$string['identification-country'] = 'Страна';
$string['identification-contactinfo-telephone'] = 'Телефонен номер(а)';
$string['identification-contactinfo-mobile'] = 'Мобилен телефон';
$string['identification-contactinfo-fax'] = 'Факс';
$string['identification-contactinfo-email'] = 'Електронна поща(и)';
$string['identification-nationality'] = 'Националност';
$string['identification-gender'] = 'Пол';

// Europass CV - STEP 2
$string['application'] = 'Предпочитана длъжност / Сфера на работа';

// Europass CV - STEP 3
$string['workexperience'] = 'Професионален опит';

// Europass CV - STEP 4
$string['education'] = 'Образование и обучение';

// Europass CV - STEP 5
$string['mothertongue'] = 'Майчин (и) език (езици)';
$string['otherlanguage'] = 'Чужд (и) език (езици)';

$string['language-foreign-listening'] = 'Слушане';
$string['language-foreign-listening-th'] = 'Слушане';
$string['language-foreign-reading'] = 'Четене';
$string['language-foreign-reading-th'] = 'Четене';
$string['language-foreign-spokeninteraction'] = 'Участие в разговор';
$string['language-foreign-spokeninteraction-th'] = 'Участие<br>в разговор';
$string['language-foreign-spokenproduction'] = 'Самостоятелно устно изложение';
$string['language-foreign-spokenproduction-th'] = 'Самостоятелно<br>устно изложение';
$string['language-foreign-writing'] = 'Писане';
$string['language-foreign-writing-th'] = 'Писане';
$string['language-foreign-CEF-level'] = 'Единни европейски критерии за познания по езици';

$string['language-foreign-level.A1'] = 'Основно ниво на владеене (A1)';
$string['language-foreign-level.A2'] = 'Основно ниво на владеене (A2)';
$string['language-foreign-level.B1'] = 'Самостоятелно ниво на владеене (B1)';
$string['language-foreign-level.B2'] = 'Самостоятелно ниво на владеене (B2)';
$string['language-foreign-level.C1'] = 'Свободно ниво на владеене (C1)';
$string['language-foreign-level.C2'] = 'Свободно ниво на владеене (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Свидетелство за управление на МПС';
$string['skills-and-competences'] = 'Лични умения и компетенции';
$string['socialskill'] = 'Социални умения и компетенции';
$string['organisationalskill'] = 'Организационни умения и компетенции';
$string['technicalskill'] = 'Технически умения и компетенции';
$string['computerskill'] = 'Компютърни умения и компетенции';
$string['artisticskill'] = 'Артистични умения и компетенции';
$string['otherskill'] = 'Други умения и компетенции';
$string['additionalinfo'] = 'Допълнителна информация';
$string['annexes'] = 'Приложения';

// Europass LP - STEP 2
$string['language-certificates'] = 'Диплома(и) или сертификат(и)';
$string['diploma-title'] = 'Наименование';
$string['diploma-awardingBody'] = 'Издаваща организация';
$string['diploma-date'] = 'Дата';
$string['diploma-level'] = 'Европейско ниво';
$string['language-experiences'] = 'Езиков опит';
$string['experiences-period-from'] = 'От';
$string['experiences-period-to'] = 'До';

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
$string['language.ab'] = 'абхазки';
$string['language.af'] = 'африканс';
$string['language.an'] = 'арагонски';
$string['language.ar'] = 'арабски';
$string['language.as'] = 'асамски';
$string['language.az'] = 'азербайджански';
$string['language.be'] = 'белоруски';
$string['language.bg'] = 'български';
$string['language.bn'] = 'бенгалски';
$string['language.bo'] = 'тибетски';
$string['language.br'] = 'бретонски';
$string['language.bs'] = 'босненски';
$string['language.ca'] = 'каталонски';
$string['language.ce'] = 'чеченски';
$string['language.co'] = 'корсикански';
$string['language.cs'] = 'чешки';
$string['language.cy'] = 'уелски';
$string['language.da'] = 'датски ';
$string['language.de'] = 'немски ';
$string['language.el'] = 'гръцки ';
$string['language.en'] = 'английски';
$string['language.es'] = 'испански';
$string['language.et'] = 'естонски';
$string['language.eu'] = 'баски';
$string['language.fa'] = 'персийски';
$string['language.fi'] = 'фински ';
$string['language.fj'] = 'фиджийски';
$string['language.fo'] = 'фарьорски';
$string['language.fr'] = 'френски';
$string['language.fy'] = 'фризийски';
$string['language.ga'] = 'ирландски';
$string['language.gd'] = 'шотландски';
$string['language.gl'] = 'галисийски';
$string['language.gv'] = 'манкс';
$string['language.he'] = 'иврит';
$string['language.hi'] = 'хинди';
$string['language.hr'] = 'хърватски';
$string['language.ht'] = 'хаитянски';
$string['language.hu'] = 'унгарски ';
$string['language.hy'] = 'арменски';
$string['language.id'] = 'индонезийски';
$string['language.is'] = 'исландски ';
$string['language.it'] = 'италиански ';
$string['language.ja'] = 'японски';
$string['language.jv'] = 'явански';
$string['language.ka'] = 'грузински';
$string['language.kg'] = 'конгоански';
$string['language.ko'] = 'корейски';
$string['language.ku'] = 'кюрдски';
$string['language.kw'] = 'корнуолски';
$string['language.ky'] = 'киргизки';
$string['language.lb'] = 'люксембургски';
$string['language.li'] = 'лимбургски';
$string['language.ln'] = 'лингала';
$string['language.lt'] = 'литовски ';
$string['language.lv'] = 'латвийски ';
$string['language.mg'] = 'малгашки';
$string['language.mk'] = 'македонски';
$string['language.mn'] = 'монголски';
$string['language.mo'] = 'молдовски';
$string['language.ms'] = 'малайски';
$string['language.mt'] = 'малтийски ';
$string['language.my'] = 'бирмански';
$string['language.nb'] = 'норвежки (bokmål)';
$string['language.ne'] = 'непалски';
$string['language.nl'] = 'холандски';
$string['language.nn'] = 'норвежки (nynorsk)';
$string['language.no'] = 'норвежки ';
$string['language.pl'] = 'полски ';
$string['language.pt'] = 'португалски ';
$string['language.rm'] = 'реторомански';
$string['language.ro'] = 'румънски';
$string['language.ru'] = 'руски';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'сардински';
$string['language.se'] = 'северносаамски';
$string['language.sk'] = 'словашки ';
$string['language.sl'] = 'словенски ';
$string['language.so'] = 'сомалийски';
$string['language.sq'] = 'албански';
$string['language.sr'] = 'сръбски';
$string['language.sv'] = 'шведски ';
$string['language.sw'] = 'суахили';
$string['language.tk'] = 'туркменски';
$string['language.tr'] = 'турски';
$string['language.ty'] = 'таитянски';
$string['language.uk'] = 'украински';
$string['language.ur'] = 'урду';
$string['language.uz'] = 'узбекски';
$string['language.vi'] = 'виетнамски';
$string['language.yi'] = 'идиш';
$string['language.zh'] = 'китайски';
$string['language.cu'] = 'черковнославянски';
$string['language.eo'] = 'есперанто';
$string['language.la'] = 'латински';
$string['language.oc'] = 'окситански';
$string['language.vo'] = 'волапюк';
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
$string['country.ad'] = 'Андора';
$string['country.ae'] = 'Обединени Aрабски Eмирства';
$string['country.af'] = 'Афганистан';
$string['country.ag'] = 'Антигуа и Барбуда';
$string['country.al'] = 'Албания';
$string['country.am'] = 'Армения';
$string['country.ao'] = 'Ангола';
$string['country.ar'] = 'Аржентина';
$string['country.at'] = 'Австрия';
$string['country.au'] = 'Австралия';
$string['country.az'] = 'Азербайджан';
$string['country.ba'] = 'Босна и Херцеговина';
$string['country.bb'] = 'Барбадос';
$string['country.bd'] = 'Бангладеш';
$string['country.be'] = 'Белгия';
$string['country.bf'] = 'Буркина Фасо';
$string['country.bg'] = 'България';
$string['country.bh'] = 'Бахрейн';
$string['country.bi'] = 'Бурунди';
$string['country.bj'] = 'Бенин';
$string['country.bn'] = 'Бруней';
$string['country.bo'] = 'Боливия';
$string['country.br'] = 'Бразилия';
$string['country.bs'] = 'Бахамски острови';
$string['country.bt'] = 'Бутан';
$string['country.bw'] = 'Ботсуана';
$string['country.by'] = 'Беларус';
$string['country.bz'] = 'Белиз';
$string['country.ca'] = 'Канада';
$string['country.cd'] = ' Конго, Демократична Република';
$string['country.cf'] = 'Централноафриканска Република';
$string['country.cg'] = 'Конго';
$string['country.ch'] = 'Швейцария';
$string['country.ci'] = 'Бряг на Слоновата кост';
$string['country.cl'] = 'Чили';
$string['country.cm'] = 'Камерун';
$string['country.cn'] = 'Китай';
$string['country.co'] = 'Колумбия';
$string['country.cr'] = 'Коста Рика';
$string['country.cu'] = 'Куба';
$string['country.cv'] = 'Кабо Верде';
$string['country.cy'] = 'Кипър';
$string['country.cz'] = 'Чешка Република';
$string['country.de'] = 'Германия';
$string['country.dj'] = 'Джибути';
$string['country.dk'] = 'Дания';
$string['country.dm'] = 'Доминика';
$string['country.do'] = 'Доминиканска Република';
$string['country.dz'] = 'Алжир';
$string['country.ec'] = 'Еквадор';
$string['country.ee'] = 'Естония';
$string['country.eg'] = 'Египет';
$string['country.er'] = 'Еритрея';
$string['country.es'] = 'Испания';
$string['country.et'] = 'Етиопия';
$string['country.fi'] = 'Финландия';
$string['country.fj'] = 'Фиджи';
$string['country.fm'] = 'Микронезия, Обединени щати';
$string['country.fr'] = 'Франция';
$string['country.ga'] = 'Габон';
$string['country.gb'] = 'Обединено кралство';
$string['country.gd'] = 'Гренада';
$string['country.ge'] = 'Грузия';
$string['country.gh'] = 'Гана';
$string['country.gl'] = 'Гренландия';
$string['country.gm'] = 'Гамбия';
$string['country.gn'] = 'Гвинея';
$string['country.gq'] = 'Екваториална Гвинея';
$string['country.gr'] = 'Гърция';
$string['country.gt'] = 'Гватемала';
$string['country.gw'] = 'Гвинея-Бисау';
$string['country.gy'] = 'Гвиана';
$string['country.hn'] = 'Хондурас';
$string['country.hr'] = 'Хърватска';
$string['country.ht'] = 'Хаити';
$string['country.hu'] = 'Унгария';
$string['country.id'] = 'Индонезия';
$string['country.ie'] = 'Ирландия';
$string['country.il'] = 'Израел';
$string['country.in'] = 'Индия';
$string['country.iq'] = 'Ирак';
$string['country.ir'] = 'Иран';
$string['country.is'] = 'Исландия';
$string['country.it'] = 'Италия';
$string['country.jm'] = 'Ямайка';
$string['country.jo'] = 'Йордания';
$string['country.jp'] = 'Япония';
$string['country.ke'] = 'Кения';
$string['country.kg'] = 'Киргизстан';
$string['country.kh'] = 'Камбоджа';
$string['country.ki'] = 'Кирибати';
$string['country.km'] = 'Комори';
$string['country.kn'] = 'Сейнт Китс и Невис';
$string['country.kp'] = 'Северна Корея';
$string['country.kr'] = 'Южна Корея';
$string['country.kw'] = 'Кувейт';
$string['country.kz'] = 'Казахстан';
$string['country.la'] = 'Народна Демократична Република Лаос';
$string['country.lb'] = 'Ливан';
$string['country.lc'] = 'Св. Лусия';
$string['country.li'] = 'Лихтенщайн';
$string['country.lk'] = 'Шри Ланка';
$string['country.lr'] = 'Либерия';
$string['country.ls'] = 'Лесото';
$string['country.lt'] = 'Литва';
$string['country.lu'] = 'Люксембург';
$string['country.lv'] = 'Латвия';
$string['country.ly'] = 'Либийска Арабска Джамахирия';
$string['country.ma'] = 'Мароко';
$string['country.mc'] = 'Монако';
$string['country.md'] = 'Молдова, Република';
$string['country.me'] = 'Черна гора';
$string['country.mg'] = 'Мадагаскар';
$string['country.mh'] = 'Маршалови острови';
$string['country.mk'] = 'бивша Югославска република Македония';
$string['country.ml'] = 'Мали';
$string['country.mm'] = 'Мианмар';
$string['country.mn'] = 'Монголия';
$string['country.mr'] = 'Мавритания';
$string['country.mt'] = 'Малта';
$string['country.mu'] = 'Мавриций';
$string['country.mv'] = 'Малдиви';
$string['country.mw'] = 'Малави';
$string['country.mx'] = 'Мексико';
$string['country.my'] = 'Малайзия';
$string['country.mz'] = 'Мозамбик';
$string['country.na'] = 'Намибия';
$string['country.ne'] = 'Нигер';
$string['country.ng'] = 'Нигерия';
$string['country.ni'] = 'Никарагуа';
$string['country.nl'] = 'Холандия';
$string['country.no'] = 'Норвегия';
$string['country.np'] = 'Непал';
$string['country.nr'] = 'Науру';
$string['country.nu'] = 'Ниуе';
$string['country.nz'] = 'Нова Зеландия';
$string['country.om'] = 'Оман';
$string['country.pa'] = 'Панама';
$string['country.pe'] = 'Перу';
$string['country.pg'] = 'Папуа Нова Гвинея';
$string['country.ph'] = 'Филипини';
$string['country.pk'] = 'Пакистан';
$string['country.pl'] = 'Полша';
$string['country.pr'] = 'Пуерто Рико';
$string['country.ps'] = 'Палестина, окупирана територия';
$string['country.pt'] = 'Португалия';
$string['country.pw'] = 'Палау';
$string['country.py'] = 'Парагвай';
$string['country.qa'] = 'Катар';
$string['country.ro'] = 'Румъния';
$string['country.rs'] = 'Сърбия';
$string['country.ru'] = 'Руска Федерация';
$string['country.rw'] = 'Руанда';
$string['country.sa'] = 'Саудитска Арабия';
$string['country.sb'] = 'Соломонови Острови';
$string['country.sc'] = 'Сейшелски острови';
$string['country.sd'] = 'Судан';
$string['country.se'] = 'Швеция';
$string['country.sg'] = 'Сингапур';
$string['country.si'] = 'Словения';
$string['country.sk'] = 'Словакия';
$string['country.sl'] = 'Сиера Леоне';
$string['country.sm'] = 'Сан Марино';
$string['country.sn'] = 'Сенегал';
$string['country.so'] = 'Сомалия';
$string['country.sr'] = 'Суринам';
$string['country.st'] = 'Сао Томе и Принсипи';
$string['country.sv'] = 'Ел Салвадор';
$string['country.sy'] = 'Сирийска Арабска Република';
$string['country.sz'] = 'Суазиленд';
$string['country.td'] = 'Чад';
$string['country.tg'] = 'Того';
$string['country.th'] = 'Тайланд';
$string['country.tj'] = 'Таджикистан';
$string['country.tl'] = 'Източен Тимор';
$string['country.tm'] = 'Туркменистан';
$string['country.tn'] = 'Тунис';
$string['country.to'] = 'Тонга';
$string['country.tr'] = 'Турция';
$string['country.tt'] = 'Тринидад и Тобаго';
$string['country.tv'] = 'Тувалу';
$string['country.tz'] = 'Танзания, Обединена република';
$string['country.ua'] = 'Украйна';
$string['country.ug'] = 'Уганда';
$string['country.us'] = 'Съединени щати';
$string['country.uy'] = 'Уругвай';
$string['country.uz'] = 'Узбекистан';
$string['country.va'] = 'Свещено море (Ватиканска държава)';
$string['country.vc'] = 'Св. Винсент и Гренадини';
$string['country.ve'] = 'Венецуела';
$string['country.vn'] = 'Виетнам';
$string['country.vu'] = 'Вануату';
$string['country.ws'] = 'Самоа';
$string['country.ye'] = 'Йемен';
$string['country.za'] = 'Южна Африка';
$string['country.zm'] = 'Замбия';
$string['country.zw'] = 'Зимбабве';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'андорец';
$string['nationality.ae'] = 'от Обединените арабски емирства';
$string['nationality.af'] = 'афганец';
$string['nationality.ag'] = 'от Антигуа и Барбуда';
$string['nationality.al'] = 'албанец';
$string['nationality.am'] = 'арменец';
$string['nationality.ao'] = 'анголец';
$string['nationality.ar'] = 'аржентинец';
$string['nationality.at'] = 'австриец';
$string['nationality.au'] = 'австралиец';
$string['nationality.az'] = 'азербайджанец';
$string['nationality.ba'] = 'от Босна и Херцеговина';
$string['nationality.bb'] = 'барбадосец';
$string['nationality.bd'] = 'бангладешец';
$string['nationality.be'] = 'белгиец';
$string['nationality.bf'] = 'от Буркина Фасо';
$string['nationality.bg'] = 'българин';
$string['nationality.bh'] = 'бахрейнец';
$string['nationality.bi'] = 'бурундиец';
$string['nationality.bj'] = 'бенинец';
$string['nationality.bn'] = 'брунеец';
$string['nationality.bo'] = 'боливиец';
$string['nationality.br'] = 'бразилец';
$string['nationality.bs'] = 'бахамец';
$string['nationality.bt'] = 'бутанец';
$string['nationality.bw'] = 'ботсуанец';
$string['nationality.by'] = 'беларусин';
$string['nationality.bz'] = 'белизец';
$string['nationality.ca'] = 'канадец';
$string['nationality.cd'] = 'от Демократична република Конго';
$string['nationality.cf'] = 'от Централната Африканска Република';
$string['nationality.cg'] = 'от Република Конго';
$string['nationality.ch'] = 'швейцарец';
$string['nationality.ci'] = 'котдивоарец';
$string['nationality.cl'] = 'чилиец';
$string['nationality.cm'] = 'камерунец';
$string['nationality.cn'] = 'китаец';
$string['nationality.co'] = 'колумбиец';
$string['nationality.cr'] = 'костариканец';
$string['nationality.cu'] = 'кубинец';
$string['nationality.cv'] = 'от Кабо Верде';
$string['nationality.cy'] = 'кипърец';
$string['nationality.cz'] = 'чех';
$string['nationality.de'] = 'немец';
$string['nationality.dj'] = 'джибутиец';
$string['nationality.dk'] = 'датчанин';
$string['nationality.dm'] = 'от Доминика';
$string['nationality.do'] = 'от Доминиканската република';
$string['nationality.dz'] = 'алжирец';
$string['nationality.ec'] = 'еквадорец';
$string['nationality.ee'] = 'естонец';
$string['nationality.eg'] = 'египтянин';
$string['nationality.er'] = 'eритреец';
$string['nationality.es'] = 'испанец';
$string['nationality.et'] = 'етиопец';
$string['nationality.fi'] = 'финландец';
$string['nationality.fj'] = 'фиджиец';
$string['nationality.fm'] = 'микронезиец';
$string['nationality.fr'] = 'французин';
$string['nationality.ga'] = 'габонец';
$string['nationality.gb'] = 'от Обединеното Кралство';
$string['nationality.gd'] = 'гренадец';
$string['nationality.ge'] = 'грузинец';
$string['nationality.gh'] = 'ганаец';
$string['nationality.gl'] = 'гренландец';
$string['nationality.gm'] = 'гамбиец';
$string['nationality.gn'] = 'гвинеец';
$string['nationality.gq'] = 'от Екваториална Гвинея';
$string['nationality.gr'] = 'грък';
$string['nationality.gt'] = 'гватемалец';
$string['nationality.gw'] = 'от Гвинея-Бисау';
$string['nationality.gy'] = 'гвианец';
$string['nationality.hn'] = 'хондурасец';
$string['nationality.hr'] = 'хърватин';
$string['nationality.ht'] = 'хаитянин';
$string['nationality.hu'] = 'унгарец';
$string['nationality.id'] = 'индонезиец';
$string['nationality.ie'] = 'ирландец';
$string['nationality.il'] = 'израелец';
$string['nationality.in'] = 'индиец';
$string['nationality.iq'] = 'иранец';
$string['nationality.ir'] = 'иракчанин';
$string['nationality.is'] = 'исландец';
$string['nationality.it'] = 'италианец';
$string['nationality.jm'] = 'ямаец';
$string['nationality.jo'] = 'йорданец';
$string['nationality.jp'] = 'японец';
$string['nationality.ke'] = 'кениец';
$string['nationality.kg'] = 'киргиз';
$string['nationality.kh'] = 'камбоджанец';
$string['nationality.ki'] = 'кирибатец';
$string['nationality.km'] = 'от Коморските острови';
$string['nationality.kn'] = 'от Сейнт Китс и Невис';
$string['nationality.kp'] = 'севернокореец';
$string['nationality.kr'] = 'южнокореец';
$string['nationality.kw'] = 'кувейтец';
$string['nationality.kz'] = 'казах';
$string['nationality.la'] = 'лаосец';
$string['nationality.lb'] = 'ливанец';
$string['nationality.lc'] = 'от Св. Лусия';
$string['nationality.li'] = 'лихтенщайнец';
$string['nationality.lk'] = 'шриланкиец';
$string['nationality.lr'] = 'либериец';
$string['nationality.ls'] = 'лесотец';
$string['nationality.lt'] = 'литовец';
$string['nationality.lu'] = 'люксембуржец';
$string['nationality.lv'] = 'латвиец';
$string['nationality.ly'] = 'либиец';
$string['nationality.ma'] = 'мароканец';
$string['nationality.mc'] = 'монакчанин';
$string['nationality.md'] = 'молдовец';
$string['nationality.me'] = 'черногорец';
$string['nationality.mg'] = 'мадагаскарец';
$string['nationality.mh'] = 'от Маршаловите острови';
$string['nationality.mk'] = 'македонец';
$string['nationality.ml'] = 'малиец';
$string['nationality.mm'] = 'бирманец';
$string['nationality.mn'] = 'монголец';
$string['nationality.mr'] = 'мавританец';
$string['nationality.mt'] = 'малтиец';
$string['nationality.mu'] = 'маврикиец';
$string['nationality.mv'] = 'малдивец';
$string['nationality.mw'] = 'малавиец';
$string['nationality.mx'] = 'мексиканец';
$string['nationality.my'] = 'малайзиец';
$string['nationality.mz'] = 'мозамбиканец';
$string['nationality.na'] = 'намибиец';
$string['nationality.ne'] = 'нигерец';
$string['nationality.ng'] = 'нигериец';
$string['nationality.ni'] = 'никарагуанец';
$string['nationality.nl'] = 'нидерландец';
$string['nationality.no'] = 'норвежец';
$string['nationality.np'] = 'непалец';
$string['nationality.nr'] = 'науруанец';
$string['nationality.nu'] = 'ниуеанец';
$string['nationality.nz'] = 'новозеландец';
$string['nationality.om'] = 'оманец';
$string['nationality.pa'] = 'панамец';
$string['nationality.pe'] = 'перуанец';
$string['nationality.pg'] = 'от Папуа - Нова Гвинея';
$string['nationality.ph'] = 'филипинец';
$string['nationality.pk'] = 'пакистанец';
$string['nationality.pl'] = 'поляк';
$string['nationality.pr'] = 'пуерториканец';
$string['nationality.ps'] = 'палестинец';
$string['nationality.pt'] = 'португалец';
$string['nationality.pw'] = 'палауец';
$string['nationality.py'] = 'парагваец';
$string['nationality.qa'] = 'катарец';
$string['nationality.ro'] = 'румънец';
$string['nationality.rs'] = 'сърбин';
$string['nationality.ru'] = 'руснак';
$string['nationality.rw'] = 'руандиец';
$string['nationality.sa'] = 'от Саудитска Арабия';
$string['nationality.sb'] = 'от Соломоновите острови';
$string['nationality.sc'] = 'от Сейшелските острови';
$string['nationality.sd'] = 'суданец';
$string['nationality.se'] = 'швед';
$string['nationality.sg'] = 'сингапурец';
$string['nationality.si'] = 'словенец';
$string['nationality.sk'] = 'словак';
$string['nationality.sl'] = 'от Сиера Леоне';
$string['nationality.sm'] = 'санмаринец';
$string['nationality.sn'] = 'сенегалец';
$string['nationality.so'] = 'сомалиец';
$string['nationality.sr'] = 'суринамец';
$string['nationality.st'] = 'от Сао Томе и Принсипи';
$string['nationality.sv'] = 'салвадорец';
$string['nationality.sy'] = 'сириец';
$string['nationality.sz'] = 'свазилендец';
$string['nationality.td'] = 'чадец';
$string['nationality.tg'] = 'тогоанец';
$string['nationality.th'] = 'тайландец';
$string['nationality.tj'] = 'таджик';
$string['nationality.tl'] = 'от Източен Тимор';
$string['nationality.tm'] = 'туркменец';
$string['nationality.tn'] = 'тунизиец';
$string['nationality.to'] = 'тонганец';
$string['nationality.tr'] = 'турчин';
$string['nationality.tt'] = 'от Тринидад и Тобаго';
$string['nationality.tv'] = 'тувалуанец';
$string['nationality.tz'] = 'танзаниец';
$string['nationality.ua'] = 'украинец';
$string['nationality.ug'] = 'угандец';
$string['nationality.us'] = 'американец';
$string['nationality.uy'] = 'уругваец';
$string['nationality.uz'] = 'узбек';
$string['nationality.va'] = 'от Ватикана';
$string['nationality.vc'] = 'от Св. Винсент и Гренадините';
$string['nationality.ve'] = 'венецуелец';
$string['nationality.vn'] = 'виетнамец';
$string['nationality.vu'] = 'ванаутец';
$string['nationality.ws'] = 'самоанец';
$string['nationality.ye'] = 'йеменец';
$string['nationality.za'] = 'южноафриканец';
$string['nationality.zm'] = 'замбиец';
$string['nationality.zw'] = 'зимбабвиец';

?>
