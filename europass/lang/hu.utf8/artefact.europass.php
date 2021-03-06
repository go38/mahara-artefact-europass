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
 * @translator Geza Gemes
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
$string['europassartefactsaved'] = 'Az Europass önéletrajz (CV) sikeresen mentve';
$string['europassexportgenerated'] = 'Kérem várjon míg az export létrehozása tart...';
$string['europassexportnoconncetion'] = 'Hiba történt a WSDL szerverhez való kapcsolódás közben. Kérem próbálja meg később újra.';
$string['europassexportservererror'] = 'Hiba lépett fel a WSDL szerveren. Kérem próbálja meg később újra.';
$string['europassextensionmissing'] = 'Sajnos Ön nem használhatja az Europass plugint, mivel az Ön PHP telepítéséből hiányoznak a szükséges bővítmények:';
$string['newerversionforcompatibility'] = 'A jobb teljesítmény és kompatibilitás érdekében frissítenie kell a Mahara verzióját 1.3.0-ra vagy újabbra.';

$string['languagesaved'] = 'Nyelv sikeresen mentve';
$string['languagesavefailed'] = 'Nem sikerült a nyelv mentése';
$string['languagedeleteconfirm'] = 'Biztosan törölni akarja ezt a nyelvet?';
$string['languagedeleted'] = 'Nyelv sikeresen törölve';

$string['moveup'] = 'Mozgatás feljebb';
$string['movedown'] = 'Mozgtás lejebb';

