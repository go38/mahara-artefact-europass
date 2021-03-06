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
 * @translator Dominique-Alain Jan
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
$string['europassartefactsaved'] = 'Curriculum vitae Europass enregistré';
$string['europassexportgenerated'] = 'Veuillez patienter, votre fichier d\'exportation est en train d\'être généré...';
$string['europassexportnoconncetion'] = 'Une erreur s\'est produite lors de la connexion au serveur WSDL. Essayez plus tard à nouveau.';
$string['europassexportservererror'] = 'Une erreur s\'est produite sur le serveur WSDL. Essayez plus tard à nouveau.';
$string['europassextensionmissing'] = 'Désolé, vous ne pouvez pas utiliser l\'extention Europass car le module PHP suivant est absent de votre serveur : ';
$string['newerversionforcompatibility'] = 'Pour de meilleures performances et compatibilités, veuillez mettre à jour Mahara en version 1.3.0 ou plus récente.';

$string['languagesaved'] = 'Langue enregistrée';
$string['languagesavefailed'] = 'Erreur lors de l\'enregistrement de la langue';
$string['languagedeleteconfirm'] = 'Voulez-vous réellement supprimer cette langue ?';
$string['languagedeleted'] = 'Langue supprimée';

$string['moveup'] = 'Déplacer vers le haut';
$string['movedown'] = 'Déplacer vers le bas';

$string['languagediploma'] = 'Cerficats de langue';
$string['languageexperience'] = 'Expériences linguistiques';
$string['languagediplomadeleteconfirm'] = 'Voulez-vous réellement supprimer ce certificat de langue?';
$string['languageexperiencedeleteconfirm'] = 'Voulez-vous réellement supprimer cette expérience linguistique?';
$string['languagediplomadeleted'] = 'Certificat de langue supprimé';
$string['languageexperiencedeleted'] = 'Expérience linguistique supprimée';
$string['languagediplomasaved'] = 'Certificat de langue enregistré';
$string['languagediplomasavefailed'] = 'Erreur lors de l\'enregistrement du certificat de langue';
$string['languageexperiencesaved'] = 'Expérience linguistique enregistrée';
$string['languageexperiencesavefailed'] = 'Erreur lors de l\'enregistrement de l\'expérience linguistique';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exportation Europass';
$string['exportstep1'] = '1 - Langue et type du document';
$string['selectlocale&type'] = 'Choisissez la langue et le type du document';
$string['selectlocale'] = 'Langue';
$string['selectlocaledesc'] = 'Langue du document Europass';
$string['selectdocumenttype'] = 'Document';
$string['europassCV'] = 'le Curriculum vitae Europass';
$string['europassLP'] = 'le Passeport de langues Europass';
$string['photograph'] = 'Photographie';
$string['photographdesc'] = 'La photo sera intégrée dans le fichier Europass XML';
$string['phototoolarge'] = 'Taille du fichier trop importante. Le fichier ne doit pas excéder 100 ko.';
$string['exportstep2'] = '2 - Format de document';
$string['selectfiletype'] = 'Sélectionez un fichier et un format de date';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Format de date du système';
$string['selectinternaldatedesc'] = 'Format de date utilisé dans Mahara';
$string['internaldate-dmy11'] = 'jj/mm/aaaa';
$string['internaldate-dmy12'] = 'jj.mm.aaaa';
$string['internaldate-dmy13'] = 'jj-mm-aaaa';
$string['internaldate-dmy21'] = 'jj/mm/aa';
$string['internaldate-dmy22'] = 'jj.mm.aa';
$string['internaldate-dmy23'] = 'jj-mm-aa';
$string['internaldate-mdy11'] = 'mm/jj/aaaa';
$string['internaldate-mdy12'] = 'mm.jj.aaaa';
$string['internaldate-mdy13'] = 'mm-jj-aaaa';
$string['internaldate-mdy21'] = 'mm/jj/aa';
$string['internaldate-mdy22'] = 'mm.jj.aa';
$string['internaldate-mdy23'] = 'mm-jj-aa';
$string['internaldate-ymd11'] = 'aaaa/mm/jj';
$string['internaldate-ymd12'] = 'aaaa.mm.jj';
$string['internaldate-ymd13'] = 'aaaa-mm-jj';
$string['internaldate-ymd21'] = 'aa/mm/jj';
$string['internaldate-ymd22'] = 'aa.mm.jj';
$string['internaldate-ymd23'] = 'aa-mm-jj';
$string['internaldate-yonly'] = 'aaaa';
$string['internaldate-other'] = 'autre';
$string['externaldateformat'] = 'Format de date externe';
$string['selectexternaldatedesc'] = 'Format de date utilisé pour l\'exportation';
$string['externaldate-numeric-long'] = 'jj/mm/aaaa';
$string['externaldate-text-long'] = 'jj. mois aaaa';
$string['exportfile'] = 'Fichier';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Exportation';
$string['generate'] = 'Génération du fichier d\'exportation';
$string['generateexport'] = 'Exporter';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importer l\'Europass';
$string['importstep1'] = '1 - Importer le fichier et options';
$string['selectfile&options'] = 'Déposer le fichier XML Europass et sélectionner les options d\'importation';
$string['importstep2'] = '2 - Importation';
$string['execute'] = 'Executer l\'importation';
$string['executeimport'] = 'Importer';
$string['importfile'] = 'Fichier XML Europass';
$string['importfiledesc'] = 'Selectionner un fichier XML Europass valide pour à importer dans Mahara';
$string['notvalidxmlfile'] = 'Le fichier déposé n\'est pas un fichier XML valide.';
$string['importoptions'] = 'Que voulez-vous importer ?';
$string['importoptionsdesc'] = 'Les rubriques du profil qui sont bloquées ne seront pas modifiées';
$string['nocheckedoptions'] = 'Vous devez choisir au moins une rubrique à importer.';
$string['fieldnotimported'] = 'La rubrique «%s» n\'a pas été importée.';
$string['lockedfieldnotimported'] = 'La rubrique bloquée « %s » n\'a pas été importée.';
$string['languagecodemissing'] = 'La rubrique «%s» n\'a pas été importée. Le code de langue est absent.';
$string['importdate'] = 'Format des dates';
$string['europassimportexecuted'] = 'Les données du fichier XML Europass ont été importées avec succès dans Mahara.';

