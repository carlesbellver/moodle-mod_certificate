<?php

// This file is part of the Certificate module for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings for the certificate module
 *
 * @package    mod
 * @subpackage certificate
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addlinklabel'] = 'Afegeix una altra opció d\'activitat vinculada';
$string['addlinktitle'] = 'Feu clic per afegir una altra opció d\'activitat vinculada';
$string['areaintro'] = 'Introducció del certifcat';
$string['awarded'] = 'Atorgat';
$string['awardedto'] = 'Atorgat a';
$string['back'] = 'Darrere';
$string['border'] = 'Vora';
$string['borderblack'] = 'Negres';
$string['borderblue'] = 'Blaves';
$string['borderbrown'] = 'Marrons';
$string['bordercolor'] = 'Línies de la vora';
$string['bordercolor_help'] = 'Donat que les imatges poden augmentar substancialment la mida del fitxer pdf, podeu triar imprimir una vora de línies en comptes d\'utilitzar una imatge com a vora (assegureu-vos que l\'opció d\'Imatge de la vora està definida com a No). L\'opció de Línies de la vora imprimirà una bonica vora de tres línies de diverses amplàries en el color que trieu.';
$string['bordergreen'] = 'Verds';
$string['borderlines'] = 'Línies';
$string['borderstyle'] = 'Imatge de la vora';
$string['borderstyle_help'] = 'L\'opció d\'Imatge de la vora permet triar una imatge per a la vora des de la carpeta certificate/pix/borders. Seleccioneu la imatge que voleu que envolte els marges del certificat o seleccioneu No.';
$string['certificate'] = 'Verificació del codi del certificat:';
$string['certificate:addinstance'] = 'Afegiu una instància del certificat';
$string['certificate:manage'] = 'Administreu una instància del certificat';
$string['certificate:printteacher'] = 'Llistar-se com a professorat en el certificat si el paràmetre Imprimeix profesorat està activat';
$string['certificate:student'] = 'Recupera un certificat';
$string['certificate:view'] = 'Visualitza un certificat';
$string['certificatename'] = 'Nom del certificat';
$string['certificatereport'] = 'Informe de certificats';
$string['certificatesfor'] = 'Certificats per a';
$string['certificatetype'] = 'Tipus de certificat';
$string['certificatetype_help'] = 'On determineu la disposició del certificat. La carpeta de tipus de certificat inclou quatre certificats per defecte:
A4 incrustat imprimeix en paper de mida A4 amb font incrustada. 
A4 no incrustat imprimeix en paper de mida A4 sense fonts incrustades.
Carta incrustat imprimeix en paper de mida Carta amb font incrustada.
Carta no incrustat imprimeix en paper de mida Carta sense fonts incrustades. 

Els tipus no incrustats utilitzen les fonts Helvetica i Times. Si penseu que els vostres usuaris no tindran aquestes fonts en els seus ordinadors, o bé, si el vostre idioma utilitza caracters o símbols no admesos per les fonts Helvetica i Times, trieu un tipus incrustat. Els tipus incrustats empren les fonts Dejavusans i Dejavuserif. Això pot fer els fitxers pdf molt grans, de manera que no es recomana l\'ús d\'un tipus incrustat si no és necessari.

