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
$string['europassCV'] = 'Curriculum Vitae Europass (CV)';
$string['europassLP'] = 'Paşaportul Lingvistic Europass';
$string['photograph'] = 'Fotografia';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'zz/ll/aaaa';
$string['internaldate-dmy12'] = 'zz.ll.aaaa';
$string['internaldate-dmy13'] = 'zz-ll-aaaa';
$string['internaldate-dmy21'] = 'zz/ll/aa';
$string['internaldate-dmy22'] = 'zz.ll.aa';
$string['internaldate-dmy23'] = 'zz-ll-aa';
$string['internaldate-mdy11'] = 'll/zz/aaaa';
$string['internaldate-mdy12'] = 'll.zz.aaaa';
$string['internaldate-mdy13'] = 'll-zz-aaaa';
$string['internaldate-mdy21'] = 'll/zz/aa';
$string['internaldate-mdy22'] = 'll.zz.aa';
$string['internaldate-mdy23'] = 'll-zz-aa';
$string['internaldate-ymd11'] = 'aaaa/ll/zz';
$string['internaldate-ymd12'] = 'aaaa.ll.zz';
$string['internaldate-ymd13'] = 'aaaa-ll-zz';
$string['internaldate-ymd21'] = 'aa/ll/zz';
$string['internaldate-ymd22'] = 'aa.ll.zz';
$string['internaldate-ymd23'] = 'aa-ll-zz';
$string['internaldate-yonly'] = 'aaaa';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'zz/ll/aaaa';
$string['externaldate-text-long'] = 'zz. lună aaaa';
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
$string['identification'] = 'Informaţii personale';
$string['identification-birthdate'] = 'Data naşterii';
$string['identification-birthplace'] = 'Locul naşterii';
$string['identification-lastname'] = 'Nume';
$string['identification-firstname'] = 'Prenume';
$string['identification-addressLine'] = 'Strada / Numărul';
$string['identification-municipality'] = 'Orasul';
$string['identification-postalCode'] = 'Codul poştal';
$string['identification-country'] = 'Ţara';
$string['identification-contactinfo-telephone'] = 'Telefon(oane)';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(uri)';
$string['identification-nationality'] = 'Naţionalitate';
$string['identification-gender'] = 'Sex';

// Europass CV - STEP 2
$string['application'] = 'Loc de muncă vizat / Domeniu ocupaţional';

// Europass CV - STEP 3
$string['workexperience'] = 'Experienţa profesională';

// Europass CV - STEP 4
$string['education'] = 'Educaţie şi formare profesională';

// Europass CV - STEP 5
$string['mothertongue'] = 'Limba(i) maternă(e)';
$string['otherlanguage'] = 'Limba(i) străină(e) cunoscută(e)';

$string['language-foreign-listening'] = 'Ascultare';
$string['language-foreign-listening-th'] = 'Ascultare';
$string['language-foreign-reading'] = 'Citire';
$string['language-foreign-reading-th'] = 'Citire';
$string['language-foreign-spokeninteraction'] = 'Participare la conversaţie';
$string['language-foreign-spokeninteraction-th'] = 'Participare<br>la conversaţie';
$string['language-foreign-spokenproduction'] = 'Discurs oral';
$string['language-foreign-spokenproduction-th'] = 'Discurs<br>oral';
$string['language-foreign-writing'] = 'Scriere';
$string['language-foreign-writing-th'] = 'Scriere';
$string['language-foreign-CEF-level'] = 'Cadrului european comun de referinţă pentru limbi';

