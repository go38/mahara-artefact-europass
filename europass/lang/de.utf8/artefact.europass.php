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
 * @translator Heinz Krettek
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
$string['europassartefactsaved'] = 'Europass Lebenslauf wurde erfolgriech gesichert';
$string['europassexportgenerated'] = 'Bitte warten Sie während die Exportdatei angelegt wird...';
$string['europassexportnoconncetion'] = 'Fehler beim Verbindungsaufbau mit dem WSDL Server. Biite versuchen Sie es später noch einmal.';
$string['europassexportservererror'] = 'Fehler in der WSDL Server Verbindung. Biite versuchen Sie es später noch einmal.';
$string['europassextensionmissing'] = 'Entschuldigung, Sie können das Europass Plugin nicht benutzen, weil Ihrer PHP Installation erforderliche Erweiterungen fehlen:';
$string['newerversionforcompatibility'] = 'Zur Steigerung der Geschwindigkeit und für bessere Kompatibilität sollte die Plattform auf Mahara Version 1.3.0 oderr aktueller aktualisiert werden.';

$string['languagesaved'] = 'Sprache wurde erfolgreich gespeichert';
$string['languagesavefailed'] = 'Fehler beim Speichern der Sprache';
$string['languagedeleteconfirm'] = 'Soll die Sprache wirklich gelöscht werden?';
$string['languagedeleted'] = 'Die Sprache wurde erfolgreich gelöscht';

$string['moveup'] = 'Nach oben';
$string['movedown'] = 'Nach unten';

$string['languagediploma'] = 'Sprachdiplom';
$string['languageexperience'] = 'Sprachkenntnis';
$string['languagediplomadeleteconfirm'] = 'Wollen Sie dieses Sprachdiplom wirklich löschen?';
$string['languageexperiencedeleteconfirm'] = 'Wollen Sie diese Sprachkenntnis wirklich löschen?';
$string['languagediplomadeleted'] = 'Das Sprachdiplom wurde erfolgreich gelöscht';
$string['languageexperiencedeleted'] = 'Die Sprachkenntnis wurde erfolgreich gelöscht';
$string['languagediplomasaved'] = 'Das Sprachdiplom wurde erfolgreich gespeichert';
$string['languagediplomasavefailed'] = 'Fehler beim Speichern des Sprachdiploms';
$string['languageexperiencesaved'] = 'Die Sprachkenntnis wurde erfolgreich gespeichert';
$string['languageexperiencesavefailed'] = 'Fehler beim Speichern der Sprachkenntnis';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Export Europass';
$string['exportstep1'] = '1 - Dokumentsprache und Typ';
$string['selectlocale&type'] = 'Wählen Sie die Dokumentsprache und den Typ';
$string['selectlocale'] = 'Sprache';
$string['selectlocaledesc'] = 'Europass Dokumentsprache';
$string['selectdocumenttype'] = 'Dokument';
$string['europassCV'] = 'Europass-Lebenslauf';
$string['europassLP'] = 'Europass-Sprachenpass';
$string['photograph'] = 'Bild';
$string['photographdesc'] = 'Da Bild wird in die Europass XML Version eingebettet';
$string['phototoolarge'] = 'Fehlerhate Dateigröße. Die Dateigröße darf 100 kB nicht übersteigen.';
$string['exportstep2'] = '2 - Dokument Format';
$string['selectfiletype'] = 'Wählen Sie die Datei und das Datumsformat';
$string['exportdate'] = 'Datum';
$string['internaldateformat'] = 'Internes Datumsformat';
$string['selectinternaldatedesc'] = 'Datumsformat das in Mahara benutzt wird';
$string['internaldate-dmy11'] = 'tt/mm/jjjj';
$string['internaldate-dmy12'] = 'tt.mm.jjjj';
$string['internaldate-dmy13'] = 'tt-mm-jjjj';
$string['internaldate-dmy21'] = 'tt/mm/jj';
$string['internaldate-dmy22'] = 'tt.mm.jj';
$string['internaldate-dmy23'] = 'tt-mm-jj';
$string['internaldate-mdy11'] = 'mm/tt/jjjj';
$string['internaldate-mdy12'] = 'mm.tt.jjjj';
$string['internaldate-mdy13'] = 'mm-tt-jjjj';
$string['internaldate-mdy21'] = 'mm/tt/jj';
$string['internaldate-mdy22'] = 'mm.tt.jj';
$string['internaldate-mdy23'] = 'mm-tt-jj';
$string['internaldate-ymd11'] = 'jjjj/mm/tt';
$string['internaldate-ymd12'] = 'jjjj.mm.tt';
$string['internaldate-ymd13'] = 'jjjj-mm-tt';
$string['internaldate-ymd21'] = 'jj/mm/tt';
$string['internaldate-ymd22'] = 'jj.mm.tt';
$string['internaldate-ymd23'] = 'jj-mm-tt';
$string['internaldate-yonly'] = 'jjjj';
$string['internaldate-other'] = 'anderes';
$string['externaldateformat'] = 'Externes Datumsformat';
$string['selectexternaldatedesc'] = 'Datumsformat, das für den Export verwendet wird';
$string['externaldate-numeric-long'] = 'tt/mm/jjjj';
$string['externaldate-text-long'] = 'tt. Monat jjjj';
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
$string['generate'] = 'Exportdatei anlegen';
$string['generateexport'] = 'Export';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Europass importieren';
$string['importstep1'] = '1 - Import Datei und Optionen';
$string['selectfile&options'] = 'Festlegung der Europass XML Datei und der Import Optionen';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Import ausführen';
$string['executeimport'] = 'Importieren';
$string['importfile'] = 'Europass XML Datei';
$string['importfiledesc'] = 'Wählen Sie für den Import nach Mahara eine gültige Europass XML Datei aus';
$string['notvalidxmlfile'] = 'Die hochgeladene Datei ist keine gültige XML Datei.';
$string['importoptions'] = 'Welche Optionen sollen importiert werden?';
$string['importoptionsdesc'] = 'Gesperrte Profilfelder werden nicht geändert oder aktualisiert';
$string['nocheckedoptions'] = 'Sie müssen für den Import zumindest 1 Option auswählen.';
$string['fieldnotimported'] = 'Das Feld "%s" wurde nicht importiert.';
$string['lockedfieldnotimported'] = 'Das gesperrte Feld "%s" wurde nicht importiert.';
$string['languagecodemissing'] = 'Das Feld "%s" wurde nicht importiert. Es fehlt der notwendige Sprachcode.';
$string['importdate'] = 'Format für Datumsangaben';
$string['europassimportexecuted'] = 'Die Informationen aus der Europass XML Datei wurden erfolgreich importiert.';