// Europass GUI form tabs
$string['application-tab'] = 'Lettre de motivation';
$string['workexperience-tab'] = 'Expérience professionnelle';
$string['education-tab'] = 'Formation';
$string['languages-tab'] = 'Langues';
$string['skills-tab'] = 'Compétences';

// Europass CV - STEP 1
$string['identification'] = 'Information personnelle';
$string['identification-birthdate'] = 'Date de naissance';
$string['identification-birthplace'] = 'Lieu de naissance';
$string['identification-lastname'] = 'Nom(s)';
$string['identification-firstname'] = 'Prénom(s)';
$string['identification-addressLine'] = 'Numéro / Rue';
$string['identification-municipality'] = 'Localité';
$string['identification-postalCode'] = 'Code postal';
$string['identification-country'] = 'Pays';
$string['identification-contactinfo-telephone'] = 'Téléphone(s)';
$string['identification-contactinfo-mobile'] = 'Portable';
$string['identification-contactinfo-fax'] = 'Télécopie(s)';
$string['identification-contactinfo-email'] = 'Courrier électronique';
$string['identification-nationality'] = 'Nationalité';
$string['identification-gender'] = 'Sexe';

// Europass CV - STEP 2
$string['application'] = 'Emploi recherché / Domaine de compétence';

// Europass CV - STEP 3
$string['workexperience'] = 'Expérience professionnelle';

// Europass CV - STEP 4
$string['education'] = 'Éducation et formation';

// Europass CV - STEP 5
$string['mothertongue'] = 'Langue(s) maternelle(s)';
$string['otherlanguage'] = 'Autre(s) langue(s)';