$string['language-foreign-level.A1'] = 'Utilizator elementar (A1)';
$string['language-foreign-level.A2'] = 'Utilizator elementar (A2)';
$string['language-foreign-level.B1'] = 'Utilizator independent (B1)';
$string['language-foreign-level.B2'] = 'Utilizator independent (B2)';
$string['language-foreign-level.C1'] = 'Utilizator experimentat (C1)';
$string['language-foreign-level.C2'] = 'Utilizator experimentat (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Permis(e) de conducere';
$string['skills-and-competences'] = 'Aptitudini şi competenţe personale';
$string['socialskill'] = 'Competenţe şi abilităţi sociale';
$string['organisationalskill'] = 'Competenţe şi aptitudini organizatorice';
$string['technicalskill'] = 'Competenţe şi aptitudini tehnice';
$string['computerskill'] = 'Competenţe şi cunostinţe de utilizare a calculatorului';
$string['artisticskill'] = 'Competenţe şi aptitudini artistice';
$string['otherskill'] = 'Alte competenţe şi aptitudini';
$string['additionalinfo'] = 'Informaţii suplimentare';
$string['annexes'] = 'Anexe';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(-ele) sau certificatul(-ele)';
$string['diploma-title'] = 'Titlu';
$string['diploma-awardingBody'] = 'Instituţia emitentă';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Nivelul european';
$string['language-experiences'] = 'Experienţa(-ele) lingvistică(-e)';
$string['experiences-period-from'] = 'Din';
$string['experiences-period-to'] = 'Până în';

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
$string['language.ab'] = 'Abhaziană';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragoneză';
$string['language.ar'] = 'Arabă';
$string['language.as'] = 'Asameză';
$string['language.az'] = 'Azerbaijană';
$string['language.be'] = 'Bielorusă';
$string['language.bg'] = 'Bulgară';
$string['language.bn'] = 'Bengaleză';
$string['language.bo'] = 'Tibetană';
$string['language.br'] = 'Bretonă';
$string['language.bs'] = 'Bosniacă';
$string['language.ca'] = 'Catalană';
$string['language.ce'] = 'Cecenă';
$string['language.co'] = 'Corsicană';
$string['language.cs'] = 'Cehă';
$string['language.cy'] = 'Galeză / Velşă';
$string['language.da'] = 'Daneză';
$string['language.de'] = 'Germană';
$string['language.el'] = 'Greacă';
$string['language.en'] = 'Engleză';
$string['language.es'] = 'Spaniolă / Castiliană';
$string['language.et'] = 'Estoniană';
$string['language.eu'] = 'Bască';
$string['language.fa'] = 'Persană';
$string['language.fi'] = 'Finlandeză';
$string['language.fj'] = 'Fiji';
$string['language.fo'] = 'Feroeză / Faroeză';
$string['language.fr'] = 'Franceză';
$string['language.fy'] = 'Frisiană';
$string['language.ga'] = 'Irlandeză';
$string['language.gd'] = 'Gaelica Scoţiană';
$string['language.gl'] = 'Galică';
$string['language.gv'] = 'Limba manx';
$string['language.he'] = 'Ebraică';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croată';
$string['language.ht'] = 'Haitiană';
$string['language.hu'] = 'Maghiară';
$string['language.hy'] = 'Armeană';
$string['language.id'] = 'Indoneziană';
$string['language.is'] = 'Islandeză';
$string['language.it'] = 'Italiană';
$string['language.ja'] = 'Japoneză';
$string['language.jv'] = 'Javaneză';
$string['language.ka'] = 'Georgiană';
$string['language.kg'] = 'Congoleză';
$string['language.ko'] = 'Coreană';
$string['language.ku'] = 'Kurdă';
$string['language.kw'] = 'Cornică';
$string['language.ky'] = 'Chirghiză';
$string['language.lb'] = 'Luxemburgheză';
$string['language.li'] = 'Limburgheză';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lituaniană';
$string['language.lv'] = 'Letonă';
$string['language.mg'] = 'Malgaşă';
$string['language.mk'] = 'Macedoneană';
$string['language.mn'] = 'Mongoleză';
$string['language.mo'] = 'Moldovenească';
$string['language.ms'] = 'Malaeziană';
$string['language.mt'] = 'Malteză';
$string['language.my'] = 'Birmaneză';
$string['language.nb'] = 'Norvegiană';
$string['language.ne'] = 'Nepaleză';
$string['language.nl'] = 'Olandeză';
$string['language.nn'] = 'norveški (nynorsk)';
$string['language.no'] = 'Norvegiană';
$string['language.pl'] = 'Polonă';
$string['language.pt'] = 'Portugheză';
$string['language.rm'] = 'Reto-Română';
$string['language.ro'] = 'Română';
$string['language.ru'] = 'Rusă';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardiniană';
$string['language.se'] = 'Sami';
$string['language.sk'] = 'Slovacă';
$string['language.sl'] = 'Slovenă';
$string['language.so'] = 'Somaleză';
$string['language.sq'] = 'Albaneză';
$string['language.sr'] = 'Sârbă';
$string['language.sv'] = 'Suedeză';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turmenă';
$string['language.tr'] = 'Turcă';
$string['language.ty'] = 'Tahitiană';
$string['language.uk'] = 'Ucrainiană';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbecă';
$string['language.vi'] = 'Vietnameză';
$string['language.yi'] = 'Idiş';
$string['language.zh'] = 'Chineză';
$string['language.cu'] = 'Slavă bisericească';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latină';
$string['language.oc'] = 'Occitană';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestană';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharică';
$string['language.av'] = 'Avară';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Başkiră';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Ciuvaşă';
$string['language.dv'] = 'Divehi, Dhivehi, Maldivian';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fula';
$string['language.gn'] = 'Guaraní';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Yi, Nuosu';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu, Gikuyu';
$string['language.kj'] = 'Kwanyama, Kuanyama';
$string['language.kk'] = 'Cazacă';
$string['language.kl'] = 'Kalaallisut, Greenlandic';
$string['language.km'] = 'Central Khmeră';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'Māori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'North Ndebele';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'South Ndebele';
$string['language.nv'] = 'Navajo, Navaho';
$string['language.ny'] = 'Chichewa, Chewa, Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetian, Ossetic';
$string['language.pa'] = 'Panjabi, Punjabi';
$string['language.pi'] = 'Pāli';
$string['language.ps'] = 'Paştu, Pushto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhala, Sinhalese';
$string['language.sm'] = 'Samoan';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Southern Sotho';
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
$string['language.ug'] = 'Uighur, Uyghur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang, Chuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Emiratele Arabe Unite';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua şi Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaidjan';
$string['country.ba'] = 'Bosnia şi Herţegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgia';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrein';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brazilia';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Buthan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Republica Democrată Congo';
$string['country.cf'] = 'Republica Centrafricană';
$string['country.cg'] = 'Republica Congo';
$string['country.ch'] = 'Elveţia';
$string['country.ci'] = 'Côte d\'Ivoire';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Camerun';
$string['country.cn'] = 'China';
$string['country.co'] = 'Columbia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Capul Verde';
$string['country.cy'] = 'Cipru';
$string['country.cz'] = 'Republica Cehă';
$string['country.de'] = 'Germania';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danemarca';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Republica Dominicană';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egipt';
$string['country.er'] = 'Eritreea';
$string['country.es'] = 'Spania';
$string['country.et'] = 'Etiopia';
$string['country.fi'] = 'Finlanda';
$string['country.fj'] = 'Fidji';
$string['country.fm'] = 'Micronezia';
$string['country.fr'] = 'Franţa';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Regatul Unit';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Groenlanda';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guineea';
$string['country.gq'] = 'Guineea Ecuatorială';
$string['country.gr'] = 'Grecia';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guineea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croaţia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungaria';
$string['country.id'] = 'Indonezia';
$string['country.ie'] = 'Irlanda';
$string['country.il'] = 'Israel';
$string['country.in'] = 'India';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islanda';
$string['country.it'] = 'Italia';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Iordania';
$string['country.jp'] = 'Japonia';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kîrgîzstan';
$string['country.kh'] = 'Cambodgia';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comore';
$string['country.kn'] = 'Sfântul Kitts şi Nevis';
$string['country.kp'] = 'Coreea de Nord';
$string['country.kr'] = 'Coreea de Sud';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazahstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Liban';
$string['country.lc'] = 'Sfânta Lucia';
$string['country.li'] = 'Liechtenstaein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lituania';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Letonia';
$string['country.ly'] = 'Libia';
$string['country.ma'] = 'Maroc';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Muntenegru';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Insulele Marshall';
$string['country.mk'] = 'Fosta Republică Iugoslavă a Macedoniei';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldive';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexic';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mozambic';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Ţările de Jos';
$string['country.no'] = 'Norvegia';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Noua Zeelandă';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Noua Guinee';
$string['country.ph'] = 'Filipine';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polonia';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = '';
$string['country.pt'] = 'Portugalia';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Quatar';
$string['country.ro'] = 'România';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Rusia';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Arabia Saudită';
$string['country.sb'] = 'Solomon, Insulele';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Suedia';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovacia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'São Tomé şi Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Republica Arabă Siriană';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Ciad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailanda';
$string['country.tj'] = 'Tadjikistan';
$string['country.tl'] = 'Timorul de Est';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turcia';
$string['country.tt'] = 'Trinidad şi Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania, Republica Unită';
$string['country.ua'] = 'Ucraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Statele Unite ale Americii';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Vatican (Sfântul Scaun)';
$string['country.vc'] = 'Sfântul Vincenţiu şi Grenadine';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Africa de Sud';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andoreză';
$string['nationality.ae'] = 'saudită';
$string['nationality.af'] = 'afgană';
$string['nationality.ag'] = 'din Antigua şi Barbuda';
$string['nationality.al'] = 'albaneză';
$string['nationality.am'] = 'armeană';
$string['nationality.ao'] = 'angoleză';
$string['nationality.ar'] = 'argentiniană';
$string['nationality.at'] = 'austriacă';
$string['nationality.au'] = 'australiană';
$string['nationality.az'] = 'azerbaijană';
$string['nationality.ba'] = 'bosniacă';
$string['nationality.bb'] = 'din Barbados';
$string['nationality.bd'] = 'bengaleză';
$string['nationality.be'] = 'belgiană';
$string['nationality.bf'] = 'burkina';
$string['nationality.bg'] = 'bulgară';
$string['nationality.bh'] = 'din Brahain';
$string['nationality.bi'] = 'burundeză';
$string['nationality.bj'] = 'benineză';
$string['nationality.bn'] = 'din Brunei';
$string['nationality.bo'] = 'boliviană';
$string['nationality.br'] = 'braziliană';
$string['nationality.bs'] = 'din Bahamas';
$string['nationality.bt'] = 'butaneză';
$string['nationality.bw'] = 'botswaniană';
$string['nationality.by'] = 'bielorusă';
$string['nationality.bz'] = 'belineză';
$string['nationality.ca'] = 'canadiană';
$string['nationality.cd'] = 'congoleză';
$string['nationality.cf'] = 'centr-africană';
$string['nationality.cg'] = 'congoleză';
$string['nationality.ch'] = 'elveţiană';
$string['nationality.ci'] = 'ivoriană';
$string['nationality.cl'] = 'ciliană';
$string['nationality.cm'] = 'cameruneză';
$string['nationality.cn'] = 'chineză';
$string['nationality.co'] = 'columbiană';
$string['nationality.cr'] = 'costaricană';
$string['nationality.cu'] = 'cubaneză';
$string['nationality.cv'] = 'din Capul Verde';
$string['nationality.cy'] = 'cipriotă';
$string['nationality.cz'] = 'cehă';
$string['nationality.de'] = 'germană';
$string['nationality.dj'] = 'din Djibouti';
$string['nationality.dk'] = 'daneză';
$string['nationality.dm'] = 'dominicană';
$string['nationality.do'] = 'dominicană';
$string['nationality.dz'] = 'algeriană';
$string['nationality.ec'] = 'ecuadoriană';
$string['nationality.ee'] = 'estoniană';
$string['nationality.eg'] = 'egipteană';
$string['nationality.er'] = 'eritreană';
$string['nationality.es'] = 'spaniolă';
$string['nationality.et'] = 'etiopiană';
$string['nationality.fi'] = 'finlandeză';
$string['nationality.fj'] = 'fijiană';
$string['nationality.fm'] = 'din Micronesia';
$string['nationality.fr'] = 'franceză';
$string['nationality.ga'] = 'gaboneză';
$string['nationality.gb'] = 'britanică';
$string['nationality.gd'] = 'din Grenada';
$string['nationality.ge'] = 'georgiană';
$string['nationality.gh'] = 'ganeză';
$string['nationality.gl'] = 'din Groenlanda';
$string['nationality.gm'] = 'gambiană';
$string['nationality.gn'] = 'din Guineea';
$string['nationality.gq'] = 'din Guineea Ecuatorială';
$string['nationality.gr'] = 'greacă';
$string['nationality.gt'] = 'guatemaleză';
$string['nationality.gw'] = 'din Guineea Bissau';
$string['nationality.gy'] = 'din Guiana';
$string['nationality.hn'] = 'din Honduras';
$string['nationality.hr'] = 'croată';
$string['nationality.ht'] = 'haitiană';
$string['nationality.hu'] = 'maghiară / ungară';
$string['nationality.id'] = 'indoneziană';
$string['nationality.ie'] = 'irlandeză';
$string['nationality.il'] = 'israeliană';
$string['nationality.in'] = 'indiană';
$string['nationality.iq'] = 'iraniană';
$string['nationality.ir'] = 'irakiană';
$string['nationality.is'] = 'islandeză';
$string['nationality.it'] = 'italiană';
$string['nationality.jm'] = 'jamaicană';
$string['nationality.jo'] = 'iordaniană';
$string['nationality.jp'] = 'japoneză';
$string['nationality.ke'] = 'keniană';
$string['nationality.kg'] = 'kârgâză';
$string['nationality.kh'] = 'cambogiană';
$string['nationality.ki'] = 'din Kiribati';
$string['nationality.km'] = 'din Comore';
$string['nationality.kn'] = 'din Saint Kitts şi Nevis';
$string['nationality.kp'] = 'nord-coreană';
$string['nationality.kr'] = 'sud-coreană';
$string['nationality.kw'] = 'kuveitiană';
$string['nationality.kz'] = 'cazacă';
$string['nationality.la'] = 'din Laos';
$string['nationality.lb'] = 'libaneză';
$string['nationality.lc'] = 'din Santa Lucia';
$string['nationality.li'] = 'din Liechtehstein';
$string['nationality.lk'] = 'din Sri Lanka';
$string['nationality.lr'] = 'liberiană';
$string['nationality.ls'] = 'din Lesotho';
$string['nationality.lt'] = 'lituaniană';
$string['nationality.lu'] = 'luxemburgheză';
$string['nationality.lv'] = 'letonă';
$string['nationality.ly'] = 'libiană';
$string['nationality.ma'] = 'marocană';
$string['nationality.mc'] = 'monegască';
$string['nationality.md'] = 'moldoveană';
$string['nationality.me'] = 'muntenegreană';
$string['nationality.mg'] = 'malgaşă';
$string['nationality.mh'] = 'din Insulele Marshall';
$string['nationality.mk'] = 'macedoneană';
$string['nationality.ml'] = 'din Mali';
$string['nationality.mm'] = 'birmaneză';
$string['nationality.mn'] = 'mongoleză';
$string['nationality.mr'] = 'mauritană';
$string['nationality.mt'] = 'malteză';
$string['nationality.mu'] = 'din Mauriţia';
$string['nationality.mv'] = 'din Maldive';
$string['nationality.mw'] = 'din Malawi';
$string['nationality.mx'] = 'mexicană';
$string['nationality.my'] = 'malaeziană';
$string['nationality.mz'] = 'mozambicană';
$string['nationality.na'] = 'namibiană';
$string['nationality.ne'] = 'din Niger';
$string['nationality.ng'] = 'nigeriană';
$string['nationality.ni'] = 'nicaraguană';
$string['nationality.nl'] = 'olandeză';
$string['nationality.no'] = 'norvegiană';
$string['nationality.np'] = 'nepaleză';
$string['nationality.nr'] = 'din Nauruan';
$string['nationality.nu'] = 'din Niue';
$string['nationality.nz'] = 'neozeelandeză';
$string['nationality.om'] = 'din Oman';
$string['nationality.pa'] = 'panameză';
$string['nationality.pe'] = 'peruană';
$string['nationality.pg'] = 'din Papua Noua Guinee';
$string['nationality.ph'] = 'filipineză';
$string['nationality.pk'] = 'pakistaneză';
$string['nationality.pl'] = 'poloneză';
$string['nationality.pr'] = 'portoricană';
$string['nationality.ps'] = 'palestiniană';
$string['nationality.pt'] = 'portugheză';
$string['nationality.pw'] = 'din Palau';
$string['nationality.py'] = 'paraguayană';
$string['nationality.qa'] = 'din Qatar';
$string['nationality.ro'] = 'română';
$string['nationality.rs'] = 'sârbă';
$string['nationality.ru'] = 'rusă';
$string['nationality.rw'] = 'ruandeză';
$string['nationality.sa'] = 'din Arabia Saudită';
$string['nationality.sb'] = 'din Insulele Solomon';
$string['nationality.sc'] = 'din Insulele Seychelles';
$string['nationality.sd'] = 'sudaneză';
$string['nationality.se'] = 'suedeză';
$string['nationality.sg'] = 'singaporeză';
$string['nationality.si'] = 'slovenă';
$string['nationality.sk'] = 'slovacă';
$string['nationality.sl'] = 'din Sierra Leone';
$string['nationality.sm'] = 'din San Marino';
$string['nationality.sn'] = 'senegaleză';
$string['nationality.so'] = 'somaleză';
$string['nationality.sr'] = 'surinameză';
$string['nationality.st'] = 'din Sf. Tomas';
$string['nationality.sv'] = 'salvadoriană';
$string['nationality.sy'] = 'siriană';
$string['nationality.sz'] = 'din Swaziland';
$string['nationality.td'] = 'din Ciad';
$string['nationality.tg'] = 'togoleză';
$string['nationality.th'] = 'tailandeză';
$string['nationality.tj'] = 'tadjică';
$string['nationality.tl'] = 'din Timor';
$string['nationality.tm'] = 'turkmenă';
$string['nationality.tn'] = 'tunisiană';
$string['nationality.to'] = 'din Tonga';
$string['nationality.tr'] = 'turcă';
$string['nationality.tt'] = 'din Trinidad şi Tobagă';
$string['nationality.tv'] = 'din Tuvalu';
$string['nationality.tz'] = 'tanzaniană';
$string['nationality.ua'] = 'ucrainiană';
$string['nationality.ug'] = 'ugandeză';
$string['nationality.us'] = 'americană';
$string['nationality.uy'] = 'uruguaiană';
$string['nationality.uz'] = 'uzbecă';
$string['nationality.va'] = 'din Vatican';
$string['nationality.vc'] = 'din São Vicente';
$string['nationality.ve'] = 'venezueleană';
$string['nationality.vn'] = 'vietnameză';
$string['nationality.vu'] = 'din Vanuatu';
$string['nationality.ws'] = 'samoană';
$string['nationality.ye'] = 'yemenă';
$string['nationality.za'] = 'sud-africană';
$string['nationality.zm'] = 'zambiană';
$string['nationality.zw'] = 'zimbabuiană';

?>