$string['languagediploma'] = 'Nyelvvizsga';
$string['languageexperience'] = 'Nyelvtapasztalat';
$string['languagediplomadeleteconfirm'] = 'Biztosan törölni akarja ezt a nyelvvizsgát?';
$string['languageexperiencedeleteconfirm'] = 'Biztosan törölni akarja ezt a nyelvtapasztalatot?';
$string['languagediplomadeleted'] = 'Nyelvvizsga sikeresen törölve';
$string['languageexperiencedeleted'] = 'Nyelvtapasztalat sikeresen törölve';
$string['languagediplomasaved'] = 'Nyelvvizsga sikeresen mentve';
$string['languagediplomasavefailed'] = 'Nem sikerült menteni a nyelvvizsgát';
$string['languageexperiencesaved'] = 'Nyelvtapasztalat sikeresen mentve';
$string['languageexperiencesavefailed'] = 'Nem sikerült menteni a nyelvtapasztalatot';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Europass Export ';
$string['exportstep1'] = '1 - Dokumentum nyelve és típusa';
$string['selectlocale&type'] = 'Válassza ki a dokumentum nyelvét és típusát';
$string['selectlocale'] = 'Nyelv';
$string['selectlocaledesc'] = 'Europass dokuemntum nyelve';
$string['selectdocumenttype'] = 'Dokumentum';
$string['europassCV'] = 'Europass önéletrajzot (CV)';
$string['europassLP'] = 'Europass nyelvi útlevelet';
$string['photograph'] = 'Fénykép';
$string['photographdesc'] = 'A fotó beágyazásra kerül az Europass XML-be';
$string['phototoolarge'] = 'Túl nagy fájl. A fájl mérete nem lehet nagyobb 100 kB-nál.';
$string['exportstep2'] = '2 - Dokumentum formátuma';
$string['selectfiletype'] = 'Válassza ki a fájl és a dátum formáját';
$string['exportdate'] = 'Dátum';
$string['internaldateformat'] = 'Belső Dátum Forma';
$string['selectinternaldatedesc'] = 'A Mahara által használt dátumforma';
$string['internaldate-dmy11'] = 'nn/hh/éééé';
$string['internaldate-dmy12'] = 'nn.hh.éééé';
$string['internaldate-dmy13'] = 'nn-hh-éééé';
$string['internaldate-dmy21'] = 'nn/hh/éé';
$string['internaldate-dmy22'] = 'nn.hh.éé';
$string['internaldate-dmy23'] = 'nn-hh-éé';
$string['internaldate-mdy11'] = 'hh/nn/éééé';
$string['internaldate-mdy12'] = 'hh.nn.éééé';
$string['internaldate-mdy13'] = 'hh-nn-éééé';
$string['internaldate-mdy21'] = 'hh/nn/éé';
$string['internaldate-mdy22'] = 'hh.nn.éé';
$string['internaldate-mdy23'] = 'hh-nn-éé';
$string['internaldate-ymd11'] = 'éééé/hh/nn';
$string['internaldate-ymd12'] = 'éééé.hh.nn';
$string['internaldate-ymd13'] = 'éééé-hh-nn';
$string['internaldate-ymd21'] = 'éé/hh/nn';
$string['internaldate-ymd22'] = 'éé.hh.nn';
$string['internaldate-ymd23'] = 'éé-hh-nn';
$string['internaldate-yonly'] = 'éééé';
$string['internaldate-other'] = 'más';
$string['externaldateformat'] = 'Külső dátum forma';
$string['selectexternaldatedesc'] = 'Az exportálásnál használt dátumforma';
$string['externaldate-numeric-long'] = 'nn/hh/éééé';
$string['externaldate-text-long'] = 'nn. hónap éééé';
$string['exportfile'] = 'Fájl';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Export';
$string['generate'] = 'Export létrehozása';
$string['generateexport'] = 'Export';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Europass Import';
$string['importstep1'] = '1 - Import fájl és opciók';
$string['selectfile&options'] = 'Europass XML fájl feltöltése és importálási opciók beállítása';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Import végrehajtása';
$string['executeimport'] = 'Import';
$string['importfile'] = 'Europass XML fájl';
$string['importfiledesc'] = 'Válasszon ki egy érvényes Europass XML fájlt a Mahara-ba való importáláshoz';
$string['notvalidxmlfile'] = 'A feltöltött fájl nem érvényes XML fájl.';
$string['importoptions'] = 'Mit importáljon?';
$string['importoptionsdesc'] = 'A zárolt profilemzők nem lesznek módosítva/frissítve';
$string['nocheckedoptions'] = 'Legalább egy opciót ki kell választania az importhoz.';
$string['fieldnotimported'] = 'A "%s" mező nem került importálásra.';
$string['lockedfieldnotimported'] = 'A "%s" zárolt mező nem került importálásra.';
$string['languagecodemissing'] = 'A "%s" mező  nem került importálásra. A nyelvi kód hiányzik.';
$string['importdate'] = 'A dátumok importálva mint';
$string['europassimportexecuted'] = 'Az adatok sikeresen importálva a Mahara-ba az Europass XML fájlból.';

// Europass GUI form tabs
$string['application-tab'] = 'Jelentkezés';
$string['workexperience-tab'] = 'Munka';
$string['education-tab'] = 'Oktatás';
$string['languages-tab'] = 'Nyelvek';
$string['skills-tab'] = 'Készségek';

// Europass CV - STEP 1
$string['identification'] = 'Személyes információk';
$string['identification-birthdate'] = 'Születési dátum';
$string['identification-birthplace'] = 'Születési hely';
$string['identification-lastname'] = 'Vezetéknév (nevek)';
$string['identification-firstname'] = 'Utónév (nevek)';
$string['identification-addressLine'] = 'Utca, házszám';
$string['identification-municipality'] = 'Város';
$string['identification-postalCode'] = 'Irányító szám';
$string['identification-country'] = 'Ország';
$string['identification-contactinfo-telephone'] = 'Telefonszám(ok)';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(ek)';
$string['identification-nationality'] = 'Állampolgárság';
$string['identification-gender'] = 'Neme';

// Europass CV - STEP 2
$string['application'] = 'Betölteni kívánt munkakör / Foglalkozási terület';

// Europass CV - STEP 3
$string['workexperience'] = 'Szakmai tapasztalat';

// Europass CV - STEP 4
$string['education'] = 'Tanulmányok';

