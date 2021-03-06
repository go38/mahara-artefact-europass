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
 * @translator Gregor Anzelj
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
$string['europassartefactsaved'] = 'Europass življenjepis uspešno shranjen';
$string['europassexportgenerated'] = 'Prosimo počakajte, dokler vaš izvoz ne bo ustvarjen...';
$string['europassexportnoconncetion'] = 'There was an error with connection to WSDL server. Please try again later.';
$string['europassexportservererror'] = 'There was an error on WSDL server. Please try again later.';
$string['europassextensionmissing'] = 'Oprostite, ne morete uporabljati Europass vtičnika, saj PHP namestitvi manjka zahtevana razširitev:';
$string['newerversionforcompatibility'] = 'Za boljše delovanje in večjo združljivost nadgradite Maharo v različico 1.3.0 ali novejšo.';

$string['languagesaved'] = 'Jezik uspešno shranjen';
$string['languagesavefailed'] = 'Neuspešno shranjevanje jezika';
$string['languagedeleteconfirm'] = 'Ali res želite izbrisati jezik?';
$string['languagedeleted'] = 'Jezik uspešno izbrisan';

$string['moveup'] = 'Premakni gor';
$string['movedown'] = 'Premakni dol';

$string['languagediploma'] = 'Jezikovna diploma';
$string['languageexperience'] = 'Jezikovna izkušnja';
$string['languagediplomadeleteconfirm'] = 'Ali res želite izbrisati jezikovno diplomo?';
$string['languageexperiencedeleteconfirm'] = 'Ali res želite izbrisati jezikovno izkušnjo?';
$string['languagediplomadeleted'] = 'Jezikovna diploma uspešno izbrisana';
$string['languageexperiencedeleted'] = 'Jezikovna izkušnja uspešno izbrisana';
$string['languagediplomasaved'] = 'Jezikovna diploma uspešno shranjena';
$string['languagediplomasavefailed'] = 'Neuspešno shranjevanje jezikovne diplome';
$string['languageexperiencesaved'] = 'Jezikovna izkušnja uspešno shranjena';
$string['languageexperiencesavefailed'] = 'Neuspešno shranjevanje jezikovne izkušnje';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Europass izvoz';
$string['exportstep1'] = '1 - Jezik in vrsta dokumenta';
$string['selectlocale&type'] = 'Izberite jezik in vrsto dokumenta';
$string['selectlocale'] = 'Jezik';
$string['selectlocaledesc'] = 'Jezik Europass dokumenta';
$string['selectdocumenttype'] = 'Dokument';
$string['europassCV'] = 'Europass življenjepis';
$string['europassLP'] = 'Europass jezikovna izkaznica';
$string['photograph'] = 'Fotografija';
$string['photographdesc'] = 'Fotografija bo vgrajena v Europass XML';
$string['phototoolarge'] = 'Datoteka je prevelika. Velikost datoteke ne sme presegati 100 kB.';
$string['exportstep2'] = '2 - Oblika datoteke';
$string['selectfiletype'] = 'Izberite obliko datoteke in datuma';
$string['exportdate'] = 'Datum';
$string['internaldateformat'] = 'Notranja oblika datuma';
$string['selectinternaldatedesc'] = 'Oblika datuma v Mahari';
$string['internaldate-dmy11'] = 'dd/mm/llll';
$string['internaldate-dmy12'] = 'dd.mm.llll';
$string['internaldate-dmy13'] = 'dd-mm-llll';
$string['internaldate-dmy21'] = 'dd/mm/ll';
$string['internaldate-dmy22'] = 'dd.mm.ll';
$string['internaldate-dmy23'] = 'dd-mm-ll';
$string['internaldate-mdy11'] = 'mm/dd/llll';
$string['internaldate-mdy12'] = 'mm.dd.llll';
$string['internaldate-mdy13'] = 'mm-dd-llll';
$string['internaldate-mdy21'] = 'mm/dd/ll';
$string['internaldate-mdy22'] = 'mm.dd.ll';
$string['internaldate-mdy23'] = 'mm-dd-ll';
$string['internaldate-ymd11'] = 'llll/mm/dd';
$string['internaldate-ymd12'] = 'llll.mm.dd';
$string['internaldate-ymd13'] = 'llll-mm-dd';
$string['internaldate-ymd21'] = 'll/mm/dd';
$string['internaldate-ymd22'] = 'll.mm.dd';
$string['internaldate-ymd23'] = 'll-mm-dd';
$string['internaldate-yonly'] = 'llll';
$string['internaldate-other'] = 'drugo';
$string['externaldateformat'] = 'Izhodna oblika datuma';
$string['selectexternaldatedesc'] = 'Oblika datuma v izvozu';
$string['externaldate-numeric-long'] = 'dd/mm/llll';
$string['externaldate-text-long'] = 'dd. mesec llll';
$string['exportfile'] = 'Datoteka';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Izvoz';
$string['generate'] = 'Ustvarite izvoz';
$string['generateexport'] = 'Izvozi';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Europass uvoz';
$string['importstep1'] = '1 - Datoteka uvoza in možnosti';
$string['selectfile&options'] = 'Naložite Europass XML datoteko in izberite možnosti uvoza';
$string['importstep2'] = '2 - Uvoz';
$string['execute'] = 'Izvedite uvoz';
$string['executeimport'] = 'Uvozi';
$string['importfile'] = 'Europass XML datoteka';
$string['importfiledesc'] = 'Izberite veljavno Europass XML datoteko za uvoz v Maharo';
$string['notvalidxmlfile'] = 'Naložena datoteka ni veljavna XML datoteka.';
$string['importoptions'] = 'Kaj uvozim?';
$string['importoptionsdesc'] = 'Zaklenjena polja profila ne bodo spremenjena/posodobljena';
$string['nocheckedoptions'] = 'Izbrati morate vsaj eno možnost za uvoz.';
$string['fieldnotimported'] = 'Polje "%s" ni uvoženo.';
$string['lockedfieldnotimported'] = 'Zaklenjeno polje "%s" ni uvoženo.';
$string['languagecodemissing'] = 'Polje "%s" ni uvoženo. Manjka koda jezika.';
$string['importdate'] = 'Uvozi datume kot';
$string['europassimportexecuted'] = 'Podatki iz Europass XML datoteke uspešno uvoženi v Maharo.';

