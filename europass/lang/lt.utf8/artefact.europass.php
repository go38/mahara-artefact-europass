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
$string['europassCV'] = 'Europass gyvenimo aprašymą (CV)';
$string['europassLP'] = 'Europass kalbų pasą';
$string['photograph'] = 'Nuotrauka';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/mmmm';
$string['internaldate-dmy12'] = 'dd.mm.mmmm';
$string['internaldate-dmy13'] = 'dd-mm-mmmm';
$string['internaldate-dmy21'] = 'dd/mm/mm';
$string['internaldate-dmy22'] = 'dd.mm.mm';
$string['internaldate-dmy23'] = 'dd-mm-mm';
$string['internaldate-mdy11'] = 'mm/dd/mmmm';
$string['internaldate-mdy12'] = 'mm.dd.mmmm';
$string['internaldate-mdy13'] = 'mm-dd-mmmm';
$string['internaldate-mdy21'] = 'mm/dd/mm';
$string['internaldate-mdy22'] = 'mm.dd.mm';
$string['internaldate-mdy23'] = 'mm-dd-mm';
$string['internaldate-ymd11'] = 'mmmm/mm/dd';
$string['internaldate-ymd12'] = 'mmmm.mm.dd';
$string['internaldate-ymd13'] = 'mmmm-mm-dd';
$string['internaldate-ymd21'] = 'mm/mm/dd';
$string['internaldate-ymd22'] = 'mm.mm.dd';
$string['internaldate-ymd23'] = 'mm-mm-dd';
$string['internaldate-yonly'] = 'mmmm';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/mmmm';
$string['externaldate-text-long'] = 'dd. mėnuo mmmm';
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
$string['identification'] = 'Asmeninė informacija';
$string['identification-birthdate'] = 'Gimimo data';
$string['identification-birthplace'] = 'Gimimo vieta';
$string['identification-lastname'] = 'Pavardė (-ės)';
$string['identification-firstname'] = 'Vardas (-ai)';
$string['identification-addressLine'] = 'Gatvė, namo numeris';
$string['identification-municipality'] = 'Miestas';
$string['identification-postalCode'] = 'Pašto indeksas';
$string['identification-country'] = 'Šalis';
$string['identification-contactinfo-telephone'] = 'Telefonas (-ai)';
$string['identification-contactinfo-mobile'] = 'Mobilusis telefonas';
$string['identification-contactinfo-fax'] = 'Faksas';
$string['identification-contactinfo-email'] = 'El. paštas (-ai)';
$string['identification-nationality'] = 'Pilietybė';
$string['identification-gender'] = 'Lytis';

// Europass CV - STEP 2
$string['application'] = 'Pageidaujamas darbas / profesinės veiklos sritis';

// Europass CV - STEP 3
$string['workexperience'] = 'Darbo patirtis';

// Europass CV - STEP 4
$string['education'] = 'Išsilavinimas';

// Europass CV - STEP 5
$string['mothertongue'] = 'Gimtoji kalba (-os)';
$string['otherlanguage'] = 'Kita kalba (-os)';

$string['language-foreign-listening'] = 'Klausymas';
$string['language-foreign-listening-th'] = 'Klausymas';
$string['language-foreign-reading'] = 'Skaitymas';
$string['language-foreign-reading-th'] = 'Skaitymas';
$string['language-foreign-spokeninteraction'] = 'Bendravimas žodžiu';
$string['language-foreign-spokeninteraction-th'] = 'Bendravimas<br>žodžiu';
$string['language-foreign-spokenproduction'] = 'Informacijos pateikimas žodžiu';
$string['language-foreign-spokenproduction-th'] = 'Informacijos<br>pateikimas žodžiu';
$string['language-foreign-writing'] = 'Rašymas';
$string['language-foreign-writing-th'] = 'Rašymas';
$string['language-foreign-CEF-level'] = 'Bendrieji Europos kalbų metmenys';

