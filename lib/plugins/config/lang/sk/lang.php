<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Peter Mydliar <peto.mydliar@gmail.com>
 * @author Martin Michalek <michalek.dev@gmail.com>
 * @author Tibor Repček <tiborepcek@gmail.com>
 * @author Michal Mesko <michal.mesko@gmail.com>
 * @author exusik <exusik@gmail.com>
 */
$lang['menu']                  = 'Nastavenia konfigurácie';
$lang['error']                 = 'Nastavenia neboli aktualizované kvôli neplatnej hodnote, prosím skontrolujte vaše zmeny a znovu ich pošlite. <br />Nesprávna hodnota(y) bude ohraničená červeným okrajom.';
$lang['updated']               = 'Nastavenia úspešne aktualizované.';
$lang['nochoice']              = '(žiadne ďalšie dostupné voľby)';
$lang['locked']                = 'Súbor s nastaveniami nemôže byť aktualizovaný, ak toto nie je zámerom, <br />
uistite sa, že názov a práva lokálneho súboru sú správne.';
$lang['danger']                = 'Nebezpečie: Zmeny tohto nastavenia môžu spôsobiť nedostupnosť wiki a nastavovacieho menu.';
$lang['warning']               = 'Varovanie: Zmena tohto nastavenia môže viesť neželanému správaniu.';
$lang['security']              = 'Bezpečnostné riziko: Zmenou tohto nastavenie môže vzniknúť bezpečnostné riziko.';
$lang['_configuration_manager'] = 'Správa konfigurácie';
$lang['_header_dokuwiki']      = 'Nastavenia DokuWiki';
$lang['_header_plugin']        = 'Nastavenia plug-inov';
$lang['_header_template']      = 'Nastavenia šablóny';
$lang['_header_undefined']     = 'Nešpecifikované nastavenia';
$lang['_basic']                = 'Základné nastavenia';
$lang['_display']              = 'Nastavenia zobrazovania';
$lang['_authentication']       = 'Nastavenia zabezpečenia';
$lang['_anti_spam']            = 'Nastavenia anti-spamu';
$lang['_editing']              = 'Nastavenia úprav';
$lang['_links']                = 'Nastavenia odkazov';
$lang['_media']                = 'Nastavenia médií';
$lang['_notifications']        = 'Nastavenie upozornení';
$lang['_syndication']          = 'Nastavenie poskytovania obsahu';
$lang['_advanced']             = 'Rozšírené nastavenia';
$lang['_network']              = 'Nastavenia siete';
$lang['_msg_setting_undefined'] = 'Nenastavené metadata.';
$lang['_msg_setting_no_class'] = 'Nenastavená trieda.';
$lang['_msg_setting_no_default'] = 'Žiadna predvolená hodnota.';
$lang['title']                 = 'Názov wiki';
$lang['start']                 = 'Názov štartovacej stránky';
$lang['lang']                  = 'Jazyk';
$lang['template']              = 'Šablóna';
$lang['tagline']               = 'Slogan (ak ho šablóna podporuje)';
$lang['sidebar']               = 'Meno bočného panela (ak ho šablóna podporuje), prázdne pole deaktivuje bočný panel';
$lang['license']               = 'Pod ktorou licenciou bude publikovaný obsah stránky?';
$lang['savedir']               = 'Adresár pre ukladanie dát';
$lang['basedir']               = 'Hlavný adresár (napr. <code>/dokuwiki/</code>). Prázdna hodnota znamená použitie autodetekcie.';
$lang['baseurl']               = 'Adresa servera (napr. <code>http://www.yourserver.com</code>). Prázdna hodnota znamená použitie autodetekcie.';
$lang['cookiedir']             = 'Cesta k cookies. Prázdna hodnota znamená použitie adresy servera.';
$lang['dmode']                 = 'Spôsob vytvárania adresárov';
$lang['fmode']                 = 'Spôsob vytvárania súborov';
$lang['allowdebug']            = 'Povoliť ladenie chýb <b>deaktivujte, ak nie je potrebné!</b>';
$lang['recent']                = 'Posledné zmeny';
$lang['recent_days']           = 'Koľko posledných zmien uchovávať (dni)';
$lang['breadcrumbs']           = 'Počet záznamov histórie';
$lang['youarehere']            = 'Nachádzate sa';
$lang['fullpath']              = 'Zobrazovať plnú cestu k stránkam v pätičke';
$lang['typography']            = 'Vykonať typografické zmeny';
$lang['dformat']               = 'Formát dátumu (pozri funkciu PHP <a href="http://php.net/strftime">strftime</a>)';
$lang['signature']             = 'Podpis';
$lang['showuseras']            = 'Čo použiť pri zobrazení používateľa, ktorý posledný upravoval stránku';
$lang['toptoclevel']           = 'Najvyššia úroveň pre generovanie obsahu.';
$lang['tocminheads']           = 'Minimálny počet nadpisov pre generovanie obsahu';
$lang['maxtoclevel']           = 'Maximálna úroveň pre generovanie obsahu.';
$lang['maxseclevel']           = 'Maximálna úroveň sekcie pre editáciu';
$lang['camelcase']             = 'Použiť CamelCase pre odkazy';
$lang['deaccent']              = 'Upraviť názvy stránok';
$lang['useheading']            = 'Použiť nadpis pre názov stránky';
$lang['sneaky_index']          = 'DokuWiki implicitne ukazuje v indexe všetky menné priestory. Povolením tejto voľby sa nezobrazia menné priestory, ku ktorým nemá používateľ právo na čítanie. Dôsledkom môže byť nezobrazenie vnorených prístupných menných priestorov. Táto voľba môže mať za následok nepoužiteľnosť indexu s určitými ACL nastaveniami.';
$lang['hidepages']             = 'Skryť zodpovedajúce stránky (regulárne výrazy)';
$lang['useacl']                = 'Použiť kontrolu prístupu (ACL)';
$lang['autopasswd']            = 'Autogenerovanie hesla';
$lang['authtype']              = 'Systém autentifikácie (back-end)';
$lang['passcrypt']             = 'Spôsob šifrovania hesiel';
$lang['defaultgroup']          = 'Predvolená skupina';
$lang['superuser']             = 'Správca - skupina, používateľ alebo čiarkou oddelený zoznam "pouzivatel1,@skupina1,pouzivatel2" s plným prístupom ku všetkým stránkam a funkciám nezávisle od ACL nastavení';
$lang['manager']               = 'Manažér - skupina, používateľ alebo čiarkou oddelený zoznam "pouzivatel1,@skupina1,pouzivatel2" s prístupom k vybraným správcovským funkciám';
$lang['profileconfirm']        = 'Potvrdzovať zmeny profilu heslom';
$lang['rememberme']            = 'Povoliť trvalé prihlasovacie cookies (zapamätaj si ma)';
$lang['disableactions']        = 'Zakázať DokuWiki akcie';
$lang['disableactions_check']  = 'Skontrolovať';
$lang['disableactions_subscription'] = 'Povoliť/Zrušiť informovanie o zmenách stránky';
$lang['disableactions_wikicode'] = 'Pozrieť zdroj/Exportovať zdroj';
$lang['disableactions_profile_delete'] = 'Zrušenie vlastného účtu';
$lang['disableactions_other']  = 'Iné akcie (oddelené čiarkou)';
$lang['disableactions_rss']    = 'RSS';
$lang['auth_security_timeout'] = 'Časový limit pri prihlasovaní (v sekundách)';
$lang['securecookie']          = 'Mal by prehliadač posielať cookies nastavené cez HTTPS posielať iba cez HTTPS (bezpečné) pripojenie? Vypnite túto voľbu iba v prípade, ak je prihlasovanie do Vašej wiki zabezpečené SSL, ale prezeranie wiki je nezabezpečené.';
$lang['remote']                = 'Povolenie vzdialeného API. Umožnuje iným aplikáciám pristupovať k wiki cez XML-RPC alebo iným spôsobom.';
$lang['remoteuser']            = 'Obmedzenie použitia vzdialeného API skupinám alebo používateľom oddelených čiarkami. Prázdne pole poskytuje prístup pre každého používateľa.';
$lang['usewordblock']          = 'Blokovať spam na základe zoznamu známych slov';
$lang['relnofollow']           = 'Používať rel="nofollow" pre externé odkazy';
$lang['indexdelay']            = 'Časové oneskorenie pred indexovaním (sek)';
$lang['mailguard']             = 'Zamaskovať e-mailovú adresu';
$lang['iexssprotect']          = 'Kontrolovať nahraté súbory na prítomnosť nebezpečného JavaScript alebo HTML kódu';
$lang['usedraft']              = 'Automaticky ukladať koncept počas úpravy stránky';
$lang['htmlok']                = 'Umožniť vkladanie HTML';
$lang['phpok']                 = 'Umožniť vkladanie PHP';
$lang['locktime']              = 'Maximálne trvanie blokovacích súborov (sek)';
$lang['cachetime']             = 'Maximálne trvanie cache (sek)';
$lang['target____wiki']        = 'Cieľové okno (target) pre interné odkazy';
$lang['target____interwiki']   = 'Cieľové okno (target) pre interwiki odkazy';
$lang['target____extern']      = 'Cieľové okno (target) pre externé odkazy';
$lang['target____media']       = 'Cieľové okno (target) pre media odkazy';
$lang['target____windows']     = 'Cieľové okno (target) pre windows odkazy';
$lang['mediarevisions']        = 'Povoliť verzie súborov?';
$lang['refcheck']              = 'Kontrolovať odkazy na médiá (pred vymazaním)';
$lang['gdlib']                 = 'Verzia GD Lib';
$lang['im_convert']            = 'Cesta k ImageMagick convert tool';
$lang['jpg_quality']           = 'Kvalita JPG kompresie (0-100)';
$lang['fetchsize']             = 'Maximálna veľkosť (v bajtoch) pri sťahovaní z externých zdrojov';
$lang['subscribers']           = 'Povoliť podporu informovania o zmenách stránky';
$lang['subscribe_time']        = 'Časový inteval, po uplynutí ktorého sú zasielané informácie o zmenách stránky alebo menného priestoru (sek); hodnota by mala byť menšia ako čas zadaný pri položke recent_days.';
$lang['notify']                = 'Posielať upozornenia na zmeny na túto e-mailovú adresu';
$lang['registernotify']        = 'Posielať informáciu o nových užívateľoch na túto e-mailovú adresu';
$lang['mailfrom']              = 'E-mailová adresa na automatické e-maily';
$lang['mailprefix']            = 'Prefix predmetu emailovej spravy zasielanej automaticky';
$lang['htmlmail']              = 'Posielanie lepšie vyzerajúceho ale objemnejšieho HTML mailu. Deaktivovaním sa budú posielať iba textové maily.';
$lang['sitemap']               = 'Generovať Google sitemap (dni)';
$lang['rss_type']              = 'Typ XML feedu';
$lang['rss_linkto']            = 'XML zdroj odkazuje na';
$lang['rss_content']           = 'Čo zobrazovať v XML feede?';
$lang['rss_update']            = 'Časový interval obnovy XML feedu (sek.)';
$lang['rss_show_summary']      = 'XML zdroj ukáže prehľad v názve';
$lang['rss_media']             = 'Aký typ zmien by mal byť zobrazený v XML feede?';
$lang['rss_media_o_both']      = 'oboje';
$lang['rss_media_o_pages']     = 'strany';
$lang['rss_media_o_media']     = 'média';
$lang['updatecheck']           = 'Kontrolovať aktualizácie a bezpečnostné upozornenia? DokuWiki potrebuje pre túto funkciu prístup k update.dokuwiki.org.';
$lang['userewrite']            = 'Používať nice URLs';
$lang['useslash']              = 'Používať lomku (/) ako oddeľovač v URL';
$lang['sepchar']               = 'Oddeľovač slov v názvoch stránok';
$lang['canonical']             = 'Používať plne kanonické URL názvy';
$lang['fnencode']              = 'Spôsob kódovania non-ASCII mien súborov.';
$lang['autoplural']            = 'Kontrolovať množné číslo v odkazoch';
$lang['compression']           = 'Metóda kompresie pre staré verzie stránok';
$lang['gzip_output']           = 'Používať gzip Content-Encoding pre xhtml';
$lang['compress']              = 'Komprimovať CSS a javascript výstup';
$lang['cssdatauri']            = 'Veľkosť v bytoch, do ktorej by mali byť obrázky s odkazom v CSS vložené priamo do štýlu z dôvodu obmedzenia HTTP požiadaviek. Vhodná hodnota je od <code>400</code> do <code>600</code> bytov. Hodnota <code>0</code> deaktivuje túto metódu.';
$lang['send404']               = 'Poslať "HTTP 404/Page Not Found" pre neexistujúce stránky';
$lang['broken_iua']            = 'Je vo Vašom systéme funkcia ignore_user_abort poškodená? Môže to mať za následok nefunkčnosť vyhľadávania v indexe. IIS+PHP/CGI je známy tým, že nefunguje správne. Pozrite <a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">Bug 852</a> pre dalšie informácie.';
$lang['xsendfile']             = 'Používať X-Sendfile hlavičku pre doručenie statických súborov webserverom? Webserver musí túto funkcionalitu podporovať.';
$lang['renderer_xhtml']        = 'Používané vykresľovacie jadro pre hlavný (xhtml) wiki výstup';
$lang['renderer__core']        = '%s (dokuwiki jadro)';
$lang['renderer__plugin']      = '%s (plugin)';
$lang['search_fragment_o_exact'] = 'presne';
$lang['search_fragment_o_starts_with'] = 'začína s';
$lang['search_fragment_o_ends_with'] = 'končí na';
$lang['search_fragment_o_contains'] = 'obsahuje';
$lang['dnslookups']            = 'DokuWiki hľadá mená vzdialených IP adries používateľov editujúcich stránky. Ak máte pomalý alebo nefunkčný DNS server alebo nechcete túto možnosť, deaktivujte túto voľbu';
$lang['jquerycdn']             = 'Mali by byť jQuery a jQuery UI skripty načítané z CDN? Voľba zvýši počet dodatočných HTTP požiadaviek, ale súbory sa môžu načítať rýchlejšie a používatelia ich už môžu mať vo vyrovnávacej pamäti.';
$lang['jquerycdn_o_0']         = 'Nepoužívať CDN, iba lokálne súbory';
$lang['jquerycdn_o_jquery']    = 'CDN code.jquery.com';
$lang['jquerycdn_o_cdnjs']     = 'CDN cdnjs.com';
$lang['proxy____host']         = 'Proxy server - názov';
$lang['proxy____port']         = 'Proxy server - port';
$lang['proxy____user']         = 'Proxy server - používateľské meno';
$lang['proxy____pass']         = 'Proxy server - heslo';
$lang['proxy____ssl']          = 'Proxy server - použiť SSL';
$lang['proxy____except']       = 'Regulárny výraz popisujúci URL odkazy, pre ktoré by proxy nemala byť použitá.';
$lang['license_o_']            = 'žiadna';
$lang['typography_o_0']        = 'žiadne';
$lang['typography_o_1']        = 'okrem jednoduchých úvodzoviek';
$lang['typography_o_2']        = 'vrátane jednoduchých úvodzoviek (nemusí to vždy fungovať)';
$lang['userewrite_o_0']        = 'žiadne';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki interné';
$lang['deaccent_o_0']          = 'vypnuté';
$lang['deaccent_o_1']          = 'odstrániť diakritiku';
$lang['deaccent_o_2']          = 'romanizovať (do latinky)';
$lang['gdlib_o_0']             = 'GD Lib nie je dostupná';
$lang['gdlib_o_1']             = 'Verzia 1.x';
$lang['gdlib_o_2']             = 'Autodetekcia';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = 'Abstrakt';
$lang['rss_content_o_diff']    = 'Normalizovaný Diff';
$lang['rss_content_o_htmldiff'] = 'Tabuľka zmien v HTML formáte';
$lang['rss_content_o_html']    = 'Obsah stránky v HTML formáte';
$lang['rss_linkto_o_diff']     = 'prehľad zmien';
$lang['rss_linkto_o_page']     = 'upravená stránka';
$lang['rss_linkto_o_rev']      = 'zoznam zmien';
$lang['rss_linkto_o_current']  = 'aktuálna stránka';
$lang['compression_o_0']       = 'žiadna';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = 'nepoužívať';
$lang['xsendfile_o_1']         = 'Proprietárna lighttpd hlavička (pre vydaním 1.5)';
$lang['xsendfile_o_2']         = 'Štandardná X-Sendfile hlavička';
$lang['xsendfile_o_3']         = 'Proprietárna Nginx X-Accel-Redirect hlavička';
$lang['showuseras_o_loginname'] = 'Prihlasovacie meno';
$lang['showuseras_o_username'] = 'Celé meno používateľa';
$lang['showuseras_o_email']    = 'E-mailová adresa používateľa (zamaskovaná podľa nastavenia)';
$lang['showuseras_o_email_link'] = 'E-mailová adresa používateľa vo forme odkazu mailto:';
$lang['useheading_o_0']        = 'Nikdy';
$lang['useheading_o_navigation'] = 'Iba navigácia';
$lang['useheading_o_content']  = 'Iba Wiki obsah';
$lang['useheading_o_1']        = 'Vždy';
$lang['readdircache']          = 'Maximálne trvanie readdir cache (sek)';