// Europass GUI form tabs
$string['application-tab'] = 'Prijava';
$string['workexperience-tab'] = 'Zaposlitev';
$string['education-tab'] = 'Izobrazba';
$string['languages-tab'] = 'Jeziki';
$string['skills-tab'] = 'Spretnosti';

// Europass CV - STEP 1
$string['identification'] = 'Osebni podatki';
$string['identification-birthdate'] = 'Datum rojstva';
$string['identification-birthplace'] = 'Kraj rojstva';
$string['identification-lastname'] = 'Priimek';
$string['identification-firstname'] = 'Ime';
$string['identification-addressLine'] = 'Ulica / Hišna številka';
$string['identification-municipality'] = 'Mesto';
$string['identification-postalCode'] = 'Poštna številka';
$string['identification-country'] = 'Država';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Prenosni telefon';
$string['identification-contactinfo-fax'] = 'Faks';
$string['identification-contactinfo-email'] = 'E-pošta';
$string['identification-nationality'] = 'Državljanstvo';
$string['identification-gender'] = 'Spol';

// Europass CV - STEP 2
$string['application'] = 'Zaželena zaposlitev / zaželeno poklicno področje';

// Europass CV - STEP 3
$string['workexperience'] = 'Delovne izkušnje';

// Europass CV - STEP 4
$string['education'] = 'Izobraževanje in usposabljanje';

// Europass CV - STEP 5
$string['mothertongue'] = 'Materni jezik(i)';
$string['otherlanguage'] = 'Drugi jezik(i)';

$string['language-foreign-listening'] = 'Slušno razumevanje';
$string['language-foreign-listening-th'] = 'Slušno<br>razumevanje';
$string['language-foreign-reading'] = 'Bralno razumevanje';
$string['language-foreign-reading-th'] = 'Bralno<br>razumevanje';
$string['language-foreign-spokeninteraction'] = 'Govorno sporazumevanje';
$string['language-foreign-spokeninteraction-th'] = 'Govorno<br>sporazumevanje';
$string['language-foreign-spokenproduction'] = 'Govorno sporočanje';
$string['language-foreign-spokenproduction-th'] = 'Govorno<br>sporočanje';
$string['language-foreign-writing'] = 'Pisanje';
$string['language-foreign-writing-th'] = 'Pisanje';
$string['language-foreign-CEF-level'] = 'Skupni evropski referenčni okvir za jezike';