// Europass CV - STEP 5
$string['mothertongue'] = 'Anyanyelv(ek)';
$string['otherlanguage'] = 'Egyéb nyelv(ek)';

$string['language-foreign-listening'] = 'Hallgatás';
$string['language-foreign-listening-th'] = 'Hallgatás';
$string['language-foreign-reading'] = 'Olvasás';
$string['language-foreign-reading-th'] = 'Olvasás';
$string['language-foreign-spokeninteraction'] = 'Társalgás';
$string['language-foreign-spokeninteraction-th'] = 'Társalgás';
$string['language-foreign-spokenproduction'] = 'Folyamatos beszéd';
$string['language-foreign-spokenproduction-th'] = 'Folyamatos<br>beszéd';
$string['language-foreign-writing'] = 'Írás';
$string['language-foreign-writing-th'] = 'Írás';
$string['language-foreign-CEF-level'] = 'Közös Európai Referenciakeret (KER) szintjei';

$string['language-foreign-level.A1'] = 'alapszintű nyelvhasználó (A1)';
$string['language-foreign-level.A2'] = 'alapszintű nyelvhasználó (A2)';
$string['language-foreign-level.B1'] = 'önálló nyelvhasználó (B1)';
$string['language-foreign-level.B2'] = 'önálló nyelvhasználó (B2)';
$string['language-foreign-level.C1'] = 'mesterfokú nyelvhasználó (C1)';
$string['language-foreign-level.C2'] = 'mesterfokú nyelvhasználó (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Járművezetői engedély(ek)';
$string['skills-and-competences'] = 'Egyéni készségek és kompetenciák';
$string['socialskill'] = 'Társas készségégek és kompetenciák';
$string['organisationalskill'] = 'Szervezési készségek és kompetenciák';
$string['technicalskill'] = 'Műszaki készségek és kompetenciák';
$string['computerskill'] = 'Számítógép-felhasználói készségek és kompetenciák';
$string['artisticskill'] = 'Művészi készségek és kompetenciák';
$string['otherskill'] = 'Egyéb készségek és kompetenciák';
$string['additionalinfo'] = 'További információk';
$string['annexes'] = 'Függelékek';

