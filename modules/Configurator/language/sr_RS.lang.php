<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_FONT_REGULAR' => 'Regular',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'ADVANCED' => 'Napredno',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kod valute',
  'DEFAULT_CURRENCY_NAME' => 'Naziv valute',
  'DEFAULT_CURRENCY_SYMBOL' => 'Simbol valute',
  'DEFAULT_CURRENCY' => 'Podrazumevana valuta',
  'DEFAULT_DATE_FORMAT' => 'Podrazumevani format datuma',
  'DEFAULT_DECIMAL_SEP' => 'Decimalni simbol',
  'DEFAULT_LANGUAGE' => 'Podrazumevani jezik',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Separator hiljada',
  'DEFAULT_SYSTEM_SETTINGS' => 'Korisnički intefejs',
  'DEFAULT_THEME' => 'Podrazumevana tema',
  'DEFAULT_TIME_FORMAT' => 'Podrazumevani format vremena',
  'DISPLAY_RESPONSE_TIME' => 'Prikaži vremena odziva servera',
  'IMAGES' => 'Logo slike',
  'LBL_ADMIN_WIZARD' => 'Čarobnjak za administraciju',
  'LBL_ALLOW_USER_TABS' => 'Dozvoli korisnicima da sakriju kartice',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistemska podešavaja',
  'LBL_ENABLE_MAILMERGE' => 'Omoguči email spajanje?',
  'LBL_LOGVIEW' => 'Pregledaj Dnevnik',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Koristiti SMTP autentifikaciju?',
  'LBL_MAIL_SMTPPASS' => 'SMTP lozinka:',
  'LBL_MAIL_SMTPUSER' => 'SMTP korisničko ime:',
  'LBL_MAIL_SMTPTYPE' => 'Tip SMTP servera:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specifikacija SMTP servera:',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izaberite vašeg Email provajdera:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Lozinka za Yahoo! email:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID za Yahoo! email:',
  'LBL_GMAIL_SMTPPASS' => 'Lozinka za Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Email adresa:',
  'LBL_EXCHANGE_SMTPPASS' => 'Lozinka za Exchange:',
  'LBL_EXCHANGE_SMTPUSER' => 'Korisničko ime za Exchange:',
  'LBL_EXCHANGE_SMTPPORT' => 'Port Exchange Servera:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Dozvoli korisnicima da koriste ovaj nalog za odlazne email poruke:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kada je ova opcija odabrana, svi korisnici će biti u mogućnosti da šalju email poruke koristeći isti nalog za odlazne email poruke koji se koristi za upozorenja i obaveštenja. Ako ova opcija nije odabrana, korisnici mogu da koriste server za odlazne email poruke kada obezebede informacije o njihovom nalogu.',
  'LBL_MAILMERGE_DESC' => 'Ova zastavica bi trebala biti uključena samo ako imate dodatak Sugar Plug-in za Microsoft&reg; Word&reg;.',
  'LBL_MAILMERGE' => 'Spajanje Email-ova',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalni interval za automatsko osvežavanje Dašleta',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ovo je najmanja vrednost koju neko može odabrati za automatsko osvežavanje sašleta. Podešavanje na &#39;Nikad&#39; u potpunosti onemogućuje automatsko osvežavanje dašleta.',
  'LBL_MODULE_FAVICON' => 'Prikaži ikonu modula kao favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Ako ste u modulu sa ikonom, koristite ikonu modula kao favicon umesto favicon teme, u kartici internet pretraživača.',
  'LBL_MODULE_NAME' => 'Sistemska podešavaja',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_TITLE' => 'Korisnički intefejs',
  'LBL_NOTIFY_FROMADDRESS' => 'Adresa "Pošiljaoca":',
  'LBL_NOTIFY_SUBJECT' => 'Email naslov:',
  'LBL_PORTAL_ON_DESC' => 'Dozvoljava korisnicima da upravljaju informacijama portal korisnika kroz kontakt podatke. Portal korisnici mogu da pristupaju Slučajevima, Defektima, Artiklima Baze Znanja i ostalim podacima preko Sugar Portal aplikacije.',
  'LBL_PORTAL_ON' => 'Omogući Upravljanje Portal Korisnika',
  'LBL_PORTAL_TITLE' => 'Korisnički samo-uslužni portal',
  'LBL_PROXY_AUTH' => 'Autorizacija?',
  'LBL_PROXY_HOST' => 'Proksi server',
  'LBL_PROXY_ON_DESC' => 'Konfiguriši podešavanja adrese proksi servera i autentifikacije',
  'LBL_PROXY_ON' => 'Koristi proksi server?',
  'LBL_PROXY_PASSWORD' => 'Lozinka',
  'LBL_PROXY_TITLE' => 'Proksi podešavanja',
  'LBL_PROXY_USERNAME' => 'Korisničko ime',
  'LBL_RESTORE_BUTTON_LABEL' => 'Obnovi',
  'LBL_SYSTEM_SETTINGS' => 'Sistemska podešavaja',
  'LBL_SKYPEOUT_ON_DESC' => 'Omogućava korisnicima da kllikom na telefonske brojeve pozovu koristeći SkypeOut&reg;. Brojevi moraju biti pravilno formatirani da bi se koristila ova funkcija. To znači, moraju biti "+"  "Kod zemlje" "Broj", na primer +1 (555) 555-1234.',
  'LBL_SKYPEOUT_ON' => 'Omogući SkypeOut&reg; integraciju',
  'LBL_USE_REAL_NAMES' => 'Prikaži puno ime',
  'LBL_USE_REAL_NAMES_DESC' => 'Prikaži puno ime korisnika umesto njegovog korisničkog imena u poljima za zadatke.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Lista artikala po stranici',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Podpanela po stranici',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Lista artikala po stranici',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Podpanela po stranici',
  'LOG_MEMORY_USAGE' => 'Log korišćenja memorije',
  'LOG_SLOW_QUERIES' => 'Log sporih upita',
  'LOCK_HOMEPAGE_HELP' => 'Ovo podešavanje je da onemogući<BR> 1) dodavanje novih početnih strana i dašleta unutar modula Početna, <BR>2) kastomizaciju položaja dashleta na početnim stranama prevlačenjem i spuštanjem.',
  'CURRENT_LOGO' => 'Trenutni logo:',
  'CURRENT_LOGO_HELP' => 'Ovaj logo je prikazan u gornjem levom uglu Sugar aplikacije.',
  'NEW_LOGO' => 'Odaberite logo:',
  'NEW_LOGO_HELP' => 'Slika može biti ili .png ili .jpg. formata.<BR>Preporučena veličina je 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Uvezi logo novih ponuda',
  'NEW_QUOTE_LOGO_HELP' => 'Obavezni format slike je .jpg.<BR>Preporučena veličina je 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Logo ponuda',
  'SLOW_QUERY_TIME_MSEC' => 'Maksimalno trajanje sporih upita (msec)',
  'STACK_TRACE_ERRORS' => 'Prikaži stack trace grešaka',
  'UPLOAD_MAX_SIZE' => 'Maksimalna veličina uvoza',
  'VERIFY_CLIENT_IP' => 'Proveri IP adresu korisnika',
  'LOCK_HOMEPAGE' => 'Spreči korisnika da prilagođava izgled početne strane',
  'LOCK_SUBPANELS' => 'Spreči korisnika da prilagođava izgled podpanela',
  'MAX_DASHLETS' => 'Maksimalan broj Sugar dašleta na početnoj strani',
  'SYSTEM_NAME' => 'Naziv sistema:',
  'SYSTEM_NAME_WIZARD' => 'Naziv:',
  'SYSTEM_NAME_HELP' => 'Ovo je naziv koji se prikazuje u naslovnoj traci vašeg web čitača.',
  'LBL_OC_STATUS' => 'Podrazumevani status Offline klijenta',
  'DEFAULT_OC_STATUS' => 'Omogući Offline klijenta po podrazumevanoj vrednosti.',
  'LBL_OC_STATUS_DESC' => 'Označite ovu opciju ako želite da svaki korisnik može da pristupi Offline klijentu. U suprotnom možete da konfigurišete pristup na nivou korisnika.',
  'SESSION_TIMEOUT' => 'Isticanje sesija Portala',
  'SESSION_TIMEOUT_UNITS' => 'sekundi',
  'LBL_LDAP_TITLE' => 'Podrška za LDAP autentifikaciju',
  'LBL_LDAP_ENABLE' => 'Omogući LDAP',
  'LBL_LDAP_SERVER_PORT' => 'Broj Porta:',
  'LBL_LDAP_ADMIN_USER' => 'Korisničko Ime:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Upotrebljivan za pretragu Sugar korisnika. [Možda mora da bude potpuno kvalifikovan] Povezaće se anonimno ako nije obezbeđen.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Lozinka:',
  'LBL_LDAP_AUTHENTICATION' => 'Autentifikacija:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Veži za LDAP server koristeći specifične korisničke akreditive.',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatski Kreiraj Korisnike:',
  'LBL_LDAP_USER_DN' => 'Korisnički DN:',
  'LBL_LDAP_GROUP_DN' => 'Grupni DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Primer: <em>ou=grupe,dc=primer,dc=com</em>',
  'LBL_LDAP_USER_FILTER' => 'Filter korisnika:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Pripadnost Grupi:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Korisnici moraju biti članovi specifične grupe',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Atributi korisnika:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Jedinstveni identifikator osobe koji će se koristiti za proveravanje da li je osoba član grupe Primer: <em>uid</em>',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Atribut grupe koji će se koristiti za filtriranje atributa korisnika Primer:<em>memberUid</em>',
  'LBL_LDAP_GROUP_ATTR' => 'Atribut grupe:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Svi dodatni parametri filtera za primenu pri autentifikaciji korisnika npr.\\nis_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atributi prijave:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Atribut Povezivanja:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Za vezivanje LDAP Korisnika<br>Primeri: <b>AD:</b> userPrincipalName, <b>openLDAP:</b> userPrincipalName, <b>Mac OS X:</b> uid',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Za pretragu LDAP Korisnika<br>Primeri:<b>AD:</b> userPrincipalName, <b>otvoriLDAP:</b> dn, <b>Mac OS X:</b> dn',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Primer: ldap.example.com ili ldaps://ldap.example.com za SSL',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Primer: 389 ili 636 za SSL',
  'LBL_LDAP_GROUP_NAME' => 'Naziv grupe:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Primer cn=sugarcrm',
  'LBL_LDAP_USER_DN_DESC' => 'Primer: ou=ljudi,dc=primer,dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ako autorizovan korisnik ne postoji, Sugar će kreirati korisnika.',
  'LBL_LDAP_ENC_KEY' => 'Ključ enkripcije:',
  'DEVELOPER_MODE' => 'Developer Mod',
  'SHOW_DOWNLOADS_TAB' => 'Prikaži karticu preuzimanja',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Kada se izabere, Kartica preuzimanja će se pojaviti u korisničkim podešavanjima i obezbediti korisnicima pristup Sugar dodacima i drugim dostupnim fajlovima.',
  'LBL_LDAP_ENC_KEY_DESC' => 'Za SOAP autentifikaciju kada se koristi LDAP.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Mora biti omogućena php_mcrypt  ekstenzija u Vašem php.ini fajlu.',
  'LBL_ALL' => 'Svi',
  'LBL_MARK_POINT' => 'Tačka oznake',
  'LBL_NEXT_' => 'Sledeće>>',
  'LBL_REFRESH_FROM_MARK' => 'Osveži od oznake',
  'LBL_SEARCH' => 'Pretraga:',
  'LBL_REG_EXP' => 'Registracija ističe:',
  'LBL_IGNORE_SELF' => 'Ignoriši sebe:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Markiraj odakle da počne logovanje',
  'LBL_DISPLAYING_LOG' => 'Prikazivanje loga',
  'LBL_YOUR_PROCESS_ID' => 'ID broj Vašeg procesa',
  'LBL_YOUR_IP_ADDRESS' => 'Vaša IP adresa je',
  'LBL_IT_WILL_BE_IGNORED' => 'Biće ignorisana',
  'LBL_LOG_NOT_CHANGED' => 'Log nije promenjen',
  'LBL_ALERT_JPG_IMAGE' => 'Format slike mora biti JPEG. Uvezite novi fajl čija je ekstenzija .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Format slike mora biti JPEG ili PNG. Uvezite novi fajl čija je ekstenzija .jpg ili .png.',
  'LBL_ALERT_SIZE_RATIO' => '&#39;Razmera slike mora biti između 1:1 i 10:1. Veličina slike će biti promenjena.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Razmera slike mora biti između 3:1 i 20:1. Uvezite novi fajl sa ovom razmerom.',
  'ERR_ALERT_FILE_UPLOAD' => 'Greška prilikom uvoza slike.',
  'LBL_LOGGER' => 'Podešavanja logera',
  'LBL_LOGGER_FILENAME' => 'Ime log fajla',
  'LBL_LOGGER_FILE_EXTENSION' => 'Ekstenzija',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimalna veličina loga',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Podrazumevani format datuma',
  'LBL_LOGGER_LOG_LEVEL' => 'Nivo loga',
  'LBL_LOGGER_MAX_LOGS' => 'Maksimalni broj log unosa (pre zatvaranja fajla)',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Dodaj iza imena fajla',
  'LBL_VCAL_PERIOD' => 'vCal Ažuriranja Vremenskog perioda:',
  'vCAL_HELP' => 'Koristite ovo podešavanje da odredite broj meseci pre tekućeg datuma za koje je informacija poziva i sastanaka Slobodan/Zauzet objavljena.',
  'LBL_PDFMODULE_NAME' => 'PDF Podešavanja',
  'SUGARPDF_BASIC_SETTINGS' => 'Svojstva Dokumenta',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Napredna Podešavanja',
  'SUGARPDF_LOGO_SETTINGS' => 'Slike',
  'PDF_CREATOR' => 'PDF Kreator',
  'PDF_CREATOR_INFO' => 'Definiše kreatora dokumenta. <br>Tipično, ovo je ime aplikacije koja generiše PDF.',
  'PDF_AUTHOR' => 'Autor',
  'PDF_AUTHOR_INFO' => 'Autor se pojavljuje u svojstvima dokumenta.',
  'PDF_HEADER_LOGO' => 'Za Ponude PDF Dokumenata',
  'PDF_HEADER_LOGO_INFO' => 'Ova slika se pojavljuje u podrazumevanom zaglavlju u Ponudama PDF Dokumenata.',
  'PDF_NEW_HEADER_LOGO' => 'Odaberite Novu Sliku za Ponude',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Format fajla može biti .jpg ili .png. (EZPDF koristi samo .jpg format)<BR>Preporučena veličina je 867x74 piksela.',
  'PDF_HEADER_LOGO_WIDTH' => 'Širina slike za Ponude',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Promeni razmeru učitane slike koja se pojavljuje u Ponudama PDF Dokumenata. (Samo TCPDF)',
  'PDF_SMALL_HEADER_LOGO' => 'Za Izveštaje PDF Dokumenata',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Ova slika se pojavljuje u podrazumevanom Zaglavlju u Izveštajima PDF Dokumenata.<br> Ova slika se takođe pojavljuje u gornjem levom ćošku Sugar aplikacije.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Odaberite Novu Sliku za Izveštaje',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Format slike može biti .jpg ili .png. formatu (EZPDF koristi samo .jpg format)<BR>Preporučena veličina je 212x40 piksela.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Širina slike za Izveštaje',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Promeni razmeru učitane slike koja se pojavljuje u Izveštajima PDF Dokumenata. (Samo TCPDF)',
  'PDF_HEADER_STRING' => 'String Zaglavlja',
  'PDF_HEADER_STRING_INFO' => 'Opis Stringa Zaglavlja',
  'PDF_HEADER_TITLE' => 'Naslov Zaglavlja',
  'PDF_HEADER_TITLE_INFO' => 'String za štampanje kao naslov na zaglavlju dokumenta',
  'PDF_FILENAME' => 'Podrazumeni naziv fajla',
  'PDF_FILENAME_INFO' => 'Podrazmevani naziv fajla za genersane PDF fajlove',
  'PDF_TITLE' => 'Naslov',
  'PDF_TITLE_INFO' => 'Naslov se pojavljuje u svojstvima dokumenta.',
  'PDF_SUBJECT' => 'Tema',
  'PDF_SUBJECT_INFO' => 'Tema se pojavljuje u svojstvima dokumenta.',
  'PDF_KEYWORDS' => 'Ključne reči',
  'PDF_KEYWORDS_INFO' => 'Veži ključne reči sa dokumentom, obično u formatu "klljučna reč1 klljučna reč2..."',
  'PDF_COMPRESSION' => 'Kompresija',
  'PDF_COMPRESSION_INFO' => 'Aktivira ili deaktivira kompresiju stranice.<br>Kada je aktivirana, interna reprezentacija svake stranice je kompresovana, što vodi ka razmeri kompresije od oko 2 za rezultujući dokument.',
  'PDF_JPEG_QUALITY' => 'Kvalitet JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Podesi podrazumevani kvalitet JPEG kompresije (1-100)',
  'PDF_PDF_VERSION' => 'PDF Verzija',
  'PDF_PDF_VERSION_INFO' => 'Podesi PDF verziju (proveri PDF reference za važeće vrednosti).',
  'PDF_PROTECTION' => 'Zaštita Dokumenta',
  'PDF_PROTECTION_INFO' => 'Podesi zaštitu dokumenta <br>- kopiraj: kopiraj tekst i slike u klipbord<br>- štampaj: štampaj dokument<br>- izmeni: izmeni dokument (osim beleški i obrazaca)<br>- beleške-obrasci: dodaj beleške i obrasce<br>Napomena: zaštita protiv izmene je za korisnike koji imaju kompletan Acrobat proizviod.',
  'PDF_USER_PASSWORD' => 'Korisnička Lozinka',
  'PDF_USER_PASSWORD_INFO' => 'Ako ne podesite lozinku, dokument će se otvoriti na uobičajan način. <br>Ako podesite korisničku lozinku, PDF viewer će tražiti lozinku pre nego što prikaže dokument.<br> Ako je glavna lozinka drugačija od korisničke lozinke, može se koristiti za pun pristup.',
  'PDF_OWNER_PASSWORD' => 'Lozinka vlasnika',
  'PDF_OWNER_PASSWORD_INFO' => 'Ako ne podesite lozinku, dokument će se otvoriti na uobičajan način. <br>Ako podesite korisničku lozinku, PDF viewer će tražiti lozinku pre nego što prikaže dokument.<br> Ako je glavna lozinka drugačija od korisničke lozinke, može se koristiti za pun pristup.',
  'PDF_ACL_ACCESS' => 'Kontrola pristupa',
  'PDF_ACL_ACCESS_INFO' => 'Podrazumevana kontrola pristupa za generisanje PDF-a.',
  'K_CELL_HEIGHT_RATIO' => 'Razmera Visine ćelije',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Ako je visina ćelije manja od (odnos visine fonta x visine ćelije), onda (odnos visine fonta x visina ćelije) je korišćen kao visina ćelije.<br>(odnos visine fonta x visina ćelije) je takođe korišćen kao visina ćelije kada visina nije definisana.',
  'K_TITLE_MAGNIFICATION' => 'Uveličavanje Naslova',
  'K_TITLE_MAGNIFICATION_INFO' => 'Uveličavanje naslova uzima u obzir veličinu glavnog fonta.',
  'K_SMALL_RATIO' => 'Faktor za mali font',
  'K_SMALL_RATIO_INFO' => 'Faktor smanjenja za mali font',
  'HEAD_MAGNIFICATION' => 'Uveličavanje Zaglavlja',
  'HEAD_MAGNIFICATION_INFO' => 'Faktor uveličavanja za naslove.',
  'PDF_IMAGE_SCALE_RATIO' => 'Odnos razmere slike',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Razmera koja se koristi za proporcionalno smanjenje ili uvećanje slika',
  'PDF_UNIT' => 'Jedinica',
  'PDF_UNIT_INFO' => 'jedinica mere dokumenta',
  'PDF_GD_WARNING' => 'Nemate instaliranu GD biblioteku za PHP. Bez instalirane GD biblioteke, samo logo u JPEG formatu može biti prikazan u PDF dokumentima.',
  'ERR_EZPDF_DISABLE' => 'Upozorenje: Klasa EZPDF je onemogućena u config tabeli i podešena je kao PDF klasa. Molim vas "Sačuvajte" ovaj obrazac da podesite TCPDF kao PDF Klasu i vratite je u stabilno stanje.',
  'LBL_IMG_RESIZED' => '(promenjena veličina za prikaz)',
  'LBL_FONTMANAGER_BUTTON' => 'Upravljanje PDF fontom',
  'LBL_FONTMANAGER_TITLE' => 'Upravljanje PDF fontom',
  'LBL_FONT_BOLD' => 'Podebljan',
  'LBL_FONT_ITALIC' => 'Ukošen',
  'LBL_FONT_BOLDITALIC' => 'Podebljan/Ukošen',
  'LBL_FONT_LIST_NAME' => 'Naziv',
  'LBL_FONT_LIST_FILENAME' => 'Naziv fajla',
  'LBL_FONT_LIST_TYPE' => 'Tip',
  'LBL_FONT_LIST_STYLE' => 'Stil',
  'LBL_FONT_LIST_STYLE_INFO' => 'Stil fonta',
  'LBL_FONT_LIST_ENC' => 'Kodiranje',
  'LBL_FONT_LIST_EMBEDDED' => 'Ugrađen',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Označi za ugradnju fonta u PDF fajl',
  'LBL_FONT_LIST_CIDINFO' => 'CID Informacija',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Primeri :<ul><li>Tradicionalni kineski :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Pojednostavljeni kineski :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Koreanski :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japanski :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul>Više pomoći na : www.tcpdf.org',
  'LBL_FONT_LIST_FILESIZE' => 'Veličina Fonta (KB)',
  'LBL_ADD_FONT' => 'Dodaj font',
  'LBL_BACK' => 'Nazad',
  'LBL_REMOVE' => 'Ukloni',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Da li ste sigurni da želite da obrišete ovaj font?',
  'LBL_ADDFONT_TITLE' => 'Dodaj PDF Font',
  'LBL_PDF_PATCH' => 'Zakrpa',
  'LBL_PDF_PATCH_INFO' => 'Prilagođena modifikacija kodiranja. Upišite PHP niz.<br>Primer :<br>ISO-8859-1 ne sadrži euro simbol. Da ga dodate na poziciji 164, upišite "array(164=>\\&#39;Euro\\&#39;)".',
  'LBL_PDF_ENCODING_TABLE' => 'Tabela kodiranja',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Naziv tabele kodiranja.<br>Ova opcija je ignorisana za TrueType Unicode, OpenType Unicode i simbolične fontove.<br>Kodiranje definiše vezu između iz koda (od 0 do 255) i karaktera sadržanih u fontu.<br>Prvih 128 su nepromenljivi i odgovaraju ASCII-u.',
  'LBL_PDF_FONT_FILE' => 'Font Fajl',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf ili .otf ili .pfb fajl',
  'LBL_PDF_METRIC_FILE' => 'Metrički Fajl',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm ili .ufm fajl',
  'LBL_ADD_FONT_BUTTON' => 'Dodaj',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Ovaj fajl nema dobru ekstenziju.',
  'LBL_PDF_INSTRUCTIONS' => 'Uputstva',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Podržani fontovi u SugarPDF-u:<ul><li>TrueTypeUnicode (UTF-8 Unicode)</li><li>OpenTypeUnicode</li><li>TrueType</li><li>OpenType</li><li>Type1</li><li>CID-0</li></ul><br>Ako izaberete da ne ugradite vaš font u PDF, generisani PDF će biti manji ali će se koristiti zamena za font ako font  nije dostupan u sistemu vašeg čitača.<br><br>Dodavanje PDF fonta u SugarCRM zahteva praćenje koraka 1 i 2 u  dokumentaciji TCPDF Fontova dostupnoj u "DOCS"sekciji na <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br><br>pfm2afm i ttf2ufm alati su dostupni u sekciji fontovi/alati u TCPDF paketu koji možete skinuti sa "DOWNLOAD" sekcije na <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br><br>Uvezite metrički fajl generisan u koraku broj 2 i vaš font fajl ispod.',
  'ERR_MISSING_CIDINFO' => 'Polje CID Informacija ne može biti prazno.',
  'LBL_ADDFONTRESULT_TITLE' => 'Rezultat procesa dodavanja fonta',
  'LBL_STATUS_FONT_SUCCESS' => 'USPEŠNO: Font je dodat u SugarCRM.',
  'LBL_STATUS_FONT_ERROR' => 'GREŠKA: Font nije dodan. Pogledajte log ispod.',
  'LBL_FONT_MOVE_DEFFILE' => 'Pomeri fajl definicije fonta u:',
  'LBL_FONT_MOVE_FILE' => 'Pomeri font fajl u:',
  'ERR_LOADFONTFILE' => 'GREŠKA: LoadFontFile greška!',
  'ERR_FONT_EMPTYFILE' => 'GREŠKA: Praznan naziv fajla!',
  'ERR_FONT_UNKNOW_TYPE' => 'GREŠKA: Nepoznat tip fonta:',
  'ERR_DELETE_CORE_FILE' => 'GREŠKA: Nije moguće obrisati osnovni font.',
  'ERR_NO_FONT_PATH' => 'GREŠKA: Nema dostupne putanje fonta!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'GREŠKA: Nema dostupne prilagođene putanje fonta!',
  'ERR_FONT_NOT_WRITABLE' => 'nije upisivo.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'ne postoji ili nije direktorijum.',
  'ERR_FONT_MAKEFONT' => 'GREŠKA: MakeFont greška',
  'ERR_FONT_ALREADY_EXIST' => 'GREŠKA: Ovaj font već postoji.Vraćanje...',
  'ERR_PDF_NO_UPLOAD' => 'Greška prilikom učitavanja fonta ili metričkog fajla.',
  'LBL_WIZARD_TITLE' => 'Čarobnjak za administraciju',
  'LBL_WIZARD_WELCOME_TAB' => 'Dobrodošli',
  'LBL_WIZARD_WELCOME_TITLE' => 'Dobrodošli u Sugar!',
  'LBL_WIZARD_WELCOME' => 'Kliknite <b>Sledeći</b> da brendujete, lokalizujete i konfigurišete Sugar sada. Ako želite da konfigurišete Sugar kasnije, kliknite <b>Preskoči</b>.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Sledeći >',
  'LBL_WIZARD_BACK_BUTTON' => '< Nazad',
  'LBL_WIZARD_SKIP_BUTTON' => 'Preskoči',
  'LBL_WIZARD_FINISH_BUTTON' => 'Završi',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Nastavi',
  'LBL_WIZARD_FINISH_TAB' => 'Završi',
  'LBL_WIZARD_FINISH_TITLE' => 'Osnovno sistemsko konfigurisanje je završeno',
  'LBL_WIZARD_FINISH' => 'Kliknite <b>Nastavi</b> da konfigurišete vaša korisnička podešavanja.<br/><br />Za konfigurisanje dodatnih sistemskih podešavanja, kliknite <a href="index.php?module=Administration&action=index" target="_blank">ovde</a>.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Brendiranje',
  'LBL_WIZARD_SYSTEM_DESC' => 'Obezbedite ime vaše organizacije i logo kako bi ste brendovali vaš Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Navedite kako bi ste želeli da vidite podatke u Sugar-u, na osnovu vaše geografske pozicije. Podešavanja koja navedete ovde će biti podrazumevana podešavanja. Korisnici će biti u mogućnosti da postave njihova podešavanja.',
  'LBL_WIZARD_SMTP_DESC' => 'Obezbedite email nalog koji će biti korišćen za slanje email poruka, kao što su obaveštenja o zadacima i novim korisničkim lozinkama. Korisnici će primiti email poruke iz Sugar-a, kao poslate sa navedenog email naloga.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Modul Izveštaji je dostupan samo za nativne Sugar Mobile klijenate',
);