$string['language-foreign-level.A1'] = 'Pradedantis vartotojas (A1)';
$string['language-foreign-level.A2'] = 'Pradedantis vartotojas (A2)';
$string['language-foreign-level.B1'] = 'Pažengęs vartotojas (B1)';
$string['language-foreign-level.B2'] = 'Pažengęs vartotojas (B2)';
$string['language-foreign-level.C1'] = 'Įgudęs vartotojas (C1)';
$string['language-foreign-level.C2'] = 'Įgudęs vartotojas (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vairuotojo pažymėjimas(-ai)';
$string['skills-and-competences'] = 'Asmeniniai gebėjimai ir kompetencijos';
$string['socialskill'] = 'Socialiniai gebėjimai ir kompetencijos';
$string['organisationalskill'] = 'Organizaciniai gebėjimai ir kompetencijos';
$string['technicalskill'] = 'Techniniai gebėjimai ir kompetencijos';
$string['computerskill'] = 'Darbo kompiuteriu gebėjimai ir kompetencijos';
$string['artisticskill'] = 'Meniniai gebėjimai ir kompetencijos';
$string['otherskill'] = 'Kiti gebėjimai ir kompetencijos';
$string['additionalinfo'] = 'Papildoma informacija';
$string['annexes'] = 'Priedai';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplomai ar pažymėjimai';
$string['diploma-title'] = 'Pavadinimas';
$string['diploma-awardingBody'] = 'Išduodanti institucija';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Europos lygmuo';
$string['language-experiences'] = 'Bendravimo patirtis';
$string['experiences-period-from'] = 'Nuo';
$string['experiences-period-to'] = 'Iki';

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
$string['language.ab'] = 'Abchazų';
$string['language.af'] = 'Afrikanų';
$string['language.an'] = 'Aragoniečių';
$string['language.ar'] = 'Arabų';
$string['language.as'] = 'Asamų';
$string['language.az'] = 'Azerbaidžaniečių';
$string['language.be'] = 'Baltarusių';
$string['language.bg'] = 'Bulgarų';
$string['language.bn'] = 'Bengalų';
$string['language.bo'] = 'Tibetiečių';
$string['language.br'] = 'Bretonų';
$string['language.bs'] = 'Bosnių';
$string['language.ca'] = 'Katalonų / Valensijos';
$string['language.ce'] = 'Čečenų';
$string['language.co'] = 'Korsikiečių';
$string['language.cs'] = 'Čekų';
$string['language.cy'] = 'Velsiečių';
$string['language.da'] = 'Danų';
$string['language.de'] = 'Vokiečių';
$string['language.el'] = 'graikų';
$string['language.en'] = 'Anglų';
$string['language.es'] = 'Ispanų / Kastilų';
$string['language.et'] = 'Estų';
$string['language.eu'] = 'Baskų';
$string['language.fa'] = 'Persų';
$string['language.fi'] = 'Suomių';
$string['language.fj'] = 'Fidžių';
$string['language.fo'] = 'Farerų';
$string['language.fr'] = 'Prancūzų';
$string['language.fy'] = 'Vakarų fryzų';
$string['language.ga'] = 'Airių';
$string['language.gd'] = 'Gėlų / Škotijos gėlų';
$string['language.gl'] = 'Galisų';
$string['language.gv'] = 'Manksų';
$string['language.he'] = 'Hebrajų';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Kroatų';
$string['language.ht'] = 'Haitiečių; Haičio kreolų';
$string['language.hu'] = 'Vengrų';
$string['language.hy'] = 'Armėnų';
$string['language.id'] = 'Indoneziečių';
$string['language.is'] = 'Islandų';
$string['language.it'] = 'Italų';
$string['language.ja'] = 'Japonų';
$string['language.jv'] = 'Javiečių';
$string['language.ka'] = 'Gruzinų';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korėjiečių';
$string['language.ku'] = 'Kurdų';
$string['language.kw'] = 'Kornų';
$string['language.ky'] = 'Kirgizų';
$string['language.lb'] = 'Liuksemburgiečių';
$string['language.li'] = 'Limburgiečių';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lietuvių';
$string['language.lv'] = 'Latvių';
$string['language.mg'] = 'Malagasių';
$string['language.mk'] = 'Makedonų';
$string['language.mn'] = 'Mongolų';
$string['language.mo'] = 'Moldavų';
$string['language.ms'] = 'Malajų';
$string['language.mt'] = 'Maltiečių';
$string['language.my'] = 'Birmiečių';
$string['language.nb'] = 'Norvegų (standartinė kalba)';
$string['language.ne'] = 'Nepalų';
$string['language.nl'] = 'Olandų';
$string['language.nn'] = 'Norvegų (naujoji kalba)';
$string['language.no'] = 'Norvegų';
$string['language.pl'] = 'Lenkų';
$string['language.pt'] = 'Portugalų';
$string['language.rm'] = 'Retoromanų kalbos';
$string['language.ro'] = 'Rumunų';
$string['language.ru'] = 'Rusų';
$string['language.r0'] = 'Romų'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardinų';
$string['language.se'] = 'Šiaurės samių';
$string['language.sk'] = 'Slovakų';
$string['language.sl'] = 'Slovėnų';
$string['language.so'] = 'Somalių';
$string['language.sq'] = 'Albanų';
$string['language.sr'] = 'Serbų';
$string['language.sv'] = 'Švedų';
$string['language.sw'] = 'Svahilių';
$string['language.tk'] = 'Turkmėnų';
$string['language.tr'] = 'Turkų';
$string['language.ty'] = 'Taičio';
$string['language.uk'] = 'Ukrainiečių';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbekų';
$string['language.vi'] = 'Vietnamiečių';
$string['language.yi'] = 'Jidiš';
$string['language.zh'] = 'Kinų';
$string['language.cu'] = 'Bažnytinė slavų kalba';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Lotynų';
$string['language.oc'] = 'Oksitanų (po 1500 m.); provansalų';
$string['language.vo'] = 'Volapiukas';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afarų kalba';
$string['language.ae'] = 'Avestos kalba';
$string['language.ak'] = 'Akanų kalba';
$string['language.am'] = 'Amherų kalba';
$string['language.av'] = 'Avarų kalba';
$string['language.ay'] = 'Aimarų kalba';
$string['language.ba'] = 'Baškirų kalba';
$string['language.bh'] = 'Biharų kalba';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambarų kalba';
$string['language.ch'] = 'Čamorų kalba';
$string['language.cr'] = 'Kri kalba';
$string['language.cv'] = 'Čiuvašų kalba';
$string['language.dv'] = 'Maldyviečių kalba';
$string['language.dz'] = 'Botijų kalba';
$string['language.ee'] = 'Eve kalba';
$string['language.ff'] = 'Fulų kalba';
$string['language.gn'] = 'Gvaranių kalba';
$string['language.gu'] = 'Gudžaratų kalba';
$string['language.ha'] = 'Hausų kalba';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero kalba';
$string['language.ia'] = 'Interlingua';
$string['language.ig'] = 'Igbų kalba';
$string['language.ii'] = 'Ji kalba';
$string['language.ik'] = 'Inupiakų kalba';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitutas';
$string['language.ki'] = 'Kikujų kalba';
$string['language.kj'] = 'Kvanjama kalba';
$string['language.kk'] = 'Kazachų kalba';
$string['language.kl'] = 'Grenlandų kalba';
$string['language.km'] = 'Kmerų kalba';
$string['language.kn'] = 'Kanadų kalba';
$string['language.kr'] = 'Kanurių kalba';
$string['language.ks'] = 'Kašmyriečių kalba';
$string['language.kv'] = 'Komių kalba';
$string['language.lg'] = 'Lugandų kalba';
$string['language.lo'] = 'Lao kalba';
$string['language.lu'] = 'Lubų kalba';
$string['language.mh'] = 'Maršaliečių kalba';
$string['language.mi'] = 'Maorių kalba';
$string['language.ml'] = 'Malajalių kalba';
$string['language.mr'] = 'Maratų kalba';
$string['language.na'] = 'Nauriečių kalba';
$string['language.nd'] = 'Šiaurės ndebelų kalba';
$string['language.ng'] = 'Ndongų kalba';
$string['language.nr'] = 'Pietų ndebelų kalba';
$string['language.nv'] = 'Navachų kalba';
$string['language.ny'] = 'Čičevų kalba';
$string['language.oj'] = 'Odžibvių kalba';
$string['language.om'] = 'Oromų kalba';
$string['language.or'] = 'Orijų kalba';
$string['language.os'] = 'Osetinų kalba';
$string['language.pa'] = 'Pendžabų kalba';
$string['language.pi'] = 'Pali kalba';
$string['language.ps'] = 'Puštu-nų kalba';
$string['language.qu'] = 'Kečujų kalba';
$string['language.rn'] = 'Kirundžių kalba';
$string['language.rw'] = 'Kinjaruanda';
$string['language.sa'] = 'Sanskritas';
$string['language.sd'] = 'Sindžų kalba';
$string['language.sg'] = 'Sangų kalba';
$string['language.si'] = 'Sinhalų kalba';
$string['language.sm'] = 'Samoa kalba';
$string['language.sn'] = 'Šonų kalba';
$string['language.ss'] = 'Svazių kalba';
$string['language.st'] = 'Pietų sotų kalba';
$string['language.su'] = 'Sundų kalba';
$string['language.ta'] = 'Tamilų kalba';
$string['language.te'] = 'Telugų kalba';
$string['language.tg'] = 'Tadžikų kalba';
$string['language.th'] = 'Tajų kalba';
$string['language.ti'] = 'Tigrinijų kalba';
$string['language.tl'] = 'Tagalų kalba';
$string['language.tn'] = 'Tsvanų kalba';
$string['language.to'] = 'Tongos kalba';
$string['language.ts'] = 'Tsongų kalba';
$string['language.tt'] = 'Totorių kalba';
$string['language.tw'] = 'Tvi kalba';
$string['language.ug'] = 'Uigu-rų kalba';
$string['language.ve'] = 'Vendų kalba';
$string['language.wa'] = 'Valonų kalba';
$string['language.wo'] = 'Volofų kalba';
$string['language.xh'] = 'Kosų kalba';
$string['language.yo'] = 'Jorubų kalba';
$string['language.za'] = 'Džuangų kalba';
$string['language.zu'] = 'Zulų kalba';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Jungtiniai Arabų Emyratai';
$string['country.af'] = 'Afganistanas';
$string['country.ag'] = 'Antigva ir Barbuda';
$string['country.al'] = 'Albanijos Respublika';
$string['country.am'] = 'Armėnijos Respublika';
$string['country.ao'] = 'Angolos Respublika';
$string['country.ar'] = 'Argentinos Respublika';
$string['country.at'] = 'Austrijos Respublika';
$string['country.au'] = 'Australija';
$string['country.az'] = 'Azerbaidžano Respublika';
$string['country.ba'] = 'Bosnija ir Hercegovina';
$string['country.bb'] = 'Barbadosas';
$string['country.bd'] = 'Bangladešo Liaudies Respublika';
$string['country.be'] = 'Belgijos Karalystė';
$string['country.bf'] = 'Burkina Fasas';
$string['country.bg'] = 'Bulgarijos Respublika';
$string['country.bh'] = 'Bahreino Karalystė';
$string['country.bi'] = 'Burundžio Respublika';
$string['country.bj'] = 'Benino Respublika';
$string['country.bn'] = 'Brunėjus';
$string['country.bo'] = 'Bolivijos Respublika';
$string['country.br'] = 'Brazilijos Federacinė Respublika';
$string['country.bs'] = 'Bahamos';
$string['country.bt'] = 'Butano Karalystė';
$string['country.bw'] = 'Botsvanos Respublika';
$string['country.by'] = 'Baltarusijos Respublika';
$string['country.bz'] = 'Belizas';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Kongo Demokratinė Respublika';
$string['country.cf'] = 'Centrinė Afrikos Respublika';
$string['country.cg'] = 'Kongo Respublika';
$string['country.ch'] = 'Šveicarijos Konfederacija';
$string['country.ci'] = 'Dramblio Kaulo Kranto Respublika';
$string['country.cl'] = 'Čilės Respublika';
$string['country.cm'] = 'Kamerūno Respublika';
$string['country.cn'] = 'Kinijos Liaudies Respublika';
$string['country.co'] = 'Kolumbijos Respublika';
$string['country.cr'] = 'Kosta Rikos Respublika';
$string['country.cu'] = 'Kubos Respublika';
$string['country.cv'] = 'Žaliojo Kyšulio Respublika';
$string['country.cy'] = 'Kipro Respublika';
$string['country.cz'] = 'Čekijos Respublika';
$string['country.de'] = 'Vokietijos Federacinė Respublika';
$string['country.dj'] = 'Džibučio Respublika';
$string['country.dk'] = 'Danijos Karalystė';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikos Respublika';
$string['country.dz'] = 'Alžyro Liaudies Demokratinė Respublika';
$string['country.ec'] = 'Ekvadoro Respublika';
$string['country.ee'] = 'Estijos Respublika';
$string['country.eg'] = 'Egipto Arabų Respublika';
$string['country.er'] = 'Eritrėja';
$string['country.es'] = 'Ispanijos Karalystė';
$string['country.et'] = 'Etiopijos Federacinė Demokratinė Respublika';
$string['country.fi'] = 'Suomijos Respublika';
$string['country.fj'] = 'Fidžio salų Respublika';
$string['country.fm'] = 'Mikronezijos Federacinės Valstijos';
$string['country.fr'] = 'Prancūzijos Respublika';
$string['country.ga'] = 'Gabono Respublika';
$string['country.gb'] = 'Jungtinė Didžiosios Britanijos ir Šiaurės Airijos Karalystė';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzija';
$string['country.gh'] = 'Ganos Respublika';
$string['country.gl'] = 'Grenlandija';
$string['country.gm'] = 'Gambijos Respublika';
$string['country.gn'] = 'Gvinėjos Respublika';
$string['country.gq'] = 'Pusiaujo Gvinėjos Respublika';
$string['country.gr'] = 'Graikijos Respublika';
$string['country.gt'] = 'Gvatemalos Respublika';
$string['country.gw'] = 'Bisau Gvinėjos Respublika';
$string['country.gy'] = 'Gajanos Respublika';
$string['country.hn'] = 'Hondūro Respublika';
$string['country.hr'] = 'Kroatijos Respublika';
$string['country.ht'] = 'Haičio Respublika';
$string['country.hu'] = 'Vengrijos Respublika';
$string['country.id'] = 'Indonezijos Respublika';
$string['country.ie'] = 'Airija';
$string['country.il'] = 'Izraelio Valstybė';
$string['country.in'] = 'Indijos Respublika';
$string['country.iq'] = 'Irako Respublika';
$string['country.ir'] = 'Irano Islamo Respublika';
$string['country.is'] = 'Islandijos Respublika';
$string['country.it'] = 'Italijos Respublika';
$string['country.jm'] = 'Jamaika';
$string['country.jo'] = 'Jordanijos Hašimitų Karalystė';
$string['country.jp'] = 'Japonija';
$string['country.ke'] = 'Kenijos Respublika';
$string['country.kg'] = 'Kirgizijos Respublika';
$string['country.kh'] = 'Kambodžos Karalystė';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komorų Federacinė Islamo Respublika';
$string['country.kn'] = 'Sent Kitsas ir Nevis';
$string['country.kp'] = 'Korėjos Liaudies Demokratinė Respublika';
$string['country.kr'] = 'Korėjos Respublika';
$string['country.kw'] = 'Kuveito Valstybė';
$string['country.kz'] = 'Kazachstano Respublika';
$string['country.la'] = 'Laoso Liaudies Demokratinė Respublika';
$string['country.lb'] = 'Libano Respublika';
$string['country.lc'] = 'Sent Lusija';
$string['country.li'] = 'Lichtenšteino Kunigaikštystė';
$string['country.lk'] = 'Šri Lankos Demokratinė Socialistinė Respublika';
$string['country.lr'] = 'Liberijos Respublika';
$string['country.ls'] = 'Lesoto Karalystė';
$string['country.lt'] = 'Lietuvos Respublika';
$string['country.lu'] = 'Liuksemburgo Didžioji Hercogystė';
$string['country.lv'] = 'Latvijos Respublika';
$string['country.ly'] = 'Libijos Arabų Socialistinė Liaudies Džamahirija';
$string['country.ma'] = 'Maroko Karalystė';
$string['country.mc'] = 'Monako Kunigaikštystė';
$string['country.md'] = 'Moldovos Respublika';
$string['country.me'] = 'Juodkalnija';
$string['country.mg'] = 'Madagaskaro Demokratinė Respublika';
$string['country.mh'] = 'Maršalo salos';
$string['country.mk'] = 'Buvusioji Jugoslavijos Respublika Makedonija';
$string['country.ml'] = 'Malio Respublika';
$string['country.mm'] = 'Mianmaro Sąjunga';
$string['country.mn'] = 'Mongolija';
$string['country.mr'] = 'Mauritanijos Islamo Respublika';
$string['country.mt'] = 'Maltos Respublika';
$string['country.mu'] = 'Mauricijaus Respublika';
$string['country.mv'] = 'Maldyvai';
$string['country.mw'] = 'Malavio Respublika';
$string['country.mx'] = 'Meksikos Jungtinės Valstijos';
$string['country.my'] = 'Malaizija';
$string['country.mz'] = 'Mozambiko Respublika';
$string['country.na'] = 'Namibijos Respublika';
$string['country.ne'] = 'Nigerio Respublika';
$string['country.ng'] = 'Nigerijos Federacinė Respublika';
$string['country.ni'] = 'Nikaragvos Respublika';
$string['country.nl'] = 'Nyderlandų Karalystė';
$string['country.no'] = 'Norvegijos Karalystė';
$string['country.np'] = 'Nepalo Karalystė';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Naujoji Zelandija';
$string['country.om'] = 'Omano Sultonatas';
$string['country.pa'] = 'Panamos Respublika';
$string['country.pe'] = 'Peru Respublika';
$string['country.pg'] = 'Papua Naujoji Gvinėja';
$string['country.ph'] = 'Filipinų Respublika';
$string['country.pk'] = 'Pakistano Islamo Respublika';
$string['country.pl'] = 'Lenkijos Respublika';
$string['country.pr'] = 'Puerto Rikas';
$string['country.ps'] = 'Palestínske autonómne územia';
$string['country.pt'] = 'Portugalijos Respublika';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paragvajaus Respublika';
$string['country.qa'] = 'Kataro Valstybė';
$string['country.ro'] = 'Rumunija';
$string['country.rs'] = 'Serbija';
$string['country.ru'] = 'Rusijos Federacija';
$string['country.rw'] = 'Ruandos Respublika';
$string['country.sa'] = 'Saudo Arabijos Karalystė';
$string['country.sb'] = 'Saliamono salos';
$string['country.sc'] = 'Seišeliai';
$string['country.sd'] = 'Sudano Respublika';
$string['country.se'] = 'Švedijos Karalystė';
$string['country.sg'] = 'Singapūro Respublika';
$string['country.si'] = 'Slovėnijos Respublika';
$string['country.sk'] = 'Slovakijos Respublika';
$string['country.sl'] = 'Siera Leonės Respublika';
$string['country.sm'] = 'San Marinas';
$string['country.sn'] = 'Senegalo Respublika';
$string['country.so'] = 'Somalio Respublika';
$string['country.sr'] = 'Surinamas';
$string['country.st'] = 'San Tomė ir Prinsipė';
$string['country.sv'] = 'Salvadoro Respublika';
$string['country.sy'] = 'Sirijos Arabų Respublika';
$string['country.sz'] = 'Svazilendo Karalystė';
$string['country.td'] = 'Čado Respublika';
$string['country.tg'] = 'Togo Respublika';
$string['country.th'] = 'Tailando Karalystė';
$string['country.tj'] = 'Tadžikistano Respublika';
$string['country.tl'] = 'Rytų Timoro';
$string['country.tm'] = 'Turkmėnistanas';
$string['country.tn'] = 'Tuniso Respublika';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkijos Respublika';
$string['country.tt'] = 'Trinidado ir Tobago Respublika';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanijos Jungtinė Respublika';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Ugandos Respublika';
$string['country.us'] = 'Jungtinės Amerikos Valstijos';
$string['country.uy'] = 'Urugvajaus Rytų Respublika';
$string['country.uz'] = 'Uzbekistano Respublika';
$string['country.va'] = 'Šventasis Sostas, Vatikano miesto Valstybė';
$string['country.vc'] = 'Sent Vinsentas ir Grenadinai';
$string['country.ve'] = 'Venesuelos Bolivaro Respublika';
$string['country.vn'] = 'Vietnamo Socialistinė Respublika';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemeno Respublika';
$string['country.za'] = 'Pietų Afrikos Respublika';
$string['country.zm'] = 'Zambijos Respublika';
$string['country.zw'] = 'Zimbabvės Respublika';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andorietis, -ė';
$string['nationality.ae'] = 'Jungtinių Arabų Emyratų gyventojas, -a';
$string['nationality.af'] = 'afganas, -ė';
$string['nationality.ag'] = 'Antigva ir Barbadua gyventojas, -a';
$string['nationality.al'] = 'albanas, -ė';
$string['nationality.am'] = 'armėnas, -ė';
$string['nationality.ao'] = 'angolietis, -ė';
$string['nationality.ar'] = 'argentinietis, -ė';
$string['nationality.at'] = 'austras, -ė';
$string['nationality.au'] = 'australas, -ė';
$string['nationality.az'] = 'azerbaidžanietis, -ė';
$string['nationality.ba'] = 'bosnis, -ė';
$string['nationality.bb'] = 'barbadosietis, -ė';
$string['nationality.bd'] = 'bangladešietis, -ė';
$string['nationality.be'] = 'belgas, -ė';
$string['nationality.bf'] = 'Burkina Faso gyventojas, -a';
$string['nationality.bg'] = 'bulgaras, -ė';
$string['nationality.bh'] = 'bahreinietis, -ė';
$string['nationality.bi'] = 'burundietis, -ė';
$string['nationality.bj'] = 'beninietis, -ė';
$string['nationality.bn'] = 'brunėjietis, -ė';
$string['nationality.bo'] = 'bolivis, -ė/ bolivietis, -ė';
$string['nationality.br'] = 'brazilas, -ė';
$string['nationality.bs'] = 'bahamietis, -ė';
$string['nationality.bt'] = 'butanietis, -ė';
$string['nationality.bw'] = 'botsvanietis, -ė';
$string['nationality.by'] = 'baltarusis, -ė';
$string['nationality.bz'] = 'belizietis, -ė';
$string['nationality.ca'] = 'kanadietis, -ė';
$string['nationality.cd'] = 'kongietis, -ė';
$string['nationality.cf'] = 'Centrinės Afrikos Respublikos gyventojas, -a';
$string['nationality.cg'] = 'kongietis, -ė';
$string['nationality.ch'] = 'šveicaras, -ė';
$string['nationality.ci'] = 'Dramblio Kaulo Kranto gyventojas, -a';
$string['nationality.cl'] = 'čilietis, -ė';
$string['nationality.cm'] = 'kamerūnietis, -ė';
$string['nationality.cn'] = 'kinas, -ė';
$string['nationality.co'] = 'kolumbietis, -ė';
$string['nationality.cr'] = 'kostarikietis, -ė';
$string['nationality.cu'] = 'kubietis, -ė';
$string['nationality.cv'] = 'Žaliojo Kyšulio salų gyventojas, -a';
$string['nationality.cy'] = 'kiprietis, ė';
$string['nationality.cz'] = 'čekas, -ė';
$string['nationality.de'] = 'vokietis, -ė';
$string['nationality.dj'] = 'džibutietis, -ė';
$string['nationality.dk'] = 'danas, -ė';
$string['nationality.dm'] = 'dominikietis, -ė';
$string['nationality.do'] = 'dominikietis, -ė';
$string['nationality.dz'] = 'alžyrietis, -ė';
$string['nationality.ec'] = 'ekvadorietis, -ė';
$string['nationality.ee'] = 'estas, -ė';
$string['nationality.eg'] = 'egiptietis, -ė';
$string['nationality.er'] = 'eritrėjietis, -ė';
$string['nationality.es'] = 'ispanas, -ė';
$string['nationality.et'] = 'etiopas, -ė';
$string['nationality.fi'] = 'suomis, -ė';
$string['nationality.fj'] = 'fidžis, -ė';
$string['nationality.fm'] = 'mikronezietis, -ė';
$string['nationality.fr'] = 'prancūzas, -ė';
$string['nationality.ga'] = 'gabonietis, -ė';
$string['nationality.gb'] = 'britas, -ė';
$string['nationality.gd'] = 'grenadietis, -ė';
$string['nationality.ge'] = 'gruzinas, -ė';
$string['nationality.gh'] = 'ganietis, -ė';
$string['nationality.gl'] = 'grenlandas, -ė';
$string['nationality.gm'] = 'gambis, -ė/ gambietis, -ė';
$string['nationality.gn'] = 'Gvinėjos gyventojas, -a';
$string['nationality.gq'] = 'Pusiaujo Gvinėjos gyventojas, -a';
$string['nationality.gr'] = 'graikas, -ė';
$string['nationality.gt'] = 'gvatemalietis, -ė';
$string['nationality.gw'] = 'Bisau Gvinėjos gyventojas, -a';
$string['nationality.gy'] = 'gajanietis, -ė';
$string['nationality.hn'] = 'hondūrietis, -ė';
$string['nationality.hr'] = 'kroatas, -ė';
$string['nationality.ht'] = 'haitietis, -ė';
$string['nationality.hu'] = 'vengras, -ė';
$string['nationality.id'] = 'indonezietis, -ė';
$string['nationality.ie'] = 'airis, -ė';
$string['nationality.il'] = 'izraelietis, -ė';
$string['nationality.in'] = 'indas, -ė';
$string['nationality.iq'] = 'iranietis, -ė';
$string['nationality.ir'] = 'irakietis, -ė';
$string['nationality.is'] = 'islandas, -ė';
$string['nationality.it'] = 'italas, -ė';
$string['nationality.jm'] = 'jamaikietis, -ė';
$string['nationality.jo'] = 'jordanietis, -ė';
$string['nationality.jp'] = 'japonas, -ė';
$string['nationality.ke'] = 'kenis, -ė/ kenietis, -ė';
$string['nationality.kg'] = 'kirgizas, -ė';
$string['nationality.kh'] = 'kambodžietis, -ė';
$string['nationality.ki'] = 'kiribatietis, -ė';
$string['nationality.km'] = 'komorietis, -ė';
$string['nationality.kn'] = 'Sent Kitso ir Nevio gyventojas, -a';
$string['nationality.kp'] = 'Šiaurės Korėjos (Korėjos Liaudies Demokratinės Respublikos) gyventojas, -a';
$string['nationality.kr'] = 'Korėjos Respublikos gyventojas, -a';
$string['nationality.kw'] = 'kuveitietis, -ė';
$string['nationality.kz'] = 'kazachas, -ė';
$string['nationality.la'] = 'laosietis, -ė';
$string['nationality.lb'] = 'libanietis, -ė';
$string['nationality.lc'] = 'sentlusietis, -ė';
$string['nationality.li'] = 'lichtenšteinietis, -ė';
$string['nationality.lk'] = 'šrilankietis, -ė';
$string['nationality.lr'] = 'liberietis, -ė';
$string['nationality.ls'] = 'lesotietis, -ė';
$string['nationality.lt'] = 'lietuvis, -ė';
$string['nationality.lu'] = 'liuksemburgietis, -ė';
$string['nationality.lv'] = 'latvis, -ė';
$string['nationality.ly'] = 'libis, -ė';
$string['nationality.ma'] = 'marokietis, -ė';
$string['nationality.mc'] = 'monakietis, -ė';
$string['nationality.md'] = 'moldavas, -ė';
$string['nationality.me'] = 'juodkalnietis, -ė';
$string['nationality.mg'] = 'malagasis, -ė';
$string['nationality.mh'] = 'Maršalo salų gyventojas, -a';
$string['nationality.mk'] = 'Buvusioji Jugoslavijos Respublika Makedonija, -a';
$string['nationality.ml'] = 'malis, -ė / malietis, -ė';
$string['nationality.mm'] = 'birmietis, -ė';
$string['nationality.mn'] = 'mongolas, -ė';
$string['nationality.mr'] = 'mauritanietis, -ė';
$string['nationality.mt'] = 'maltietis, -ė';
$string['nationality.mu'] = 'mauricijietis, -ė';
$string['nationality.mv'] = 'maldyvas, -ė';
$string['nationality.mw'] = 'malavis, -ė/ malavietis, -ė';
$string['nationality.mx'] = 'meksikietis, -ė';
$string['nationality.my'] = 'malajietis, -ė/ malajas, -ė';
$string['nationality.mz'] = 'mozambikietis, -ė';
$string['nationality.na'] = 'namibis, -ė/ namibietis, -ė';
$string['nationality.ne'] = 'nigerietis, -ė (Nigeris)';
$string['nationality.ng'] = 'nigerietis, -ė (Nigerija)';
$string['nationality.ni'] = 'nikaragvietis, -ė';
$string['nationality.nl'] = 'olandas, -ė';
$string['nationality.no'] = 'norvegas, -ė';
$string['nationality.np'] = 'nepalas, -ė';
$string['nationality.nr'] = 'naurujietis, -ė';
$string['nationality.nu'] = 'Niue gyventojas, -a';
$string['nationality.nz'] = 'naujazekandietis, -ė';
$string['nationality.om'] = 'omanietis, -ė';
$string['nationality.pa'] = 'panamietis, -ė';
$string['nationality.pe'] = 'perujietis, -ė';
$string['nationality.pg'] = 'Papua Naujosios Gvinėjos gyventojas, -a';
$string['nationality.ph'] = 'filipinietis, -ė';
$string['nationality.pk'] = 'pakistanietis, -ė';
$string['nationality.pl'] = 'lenkas, -ė';
$string['nationality.pr'] = 'puertorikietis, -ė';
$string['nationality.ps'] = 'Palestínske autonómne územia, -a';
$string['nationality.pt'] = 'portugalas, -ė';
$string['nationality.pw'] = 'palaujietis, -ė';
$string['nationality.py'] = 'paragvajietis, -ė';
$string['nationality.qa'] = 'katarietis, -ė';
$string['nationality.ro'] = 'rumunas, -ė';
$string['nationality.rs'] = 'serbas, -ė';
$string['nationality.ru'] = 'rusas, -ė';
$string['nationality.rw'] = 'ruandietis, -ė';
$string['nationality.sa'] = 'Saudo Arabijos gyventojas, -a';
$string['nationality.sb'] = 'Saliamono salų gyventojas, -a';
$string['nationality.sc'] = 'seišelietis, -ė';
$string['nationality.sd'] = 'sudanietis, -ė';
$string['nationality.se'] = 'švedas, -ė';
$string['nationality.sg'] = 'singapūrietis, -ė';
$string['nationality.si'] = 'slovėnas, -ė';
$string['nationality.sk'] = 'slovakas, -ė';
$string['nationality.sl'] = 'Siera Leonės gyventojas, -a';
$string['nationality.sm'] = 'sanmarinietis, -ė';
$string['nationality.sn'] = 'senegalietis, -ė';
$string['nationality.so'] = 'somalis, -ė';
$string['nationality.sr'] = 'surinamietis, -ė';
$string['nationality.st'] = 'San Tomės ir Prinsipės gyventojas, -a';
$string['nationality.sv'] = 'salvadorietis, -ė';
$string['nationality.sy'] = 'siras, -ė';
$string['nationality.sz'] = 'svazis, -ė';
$string['nationality.td'] = 'čadietis, -ė';
$string['nationality.tg'] = 'togietis, -ė';
$string['nationality.th'] = 'tailandietis, -ė';
$string['nationality.tj'] = 'tadžikas, -ė';
$string['nationality.tl'] = 'Rytų Timoro gyventojas, -a';
$string['nationality.tm'] = 'turkmėnas, -ė';
$string['nationality.tn'] = 'tunisietis, -ė';
$string['nationality.to'] = 'tongietis, -ė';
$string['nationality.tr'] = 'turkas, -ė';
$string['nationality.tt'] = 'Trinidado ir Tobago gyventojas, -a';
$string['nationality.tv'] = 'tuvalujietis, -ė';
$string['nationality.tz'] = 'tanzanis, -ė / tanzanietis, -ė';
$string['nationality.ua'] = 'ukrainietis, -ė';
$string['nationality.ug'] = 'ugandietis, -ė';
$string['nationality.us'] = 'amerikietis, -ė';
$string['nationality.uy'] = 'urugvajietis, -ė';
$string['nationality.uz'] = 'uzbekas, -ė';
$string['nationality.va'] = 'Vatikano gyventojas, -a';
$string['nationality.vc'] = 'Sent Vinsento ir Grenadinų gyventojas, -a';
$string['nationality.ve'] = 'venesuelietis, -ė';
$string['nationality.vn'] = 'vietnamietis, -ė';
$string['nationality.vu'] = 'vanuatujietis, -ė/ vanuatietis, -ė';
$string['nationality.ws'] = 'samojietis, -ė';
$string['nationality.ye'] = 'jemenietis, -ė';
$string['nationality.za'] = 'Pietų Afrikos Respublikos gyventojas, -a';
$string['nationality.zm'] = 'zambis, -ė/ zambietis, -ė';
$string['nationality.zw'] = 'zimbabvietis, -ė';

?>