Es poden afegir més tipus a la carpeta certificate/type. El nom de la carpeta i qualsevol cadena d\'idioma nova per al nou tipus s\'ha d\'afegir al fitxer d\'idioma del certificat.';
$string['certify'] = 'Açò és per a certificar que';
$string['code'] = 'Codi';
$string['completiondate'] = 'Compleció del curs';
$string['course'] = 'Per a';
$string['coursegrade'] = 'Qualificació del curs';
$string['coursename'] = 'Curs';
$string['coursetimereq'] = 'Minuts requerits en el curs';
$string['coursetimereq_help'] = 'Introduïu la quantitat mínima de temps, en minuts, que l\'estudiantat ha d\'estar registrat en el curs abans de poder rebre el certificat.';
$string['credithours'] = 'Càrrega de treball estimada per a completar aquest curs: {$a} hores.';
$string['customtext'] = 'Text personalitzat';
$string['customtext_help'] = 'Si voleu que el certificat tinga impresos noms de professorat diferents a les persones amb rol de professorat al curs, no trieu Imprimeix profesorat ni qualsevol Imatge de la signatura, excepte la imatge de la línia. Introduïu el nom del professorat en aquesta àrea de text tal i com voleu que apareguin. Per defecte, aquest text se situa baix a l\'esquerra del certificat. Estan disponibles les següents etiquetes html: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src i width (o height) són necessàries), &lt;a&gt; (href és necessària), &lt;font&gt; (els possibles atributs són: color, (codi de color hexagessimal), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'El';
$string['datefmt'] = 'Format de data';
$string['datefmt_help'] = 'Trieu un format de data per a imprimir la data en el certificat. O bé, trieu la darrera opció per a imprimir la data en el format de l\'idioma triat per l\'usuari.';
$string['datehelp'] = 'Data';
$string['deletissuedcertificates'] = 'Suprimeix els certificats emesos';
$string['delivery'] = 'Lliurament';
$string['delivery_help'] = 'Trieu com us agradaria que el vostre estudiantat obtingui el seu certificat.
Obri al navegador: Obre el certificat en una nova finestra del navegador.
Força la descàrrega: Obre la finestra de descàrrega de fitxers del navegador.
Envia per correu electrònic: Si escolliu aquesta opció s\'enviarà el certificat a l\'estudiantat com a fitxer adjunt d\'un correu electrònic.
Quan un usuari rep el seu certificat, si fa clic a l\'enllaç del certificat des de la pàgina principal del curs, veurà la data en què l\'ha rebut i podrà revisar-lo.';
$string['designoptions'] = 'Opcions de disseny';
$string['download'] = 'Força la descàrrega';
$string['emailcertificate'] = 'Envia per correu electrònic (també heu de Desar!!)';
$string['emailothers'] = 'Envia a d\'altres';
$string['emailothers_help'] = 'Introduïu les adreces de correu electrònic, separades per una coma, de les persones a qui s\'hauria d\'avisar amb un correu electrònic cada vegada que l\'estudiantat rebi un certificat';
$string['emailstudenttext'] = 'S\'adjunta el vostre certificat per a {$a->course}.';
$string['emailteachers'] = 'Envia per correu electrònic al professorat';
$string['emailteachers_help'] = 'Si està habilitat, el professorat rebrà un correu electrònic cada vegada que l\'estudiantat rebi un certificat.';
$string['emailteachermail'] = '
{$a->student} ha rebut el seu certificat: \'{$a->certificate}\'
per a {$a->course}.

Podeu revisar-lo ací:

    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} ha rebut el seu certificat: \'<i>{$a->certificate}</i>\'
per a {$a->course}.

Podeu revisar-lo ací:

    <a href="{$a->url}">Informe del certificat</a>.';
$string['entercode'] = 'Introduïu el codi del certificat per verificar-lo:';
$string['getcertificate'] = 'Obteniu el vostre certificat';
$string['grade'] = 'Qualificació';
$string['gradedate'] = 'Data de qualificació';
$string['gradefmt'] = 'Format de qualificació';
$string['gradefmt_help'] = 'Hi ha tres formats disponibles si trieu imprimir una qualificació en el certificat:

Qualificació amb percentatge: Imprimeix la qualificació com a percentatge.
Qualificació amb puntuació: Imprimeix el valor de la puntuació de la qualificació.
Qualificació amb lletra: Imprimeix el percentatge de qualificació com a lletra.';
$string['gradeletter'] = 'Qualificació amb lletra';
$string['gradepercent'] = 'Qualificació amb percentatge';
$string['gradepoints'] = 'Qualificació amb puntuació';
$string['imagetype'] = 'Tipus d\'imatge';
$string['incompletemessage'] = 'Per tal de descarregar-vos el vostre certificat, primer heu de completar totes les activitats requerides. Torneu al curs per completar el vostre treball del curs.';
$string['intro'] = 'Introducció';
$string['issueoptions'] = 'Opcions d\'emissió';
$string['issued'] = 'Emès';
$string['issueddate'] = 'Data d\'emissió';
$string['landscape'] = 'Horitzontal';
$string['lastviewed'] = 'Heu rebut aquest certificat per darrera vegada el:';
$string['letter'] = 'Lletra';
$string['lockingoptions'] = 'Opcions de bloqueig';
$string['modulename'] = 'Certificat';
$string['modulenameplural'] = 'Certificats';
$string['mycertificates'] = 'Els meus certificats';
$string['nocertificates'] = 'No hi ha certificats';
$string['nocertificatesissued'] = 'No hi ha certificats emesos';
$string['nocertificatesreceived'] = 'no ha rebut cap certificat del curs.';
$string['nofileselected'] = 'Heu de seleccionar un fitxer per carregar-lo!';
$string['nogrades'] = 'No hi ha qualificacions disponibles';
$string['notapplicable'] = 'N/D';
$string['notfound'] = 'No s\'ha pogut validar el número de certificat';
$string['notissued'] = 'No s\'ha emès';
$string['notissuedyet'] = 'No s\'ha emès encara';
$string['notreceived'] = 'No heu rebut aquest certificat';
$string['openbrowser'] = 'Obri en una nova finestra';
$string['opendownload'] = 'Feu clic al botó de sota per desar el certificat al vostre ordinador.';
$string['openemail'] = 'Feu clic al botó de sota i el vostre certificat se us enviarà com a fitxer adjunt en un correu electrònic.';
$string['openwindow'] = 'Feu clic al botó de sota per obrir el certificat en una nova finestra del navegador.';
$string['or'] = 'Or';
$string['orientation'] = 'Orientació';
$string['orientation_help'] = 'Trieu si voleu que l\'orientació del certificat sigui vertical o horitzontal.';
$string['pluginadministration'] = 'Administració del certificat';
$string['pluginname'] = 'Certificat';
$string['portrait'] = 'Vertical';
$string['printdate'] = 'Imprimeix data';
$string['printdate_help'] = 'Aquesta és la data que s\'imprimirà, si se selecciona una data d\'impressió. Si se selecciona la data de compleció de curs, però l\'estudiantat no ha completat el curs, s\'imprimirà la data de recepció. També podeu optar per imprimir la data en funció de quan es va qualificar una activitat. Si s\'emet un certificat abans que es qualifiqui l\'activitat, s\'imprimirà la data de recepció.';
$string['printerfriendly'] = 'Versió imprimible de la pàgina';
$string['printhours'] = 'Imprimeix el crèdit en hores';
$string['printhours_help'] = 'Introduïu el nombre d\'hores de crèdit que s\'imprimiran en el certificat.';
$string['printgrade'] = 'Imprimeix qualificació';
$string['printgrade_help'] = 'Podeu triar qualsevol element de qualificació del curs disponible en el butlletí de qualificacions, per tal d\'imprimir en el certificat la qualificació rebuda per l\'usuari en aquest element. Els elements de qualificació s\'enumeren en l\'ordre en què apareixen en el butlletí de qualificacions. Trieu el format de la qualificació a continuació.';
$string['printnumber'] = 'Imprimeix codi';
$string['printnumber_help'] = 'Es pot imprimir al certificat un codi únic de 10 dígits de lletres i números aleatoris. Aquest número es pot verificat comparant-lo amb el número de codi que apareix a l\'informe de certificats.';
$string['printoutcome'] = 'Imprimeix competència';
$string['printoutcome_help'] = 'Podeu triar qualsevol competència de curs per tal d\'imprimir al certificat el nom de la competència i el nivell de competència obtingut per l\'usuari. Un exemple podria ser: Competència de treball en equip: És capaç d\'integrar-se ràpidament i treballar eficientment en equips unidisciplinars i de col·laborar en un entorn multidisciplinar.';
$string['printseal'] = 'Imatge del segell o del logotip';
$string['printseal_help'] = 'Aquesta opció us permet seleccionar un segell o un logotip per a imprimir-lo al certificat des de la carpeta certificate/pix/seals. Per defecte, aquesta imatge se situa al racó inferior dret del certificat.';
$string['printsignature'] = 'Imatge de la signatura';
$string['printsignature_help'] = 'Aquesta opció us permet imprimir una imatge amb la signatura des de la carpeta certificate/pix/signatures. Podeu imprimir una representació gràfica d\'una signatura, o bé, imprimir una línia per a signar a mà. Per defecte, aquesta imatge se situa a la part inferior esquerra del certificat.';
$string['printteacher'] = 'Imprimeix el nom del professorat';
$string['printteacher_help'] = 'Per imprimir el nom del professorat al certificat, definiu el rol de professorat a nivell de mòdul. Feu-ho si, per exemple, teniu més d\'un docent al curs o si teniu més d\'un certificat en el curs i voleu imprimir diferents noms de professorat en cada certificat. Feu clic per editar el certificat, a continuació feu clic a la pestanya de rols assignats localment. Tot seguit, assigneu el rol de professorat (amb permisos d\'edició) per al certificat (no tenen per què ser professorat al curs - podeu assignar aquest rol a qualsevol). Aquests noms s\'imprimiran al certificat per al professorat.';
$string['printwmark'] = 'Imatge de la marca d\'aigua';
$string['printwmark_help'] = 'Podeu col·locar un fitxer de marca d\'aigua com a fons del certificat. Una marca d\'aigua és un gràfic decolorit. Podria ser una marca d\'aigua: un logotip, un segell, un escut, text o qualsevol cosa que vulgueu utilitzar com a fons gràfic.';
$string['receivedcerts'] = 'Certificats rebuts';
$string['receiveddate'] = 'Data de recepció';
$string['removecert'] = 'Certificats emesos suprimits';
$string['report'] = 'Informe';
$string['reportcert'] = 'Informe de certificats';
$string['reportcert_help'] = 'Si trieu Sí, la data de recepció d\'aquest certificat, el número de codi i el nom del curs es mostraran en els informes de certificat de l\'usuari. Si trieu imprimir una qualificació en aquest certificat, aquesta qualificació també es mostrarà en l\'informe del certificat.';
$string['requiredtimenotmet'] = 'Heu de passar almenys un mínim de {$ a-> requiredtime} minuts en el curs abans de poder accedir a aquest certificat';
$string['requiredtimenotvalid'] = 'El temps requerit ha de ser un nombre vàlid més gran que 0';
$string['reviewcertificate'] = 'Reviseu el vostre certificat';
$string['savecert'] = 'Desa els certificats';
$string['savecert_help'] = 'Si trieu aquesta opció, es desarà una còpia del fitxer pdf amb el certificat de cada usuari en la carpeta moddata de fitxers de curs per a aquest certificat. En l\'informe del certificat es mostrarà un enllaç a cada certificat desat per l\'usuari.';
$string['seal'] = 'Segell';
$string['sigline'] = 'línia';
$string['signature'] = 'Signatura';
$string['statement'] = 'ha completat el curs';
$string['summaryofattempts'] = 'Resum dels certificats rebuts prèviament';
$string['textoptions'] = 'Opcions de text';
$string['title'] = 'Certificat d\'aprofitament';
$string['to'] = 'Atorgat a';
$string['typeA4_embedded'] = 'A4 incrustat';
$string['typeA4_non_embedded'] = 'A4 no incrustat';
$string['typeletter_embedded'] = 'Carta incrustat';
$string['typeletter_non_embedded'] = 'Carta no incrustat';
$string['unsupportedfiletype'] = 'El fitxer ha de ser un fitxer jpg o png';
$string['uploadimage'] = 'Carrega una imatge';
$string['uploadimagedesc'] = 'Aquest botó us portarà a una nova pantalla on podreu pujar imatges.';
$string['userdateformat'] = 'Format de data de l\'idioma de l\'usuari';
$string['validate'] = 'Verifica';
$string['verifycertificate'] = 'Verifica el certificat';
$string['viewcertificateviews'] = 'Visualitza {$a} certificats emessos';
$string['viewed'] = 'Heu rebut aquest certificat el:';
$string['viewtranscript'] = 'Visualitza els certificats';

$string['watermark'] = 'Marca d\'aigua';
$string['typeUJI_certificate'] = 'Certificat UJI';
$string['disclaimer'] = 'AQUEST CURS EN LÍNIA NO FORMA PART DE L’ENSENYAMENT REGLAT DE LA UNIVERSITAT JAUME I NI PROPORCIONA UN TÍTOL OFICIAL. AQUEST CERTIFICAT NO ACREDITA QUE EL TITULAR ÉS ESTUDIANT D’AQUESTA INSTITUCIÓ. PER A L’EXPEDICIÓ D’AQUEST DOCUMENT NO S’HA VERIFICAT LA IDENTITAT DEL TITULAR.';
$string['coursetaughtby'] = 'Curs impartit per';
$string['and'] = 'i';
$string['verificationcode'] = 'Codi de verificació';
$string['syllabus'] = 'Temari';
$string['syllabus_help'] = 'Aquest text s\'imprimirà en una segona pàgina. S\'accepta format Markdown.';