// Europass GUI form tabs
$string['application-tab'] = 'Bewerbung';
$string['workexperience-tab'] = 'Berufserfahrung';
$string['education-tab'] = 'Schul- und Berufsbildung';
$string['languages-tab'] = 'Sprachen';
$string['skills-tab'] = 'Kompetenzen';

// Europass CV - STEP 1
$string['identification'] = 'Angaben zur Person';
$string['identification-birthdate'] = 'Geburtsdatum';
$string['identification-birthplace'] = 'Geburtsort';
$string['identification-lastname'] = 'Nachname(n)';
$string['identification-firstname'] = 'Vorname(n)';
$string['identification-addressLine'] = 'Straße / Hausnummer';
$string['identification-municipality'] = 'Stadt';
$string['identification-postalCode'] = 'Postleitzahl';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-Mail';
$string['identification-nationality'] = 'Staatsangehörigkeit';
$string['identification-gender'] = 'Geschlecht';

// Europass CV - STEP 2
$string['application'] = 'Gewünschte Beschäftigung / Gewünschtes Berufsfeld';

// Europass CV - STEP 3
$string['workexperience'] = 'Berufserfahrung';

// Europass CV - STEP 4
$string['education'] = 'Schul- und Berufsbildung';

// Europass CV - STEP 5
$string['mothertongue'] = 'Muttersprache(n)';
$string['otherlanguage'] = 'Sonstige Sprache(n)';