$string['language-foreign-level.A1'] = 'Osnovni uporabnik (A1)';
$string['language-foreign-level.A2'] = 'Osnovni uporabnik (A2)';
$string['language-foreign-level.B1'] = 'Samostojni uporabnik (B1)';
$string['language-foreign-level.B2'] = 'Samostojni uporabnik (B2)';
$string['language-foreign-level.C1'] = 'Usposobljeni uporabnik (C1)';
$string['language-foreign-level.C2'] = 'Usposobljeni uporabnik (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vozniško dovoljenje';
$string['skills-and-competences'] = 'Znanja in kompetence';
$string['socialskill'] = 'Socialna znanja in kompetence';
$string['organisationalskill'] = 'Organizacijska znanja in kompetence';
$string['technicalskill'] = 'Tehnična znanja in kompetence';
$string['computerskill'] = 'Računalniška znanja in kompetence';
$string['artisticskill'] = 'Umetniška znanja in kompetence';
$string['otherskill'] = 'Druga znanja in kompetence';
$string['additionalinfo'] = 'Dodatni podatki';
$string['annexes'] = 'Priloge';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma, spričevalo ali certifikat';
$string['diploma-title'] = 'Naziv';
$string['diploma-awardingBody'] = 'Ustanova podeljevalka';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Evropska raven';
$string['language-experiences'] = 'Jezikovne izkušnje';
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

