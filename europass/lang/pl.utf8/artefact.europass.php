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
$string['europassCV'] = 'Europass - Curriculum Vitae (CV)';
$string['europassLP'] = 'Europass - Paszport Językowy';
$string['photograph'] = 'Zdjęcie';
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
$string['externaldate-text-long'] = 'dd. miesiąc rrrr';
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
$string['identification'] = 'Dane osobowe';
$string['identification-birthdate'] = 'Data urodzenia';
$string['identification-birthplace'] = 'Miejsce urodzenia';
$string['identification-lastname'] = 'Nazwisko(a)';
$string['identification-firstname'] = 'Imię (imiona)';
$string['identification-addressLine'] = 'Ulica / Numer domu';
$string['identification-municipality'] = 'Miasto';
$string['identification-postalCode'] = 'Kod pocztowy';
$string['identification-country'] = 'Kraj';
$string['identification-contactinfo-telephone'] = 'Telefon(y)';
$string['identification-contactinfo-mobile'] = 'Tel. kom.';
$string['identification-contactinfo-fax'] = 'Faks';
$string['identification-contactinfo-email'] = 'E-mail(e)';
$string['identification-nationality'] = 'Obywatelstwo';
$string['identification-gender'] = 'Płeć';

// Europass CV - STEP 2
$string['application'] = 'Preferowane miejsce zatrudnienia / charakter pracy';

// Europass CV - STEP 3
$string['workexperience'] = 'Doświadczenie zawodowe';

// Europass CV - STEP 4
$string['education'] = 'Wykształcenie i odbyte szkolenia';

// Europass CV - STEP 5
$string['mothertongue'] = 'Język(i) ojczysty(e)';
$string['otherlanguage'] = 'Inne języki';

$string['language-foreign-listening'] = 'Słuchanie';
$string['language-foreign-listening-th'] = 'Słuchanie';
$string['language-foreign-reading'] = 'Czytanie';
$string['language-foreign-reading-th'] = 'Czytanie';
$string['language-foreign-spokeninteraction'] = 'Porozumiewanie się';
$string['language-foreign-spokeninteraction-th'] = 'Porozumiewanie<br>się';
$string['language-foreign-spokenproduction'] = 'Samodzielne wypowiadanie się';
$string['language-foreign-spokenproduction-th'] = 'Samodzielne<br>wypowiadanie się';
$string['language-foreign-writing'] = 'Pisanie';
$string['language-foreign-writing-th'] = 'Pisanie';
$string['language-foreign-CEF-level'] = 'Europejski system opisu kształcenia językowego';

$string['language-foreign-level.A1'] = 'Poziom podstawowy (A1)';
$string['language-foreign-level.A2'] = 'Poziom podstawowy (A2)';
$string['language-foreign-level.B1'] = 'Poziom samodzielności (B1)';
$string['language-foreign-level.B2'] = 'Poziom samodzielności (B2)';
$string['language-foreign-level.C1'] = 'Poziom biegłości (C1)';
$string['language-foreign-level.C2'] = 'Poziom biegłości (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Prawo jazdy';
$string['skills-and-competences'] = 'Umiejętności i kompetencje osobiste';
$string['socialskill'] = 'Umiejętności i kompetencje społeczne';
$string['organisationalskill'] = 'Umiejętności i kompetencje organizacyjne';
$string['technicalskill'] = 'Umiejętności i kompetencje techniczne';
$string['computerskill'] = 'Umiejętności i kompetencje w zakresie obsługi komputera';
$string['artisticskill'] = 'Umiejętności i kompetencje artystyczne';
$string['otherskill'] = 'Inne umiejętności i kompetencje';
$string['additionalinfo'] = 'Informacje dodatkowe';
$string['annexes'] = 'Załączniki';