$string['language-foreign-listening'] = 'Hören';
$string['language-foreign-listening-th'] = 'Hören';
$string['language-foreign-reading'] = 'Lesen';
$string['language-foreign-reading-th'] = 'Lesen';
$string['language-foreign-spokeninteraction'] = 'An Gesprächen teilnehmen';
$string['language-foreign-spokeninteraction-th'] = 'An Gesprächen<br>teilnehmen';
$string['language-foreign-spokenproduction'] = 'Zusammenhängendes Sprechen';
$string['language-foreign-spokenproduction-th'] = 'Zusammenhängendes<br>Sprechen';
$string['language-foreign-writing'] = 'Schreiben';
$string['language-foreign-writing-th'] = 'Schreiben';
$string['language-foreign-CEF-level'] = 'Referenzniveau des gemeinsamen europäischen Referenzrahmens für Sprachen';

$string['language-foreign-level.A1'] = 'Elementare Sprachverwendung (A1)';
$string['language-foreign-level.A2'] = 'Elementare Sprachverwendung (A2)';
$string['language-foreign-level.B1'] = 'Selbstständige Sprachverwendung (B1)';
$string['language-foreign-level.B2'] = 'Selbstständige Sprachverwendung (B2)';
$string['language-foreign-level.C1'] = 'Kompetente Sprachverwendung (C1)';
$string['language-foreign-level.C2'] = 'Kompetente Sprachverwendung (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Führerschein(e)';
$string['skills-and-competences'] = 'Persönliche Fähigkeiten und Kompetenzen';
$string['socialskill'] = 'Soziale Fähigkeiten und Kompetenzen';
$string['organisationalskill'] = 'Organisatorische Fähigkeiten und Kompetenzen';
$string['technicalskill'] = 'Technische Fähigkeiten und Kompetenzen';
$string['computerskill'] = 'IKT-Kenntnisse und Kompetenzen';
$string['artisticskill'] = 'Künstlerische Fähigkeiten und Kompetenzen';
$string['otherskill'] = 'Sonstige Fähigkeiten und Kompetenzen';
$string['additionalinfo'] = 'Zusätzliche Angaben';
$string['annexes'] = 'Anlagen';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplom(e) oder Zertifikat(e)';
$string['diploma-title'] = 'Bezeichnung';
$string['diploma-awardingBody'] = 'Ausstellende Stelle';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Europäische Kompetenzstufe';
$string['language-experiences'] = 'Sprachliche Erfahrung(en)';
$string['experiences-period-from'] = 'Von';
$string['experiences-period-to'] = 'Bis';

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
$string['language.ab'] = 'Abchasisch';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonesisch';
$string['language.ar'] = 'Arabisch';
$string['language.as'] = 'Assamesisch';
$string['language.az'] = 'Aserbeidschanisch';
$string['language.be'] = 'Weißrussisch';
$string['language.bg'] = 'Bulgarisch';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetisch';
$string['language.br'] = 'Bretonisch';
$string['language.bs'] = 'Bosnisch';
$string['language.ca'] = 'Katalanisch';
$string['language.ce'] = 'Tschetschenisch';
$string['language.co'] = 'Korsisch';
$string['language.cs'] = 'Tschechisch';
$string['language.cy'] = 'Kymrisch';
$string['language.da'] = 'Dänisch';
$string['language.de'] = 'Deutsch';
$string['language.el'] = 'Griechisch';
$string['language.en'] = 'Englisch';
$string['language.es'] = 'Spanisch / Kastilisch';
$string['language.et'] = 'Estnisch';
$string['language.eu'] = 'Baskisch';
$string['language.fa'] = 'Persisch';
$string['language.fi'] = 'Finnisch';
$string['language.fj'] = 'Fidschi-Sprache';
$string['language.fo'] = 'Färöisch';
$string['language.fr'] = 'Französisch';
$string['language.fy'] = 'Friesisch';
$string['language.ga'] = 'Irisch';
$string['language.gd'] = 'Gälisch-Schottisch';
$string['language.gl'] = 'Galicisch';
$string['language.gv'] = 'Manxs';
$string['language.he'] = 'Hebräisch';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Kroatisch';
$string['language.ht'] = 'Haitien; Frankokreolisch';
$string['language.hu'] = 'Ungarisch';
$string['language.hy'] = 'Armenisch';
$string['language.id'] = 'Bahasa Indonesia';
$string['language.is'] = 'Isländisch';
$string['language.it'] = 'Italienisch';
$string['language.ja'] = 'Japanisch';
$string['language.jv'] = 'Javanisch';
$string['language.ka'] = 'Georgisch';
$string['language.kg'] = 'Kongo-Sprache';
$string['language.ko'] = 'Koreanisch';
$string['language.ku'] = 'Kurdisch';
$string['language.kw'] = 'Kornisch';
$string['language.ky'] = 'Kirgisisch';
$string['language.lb'] = 'Luxemburgisch';
$string['language.li'] = 'Limburgisch';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litauisch';
$string['language.lv'] = 'Lettisch';
$string['language.mg'] = 'Malagassi-Sprache';
$string['language.mk'] = 'Makedonisch';
$string['language.mn'] = 'Mongolisch';
$string['language.mo'] = 'Moldauisch';
$string['language.ms'] = 'Malaiisch';
$string['language.mt'] = 'Maltesisch';
$string['language.my'] = 'Burmesisch; Birmanisch';
$string['language.nb'] = 'Norwegisch (Bokmål)';
$string['language.ne'] = 'Nepali';
$string['language.nl'] = 'Niederländisch';
$string['language.nn'] = 'Norwegisch (Nynorsk)';
$string['language.no'] = 'Norwegisch';
$string['language.pl'] = 'Polnisch';
$string['language.pt'] = 'Portugiesisch';
$string['language.rm'] = 'Rätoromanisch';
$string['language.ro'] = 'Rumänisch';
$string['language.ru'] = 'Russisch';
$string['language.r0'] = 'Zigeunersprache'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardisch';
$string['language.se'] = 'Nordsaamisch';
$string['language.sk'] = 'Slowakisch';
$string['language.sl'] = 'Slowenisch';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanisch';
$string['language.sr'] = 'Serbisch';
$string['language.sv'] = 'Schwedisch';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmenisch';
$string['language.tr'] = 'Türkisch';
$string['language.ty'] = 'Tahitisch';
$string['language.uk'] = 'Ukrainisch';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Usbekisch';
$string['language.vi'] = 'Vietnamesisch';
$string['language.yi'] = 'Jiddisch';
$string['language.zh'] = 'Chinesisch';
$string['language.cu'] = 'Kirchenslawisch';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latein';
$string['language.oc'] = 'Okzitanisch';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestisch';
$string['language.ak'] = 'Akan-Sprache';
$string['language.am'] = 'Amharisch';
$string['language.av'] = 'Awarisch';
$string['language.ay'] = 'Aymará-Sprache';
$string['language.ba'] = 'Baschkirisch';
$string['language.bh'] = 'Bihari Sprachen';
$string['language.bi'] = 'Bislamisch';
$string['language.bm'] = 'Bambara-Sprache';
$string['language.ch'] = 'Chamorro-Sprache';
$string['language.cr'] = 'Cree-Sprache';
$string['language.cv'] = 'Tschuwaschisch';
$string['language.dv'] = 'Maledivisch';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe-Sprache';
$string['language.ff'] = 'Ful';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujaratisch';
$string['language.ha'] = 'Haussa-Sprache';
$string['language.ho'] = 'Hiri-Motu';
$string['language.hz'] = 'Herero-Sprache';
$string['language.ia'] = 'Interlingua';
$string['language.ig'] = 'Ibo-Sprache';
$string['language.ii'] = 'Lalo-Sprache';
$string['language.ik'] = 'Inupiak';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu-Sprache';
$string['language.kj'] = 'Kwanyama-Sprache';
$string['language.kk'] = 'Kasachisch';
$string['language.kl'] = 'Grönländisch';
$string['language.km'] = 'Kambodschanisch';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri-Sprache';
$string['language.ks'] = 'Kaschmiri';
$string['language.kv'] = 'Komi-Sprache';
$string['language.lg'] = 'Ganda-Sprache';
$string['language.lo'] = 'Laotisch';
$string['language.lu'] = 'Luba-Katanga-Sprache';
$string['language.mh'] = 'Marschallesisch';
$string['language.mi'] = 'Maori-Sprache';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauruanisch';
$string['language.nd'] = 'Ndebele-Sprache (Simbabwe)';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele-Sprache (Transvaal)';
$string['language.nv'] = 'Navajo-Sprache';
$string['language.ny'] = 'Nyanja-Sprache';
$string['language.oj'] = 'Ojibwa-Sprache';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya-Sprache';
$string['language.os'] = 'Ossetisch';
$string['language.pa'] = 'Pundjabisch';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Paschtu';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Kirundisch';
$string['language.rw'] = 'Kijarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Zinti';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Singhalesisch';
$string['language.sm'] = 'Samoanisch';
$string['language.sn'] = 'Schonisch';
$string['language.ss'] = 'Swasiländisch';
$string['language.st'] = 'Sesothisch';
$string['language.su'] = 'Sudanesisch';
$string['language.ta'] = 'Tamilisch';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tadschikisch';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinja';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana-Sprache';
$string['language.to'] = 'Tongaisch';
$string['language.ts'] = 'Tsongaisch';
$string['language.tt'] = 'Tatarisch';
$string['language.tw'] = 'Twi-Sprache';
$string['language.ug'] = 'Uigurisch';
$string['language.ve'] = 'Venda-Sprache';
$string['language.wa'] = 'Wallonisch';
$string['language.wo'] = 'Wolof-Sprache';
$string['language.xh'] = 'Xhosa-Sprache';
$string['language.yo'] = 'Yoruba-Sprache';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu-Sprache';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Vereinigte Arabische Emirate';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua und Barbuda';
$string['country.al'] = 'Albanien';
$string['country.am'] = 'Armenien';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentinien';
$string['country.at'] = 'Österreich';
$string['country.au'] = 'Australien';
$string['country.az'] = 'Aserbaidschan';
$string['country.ba'] = 'Bosnien und Herzegowina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesch';
$string['country.be'] = 'Belgien';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarien';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei Darussalam';
$string['country.bo'] = 'Bolivien';
$string['country.br'] = 'Brasilien';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus (Weißrussland)';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratische Republik Kongo';
$string['country.cf'] = 'Zentralafrikanische Republik';
$string['country.cg'] = 'Republik Kongo';
$string['country.ch'] = 'Schweiz (Confoederatio Helvetica)';
$string['country.ci'] = 'Elfenbeinküste (Côte d\'Ivoire)';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'China';
$string['country.co'] = 'Kolumbien';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Kap Verde';
$string['country.cy'] = 'Zypern';
$string['country.cz'] = 'Tschechische Republik';
$string['country.de'] = 'Deutschland';
$string['country.dj'] = 'Dschibuti';
$string['country.dk'] = 'Dänemark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominikanische Republik';
$string['country.dz'] = 'Algerien';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estland (Reval)';
$string['country.eg'] = 'Ägypten';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spanien';
$string['country.et'] = 'Äthiopien';
$string['country.fi'] = 'Finnland';
$string['country.fj'] = 'Fidschi';
$string['country.fm'] = 'Mikronesien';
$string['country.fr'] = 'Frankreich';
$string['country.ga'] = 'Gabun';
$string['country.gb'] = 'Vereinigtes Königreich';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgien';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grönland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Äquatorialguinea';
$string['country.gr'] = 'Griechenland';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatien (Hrvatska)';
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
$string['country.jm'] = 'Jamaika';
$string['country.jo'] = 'Jordanien';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenia';
$string['country.kg'] = 'Kirgisistan';
$string['country.kh'] = 'Kambodscha';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komoren';
$string['country.kn'] = 'St. Kitts und Nevis';
$string['country.kp'] = 'Nord-Korea';
$string['country.kr'] = 'Süd-Korea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kasachstan';
$string['country.la'] = 'Laos, Demokratische Volksrepublik';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'St. Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litauen';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Lettland';
$string['country.ly'] = 'Libyen';
$string['country.ma'] = 'Marokko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldawien';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshallinseln';
$string['country.mk'] = 'ehem. jugoslawische Republik Mazedonien';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolei';
$string['country.mr'] = 'Mauretanien';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Malediven';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexiko';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mosambik';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Niederlande';
$string['country.no'] = 'Norwegen';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Neuseeland';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Neuguinea';
$string['country.ph'] = 'Philippinen';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polen';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Palästinensische Autonomiegebiete';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumänien';
$string['country.rs'] = 'Serbien';
$string['country.ru'] = 'Russische Föderation';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Saudi-Arabien';
$string['country.sb'] = 'Salomonen';
$string['country.sc'] = 'Seychellen';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Schweden';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slowenien';
$string['country.sk'] = 'Slowakei';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'São Tomé und Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrien';
$string['country.sz'] = 'Swasiland';
$string['country.td'] = 'Tschad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tadschikistan';
$string['country.tl'] = 'Timor-Leste';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunesien';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Türkei';
$string['country.tt'] = 'Trinidad und Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tansania';
$string['country.ua'] = 'Ukraine';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Vereinigte Staaten von Amerika';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Usbekistan';
$string['country.va'] = 'Vatikanstadt';
$string['country.vc'] = 'St.Vincent und die Grenadinen';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Südafrika';
$string['country.zm'] = 'Sambia';
$string['country.zw'] = 'Simbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorranisch';
$string['nationality.ae'] = 'Emiratisch (Vereinigten Arabischen Emirate)';
$string['nationality.af'] = 'Afghanisch';
$string['nationality.ag'] = 'Antiguanisch';
$string['nationality.al'] = 'Albanisch';
$string['nationality.am'] = 'Armenisch';
$string['nationality.ao'] = 'Angolanisch';
$string['nationality.ar'] = 'Argentinisch';
$string['nationality.at'] = 'Österreichisch';
$string['nationality.au'] = 'Australisch';
$string['nationality.az'] = 'Aserbaidschanisch';
$string['nationality.ba'] = 'Bosnisch-herzegowinisch';
$string['nationality.bb'] = 'Barbadisch';
$string['nationality.bd'] = 'Bangladeschisch';
$string['nationality.be'] = 'Belgisch';
$string['nationality.bf'] = 'Burkinisch';
$string['nationality.bg'] = 'Bulgarisch';
$string['nationality.bh'] = 'Bahrainisch';
$string['nationality.bi'] = 'Burundisch';
$string['nationality.bj'] = 'Beninisch';
$string['nationality.bn'] = 'Bruneiisch';
$string['nationality.bo'] = 'Bolivianisch';
$string['nationality.br'] = 'Brasilianisch';
$string['nationality.bs'] = 'Bahamisch';
$string['nationality.bt'] = 'Bhutanisch';
$string['nationality.bw'] = 'Botsuanisch';
$string['nationality.by'] = 'Belarussisch';
$string['nationality.bz'] = 'Belisisch';
$string['nationality.ca'] = 'Kanadisch';
$string['nationality.cd'] = 'Kongolesisch (Republik Kongo)';
$string['nationality.cf'] = 'Zentralafrikanisch';
$string['nationality.cg'] = 'Kongolesisch (Demokratische Republik Kongo)';
$string['nationality.ch'] = 'Schweizerisch';
$string['nationality.ci'] = 'Ivorisch';
$string['nationality.cl'] = 'Chilenisch';
$string['nationality.cm'] = 'Kamerunisch';
$string['nationality.cn'] = 'Kinesisch';
$string['nationality.co'] = 'Kolumbianisch';
$string['nationality.cr'] = 'Costa-Ricanisch';
$string['nationality.cu'] = 'Kubanisch';
$string['nationality.cv'] = 'Kap-verdisch';
$string['nationality.cy'] = 'Zyprisch';
$string['nationality.cz'] = 'Tschechisch';
$string['nationality.de'] = 'Deutsch';
$string['nationality.dj'] = 'Dschibutisch';
$string['nationality.dk'] = 'Dänisch';
$string['nationality.dm'] = 'Dominikanisch (Dominica)';
$string['nationality.do'] = 'Dominikanisch (Dominikanische Republik)';
$string['nationality.dz'] = 'Algerierisch';
$string['nationality.ec'] = 'Ecuadorianisch';
$string['nationality.ee'] = 'Estnisch';
$string['nationality.eg'] = 'Ägyptisch';
$string['nationality.er'] = 'Eritreisch';
$string['nationality.es'] = 'Spanisch';
$string['nationality.et'] = 'Äthiopisch';
$string['nationality.fi'] = 'Finnisch';
$string['nationality.fj'] = 'Fidschianisch';
$string['nationality.fm'] = 'Mikronesisch';
$string['nationality.fr'] = 'Franzosisch';
$string['nationality.ga'] = 'Gabunisch';
$string['nationality.gb'] = 'Britisch';
$string['nationality.gd'] = 'Grenadisch';
$string['nationality.ge'] = 'Georgisch';
$string['nationality.gh'] = 'Ghanaisch';
$string['nationality.gl'] = 'Grönländisch';
$string['nationality.gm'] = 'Gambisch';
$string['nationality.gn'] = 'Guineisch (Republik Guinea)';
$string['nationality.gq'] = 'Äquatorialguineisch (Republik Äquatorialguinea)';
$string['nationality.gr'] = 'Griechisch';
$string['nationality.gt'] = 'Guatemaltekisch';
$string['nationality.gw'] = 'Guinea-bissauisch (Republik Guinea-Bissau)';
$string['nationality.gy'] = 'Guyanisch (Guyana)';
$string['nationality.hn'] = 'Honduranisch';
$string['nationality.hr'] = 'Kroatisch';
$string['nationality.ht'] = 'Haitianisch';
$string['nationality.hu'] = 'Ungarisch';
$string['nationality.id'] = 'Indonesisch';
$string['nationality.ie'] = 'Irisch';
$string['nationality.il'] = 'Israelisch';
$string['nationality.in'] = 'Indisch';
$string['nationality.iq'] = 'Irakisch';
$string['nationality.ir'] = 'Iranisch';
$string['nationality.is'] = 'Isländisch';
$string['nationality.it'] = 'Italienisch';
$string['nationality.jm'] = 'Jamaikanisch';
$string['nationality.jo'] = 'Jordanisch';
$string['nationality.jp'] = 'Japanisch';
$string['nationality.ke'] = 'Kenianisch';
$string['nationality.kg'] = 'Kirgisisch';
$string['nationality.kh'] = 'Kambodschanisch';
$string['nationality.ki'] = 'Kiribatisch';
$string['nationality.km'] = 'Komorisch';
$string['nationality.kn'] = 'der St. Kitts und Nevis';
$string['nationality.kp'] = 'Nord-Koreanisch (Demokratische Volksrepublik Korea)';
$string['nationality.kr'] = 'Südkoreanisch (Republik Korea)';
$string['nationality.kw'] = 'Kuwaitisch';
$string['nationality.kz'] = 'Kasachisch';
$string['nationality.la'] = 'Laotisch';
$string['nationality.lb'] = 'Libanesisch';
$string['nationality.lc'] = 'Lucianisch (St. Lucia)';
$string['nationality.li'] = 'Liechtensteinisch';
$string['nationality.lk'] = 'Sri-Lankisch';
$string['nationality.lr'] = 'Liberianisch';
$string['nationality.ls'] = 'Lesothisch';
$string['nationality.lt'] = 'Litauisch';
$string['nationality.lu'] = 'Luxemburgisch';
$string['nationality.lv'] = 'Lettisch';
$string['nationality.ly'] = 'Libysch';
$string['nationality.ma'] = 'Marokkanisch';
$string['nationality.mc'] = 'Monegassisch';
$string['nationality.md'] = 'Moldauisch';
$string['nationality.me'] = 'Montenegrinisch';
$string['nationality.mg'] = 'Madagassisch';
$string['nationality.mh'] = 'Marshallisch';
$string['nationality.mk'] = 'aus der ehemaligen jugoslawischen Republik Mazedonien (EJR)';
$string['nationality.ml'] = 'Malisch';
$string['nationality.mm'] = 'Burmesisch/myanmarisch';
$string['nationality.mn'] = 'Mongolisch';
$string['nationality.mr'] = 'Mauretanisch';
$string['nationality.mt'] = 'Maltesisch';
$string['nationality.mu'] = 'Mauritisch';
$string['nationality.mv'] = 'Maledivische';
$string['nationality.mw'] = 'Malawisch';
$string['nationality.mx'] = 'Mexikanisch';
$string['nationality.my'] = 'Malaysisch';
$string['nationality.mz'] = 'Mosambikanisch';
$string['nationality.na'] = 'Namibisch';
$string['nationality.ne'] = 'Nigrisch (Republik Niger)';
$string['nationality.ng'] = 'Nigerianisch (Bundesrepublik Nigeria)';
$string['nationality.ni'] = 'Nicaraguanisch';
$string['nationality.nl'] = 'Niederländisch';
$string['nationality.no'] = 'Norwegisch';
$string['nationality.np'] = 'Nepalesisch';
$string['nationality.nr'] = 'Nauruisch';
$string['nationality.nu'] = 'Niueanisch';
$string['nationality.nz'] = 'Neuseeländisch';
$string['nationality.om'] = 'Omanisch';
$string['nationality.pa'] = 'Panamaisch';
$string['nationality.pe'] = 'Peruanisch';
$string['nationality.pg'] = 'Papua-Neuguineisch';
$string['nationality.ph'] = 'Philippinisch';
$string['nationality.pk'] = 'Pakistanisch';
$string['nationality.pl'] = 'Polnisch';
$string['nationality.pr'] = 'Puerto-ricanische';
$string['nationality.ps'] = 'aus der palästinensischen Autonomiegebiete';
$string['nationality.pt'] = 'Portugiesisch';
$string['nationality.pw'] = 'Palauisch';
$string['nationality.py'] = 'Paraguayisch';
$string['nationality.qa'] = 'Katarisch';
$string['nationality.ro'] = 'Rumänisch';
$string['nationality.rs'] = 'Serbisch';
$string['nationality.ru'] = 'Russisch';
$string['nationality.rw'] = 'Ruandisch';
$string['nationality.sa'] = 'Saudi-Arabisch';
$string['nationality.sb'] = 'Salomonisch';
$string['nationality.sc'] = 'Seychellisch';
$string['nationality.sd'] = 'Sudanesisch';
$string['nationality.se'] = 'Schwedisch';
$string['nationality.sg'] = 'Singapurisch';
$string['nationality.si'] = 'Slowenisch';
$string['nationality.sk'] = 'Slowakisch';
$string['nationality.sl'] = 'Sierra-Leonisch';
$string['nationality.sm'] = 'San-marinesisch';
$string['nationality.sn'] = 'Senegalesisch';
$string['nationality.so'] = 'Somalisch';
$string['nationality.sr'] = 'Surinamisch';
$string['nationality.st'] = 'São-Toméisch';
$string['nationality.sv'] = 'Salvadorianisch';
$string['nationality.sy'] = 'Syrisch';
$string['nationality.sz'] = 'Swasiländisch';
$string['nationality.td'] = 'Tschadisch';
$string['nationality.tg'] = 'Togoisch';
$string['nationality.th'] = 'Thailändisch';
$string['nationality.tj'] = 'Tadschikisch';
$string['nationality.tl'] = 'Osttimorisch';
$string['nationality.tm'] = 'Turkmenisch';
$string['nationality.tn'] = 'Tunesisch';
$string['nationality.to'] = 'Tongaisch';
$string['nationality.tr'] = 'Türkisch';
$string['nationality.tt'] = 'Trinidadisch';
$string['nationality.tv'] = 'Tuvaluische';
$string['nationality.tz'] = 'Tansanisch';
$string['nationality.ua'] = 'Ukrainisch';
$string['nationality.ug'] = 'Ugandisch';
$string['nationality.us'] = 'Amerikanisch';
$string['nationality.uy'] = 'Uruguayisch';
$string['nationality.uz'] = 'Usbekisch';
$string['nationality.va'] = 'Vatikanisch';
$string['nationality.vc'] = 'Vincentisch (St. Vincent und die Grenadinen)';
$string['nationality.ve'] = 'Venezolanisch';
$string['nationality.vn'] = 'Vietnamesisch';
$string['nationality.vu'] = 'Tuvaluisch';
$string['nationality.ws'] = 'Samoanisch';
$string['nationality.ye'] = 'Jemenitisch';
$string['nationality.za'] = 'Südafrikanisch';
$string['nationality.zm'] = 'Sambisch';
$string['nationality.zw'] = 'Simbabwisch';

?>