// Europass LP - STEP 2
$string['language-certificates'] = 'Oklevel(ek)/bizonyítvány(ok)';
$string['diploma-title'] = 'Oklevel(ek)/bizonyítvány(ok)';
$string['diploma-awardingBody'] = 'Kibocsátó intézmény';
$string['diploma-date'] = 'Időpont';
$string['diploma-level'] = 'Európai szint';
$string['language-experiences'] = 'Nyelvi tapasztalatok';
$string['experiences-period-from'] = 'Kezdete';
$string['experiences-period-to'] = 'Befejezése';

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
$string['language.ab'] = 'Abház';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragóniai';
$string['language.ar'] = 'Arab';
$string['language.as'] = 'Assamesse';
$string['language.az'] = 'Azerbajdzsáni';
$string['language.be'] = 'Belorusz';
$string['language.bg'] = 'Bolgár';
$string['language.bn'] = 'Bengáli';
$string['language.bo'] = 'Tibeti';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bosnyák';
$string['language.ca'] = 'Katalán/ valenciai';
$string['language.ce'] = 'Csecsen';
$string['language.co'] = 'Korzikai';
$string['language.cs'] = 'Cseh';
$string['language.cy'] = 'Welszi';
$string['language.da'] = 'Dán';
$string['language.de'] = 'Német';
$string['language.el'] = 'Görög';
$string['language.en'] = 'Angol';
$string['language.es'] = 'Spanyol / Kasztíliai';
$string['language.et'] = 'Észt';
$string['language.eu'] = 'Baskír';
$string['language.fa'] = 'Perzsa';
$string['language.fi'] = 'Finn';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Faroese';
$string['language.fr'] = 'Francia';
$string['language.fy'] = 'Nyugati fríz';
$string['language.ga'] = 'Ír';
$string['language.gd'] = 'Gael / skót gael';
$string['language.gl'] = 'Galíciai';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Héber';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Horvát';
$string['language.ht'] = 'Haiti; haiti kreol';
$string['language.hu'] = 'Magyar';
$string['language.hy'] = 'Örmény';
$string['language.id'] = 'Indonéziai';
$string['language.is'] = 'Izlandi';
$string['language.it'] = 'Olasz';
$string['language.ja'] = 'Japán';
$string['language.jv'] = 'Jávai';
$string['language.ka'] = 'Grúz';
$string['language.kg'] = 'Kongó';
$string['language.ko'] = 'Koreai';
$string['language.ku'] = 'Kurd';
$string['language.kw'] = 'Cornwalli kelta';
$string['language.ky'] = 'Kirgíz';
$string['language.lb'] = 'Luxemburgi';
$string['language.li'] = 'Limburgi';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litván';
$string['language.lv'] = 'Lett';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Macedón';
$string['language.mn'] = 'Mongol';
$string['language.mo'] = 'Moldáv';
$string['language.ms'] = 'Maláj';
$string['language.mt'] = 'Máltai';
$string['language.my'] = 'Burméziai';
$string['language.nb'] = 'Novég (Bokmal)';
$string['language.ne'] = 'Nepáli';
$string['language.nl'] = 'Holland';
$string['language.nn'] = 'Norvég (Nynorsk)';
$string['language.no'] = 'Ónorvég';
$string['language.pl'] = 'Lengyel';
$string['language.pt'] = 'Portugál';
$string['language.rm'] = 'Rétoromán';
$string['language.ro'] = 'Román';
$string['language.ru'] = 'Orosz';
$string['language.r0'] = 'Cigány'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Szardíniai';
$string['language.se'] = 'Északi sami';
$string['language.sk'] = 'Szlovák';
$string['language.sl'] = 'Szlovén';
$string['language.so'] = 'Szomáli';
$string['language.sq'] = 'Albán';
$string['language.sr'] = 'Szerb';
$string['language.sv'] = 'svéd';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Türkmén';
$string['language.tr'] = 'Török';
$string['language.ty'] = 'Tahiti';
$string['language.uk'] = 'Ukrán';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Üzbég';
$string['language.vi'] = 'Vietnámi';
$string['language.yi'] = 'Jiddis';
$string['language.zh'] = 'Kinai';
$string['language.cu'] = 'Templomi szláv';
$string['language.eo'] = 'Eszperantó';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Gall (1500 után); Provençal';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avesztai';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amhara';
$string['language.av'] = 'Avar';
$string['language.ay'] = 'Ajmara';
$string['language.ba'] = 'Baskír';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Csamorro';
$string['language.cr'] = 'Krí nyelv';
$string['language.cv'] = 'Csuvas';
$string['language.dv'] = 'Maldív';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Eve';
$string['language.ff'] = 'Ful';
$string['language.gn'] = 'Guaraní';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri motu';
$string['language.hz'] = 'Otjiherero';
$string['language.ia'] = 'Interlingva nyelv';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Szecsuani';
$string['language.ik'] = 'Inupiak';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu';
$string['language.kj'] = 'Kuanyama';
$string['language.kk'] = 'Kazah';
$string['language.kl'] = 'Kalaallisut';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kasmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Luganda';
$string['language.lo'] = 'Laoszi';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshalli';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Naurui';
$string['language.nd'] = 'Északi Ndebele';
$string['language.ng'] = 'Ndongo';
$string['language.nr'] = 'Déli Ndebele';
$string['language.nv'] = 'Navahó';
$string['language.ny'] = 'Chichewa';
$string['language.oj'] = 'Ojibwe / Anishinaabe';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Oszét Ossetian';
$string['language.pa'] = 'Pandzsábi';
$string['language.pi'] = 'Páli';
$string['language.ps'] = 'Pastu';
$string['language.qu'] = 'Kecsua';
$string['language.rn'] = 'Kirundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Szanszkrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Szingaléz';
$string['language.sm'] = 'Samoa';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Siswati';
$string['language.st'] = 'Sesotho';
$string['language.su'] = 'Szundanéz';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tadzsik';
$string['language.th'] = 'Thaiföldi';
$string['language.ti'] = 'Tigrinja';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Setswana';
$string['language.to'] = 'Tongai';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatár';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Ujgur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Wallon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Egyesült Arab Emírségek';
$string['country.af'] = 'Afganisztán';
$string['country.ag'] = 'Antigua és Barbuda';
$string['country.al'] = 'Albánia';
$string['country.am'] = 'Örményország';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentína';
$string['country.at'] = 'Ausztria';
$string['country.au'] = 'Ausztrália';
$string['country.az'] = 'Azerbajdzsán';
$string['country.ba'] = 'Bosznia-Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Banglades';
$string['country.be'] = 'Belgium';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgária';
$string['country.bh'] = 'Bahrein';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolívia';
$string['country.br'] = 'Brazília';
$string['country.bs'] = 'Bahama-szigetek';
$string['country.bt'] = 'Bhután';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarusz';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Kongói Demokratikus Köztársaság (Zaire)';
$string['country.cf'] = 'Közép-afrikai Köztársaság';
$string['country.cg'] = 'Kongói Köztársaság (Kongó)';
$string['country.ch'] = 'Svájc';
$string['country.ci'] = 'Elefántcsontpart';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kína';
$string['country.co'] = 'Kolumbia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Zöld-foki Köztársaság';
$string['country.cy'] = 'Ciprus';
$string['country.cz'] = 'Cseh Köztársaság';
$string['country.de'] = 'Németország';
$string['country.dj'] = 'Dzsibuti';
$string['country.dk'] = 'Dánia';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikai Köztársaság';
$string['country.dz'] = 'Algéria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Észtország';
$string['country.eg'] = 'Egyiptom';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spanyolország';
$string['country.et'] = 'Etiópia';
$string['country.fi'] = 'Finnország';
$string['country.fj'] = 'Fidzsi-szigetek';
$string['country.fm'] = 'Mikronézia';
$string['country.fr'] = 'Franciaország';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Egyesült Királyság';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Grúzia';
$string['country.gh'] = 'Ghána';
$string['country.gl'] = 'Grönland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Egyenlítoi-Guinea';
$string['country.gr'] = 'Görögország';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Bissau-Guinea';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Horvátország';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Magyarország';
$string['country.id'] = 'Indonézia';
$string['country.ie'] = 'Írország';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'India';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Irán';
$string['country.is'] = 'Izland';
$string['country.it'] = 'Olaszország';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordánia';
$string['country.jp'] = 'Japán';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirgizisztán';
$string['country.kh'] = 'Kambodzsa';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comore-szigetek';
$string['country.kn'] = 'Saint Kitts és Nevis';
$string['country.kp'] = 'Észak-Korea';
$string['country.kr'] = 'Dél-Korea';
$string['country.kw'] = 'Kuvait';
$string['country.kz'] = 'Kazahsztán';
$string['country.la'] = 'Laosz';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Srí Lanka';
$string['country.lr'] = 'Libéria';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litvánia';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Lettország';
$string['country.ly'] = 'Líbia';
$string['country.ma'] = 'Marokkó';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Montenegró';
$string['country.mg'] = 'Madagaszkár';
$string['country.mh'] = 'Marshall-szigetek';
$string['country.mk'] = 'Macedónia Volt Jugoszláv Köztársaság';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Mianmar';
$string['country.mn'] = 'Mongólia';
$string['country.mr'] = 'Mauritánia';
$string['country.mt'] = 'Málta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldív-szigetek';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexikó';
$string['country.my'] = 'Malajzia';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namíbia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigéria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Hollandia';
$string['country.no'] = 'Norvégia';
$string['country.np'] = 'Nepál';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Új-Zéland';
$string['country.om'] = 'Omán';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Pápua Új-Guinea';
$string['country.ph'] = 'Fülöp-szigetek';
$string['country.pk'] = 'Pakisztán';
$string['country.pl'] = 'Lengyelország';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Palesztin Nemzeti Hatóság';
$string['country.pt'] = 'Portugália';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Románia';
$string['country.rs'] = 'Szerbia';
$string['country.ru'] = 'Oroszország';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Szaúd-Arábia';
$string['country.sb'] = 'Salamon-szigetek';
$string['country.sc'] = 'Seychelle-szigetek';
$string['country.sd'] = 'Szudán';
$string['country.se'] = 'Svédország';
$string['country.sg'] = 'Szingapúr';
$string['country.si'] = 'Szlovénia';
$string['country.sk'] = 'Szlovákia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Szenegál';
$string['country.so'] = 'Szomália';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'São Tomé és Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Szíria';
$string['country.sz'] = 'Szváziföld';
$string['country.td'] = 'Csád';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thaiföld';
$string['country.tj'] = 'Tádzsikisztán';
$string['country.tl'] = 'Kelet-Timor';
$string['country.tm'] = 'Türkménisztán';
$string['country.tn'] = 'Tunézia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Törökország';
$string['country.tt'] = 'Trinidad és Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzánia';
$string['country.ua'] = 'Ukrajna';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Amerikai Egyesült Államok';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Üzbegisztán';
$string['country.va'] = 'Vatikán';
$string['country.vc'] = 'Saint Vincent és Grenadine-szigetek';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Szamoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Dél-afrikai Köztársaság';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'anorrai';
$string['nationality.ae'] = 'arab';
$string['nationality.af'] = 'afgán';
$string['nationality.ag'] = 'antigua és barbaduai';
$string['nationality.al'] = 'albán';
$string['nationality.am'] = 'örmény';
$string['nationality.ao'] = 'angolai';
$string['nationality.ar'] = 'argentín';
$string['nationality.at'] = 'osztrák';
$string['nationality.au'] = 'ausztrál';
$string['nationality.az'] = 'azerbajdzsáni';
$string['nationality.ba'] = 'bosznia hercegovinai';
$string['nationality.bb'] = 'barbadoszi';
$string['nationality.bd'] = 'bangaldesi';
$string['nationality.be'] = 'belga';
$string['nationality.bf'] = 'burkinabé/burkina fasoi';
$string['nationality.bg'] = 'bolgár';
$string['nationality.bh'] = 'bahreini';
$string['nationality.bi'] = 'burundi';
$string['nationality.bj'] = 'benini';
$string['nationality.bn'] = 'brunei';
$string['nationality.bo'] = 'bolíviai';
$string['nationality.br'] = 'brazil';
$string['nationality.bs'] = 'bahamai';
$string['nationality.bt'] = 'bhutáni';
$string['nationality.bw'] = 'botswanai';
$string['nationality.by'] = 'belorusz';
$string['nationality.bz'] = 'belizi';
$string['nationality.ca'] = 'kanadai';
$string['nationality.cd'] = 'Kongói Demokratikus Köztársaság állampolgára';
$string['nationality.cf'] = 'közép afrikai';
$string['nationality.cg'] = 'Kongói Köztársaság állampolgára';
$string['nationality.ch'] = 'svájci';
$string['nationality.ci'] = 'elefántcsontparti';
$string['nationality.cl'] = 'chilei';
$string['nationality.cm'] = 'kameruni';
$string['nationality.cn'] = 'kínai';
$string['nationality.co'] = 'kolumbiai';
$string['nationality.cr'] = 'costa ricai';
$string['nationality.cu'] = 'kubai';
$string['nationality.cv'] = 'zöld-foki szigeteki';
$string['nationality.cy'] = 'ciprusi';
$string['nationality.cz'] = 'cseh';
$string['nationality.de'] = 'német';
$string['nationality.dj'] = 'djibouti köztársasági';
$string['nationality.dk'] = 'dán';
$string['nationality.dm'] = 'dominikai';
$string['nationality.do'] = 'Dominikai Köztársaság állampolgára';
$string['nationality.dz'] = 'algéria, algír';
$string['nationality.ec'] = 'equádori';
$string['nationality.ee'] = 'észt';
$string['nationality.eg'] = 'egyiptomi';
$string['nationality.er'] = 'eritreai';
$string['nationality.es'] = 'spanyol';
$string['nationality.et'] = 'etiópiai';
$string['nationality.fi'] = 'finn';
$string['nationality.fj'] = 'fidzsi-szigeteki';
$string['nationality.fm'] = 'mikroneziai';
$string['nationality.fr'] = 'francia';
$string['nationality.ga'] = 'gaboni';
$string['nationality.gb'] = 'gambiai';
$string['nationality.gd'] = 'grenadai';
$string['nationality.ge'] = 'grúz';
$string['nationality.gh'] = 'ghánai';
$string['nationality.gl'] = 'grönlandi';
$string['nationality.gm'] = 'gambiai';
$string['nationality.gn'] = 'Guineai Köztársaság állampolgára';
$string['nationality.gq'] = 'egyenlítői-guineai';
$string['nationality.gr'] = 'görög';
$string['nationality.gt'] = 'guatemalai';
$string['nationality.gw'] = 'Guineai-Bissau Köztársaság állampolgára';
$string['nationality.gy'] = 'guyanai';
$string['nationality.hn'] = 'honduraszi';
$string['nationality.hr'] = 'horvát';
$string['nationality.ht'] = 'haiti-i';
$string['nationality.hu'] = 'magyar';
$string['nationality.id'] = 'indonéz';
$string['nationality.ie'] = 'ír';
$string['nationality.il'] = 'izraeli';
$string['nationality.in'] = 'indiai';
$string['nationality.iq'] = 'iráni';
$string['nationality.ir'] = 'iraki';
$string['nationality.is'] = 'izlandi';
$string['nationality.it'] = 'olasz';
$string['nationality.jm'] = 'jamaicai';
$string['nationality.jo'] = 'jordán';
$string['nationality.jp'] = 'japán';
$string['nationality.ke'] = 'kenyai';
$string['nationality.kg'] = 'kirgiz';
$string['nationality.kh'] = 'kambodzsai';
$string['nationality.ki'] = 'karibati';
$string['nationality.km'] = 'Comore-szigeteki';
$string['nationality.kn'] = 'Saint Kitts és Nevis-i';
$string['nationality.kp'] = 'észak koreai';
$string['nationality.kr'] = 'dél koreai';
$string['nationality.kw'] = 'kuvaiti';
$string['nationality.kz'] = 'kazah';
$string['nationality.la'] = 'laoszi';
$string['nationality.lb'] = 'libanoni';
$string['nationality.lc'] = 'Saint Lucia-i';
$string['nationality.li'] = 'lichtensteini';
$string['nationality.lk'] = 'srí lankai';
$string['nationality.lr'] = 'libériai';
$string['nationality.ls'] = 'lesothói';
$string['nationality.lt'] = 'litván';
$string['nationality.lu'] = 'luxemburgi';
$string['nationality.lv'] = 'litván';
$string['nationality.ly'] = 'líbiai';
$string['nationality.ma'] = 'marokkói';
$string['nationality.mc'] = 'monacói';
$string['nationality.md'] = 'moldovai';
$string['nationality.me'] = 'montenegrói';
$string['nationality.mg'] = 'madagszkári';
$string['nationality.mh'] = 'marshall-szigeteki';
$string['nationality.mk'] = 'macedónia volt jugoszláv köztársasági';
$string['nationality.ml'] = 'mali';
$string['nationality.mm'] = 'mianmari/burmai';
$string['nationality.mn'] = 'mongóliai';
$string['nationality.mr'] = 'mauritániai';
$string['nationality.mt'] = 'máltai';
$string['nationality.mu'] = 'mauritiusi';
$string['nationality.mv'] = 'maldív-szigeteki';
$string['nationality.mw'] = 'malawi';
$string['nationality.mx'] = 'mexikói';
$string['nationality.my'] = 'malajziai';
$string['nationality.mz'] = 'mozambiki';
$string['nationality.na'] = 'namíb';
$string['nationality.ne'] = 'nigeri';
$string['nationality.ng'] = 'nigériai';
$string['nationality.ni'] = 'nicaraguai';
$string['nationality.nl'] = 'holland';
$string['nationality.no'] = 'norvég';
$string['nationality.np'] = 'nepáli';
$string['nationality.nr'] = 'naurui';
$string['nationality.nu'] = 'nieu-i';
$string['nationality.nz'] = 'új-zélandi';
$string['nationality.om'] = 'ománi';
$string['nationality.pa'] = 'panamai';
$string['nationality.pe'] = 'perui';
$string['nationality.pg'] = 'Pápua Új-Gínea-i';
$string['nationality.ph'] = 'fülöp-szigeteki';
$string['nationality.pk'] = 'pakisztáni';
$string['nationality.pl'] = 'lenygel';
$string['nationality.pr'] = 'Puerto Rico-i';
$string['nationality.ps'] = 'palesztin';
$string['nationality.pt'] = 'portugál';
$string['nationality.pw'] = 'palaui';
$string['nationality.py'] = 'paraguayi';
$string['nationality.qa'] = 'quatari';
$string['nationality.ro'] = 'román';
$string['nationality.rs'] = 'szerb';
$string['nationality.ru'] = 'orosz';
$string['nationality.rw'] = 'ruandai';
$string['nationality.sa'] = 'szaúd-arábiai';
$string['nationality.sb'] = 'salamon-szigeteki';
$string['nationality.sc'] = 'seychelles-szigetki';
$string['nationality.sd'] = 'szudáni';
$string['nationality.se'] = 'svéd';
$string['nationality.sg'] = 'szingapúri';
$string['nationality.si'] = 'szlovén';
$string['nationality.sk'] = 'szlovák';
$string['nationality.sl'] = 'Sierra Leone-i';
$string['nationality.sm'] = 'San Marino-i';
$string['nationality.sn'] = 'szenegáli';
$string['nationality.so'] = 'szomáliai';
$string['nationality.sr'] = 'suriname-i';
$string['nationality.st'] = 'são tomé és príncipei';
$string['nationality.sv'] = 'salvadori';
$string['nationality.sy'] = 'szíriai';
$string['nationality.sz'] = 'szváziföldi';
$string['nationality.td'] = 'csádi';
$string['nationality.tg'] = 'togoi';
$string['nationality.th'] = 'thai';
$string['nationality.tj'] = 'tadzsik';
$string['nationality.tl'] = 'kelet-timori';
$string['nationality.tm'] = 'türkmén';
$string['nationality.tn'] = 'tunéziai';
$string['nationality.to'] = 'tongai';
$string['nationality.tr'] = 'török';
$string['nationality.tt'] = 'trinidad-tobagói';
$string['nationality.tv'] = 'tuvalui';
$string['nationality.tz'] = 'tanzániai';
$string['nationality.ua'] = 'ukrán';
$string['nationality.ug'] = 'ugandai';
$string['nationality.us'] = 'amerikai';
$string['nationality.uy'] = 'uruguay-i';
$string['nationality.uz'] = 'üzbég';
$string['nationality.va'] = 'vatikáni';
$string['nationality.vc'] = 'Saint Vincent-i';
$string['nationality.ve'] = 'venezuelai';
$string['nationality.vn'] = 'vietnám';
$string['nationality.vu'] = 'vanatui';
$string['nationality.ws'] = 'szamoai';
$string['nationality.ye'] = 'jemeni';
$string['nationality.za'] = 'dél-afrikai';
$string['nationality.zm'] = 'zambiai';
$string['nationality.zw'] = 'zimbabwei';

?>