// ISO 639-1:2002 filtered by Europass, including the languages considered as dead
// (http://www.iso.org/iso/catalogue_detail?csnumber=22109)
$string['language.ab'] = 'abhaščina';
$string['language.af'] = 'afrikanščina';
$string['language.an'] = 'aragonščina';
$string['language.ar'] = 'arabščina';
$string['language.as'] = 'asamščina';
$string['language.az'] = 'azerščina';
$string['language.be'] = 'beloruščina';
$string['language.bg'] = 'bolgarščina';
$string['language.bn'] = 'bengalščina';
$string['language.bo'] = 'tibetanščina';
$string['language.br'] = 'bretonščina';
$string['language.bs'] = 'bosanščina';
$string['language.ca'] = 'katalonščina / valencijščina';
$string['language.ce'] = 'čečenščina';
$string['language.co'] = 'korzijščina';
$string['language.cs'] = 'češčina';
$string['language.cy'] = 'valižanščina';
$string['language.da'] = 'danščina';
$string['language.de'] = 'nemščina';
$string['language.el'] = 'grščina';
$string['language.en'] = 'angleščina';
$string['language.es'] = 'španščina / kastiljščina';
$string['language.et'] = 'estonščina';
$string['language.eu'] = 'baskovščina';
$string['language.fa'] = 'perzijščina';
$string['language.fi'] = 'finščina';
$string['language.fj'] = 'fidžijščina';
$string['language.fo'] = 'ferščina';
$string['language.fr'] = 'francoščina';
$string['language.fy'] = 'zahodna frizijščina';
$string['language.ga'] = 'irščina';
$string['language.gd'] = 'gelščina / škotska gelščina';
$string['language.gl'] = 'galicijščina';
$string['language.gv'] = 'manska gelščina';
$string['language.he'] = 'hebrejščina';
$string['language.hi'] = 'hindijščina';
$string['language.hr'] = 'hrvaščina';
$string['language.ht'] = 'haitščina; haitska kreolščina';
$string['language.hu'] = 'madžarščina';
$string['language.hy'] = 'armenščina';
$string['language.id'] = 'indonezijščina';
$string['language.is'] = 'islandščina';
$string['language.it'] = 'italijanščina';
$string['language.ja'] = 'japonščina';
$string['language.jv'] = 'javanščina';
$string['language.ka'] = 'gruzinščina';
$string['language.kg'] = 'kongovščina';
$string['language.ko'] = 'korejščina';
$string['language.ku'] = 'kurdščina';
$string['language.kw'] = 'kornijščina';
$string['language.ky'] = 'kirgiščina';
$string['language.lb'] = 'luksemburščina';
$string['language.li'] = 'limburščina';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litvanščina';
$string['language.lv'] = 'latvijščina';
$string['language.mg'] = 'malgaščina';
$string['language.mk'] = 'makedonščina';
$string['language.mn'] = 'mongolščina';
$string['language.mo'] = 'moldavščina';
$string['language.ms'] = 'malajščina';
$string['language.mt'] = 'malteščina';
$string['language.my'] = 'burmanščina';
$string['language.nb'] = 'norveščina (bokmål)';
$string['language.ne'] = 'nepalščina';
$string['language.nl'] = 'nizozemščina';
$string['language.nn'] = 'norveščina (nynorsk)';
$string['language.no'] = 'norveščina';
$string['language.pl'] = 'poljščina';
$string['language.pt'] = 'portugalščina';
$string['language.rm'] = 'retoromanščina';
$string['language.ro'] = 'romunščina';
$string['language.ru'] = 'ruščina';
$string['language.r0'] = 'romščina'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardščina';
$string['language.se'] = 'severna samščina';
$string['language.sk'] = 'slovaščina';
$string['language.sl'] = 'slovenščina';
$string['language.so'] = 'somalščina';
$string['language.sq'] = 'albanščina';
$string['language.sr'] = 'srbščina';
$string['language.sv'] = 'švedščina';
$string['language.sw'] = 'svahili';
$string['language.tk'] = 'turkmenščina';
$string['language.tr'] = 'turščina';
$string['language.ty'] = 'tahitijščina';
$string['language.uk'] = 'ukrajinščina';
$string['language.ur'] = 'urdujščina';
$string['language.uz'] = 'uzbeščina';
$string['language.vi'] = 'vietnamščina';
$string['language.yi'] = 'jidiš';
$string['language.zh'] = 'kitajščina';
$string['language.cu'] = 'stara cerkvena slovanščina';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latinščina';
$string['language.oc'] = 'okcitanščina (po 1500); provansalščina';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'afarščina';
$string['language.ae'] = 'avestijščina';
$string['language.ak'] = 'akanščina';
$string['language.am'] = 'amharščina';
$string['language.av'] = 'avarščina';
$string['language.ay'] = 'ajmarščina';
$string['language.ba'] = 'baškirščina';
$string['language.bh'] = 'biharščina';
$string['language.bi'] = 'bislamščina';
$string['language.bm'] = 'bambarščina';
$string['language.ch'] = 'čamorščina';
$string['language.cr'] = 'krijščina';
$string['language.cv'] = 'čuvaščina';
$string['language.dv'] = 'diveščina / maliku';
$string['language.dz'] = 'dzonka';
$string['language.ee'] = 'evenščina';
$string['language.ff'] = 'fulščina';
$string['language.gn'] = 'gvaranijščina';
$string['language.gu'] = 'gudžaratščina';
$string['language.ha'] = 'havščina';
$string['language.ho'] = 'hiri motu';
$string['language.hz'] = 'herero';
$string['language.ia'] = 'interlingva';
$string['language.ig'] = 'igboščina';
$string['language.ii'] = 'ji (Sičuanski)';
$string['language.ik'] = 'inupiaščina';
$string['language.io'] = 'ido';
$string['language.iu'] = 'inuktitutščina';
$string['language.ki'] = 'kikujuščina';
$string['language.kj'] = 'kvanjama';
$string['language.kk'] = 'kazaščina';
$string['language.kl'] = 'grenlandščina';
$string['language.km'] = 'kmerščina';
$string['language.kn'] = 'kanareščina';
$string['language.kr'] = 'kanurščina';
$string['language.ks'] = 'kašmirščina';
$string['language.kv'] = 'komijščina';
$string['language.lg'] = 'ganda';
$string['language.lo'] = 'laoščina';
$string['language.lu'] = 'luba-katanga';
$string['language.mh'] = 'marshallovščina';
$string['language.mi'] = 'maorščina';
$string['language.ml'] = 'malajalščina';
$string['language.mr'] = 'maratščina';
$string['language.na'] = 'naurujščina';
$string['language.nd'] = 'ndebelščina (severna)';
$string['language.ng'] = 'ovambo';
$string['language.nr'] = 'ndebelščina (južna)';
$string['language.nv'] = 'navajščina';
$string['language.ny'] = 'čičevščina / čevščina / njanjščina';
$string['language.oj'] = 'anašinabščina';
$string['language.om'] = 'oromo';
$string['language.or'] = 'orija';
$string['language.os'] = 'osetinščina';
$string['language.pa'] = 'pandžabščina';
$string['language.pi'] = 'palijščina';
$string['language.ps'] = 'pušto; pašto';
$string['language.qu'] = 'kečvanščina';
$string['language.rn'] = 'rundščina';
$string['language.rw'] = 'ruandščina';
$string['language.sa'] = 'sanskrt';
$string['language.sd'] = 'sindščina';
$string['language.sg'] = 'sango';
$string['language.si'] = 'singalščina';
$string['language.sm'] = 'samoanščina';
$string['language.sn'] = 'shonščina';
$string['language.ss'] = 'svazijščina';
$string['language.st'] = 'soto (južni)';
$string['language.su'] = 'sudanščina';
$string['language.ta'] = 'tamilščina';
$string['language.te'] = 'teluščina';
$string['language.tg'] = 'tadžiščina';
$string['language.th'] = 'tajščina';
$string['language.ti'] = 'tigrinja';
$string['language.tl'] = 'tagaloščina';
$string['language.tn'] = 'tsvana';
$string['language.to'] = 'tonganščina';
$string['language.ts'] = 'tsonga';
$string['language.tt'] = 'tatarščina';
$string['language.tw'] = 'tvijščina';
$string['language.ug'] = 'ujgurščina';
$string['language.ve'] = 'vendščina';
$string['language.wa'] = 'valonščina';
$string['language.wo'] = 'volof';
$string['language.xh'] = 'koščina';
$string['language.yo'] = 'jorubščina';
$string['language.za'] = 'žuangščina / čuangščina';
$string['language.zu'] = 'zulujščina';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Združeni arabski emirati';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua in Barbuda';
$string['country.al'] = 'Albanija';
$string['country.am'] = 'Armenija';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Avstrija';
$string['country.au'] = 'Avstralija';
$string['country.az'] = 'Azerbajdžan';
$string['country.ba'] = 'Bosna in Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladeš';
$string['country.be'] = 'Belgija';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bolgarija';
$string['country.bh'] = 'Bahrajn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunej';
$string['country.bo'] = 'Bolivija';
$string['country.br'] = 'Brazilija';
$string['country.bs'] = 'Bahami';
$string['country.bt'] = 'Butan';
$string['country.bw'] = 'Bocvana';
$string['country.by'] = 'Belorusija';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratična republika Kongo';
$string['country.cf'] = 'Srednjeafriška republika';
$string['country.cg'] = 'Republika Kongo';
$string['country.ch'] = 'Švica';
$string['country.ci'] = 'Slonokoščena obala';
$string['country.cl'] = 'Čile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kitajska';
$string['country.co'] = 'Kolumbija';
$string['country.cr'] = 'Kostarika';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Zelenortski otoki';
$string['country.cy'] = 'Ciper';
$string['country.cz'] = 'Češka republika';
$string['country.de'] = 'Nemčija';
$string['country.dj'] = 'Džibuti';
$string['country.dk'] = 'Danska';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikanska republika';
$string['country.dz'] = 'Alžirija';
$string['country.ec'] = 'Ekvador';
$string['country.ee'] = 'Estonija';
$string['country.eg'] = 'Egipt';
$string['country.er'] = 'Eritreja';
$string['country.es'] = 'Španija';
$string['country.et'] = 'Etiopija';
$string['country.fi'] = 'Finska';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikronezija';
$string['country.fr'] = 'Francija';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Združeno kraljestvo';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzija';
$string['country.gh'] = 'Gana';
$string['country.gl'] = 'Grenlandija';
$string['country.gm'] = 'Gambija';
$string['country.gn'] = 'Gvineja';
$string['country.gq'] = 'Ekvatorialna Gvineja';
$string['country.gr'] = 'Grčija';
$string['country.gt'] = 'Gvatemala';
$string['country.gw'] = 'Gvineja Bissau';
$string['country.gy'] = 'Gvajana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Hrvaška';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Madžarska';
$string['country.id'] = 'Indonezija';
$string['country.ie'] = 'Irska';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'Indija';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islandija';
$string['country.it'] = 'Italija';
$string['country.jm'] = 'Jamajka';
$string['country.jo'] = 'Jordanija';
$string['country.jp'] = 'Japonska';
$string['country.ke'] = 'Kenija';
$string['country.kg'] = 'Kirgizistan';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komori';
$string['country.kn'] = 'Saint Kitts in Nevis';
$string['country.kp'] = 'Severna Koreja';
$string['country.kr'] = 'Južna Koreja';
$string['country.kw'] = 'Kuvajt';
$string['country.kz'] = 'Kazahstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Sveta Lucija';
$string['country.li'] = 'Lihtenštajn';
$string['country.lk'] = 'Šrilanka';
$string['country.lr'] = 'Liberija';
$string['country.ls'] = 'Lesoto';
$string['country.lt'] = 'Litva';
$string['country.lu'] = 'Luksemburg';
$string['country.lv'] = 'Latvija';
$string['country.ly'] = 'Libija';
$string['country.ma'] = 'Maroko';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldavija';
$string['country.me'] = 'Črna gora';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marchallovo otočje';
$string['country.mk'] = 'nekdanje jugoslovanske republike Makedonije';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Mjanmar';
$string['country.mn'] = 'Mongolija';
$string['country.mr'] = 'Mavretanija';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldivi';
$string['country.mw'] = 'Malavi';
$string['country.mx'] = 'Mehika';
$string['country.my'] = 'Malezija';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namibija';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigerija';
$string['country.ni'] = 'Nikaragva';
$string['country.nl'] = 'Nizozemska';
$string['country.no'] = 'Norveška';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nova Zelandija';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Nova Gvineja';
$string['country.ph'] = 'Filipini';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Poljska';
$string['country.pr'] = 'Portoriko';
$string['country.ps'] = 'Palestinsko ozemlje, zasedeno';
$string['country.pt'] = 'Portugalska';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paragvaj';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Romunija';
$string['country.rs'] = 'Srbija';
$string['country.ru'] = 'Rusija';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Saudova Arabija';
$string['country.sb'] = 'Salomonovi otoki';
$string['country.sc'] = 'Sejšeli';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Švedska';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slovenija';
$string['country.sk'] = 'Slovaška';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalija';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Sao Tome in Principe';
$string['country.sv'] = 'Salvador';
$string['country.sy'] = 'Sirija';
$string['country.sz'] = 'Svazi';
$string['country.td'] = 'Čad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tajska';
$string['country.tj'] = 'Tadžikistan';
$string['country.tl'] = 'Vzhodni Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunizija';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turčija';
$string['country.tt'] = 'Trinidad in Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanija';
$string['country.ua'] = 'Ukrajina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Združene države Amerike';
$string['country.uy'] = 'Urugvaj';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Vatikan';
$string['country.vc'] = 'Saint Vincent in Grenadine';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Južna Afrika';
$string['country.zm'] = 'Zambija';
$string['country.zw'] = 'Zimbabve';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andorsko';
$string['nationality.ae'] = 'arabsko (Združenih arabskih emiratov)';
$string['nationality.af'] = 'afganistansko';
$string['nationality.ag'] = 'antigua-barbudsko';
$string['nationality.al'] = 'albansko';
$string['nationality.am'] = 'armensko';
$string['nationality.ao'] = 'angolsko';
$string['nationality.ar'] = 'argentinsko';
$string['nationality.at'] = 'avstrijsko';
$string['nationality.au'] = 'avstralsko';
$string['nationality.az'] = 'azerbajdžansko';
$string['nationality.ba'] = 'bosansko-hercegovsko';
$string['nationality.bb'] = 'barbadoško';
$string['nationality.bd'] = 'bangladeško';
$string['nationality.be'] = 'belgijsko';
$string['nationality.bf'] = 'burkinafaško';
$string['nationality.bg'] = 'bolgarsko';
$string['nationality.bh'] = 'bahrajnsko';
$string['nationality.bi'] = 'burundijsko';
$string['nationality.bj'] = 'beninsko';
$string['nationality.bn'] = 'brunejsko';
$string['nationality.bo'] = 'bolivijsko';
$string['nationality.br'] = 'brazilsko';
$string['nationality.bs'] = 'bahamsko';
$string['nationality.bt'] = 'butansko';
$string['nationality.bw'] = 'botsvansko';
$string['nationality.by'] = 'belorusko';
$string['nationality.bz'] = 'belizijsko';
$string['nationality.ca'] = 'kanadsko';
$string['nationality.cd'] = 'kongovsko (Republike Kongo)';
$string['nationality.cf'] = 'centralnoafriško';
$string['nationality.cg'] = 'kongovsko (Demokratične republike Kongo))';
$string['nationality.ch'] = 'švicarsko';
$string['nationality.ci'] = 'slonokoščenootoško';
$string['nationality.cl'] = 'čilsko';
$string['nationality.cm'] = 'kamerunsko';
$string['nationality.cn'] = 'kitajsko';
$string['nationality.co'] = 'kolumbijsko';
$string['nationality.cr'] = 'kostariško';
$string['nationality.cu'] = 'kubansko';
$string['nationality.cv'] = 'zelenortsko';
$string['nationality.cy'] = 'ciprsko';
$string['nationality.cz'] = 'češko';
$string['nationality.de'] = 'nemško';
$string['nationality.dj'] = 'džibutsko';
$string['nationality.dk'] = 'dansko';
$string['nationality.dm'] = 'dominiško';
$string['nationality.do'] = 'dominikansko';
$string['nationality.dz'] = 'alžirsko';
$string['nationality.ec'] = 'ekvadorsko';
$string['nationality.ee'] = 'estonsko';
$string['nationality.eg'] = 'egiptovsko';
$string['nationality.er'] = 'eritrejsko';
$string['nationality.es'] = 'špansko';
$string['nationality.et'] = 'etijopijsko';
$string['nationality.fi'] = 'finsko';
$string['nationality.fj'] = 'fidžijsko';
$string['nationality.fm'] = 'mikronezijsko';
$string['nationality.fr'] = 'francosko';
$string['nationality.ga'] = 'gabonsko';
$string['nationality.gb'] = 'velikobritansko';
$string['nationality.gd'] = 'grenadsko';
$string['nationality.ge'] = 'georgijsko';
$string['nationality.gh'] = 'gansko';
$string['nationality.gl'] = 'grenlandsko';
$string['nationality.gm'] = 'gambijsko';
$string['nationality.gn'] = 'gvinejsko (Republike Gvineje)';
$string['nationality.gq'] = 'ekvatorijalnogvinejsko';
$string['nationality.gr'] = 'grško';
$string['nationality.gt'] = 'gvatemalsko';
$string['nationality.gw'] = 'gvinejsko (Republike Gvineja-Bissau)';
$string['nationality.gy'] = 'gvajansko';
$string['nationality.hn'] = 'honduraško';
$string['nationality.hr'] = 'hrvaško';
$string['nationality.ht'] = 'haitijsko';
$string['nationality.hu'] = 'madžarsko';
$string['nationality.id'] = 'indonezijsko';
$string['nationality.ie'] = 'irsko';
$string['nationality.il'] = 'izraelsko';
$string['nationality.in'] = 'indijsko';
$string['nationality.iq'] = 'iraško';
$string['nationality.ir'] = 'iransko';
$string['nationality.is'] = 'islandsko';
$string['nationality.it'] = 'italijansko';
$string['nationality.jm'] = 'jamajško';
$string['nationality.jo'] = 'jordansko';
$string['nationality.jp'] = 'japonsko';
$string['nationality.ke'] = 'kenijsko';
$string['nationality.kg'] = 'kirgistansko';
$string['nationality.kh'] = 'kamboško';
$string['nationality.ki'] = 'kiribatsko';
$string['nationality.km'] = 'komorsko';
$string['nationality.kn'] = 'saintkitsko';
$string['nationality.kp'] = 'korejsko (Demokratična ljudska republika)';
$string['nationality.kr'] = 'korejsko (Republika Koreja)';
$string['nationality.kw'] = 'kuvajtsko';
$string['nationality.kz'] = 'kazahstansko';
$string['nationality.la'] = 'laoško';
$string['nationality.lb'] = 'libanonsko';
$string['nationality.lc'] = 'svetolucijsko';
$string['nationality.li'] = 'liechsteinsteinsko';
$string['nationality.lk'] = 'šrilanško';
$string['nationality.lr'] = 'liberijsko';
$string['nationality.ls'] = 'lesotsko';
$string['nationality.lt'] = 'litvansko';
$string['nationality.lu'] = 'luksemburško';
$string['nationality.lv'] = 'latvijsko';
$string['nationality.ly'] = 'libijsko';
$string['nationality.ma'] = 'maroško';
$string['nationality.mc'] = 'monaško';
$string['nationality.md'] = 'moldavijsko';
$string['nationality.me'] = 'črnogorsko';
$string['nationality.mg'] = 'madagaskarsko';
$string['nationality.mh'] = 'marchallovootoško';
$string['nationality.mk'] = 'nekdanje jugoslovanske republike Makedonije';
$string['nationality.ml'] = 'malijsko';
$string['nationality.mm'] = 'burmansko';
$string['nationality.mn'] = 'mongolsko';
$string['nationality.mr'] = 'mavretansko';
$string['nationality.mt'] = 'maltsko';
$string['nationality.mu'] = 'mauricijsko';
$string['nationality.mv'] = 'maldivijsko';
$string['nationality.mw'] = 'malavijsko';
$string['nationality.mx'] = 'mehiško';
$string['nationality.my'] = 'melezijsko';
$string['nationality.mz'] = 'mozambiško';
$string['nationality.na'] = 'namibijsko';
$string['nationality.ne'] = 'nigersko';
$string['nationality.ng'] = 'nigerijsko';
$string['nationality.ni'] = 'nikaragovsko';
$string['nationality.nl'] = 'nizozemsko';
$string['nationality.no'] = 'norveško';
$string['nationality.np'] = 'nepalsko';
$string['nationality.nr'] = 'naurujsko';
$string['nationality.nu'] = 'niueško';
$string['nationality.nz'] = 'novozelandsko';
$string['nationality.om'] = 'omansko';
$string['nationality.pa'] = 'panamsko';
$string['nationality.pe'] = 'perujsko';
$string['nationality.pg'] = 'papuansko';
$string['nationality.ph'] = 'filipinsko';
$string['nationality.pk'] = 'pakistansko';
$string['nationality.pl'] = 'poljsko';
$string['nationality.pr'] = 'portoriško';
$string['nationality.ps'] = 'palestinsko';
$string['nationality.pt'] = 'portugalsko';
$string['nationality.pw'] = 'palauško';
$string['nationality.py'] = 'paragvajsko';
$string['nationality.qa'] = 'katarsko';
$string['nationality.ro'] = 'romunsko';
$string['nationality.rs'] = 'srbsko';
$string['nationality.ru'] = 'rusko';
$string['nationality.rw'] = 'ruandsko';
$string['nationality.sa'] = 'savdskoarabsko';
$string['nationality.sb'] = 'salomonovootoško';
$string['nationality.sc'] = 'sejšelsko';
$string['nationality.sd'] = 'sudansko';
$string['nationality.se'] = 'švedsko';
$string['nationality.sg'] = 'singapursko';
$string['nationality.si'] = 'slovensko';
$string['nationality.sk'] = 'slovaško';
$string['nationality.sl'] = 'sierraleonsko';
$string['nationality.sm'] = 'sanmarinsko';
$string['nationality.sn'] = 'senegalsko';
$string['nationality.so'] = 'somalsko';
$string['nationality.sr'] = 'surinamsko';
$string['nationality.st'] = 'saotomejsko';
$string['nationality.sv'] = 'salvadorsko';
$string['nationality.sy'] = 'sirijsko';
$string['nationality.sz'] = 'svazijsko';
$string['nationality.td'] = 'čadsko';
$string['nationality.tg'] = 'togovsko';
$string['nationality.th'] = 'tajsko';
$string['nationality.tj'] = 'tadžikistansko';
$string['nationality.tl'] = 'timorsko';
$string['nationality.tm'] = 'turkmensko';
$string['nationality.tn'] = 'tunizijsko';
$string['nationality.to'] = 'tongovsko';
$string['nationality.tr'] = 'turško';
$string['nationality.tt'] = 'trinidadsko';
$string['nationality.tv'] = 'tuvaluško';
$string['nationality.tz'] = 'tanzansko';
$string['nationality.ua'] = 'ukrajinsko';
$string['nationality.ug'] = 'ugandsko';
$string['nationality.us'] = 'ameriško (Združenih držav Amerike)';
$string['nationality.uy'] = 'urugvajsko';
$string['nationality.uz'] = 'uzbekistansko';
$string['nationality.va'] = 'vatikansko';
$string['nationality.vc'] = 'saintvincentsko';
$string['nationality.ve'] = 'venezuelsko';
$string['nationality.vn'] = 'vietnamsko';
$string['nationality.vu'] = 'vanuatujsko';
$string['nationality.ws'] = 'samojsko';
$string['nationality.ye'] = 'jemensko';
$string['nationality.za'] = 'južnoafriško';
$string['nationality.zm'] = 'zambijsko';
$string['nationality.zw'] = 'zimbabvejsko';

?>