// Europass LP - STEP 2
$string['language-certificates'] = 'Dyplomy, zaświadczenia lub certyfikaty';
$string['diploma-title'] = 'Nazwa dyplomu, zaświadczenia lub certyfikatu';
$string['diploma-awardingBody'] = 'Nazwa instytucji wydającej';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Poziom europejski';
$string['language-experiences'] = 'Doświadczenia językowe';
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
$string['language.ab'] = 'abchaski';
$string['language.af'] = 'afrikaans';
$string['language.an'] = 'aragoński';
$string['language.ar'] = 'arabski';
$string['language.as'] = 'asamski';
$string['language.az'] = 'azerbejdżański';
$string['language.be'] = 'białoruski';
$string['language.bg'] = 'bułgarski';
$string['language.bn'] = 'bengalski';
$string['language.bo'] = 'tybetański';
$string['language.br'] = 'bretoński';
$string['language.bs'] = 'bośniacki';
$string['language.ca'] = 'kataloński / walencjański';
$string['language.ce'] = 'czeczeński';
$string['language.co'] = 'korsykański';
$string['language.cs'] = 'czeski';
$string['language.cy'] = 'walijski';
$string['language.da'] = 'duński';
$string['language.de'] = 'niemiecki';
$string['language.el'] = 'grecki';
$string['language.en'] = 'angielski';
$string['language.es'] = 'hiszpański / kastylijski';
$string['language.et'] = 'estoński';
$string['language.eu'] = 'baskijski';
$string['language.fa'] = 'perski';
$string['language.fi'] = 'fiński';
$string['language.fj'] = 'fidżyjski';
$string['language.fo'] = 'farerski';
$string['language.fr'] = 'francuski';
$string['language.fy'] = 'zachodniofryzyjski';
$string['language.ga'] = 'irlandzki';
$string['language.gd'] = 'gaelicki / gaelski szkocki';
$string['language.gl'] = 'galisyjski';
$string['language.gv'] = 'manx';
$string['language.he'] = 'hebrajski';
$string['language.hi'] = 'hindi';
$string['language.hr'] = 'chorwacki';
$string['language.ht'] = 'haitański; kreolski haitański';
$string['language.hu'] = 'węgierski';
$string['language.hy'] = 'ormiański';
$string['language.id'] = 'indonezyjski';
$string['language.is'] = 'islandzki';
$string['language.it'] = 'włoski';
$string['language.ja'] = 'japoński';
$string['language.jv'] = 'jawajski';
$string['language.ka'] = 'gruziński';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'koreański';
$string['language.ku'] = 'kurdyjski';
$string['language.kw'] = 'kornijski';
$string['language.ky'] = 'kirgiski';
$string['language.lb'] = 'luksemburski';
$string['language.li'] = 'limburski';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litewski';
$string['language.lv'] = 'łotewski';
$string['language.mg'] = 'malgaski';
$string['language.mk'] = 'macedoński';
$string['language.mn'] = 'mongolski';
$string['language.mo'] = 'mołdawski';
$string['language.ms'] = 'malajski';
$string['language.mt'] = 'maltański';
$string['language.my'] = 'birmański';
$string['language.nb'] = 'norweski (bokmål)';
$string['language.ne'] = 'nepalski';
$string['language.nl'] = 'holenderski';
$string['language.nn'] = 'norweski (nynorsk)';
$string['language.no'] = 'norweski';
$string['language.pl'] = 'polski';
$string['language.pt'] = 'portugalski';
$string['language.rm'] = 'retoromański';
$string['language.ro'] = 'rumuński';
$string['language.ru'] = 'rosyjski';
$string['language.r0'] = 'romski (cygański)'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardyński';
$string['language.se'] = 'północny sami';
$string['language.sk'] = 'słowacki';
$string['language.sl'] = 'słoweński';
$string['language.so'] = 'somalijski';
$string['language.sq'] = 'albański';
$string['language.sr'] = 'serbski';
$string['language.sv'] = 'szwedzki';
$string['language.sw'] = 'suahili';
$string['language.tk'] = 'turkmeński';
$string['language.tr'] = 'turecki';
$string['language.ty'] = 'tahitański';
$string['language.uk'] = 'ukraiński';
$string['language.ur'] = 'urdu';
$string['language.uz'] = 'uzbecki';
$string['language.vi'] = 'wietnamski';
$string['language.yi'] = 'jidysz';
$string['language.zh'] = 'chiński';
$string['language.cu'] = 'cerkiewno-słowiański';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'łaciński';
$string['language.oc'] = 'oksytański (po 1500); prowansalski';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = '';
$string['language.ae'] = 'awestyjski';
$string['language.ak'] = '';
$string['language.am'] = 'amharski';
$string['language.av'] = 'awarski';
$string['language.ay'] = 'ajmara';
$string['language.ba'] = 'baszkirski';
$string['language.bh'] = '';
$string['language.bi'] = '';
$string['language.bm'] = '';
$string['language.ch'] = '';
$string['language.cr'] = '';
$string['language.cv'] = 'czuwaski';
$string['language.dv'] = 'malediwski';
$string['language.dz'] = '';
$string['language.ee'] = '';
$string['language.ff'] = '';
$string['language.gn'] = 'guarani';
$string['language.gu'] = 'gudźarati';
$string['language.ha'] = '';
$string['language.ho'] = '';
$string['language.hz'] = '';
$string['language.ia'] = 'interlingua';
$string['language.ig'] = '';
$string['language.ii'] = '';
$string['language.ik'] = '';
$string['language.io'] = 'ido';
$string['language.iu'] = 'inuktitut';
$string['language.ki'] = '';
$string['language.kj'] = '';
$string['language.kk'] = 'kazachski';
$string['language.kl'] = 'grenlandzki';
$string['language.km'] = 'khmerski';
$string['language.kn'] = 'kannada';
$string['language.kr'] = '';
$string['language.ks'] = 'kaszmirski';
$string['language.kv'] = '';
$string['language.lg'] = '';
$string['language.lo'] = 'laotański';
$string['language.lu'] = '';
$string['language.mh'] = '';
$string['language.mi'] = '';
$string['language.ml'] = 'malajalam';
$string['language.mr'] = 'marathi';
$string['language.na'] = 'nauruański';
$string['language.nd'] = '';
$string['language.ng'] = '';
$string['language.nr'] = '';
$string['language.nv'] = '';
$string['language.ny'] = '';
$string['language.oj'] = '';
$string['language.om'] = '';
$string['language.or'] = '';
$string['language.os'] = '';
$string['language.pa'] = '';
$string['language.pi'] = 'pali (palijski)';
$string['language.ps'] = 'paszto';
$string['language.qu'] = 'keczua';
$string['language.rn'] = '';
$string['language.rw'] = '';
$string['language.sa'] = '';
$string['language.sd'] = '';
$string['language.sg'] = '';
$string['language.si'] = 'syngaleski';
$string['language.sm'] = '';
$string['language.sn'] = '';
$string['language.ss'] = '';
$string['language.st'] = 'sesotho';
$string['language.su'] = '';
$string['language.ta'] = 'tamilski';
$string['language.te'] = '';
$string['language.tg'] = '';
$string['language.th'] = 'tajski ';
$string['language.ti'] = '';
$string['language.tl'] = '';
$string['language.tn'] = '';
$string['language.to'] = '';
$string['language.ts'] = '';
$string['language.tt'] = 'tatarski';
$string['language.tw'] = '';
$string['language.ug'] = '';
$string['language.ve'] = '';
$string['language.wa'] = 'waloński';
$string['language.wo'] = '';
$string['language.xh'] = '';
$string['language.yo'] = '';
$string['language.za'] = '';
$string['language.zu'] = '';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Zjednoczone Emiraty Arabskie';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua i Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentyna';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbejdzan';
$string['country.ba'] = 'Bosnia i Hercegowina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesz';
$string['country.be'] = 'Belgia';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrajn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Boliwia';
$string['country.br'] = 'Brazylia';
$string['country.bs'] = 'Bahamy';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Bialorus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratyczna Republika Konga';
$string['country.cf'] = 'Republika Srodkowoafrykanska';
$string['country.cg'] = 'Republika Konga';
$string['country.ch'] = 'Szwajcaria';
$string['country.ci'] = 'Wybrzeze Kosci Sloniowej';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Chiny';
$string['country.co'] = 'Kolumbia';
$string['country.cr'] = 'Kostaryka';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Republika Zielonego Przyladka';
$string['country.cy'] = 'Cypr';
$string['country.cz'] = 'Republika Czeska';
$string['country.de'] = 'Niemcy';
$string['country.dj'] = 'Dzibuti';
$string['country.dk'] = 'Dania';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Republika Dominikanska';
$string['country.dz'] = 'Algieria';
$string['country.ec'] = 'Ekwador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egipt';
$string['country.er'] = 'Erytrea';
$string['country.es'] = 'Hiszpania';
$string['country.et'] = 'Etiopia';
$string['country.fi'] = 'Finlandia';
$string['country.fj'] = 'Fidzi';
$string['country.fm'] = 'Mikronezja';
$string['country.fr'] = 'Francja';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Wielka Brytania';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzja';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grenlandia';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Gwinea';
$string['country.gq'] = 'Gwinea Równikowa';
$string['country.gr'] = 'Grecja';
$string['country.gt'] = 'Gwatemala';
$string['country.gw'] = 'Gwinea Bissau';
$string['country.gy'] = 'Gujana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Chorwacja';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Wegry';
$string['country.id'] = 'Indonezja';
$string['country.ie'] = 'Irlandia';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'Indie';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islandia';
$string['country.it'] = 'Wlochy';
$string['country.jm'] = 'Jamajka';
$string['country.jo'] = 'Jordania';
$string['country.jp'] = 'Japonia';
$string['country.ke'] = 'Kenia';
$string['country.kg'] = 'Kirgistan';
$string['country.kh'] = 'Kambodza';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komory';
$string['country.kn'] = 'Saint Kitts i Nevis';
$string['country.kp'] = 'Korea Północna';
$string['country.kr'] = 'Korea Południowa';
$string['country.kw'] = 'Kuwejt';
$string['country.kz'] = 'Kazachstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Liban';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litwa';
$string['country.lu'] = 'Luksemburg';
$string['country.lv'] = 'Lotwa';
$string['country.ly'] = 'Libia';
$string['country.ma'] = 'Maroko';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldawa';
$string['country.me'] = 'Czarnogóra';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Wyspy Marshalla';
$string['country.mk'] = 'Była Jugosłowiańska Republika Macedonii';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauretania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Malediwy';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Meksyk';
$string['country.my'] = 'Malezja';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nikaragua';
$string['country.nl'] = 'Holandia (Niderlandy)';
$string['country.no'] = 'Norwegia';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nowa Zelandia';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Nowa Gwinea';
$string['country.ph'] = 'Filipiny';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polska';
$string['country.pr'] = 'Portoryko';
$string['country.ps'] = '';
$string['country.pt'] = 'Portugalia';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paragwaj';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumunia';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Rosja';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Arabia Saudyjska';
$string['country.sb'] = 'Wyspy Salomona';
$string['country.sc'] = 'Seszele';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Szwecja';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slowenia';
$string['country.sk'] = 'Slowacja';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Wyspy Świętego Tomasza i Książęca';
$string['country.sv'] = 'Salwador';
$string['country.sy'] = 'Syria';
$string['country.sz'] = 'Suazi';
$string['country.td'] = 'Czad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tajlandia';
$string['country.tj'] = 'Tadzykistan';
$string['country.tl'] = 'Timor Wschodni';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunezja';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turcja';
$string['country.tt'] = 'Trynidad i Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Stany Zjednoczone';
$string['country.uy'] = 'Urugwaj';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Watykan';
$string['country.vc'] = 'Saint Vincent i Grenadyny';
$string['country.ve'] = 'Wenezuela';
$string['country.vn'] = 'Wietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Republika Poludniowej Afryki';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Zjednoczone Emiraty Arabskie';
$string['nationality.af'] = 'Afganistan';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albania';
$string['nationality.am'] = 'Armenia';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentyna';
$string['nationality.at'] = 'Austria';
$string['nationality.au'] = 'Australia';
$string['nationality.az'] = 'Azerbejdzan';
$string['nationality.ba'] = 'Bosnia i Hercegowina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladesz';
$string['nationality.be'] = 'Belgia';
$string['nationality.bf'] = 'Burkina Faso';
$string['nationality.bg'] = 'Bulgaria';
$string['nationality.bh'] = 'Bahrajn';
$string['nationality.bi'] = 'Burundi';
$string['nationality.bj'] = 'Benin';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Boliwia';
$string['nationality.br'] = 'Brazylia';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Bhutan';
$string['nationality.bw'] = 'Botswana';
$string['nationality.by'] = 'Bialorus';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanada';
$string['nationality.cd'] = 'Demokratyczna Republika Konga';
$string['nationality.cf'] = 'Republika Srodkowoafrykanska';
$string['nationality.cg'] = 'Kongo';
$string['nationality.ch'] = 'Szwajcaria';
$string['nationality.ci'] = 'Wybrzeze Kosci Sloniowej';
$string['nationality.cl'] = 'Chile';
$string['nationality.cm'] = 'Kamerun';
$string['nationality.cn'] = 'Chiny';
$string['nationality.co'] = 'Kolumbia';
$string['nationality.cr'] = 'Kostaryka';
$string['nationality.cu'] = 'Kuba';
$string['nationality.cv'] = 'Republika Zielonego Przyladka';
$string['nationality.cy'] = 'Cypr';
$string['nationality.cz'] = 'Czechy';
$string['nationality.de'] = 'Niemcy';
$string['nationality.dj'] = 'Dzibuti';
$string['nationality.dk'] = 'Dania';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Republika Dominikanska';
$string['nationality.dz'] = 'Algieria';
$string['nationality.ec'] = 'Ekwador';
$string['nationality.ee'] = 'Estonia';
$string['nationality.eg'] = 'Egipt';
$string['nationality.er'] = 'Erytrea';
$string['nationality.es'] = 'Hiszpania';
$string['nationality.et'] = 'Etiopia';
$string['nationality.fi'] = 'Finlandia';
$string['nationality.fj'] = 'Fidzi';
$string['nationality.fm'] = 'Mikronezja';
$string['nationality.fr'] = 'Francja';
$string['nationality.ga'] = 'Gabon';
$string['nationality.gb'] = 'Wielka Brytania';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Gruzja';
$string['nationality.gh'] = 'Ghana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gambia';
$string['nationality.gn'] = 'Gwinea';
$string['nationality.gq'] = 'Gwinea Równikowa';
$string['nationality.gr'] = 'Grecja';
$string['nationality.gt'] = 'Gwatemala';
$string['nationality.gw'] = 'Gwinea Bissau';
$string['nationality.gy'] = 'Gujana';
$string['nationality.hn'] = 'Honduras';
$string['nationality.hr'] = 'Chorwacja';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Wegry';
$string['nationality.id'] = 'Indonezja';
$string['nationality.ie'] = 'Irlandia';
$string['nationality.il'] = 'Izrael';
$string['nationality.in'] = 'Indie';
$string['nationality.iq'] = 'Irak';
$string['nationality.ir'] = 'Iran';
$string['nationality.is'] = 'Islandia';
$string['nationality.it'] = 'Wlochy';
$string['nationality.jm'] = 'Jamajka';
$string['nationality.jo'] = 'Jordania';
$string['nationality.jp'] = 'Japonia';
$string['nationality.ke'] = 'Kenia';
$string['nationality.kg'] = 'Kirgistan';
$string['nationality.kh'] = 'Kambodza';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Komory';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Koreanska Republika Ludowo-Demokratyczna';
$string['nationality.kr'] = 'Korea Poludniowa';
$string['nationality.kw'] = 'Kuwejt';
$string['nationality.kz'] = 'Kazachstan';
$string['nationality.la'] = 'Laos';
$string['nationality.lb'] = 'Liban';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Liechtenstein';
$string['nationality.lk'] = 'Sri Lanka';
$string['nationality.lr'] = 'Liberia';
$string['nationality.ls'] = 'Lesotho';
$string['nationality.lt'] = 'Litwa';
$string['nationality.lu'] = 'Luksemburg';
$string['nationality.lv'] = 'Lotwa';
$string['nationality.ly'] = 'Libia';
$string['nationality.ma'] = 'Maroko';
$string['nationality.mc'] = 'Monako';
$string['nationality.md'] = 'Moldawa';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagaskar';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'Była Jugosłowiańska Republika Macedonii';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Myanmar';
$string['nationality.mn'] = 'Mongolia';
$string['nationality.mr'] = 'Mauretania';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Mauritius';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malawi';
$string['nationality.mx'] = 'Meksyk';
$string['nationality.my'] = 'Malezja';
$string['nationality.mz'] = 'Mozambik';
$string['nationality.na'] = 'Namibia';
$string['nationality.ne'] = 'Niger';
$string['nationality.ng'] = 'Nigeria';
$string['nationality.ni'] = 'Nikaragua';
$string['nationality.nl'] = 'Holandia (Niderlandy)';
$string['nationality.no'] = 'Norwegia';
$string['nationality.np'] = 'Nepal';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Nowa Zelandia';
$string['nationality.om'] = 'Oman';
$string['nationality.pa'] = 'Panama';
$string['nationality.pe'] = 'Peru';
$string['nationality.pg'] = 'Papua-Nowa Gwinea';
$string['nationality.ph'] = 'Filipiny';
$string['nationality.pk'] = 'Pakistan';
$string['nationality.pl'] = 'Polska';
$string['nationality.pr'] = 'Portoryko';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugalia';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paragwaj';
$string['nationality.qa'] = 'Katar';
$string['nationality.ro'] = 'Rumunia';
$string['nationality.rs'] = 'Serbia i Czarnogóra';
$string['nationality.ru'] = 'Rosja';
$string['nationality.rw'] = 'Rwanda';
$string['nationality.sa'] = 'Arabia Saudyjska';
$string['nationality.sb'] = 'Wyspy Salomona';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Sudan';
$string['nationality.se'] = 'Szwecja';
$string['nationality.sg'] = 'Singapur';
$string['nationality.si'] = 'Slowenia';
$string['nationality.sk'] = 'Slowacja';
$string['nationality.sl'] = 'Sierra Leone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegal';
$string['nationality.so'] = 'Somalia';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'Salwador';
$string['nationality.sy'] = 'Syria';
$string['nationality.sz'] = 'Suazi';
$string['nationality.td'] = 'Czad';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Tajlandia';
$string['nationality.tj'] = 'Tadzykistan';
$string['nationality.tl'] = 'Timor Wschodni';
$string['nationality.tm'] = 'Turkmenistan';
$string['nationality.tn'] = 'Tunezja';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Turcja';
$string['nationality.tt'] = 'Trynidad i Tobago';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tanzania';
$string['nationality.ua'] = 'Ukraina';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Stany Zjednoczone';
$string['nationality.uy'] = 'Urugwaj';
$string['nationality.uz'] = 'Uzbekistan';
$string['nationality.va'] = 'Watykan';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Wenezuela';
$string['nationality.vn'] = 'Wietnam';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jemen';
$string['nationality.za'] = 'Republika Poludniowej Afryki';
$string['nationality.zm'] = 'Zambia';
$string['nationality.zw'] = 'Zimbabwe';

?>