$string['language-foreign-listening'] = 'Ecoute';
$string['language-foreign-listening-th'] = 'Ecoute';
$string['language-foreign-reading'] = 'Lecture';
$string['language-foreign-reading-th'] = 'Lecture';
$string['language-foreign-spokeninteraction'] = 'Interaction orale';
$string['language-foreign-spokeninteraction-th'] = 'Interaction<br>orale';
$string['language-foreign-spokenproduction'] = 'Production orale';
$string['language-foreign-spokenproduction-th'] = 'Production<br>orale';
$string['language-foreign-writing'] = 'Ecrit';
$string['language-foreign-writing-th'] = 'Ecrit';
$string['language-foreign-CEF-level'] = 'Cadre européen commun de référence (CECR)';

$string['language-foreign-level.A1'] = 'Utilisateur élémentaire (A1)';
$string['language-foreign-level.A2'] = 'Utilisateur élémentaire (A2)';
$string['language-foreign-level.B1'] = 'Utilisateur indépendant (B1)';
$string['language-foreign-level.B2'] = 'Utilisateur indépendant (B2)';
$string['language-foreign-level.C1'] = 'Utilisateur expérimenté (C1)';
$string['language-foreign-level.C2'] = 'Utilisateur expérimenté (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Permis de conduire';
$string['skills-and-competences'] = 'Aptitudes et compétences personnelles';
$string['socialskill'] = 'Aptitudes et compétences sociales';
$string['organisationalskill'] = 'Aptitudes et compétences organisationnelles';
$string['technicalskill'] = 'Aptitudes et compétences techniques';
$string['computerskill'] = 'Aptitudes et compétences informatiques';
$string['artisticskill'] = 'Aptitudes et compétences artistiques';
$string['otherskill'] = 'Autres aptitudes et compétences';
$string['additionalinfo'] = 'Information complémentaire';
$string['annexes'] = 'Annexes';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplôme(s) ou certificat(s)';
$string['diploma-title'] = 'Intitulé';
$string['diploma-awardingBody'] = 'Organisme certificateur';
$string['diploma-date'] = 'Date';
$string['diploma-level'] = 'Niveau européen';
$string['language-experiences'] = 'Expérience(s) linguistique(s)';
$string['experiences-period-from'] = 'De';
$string['experiences-period-to'] = 'A';

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
$string['language.ab'] = 'Abkhaze';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonais';
$string['language.ar'] = 'Arabe';
$string['language.as'] = 'Assamais';
$string['language.az'] = 'Azéri; Azerbaïdjanais';
$string['language.be'] = 'Biélorusse';
$string['language.bg'] = 'Bulgare';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibétain';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bosniaque';
$string['language.ca'] = 'Catalan / Valencien';
$string['language.ce'] = 'Tchétchène';
$string['language.co'] = 'Corse';
$string['language.cs'] = 'Tchèque';
$string['language.cy'] = 'Gallois';
$string['language.da'] = 'Danois';
$string['language.de'] = 'Allemand';
$string['language.el'] = 'Grec';
$string['language.en'] = 'Anglais';
$string['language.es'] = 'Espagnol / Castillan';
$string['language.et'] = 'Estonien';
$string['language.eu'] = 'Basque';
$string['language.fa'] = 'Persan';
$string['language.fi'] = 'Finnois';
$string['language.fj'] = 'Fidjien';
$string['language.fo'] = 'Féroïen';
$string['language.fr'] = 'Français';
$string['language.fy'] = 'Frison';
$string['language.ga'] = 'Irlandais';
$string['language.gd'] = 'Gaélique / Gaélique écossais';
$string['language.gl'] = 'Galicien';
$string['language.gv'] = 'Manx; Mannois';
$string['language.he'] = 'Hébreu';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croate';
$string['language.ht'] = 'Haïtien; Créole haïtien';
$string['language.hu'] = 'Hongrois';
$string['language.hy'] = 'Arménien';
$string['language.id'] = 'Indonésien';
$string['language.is'] = 'Islandais';
$string['language.it'] = 'Italien';
$string['language.ja'] = 'Japonais';
$string['language.jv'] = 'Javanais';
$string['language.ka'] = 'Géorgien';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Coréen';
$string['language.ku'] = 'Kurde';
$string['language.kw'] = 'Cornique';
$string['language.ky'] = 'Kirghize';
$string['language.lb'] = 'Luxembourgeois';
$string['language.li'] = 'Limbourgeois';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lituanien';
$string['language.lv'] = 'Letton';
$string['language.mg'] = 'Malgache';
$string['language.mk'] = 'Macédonien';
$string['language.mn'] = 'Mongol';
$string['language.mo'] = 'Moldave';
$string['language.ms'] = 'Malais';
$string['language.mt'] = 'Maltais';
$string['language.my'] = 'Birman';
$string['language.nb'] = 'Norvégien (bokmål)';
$string['language.ne'] = 'Népalais';
$string['language.nl'] = 'Néerlandais';
$string['language.nn'] = 'Norvégien (nynorsk)';
$string['language.no'] = 'Norvégien';
$string['language.pl'] = 'Polonais';
$string['language.pt'] = 'Portugais';
$string['language.rm'] = 'Rhéto-roman ; (Romanche)';
$string['language.ro'] = 'Roumain';
$string['language.ru'] = 'Russe';
$string['language.r0'] = 'Tzigane'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sarde';
$string['language.se'] = 'Sami du Nord';
$string['language.sk'] = 'Slovaque';
$string['language.sl'] = 'Slovène';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanais';
$string['language.sr'] = 'Serbe';
$string['language.sv'] = 'Suédois';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmène';
$string['language.tr'] = 'Turc';
$string['language.ty'] = 'Tahitien';
$string['language.uk'] = 'Ukrainien';
$string['language.ur'] = 'Ourdou';
$string['language.uz'] = 'Ouszbek';
$string['language.vi'] = 'Vietnamien';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Chinois';
$string['language.cu'] = 'Slavon d\'église';
$string['language.eo'] = 'Espéranto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Occitan (après 1500); Provençal';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestique';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharique';
$string['language.av'] = 'Avar';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bachkir';
$string['language.bh'] = 'Langues Biharis';
$string['language.bi'] = 'Bichlamar';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Tchouvache';
$string['language.dv'] = 'Maldivien';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Éwé';
$string['language.ff'] = 'Peul';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Goudjrati';
$string['language.ha'] = 'Haoussa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (Langue auxiliaire internationale)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Yi de Sichuan';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu';
$string['language.kj'] = 'Kuanyama; Kwanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Groenlandais';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanouri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Kom';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-katanga';
$string['language.mh'] = 'Marshall';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathe';
$string['language.na'] = 'Nauruan';
$string['language.nd'] = 'Ndébélé du Nord';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndébélé du Sud';
$string['language.nv'] = 'Navaho';
$string['language.ny'] = 'Chichewa; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Galla';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossète';
$string['language.pa'] = 'Pendjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pachto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Rwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Singhalais';
$string['language.sm'] = 'Samoan';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho du Sud';
$string['language.su'] = 'Soundanais';
$string['language.ta'] = 'Tamoul';
$string['language.te'] = 'Télougou';
$string['language.tg'] = 'Tadjik';
$string['language.th'] = 'Thaï';
$string['language.ti'] = 'Tigrigna';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tongan (Îles Tonga)';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Ouïgour';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Wallon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang; Chuang';
$string['language.zu'] = 'Zoulou';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorre';
$string['country.ae'] = 'Émirats Arabes Unis';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua Et Barbuda';
$string['country.al'] = 'Albanie';
$string['country.am'] = 'Arménie';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentine';
$string['country.at'] = 'Autriche';
$string['country.au'] = 'Australie';
$string['country.az'] = 'Azerbaïdjan';
$string['country.ba'] = 'Bosnie-Herzégovine';
$string['country.bb'] = 'Barbade';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgique';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarie';
$string['country.bh'] = 'Bahreïn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Bénin';
$string['country.bn'] = 'Brunéi Darussalam';
$string['country.bo'] = 'Bolivie';
$string['country.br'] = 'Brésil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhoutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Bélarus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'République démocratique du  Congo';
$string['country.cf'] = 'Centrafricaine, République';
$string['country.cg'] = 'République du Congo';
$string['country.ch'] = 'Suisse';
$string['country.ci'] = 'Côte d´Ivoire';
$string['country.cl'] = 'Chili';
$string['country.cm'] = 'Cameroun';
$string['country.cn'] = 'Chine';
$string['country.co'] = 'Colombie';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Cap-Vert';
$string['country.cy'] = 'Chypre';
$string['country.cz'] = 'République tchèque';
$string['country.de'] = 'Allemagne';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danemark';
$string['country.dm'] = 'Dominique';
$string['country.do'] = 'République dominicaine';
$string['country.dz'] = 'Algérie';
$string['country.ec'] = 'Équateur';
$string['country.ee'] = 'Estonie';
$string['country.eg'] = 'Égypte';
$string['country.er'] = 'Érythrée';
$string['country.es'] = 'Espagne';
$string['country.et'] = 'Éthiopie';
$string['country.fi'] = 'Finlande';
$string['country.fj'] = 'Fidji';
$string['country.fm'] = 'Micronésie';
$string['country.fr'] = 'France';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Royaume-Uni';
$string['country.gd'] = 'Grenade';
$string['country.ge'] = 'Géorgie';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Groenland';
$string['country.gm'] = 'Gambie';
$string['country.gn'] = 'Guinée';
$string['country.gq'] = 'Guinée équatoriale';
$string['country.gr'] = 'Grèce';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinée-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croatie';
$string['country.ht'] = 'Haïti';
$string['country.hu'] = 'Hongrie';
$string['country.id'] = 'Indonésie';
$string['country.ie'] = 'Irlande';
$string['country.il'] = 'Israël';
$string['country.in'] = 'Inde';
$string['country.iq'] = 'Iraq';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islande';
$string['country.it'] = 'Italie';
$string['country.jm'] = 'Jamaïque';
$string['country.jo'] = 'Jordanie';
$string['country.jp'] = 'Japon';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirghizistan';
$string['country.kh'] = 'Cambodge';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comores';
$string['country.kn'] = 'Saint-Christophe-et-Niévès (Saint-Kitts-et-Nevis)';
$string['country.kp'] = 'Corée du Nord';
$string['country.kr'] = 'Corée du Sud';
$string['country.kw'] = 'Koweït';
$string['country.kz'] = 'Kazakstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Liban';
$string['country.lc'] = 'Sainte-Lucie';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Libéria';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lituanie';
$string['country.lu'] = 'Luxembourg';
$string['country.lv'] = 'Lettonie';
$string['country.ly'] = 'Libye';
$string['country.ma'] = 'Maroc';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldavie, République de';
$string['country.me'] = 'Monténégro';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Îles Marshall';
$string['country.mk'] = 'Ancienne République yougoslave de Macédoine';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolie';
$string['country.mr'] = 'Mauritanie';
$string['country.mt'] = 'Malte';
$string['country.mu'] = 'Maurice';
$string['country.mv'] = 'Maldives';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexique';
$string['country.my'] = 'Malaisie';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibie';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigéria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Pays-Bas';
$string['country.no'] = 'Norvège';
$string['country.np'] = 'Népal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niué';
$string['country.nz'] = 'Nouvelle-Zélande';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Pérou';
$string['country.pg'] = 'Papouasie-Nouvelle-Guinée';
$string['country.ph'] = 'Philippines';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Pologne';
$string['country.pr'] = 'Porto Rico';
$string['country.ps'] = 'Territoires autonomes palestiniens';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palaos';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Roumanie';
$string['country.rs'] = 'Serbie';
$string['country.ru'] = 'Russie';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Arabie Saoudite';
$string['country.sb'] = 'Îles Salomon';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Soudan';
$string['country.se'] = 'Suède';
$string['country.sg'] = 'Singapour';
$string['country.si'] = 'Slovénie';
$string['country.sk'] = 'Slovaquie';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'Saint-Marin';
$string['country.sn'] = 'Sénégal';
$string['country.so'] = 'Somalie';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'Sao Tomé-Et-Principe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrie';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Tchad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thaïlande';
$string['country.tj'] = 'Tadjikistan';
$string['country.tl'] = 'Timor Oriental';
$string['country.tm'] = 'Turkménistan';
$string['country.tn'] = 'Tunisie';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turquie';
$string['country.tt'] = 'Trinité-et-Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanie';
$string['country.ua'] = 'Ukraine';
$string['country.ug'] = 'Ouganda';
$string['country.us'] = 'États-Unis';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Ouzbékistan';
$string['country.va'] = 'Saint-Siège (État de la Cité du Vatican)';
$string['country.vc'] = 'Saint-Vincent-et-les-Grenadines';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Viet Nam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yémen';
$string['country.za'] = 'Afrique du Sud';
$string['country.zm'] = 'Zambie';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorrane';
$string['nationality.ae'] = 'Émiratie (Émirats arabes unis)';
$string['nationality.af'] = 'Afghane';
$string['nationality.ag'] = 'Antiguaise';
$string['nationality.al'] = 'Albanaise';
$string['nationality.am'] = 'Arménienne';
$string['nationality.ao'] = 'Angolaise';
$string['nationality.ar'] = 'Argentine';
$string['nationality.at'] = 'Autrichienne';
$string['nationality.au'] = 'Australienne';
$string['nationality.az'] = 'Azerbaïdjanaise';
$string['nationality.ba'] = 'Bosniaque-herzégovine';
$string['nationality.bb'] = 'Barbadienne';
$string['nationality.bd'] = 'Bangladaise';
$string['nationality.be'] = 'Belge';
$string['nationality.bf'] = 'Burkinabè';
$string['nationality.bg'] = 'Bulgare';
$string['nationality.bh'] = 'Bahreïnite';
$string['nationality.bi'] = 'Burundaise';
$string['nationality.bj'] = 'Béninoise';
$string['nationality.bn'] = 'brunéienne';
$string['nationality.bo'] = 'Bolivienne';
$string['nationality.br'] = 'Brésilienne';
$string['nationality.bs'] = 'Bahamienne';
$string['nationality.bt'] = 'Bhoutanaise';
$string['nationality.bw'] = 'Botswanaise';
$string['nationality.by'] = 'Biélorusse';
$string['nationality.bz'] = 'Bélisienne';
$string['nationality.ca'] = 'Canadienne';
$string['nationality.cd'] = 'Congolaise (République du Congo)';
$string['nationality.cf'] = 'Centrafricaine';
$string['nationality.cg'] = 'Congolaise (République démocratique du Congo)';
$string['nationality.ch'] = 'Suisse';
$string['nationality.ci'] = 'Ivoirienne';
$string['nationality.cl'] = 'Chilienne';
$string['nationality.cm'] = 'Camerounaise';
$string['nationality.cn'] = 'Chinoise';
$string['nationality.co'] = 'Colombienne';
$string['nationality.cr'] = 'Costaricienne';
$string['nationality.cu'] = 'Cubaine';
$string['nationality.cv'] = 'Cap-verdienne';
$string['nationality.cy'] = 'Chypriote';
$string['nationality.cz'] = 'Tchèque';
$string['nationality.de'] = 'Allemande';
$string['nationality.dj'] = 'Djiboutienne';
$string['nationality.dk'] = 'Danoise';
$string['nationality.dm'] = 'Dominicaine (Dominique)';
$string['nationality.do'] = 'Dominicaine (République dominicaine)';
$string['nationality.dz'] = 'Algérienne';
$string['nationality.ec'] = 'Équatorienne';
$string['nationality.ee'] = 'Estonienne';
$string['nationality.eg'] = 'Égyptienne';
$string['nationality.er'] = 'Érythréenne';
$string['nationality.es'] = 'Espagnole';
$string['nationality.et'] = 'Éthiopienne';
$string['nationality.fi'] = 'Finlandaise';
$string['nationality.fj'] = 'Fidjienne';
$string['nationality.fm'] = 'Micronésienne';
$string['nationality.fr'] = 'Française';
$string['nationality.ga'] = 'Gabonaise';
$string['nationality.gb'] = 'Britannique';
$string['nationality.gd'] = 'Grenadine';
$string['nationality.ge'] = 'Géorgienne';
$string['nationality.gh'] = 'Ghanéenne';
$string['nationality.gl'] = 'Groenlandaise';
$string['nationality.gm'] = 'Gambienne';
$string['nationality.gn'] = 'Guinéenne (République de Guinée)';
$string['nationality.gq'] = 'Équato-guinéenne (Guinée équatoriale)';
$string['nationality.gr'] = 'Grecque';
$string['nationality.gt'] = 'Guatémaltèque';
$string['nationality.gw'] = 'Guinéenne (République de Guinée-Bissau)';
$string['nationality.gy'] = 'Guyanienne (Guyana)';
$string['nationality.hn'] = 'Hondurienne';
$string['nationality.hr'] = 'Croate';
$string['nationality.ht'] = 'Haïtienne';
$string['nationality.hu'] = 'Hongroise';
$string['nationality.id'] = 'Indonésienne';
$string['nationality.ie'] = 'Irlandaise';
$string['nationality.il'] = 'Israélienne';
$string['nationality.in'] = 'Indienne';
$string['nationality.iq'] = 'Iraquienne';
$string['nationality.ir'] = 'Iranienne';
$string['nationality.is'] = 'Islandaise';
$string['nationality.it'] = 'Italienne';
$string['nationality.jm'] = 'Jamaïquaine';
$string['nationality.jo'] = 'Jordanienne';
$string['nationality.jp'] = 'Japonaise';
$string['nationality.ke'] = 'Kényane';
$string['nationality.kg'] = 'Kirghize';
$string['nationality.kh'] = 'Cambodgienne';
$string['nationality.ki'] = 'Kiribatienne';
$string['nationality.km'] = 'Comorienne';
$string['nationality.kn'] = 'de Saint-Kitts-et-Nevis';
$string['nationality.kp'] = 'Nord-coréenne (République populaire démocratique de Corée)';
$string['nationality.kr'] = 'Sud-coréenne (République de Corée)';
$string['nationality.kw'] = 'Koweïtienne';
$string['nationality.kz'] = 'Kazakhe';
$string['nationality.la'] = 'Laotienne';
$string['nationality.lb'] = 'Libanaise';
$string['nationality.lc'] = 'Saint-lucienne (Sainte Lucie)';
$string['nationality.li'] = 'Liechtensteinoise';
$string['nationality.lk'] = 'Sri-lankaise';
$string['nationality.lr'] = 'Libérienne';
$string['nationality.ls'] = 'Lesothane';
$string['nationality.lt'] = 'Lituanienne';
$string['nationality.lu'] = 'Luxembourgeoise';
$string['nationality.lv'] = 'Lettone';
$string['nationality.ly'] = 'Libyenne';
$string['nationality.ma'] = 'Marocaine';
$string['nationality.mc'] = 'Monégasque';
$string['nationality.md'] = 'Moldove';
$string['nationality.me'] = 'Monténégrine';
$string['nationality.mg'] = 'Malgache';
$string['nationality.mh'] = 'Marshallaise';
$string['nationality.mk'] = 'de l\'ancienne République yougoslave de Macédoine';
$string['nationality.ml'] = 'Malienne';
$string['nationality.mm'] = 'Birmane';
$string['nationality.mn'] = 'Mongole';
$string['nationality.mr'] = 'Mauritanienne';
$string['nationality.mt'] = 'Maltaise';
$string['nationality.mu'] = 'Mauricienne';
$string['nationality.mv'] = 'Maldivienne';
$string['nationality.mw'] = 'Malawienne';
$string['nationality.mx'] = 'Mexicaine';
$string['nationality.my'] = 'Malaisienne';
$string['nationality.mz'] = 'Mozambicaine';
$string['nationality.na'] = 'Namibienne';
$string['nationality.ne'] = 'Nigérienne (République du Niger)';
$string['nationality.ng'] = 'Nigérienne (République fédérale du Nigeria)';
$string['nationality.ni'] = 'Nicaraguayenne';
$string['nationality.nl'] = 'Néerlandaise';
$string['nationality.no'] = 'Norvégienne';
$string['nationality.np'] = 'Népalaise';
$string['nationality.nr'] = 'Nauruane';
$string['nationality.nu'] = 'Niouéenne';
$string['nationality.nz'] = 'Neo-zélandaise';
$string['nationality.om'] = 'Omanaise';
$string['nationality.pa'] = 'Panaméenne';
$string['nationality.pe'] = 'Péruvienne';
$string['nationality.pg'] = 'Papouane-néo-guinéenne';
$string['nationality.ph'] = 'Philippinne';
$string['nationality.pk'] = 'Pakistanaise';
$string['nationality.pl'] = 'Polonaise';
$string['nationality.pr'] = 'Portoricaine';
$string['nationality.ps'] = 'Palestinienne';
$string['nationality.pt'] = 'Portugaise';
$string['nationality.pw'] = 'Palaosienne';
$string['nationality.py'] = 'Paraguayenne';
$string['nationality.qa'] = 'Qatarienne';
$string['nationality.ro'] = 'Roumaine';
$string['nationality.rs'] = 'Serbe';
$string['nationality.ru'] = 'Russe';
$string['nationality.rw'] = 'Rwandaise';
$string['nationality.sa'] = 'Saoudienne';
$string['nationality.sb'] = 'Salomonaise';
$string['nationality.sc'] = 'Seychelloise';
$string['nationality.sd'] = 'Soudanaise';
$string['nationality.se'] = 'Suédoise';
$string['nationality.sg'] = 'Singapourienne';
$string['nationality.si'] = 'Slovène';
$string['nationality.sk'] = 'Slovaque';
$string['nationality.sl'] = 'Sierra-léonaise';
$string['nationality.sm'] = 'Saint-marinaise';
$string['nationality.sn'] = 'Sénégalaise';
$string['nationality.so'] = 'Somalienne';
$string['nationality.sr'] = 'Surinamaise';
$string['nationality.st'] = 'Santoméennne';
$string['nationality.sv'] = 'Salvadorienne';
$string['nationality.sy'] = 'Syrienne';
$string['nationality.sz'] = 'Swazie';
$string['nationality.td'] = 'Tchadienne';
$string['nationality.tg'] = 'Togolaise';
$string['nationality.th'] = 'Thaïlandaise';
$string['nationality.tj'] = 'Tadjike';
$string['nationality.tl'] = 'Est-timoraise';
$string['nationality.tm'] = 'Turkmène';
$string['nationality.tn'] = 'Tunisienne';
$string['nationality.to'] = 'Tonguienne';
$string['nationality.tr'] = 'Turque';
$string['nationality.tt'] = 'Trinidadienne';
$string['nationality.tv'] = 'Tuvaluane';
$string['nationality.tz'] = 'Tanzanienne';
$string['nationality.ua'] = 'Ukrainienne';
$string['nationality.ug'] = 'Ougandaise';
$string['nationality.us'] = 'Américaine';
$string['nationality.uy'] = 'Uruguayenne';
$string['nationality.uz'] = 'Ouzbèke';
$string['nationality.va'] = 'Vaticane';
$string['nationality.vc'] = 'Saint-vincentaise (Saint-Vincent-et-les Grenadines)';
$string['nationality.ve'] = 'Vénézuélienne';
$string['nationality.vn'] = 'Vietnamienne';
$string['nationality.vu'] = 'Tuvaluane';
$string['nationality.ws'] = 'Samoane';
$string['nationality.ye'] = 'Yéménite';
$string['nationality.za'] = 'Sud-africaine';
$string['nationality.zm'] = 'Zambienne';
$string['nationality.zw'] = 'Zimbabwéenne';

?>
