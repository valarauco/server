<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Zlyhalo zmazanie nastavenia servera.",
"The configuration is valid and the connection could be established!" => "Nastavenie je v poriadku a pripojenie je stabilné.",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Nastavenie je v poriadku, ale pripojenie zlyhalo. Skontrolujte nastavenia servera a prihlasovacie údaje.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Nastavenia sú neplatné. Podrobnosti hľadajte v logu ownCloud.",
"Deletion failed" => "Odstránenie zlyhalo",
"Take over settings from recent server configuration?" => "Prebrať nastavenia z nedávneho nastavenia servera?",
"Keep settings?" => "Ponechať nastavenia?",
"Cannot add server configuration" => "Nemožno pridať nastavenie servera",
"Connection test succeeded" => "Test pripojenia bol úspešný",
"Connection test failed" => "Test pripojenia zlyhal",
"Do you really want to delete the current Server Configuration?" => "Naozaj chcete zmazať súčasné nastavenie servera?",
"Confirm Deletion" => "Potvrdiť vymazanie",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Upozornenie:</b> Aplikácie user_ldap a user_webdavauth nie sú kompatibilné. Môže nastávať neočakávané správanie. Požiadajte administrátora systému aby jednu z nich zakázal.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Upozornenie:</b> nie je nainštalovaný LDAP modul pre PHP, backend vrstva nebude fungovať. Požádejte administrátora systému aby ho nainštaloval.",
"Server configuration" => "Nastavenia servera",
"Add Server Configuration" => "Pridať nastavenia servera.",
"Host" => "Hostiteľ",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Môžete vynechať protokol, s výnimkou požadovania SSL. Vtedy začnite s ldaps://",
"Base DN" => "Základné DN",
"One Base DN per line" => "Jedno základné DN na riadok",
"You can specify Base DN for users and groups in the Advanced tab" => "V rozšírenom nastavení môžete zadať základné DN pre používateľov a skupiny",
"User DN" => "Používateľské DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN klientského používateľa, ku ktorému tvoríte väzbu, napr. uid=agent,dc=example,dc=com. Pre anonymný prístup ponechajte údaje DN a Heslo prázdne.",
"Password" => "Heslo",
"For anonymous access, leave DN and Password empty." => "Pre anonymný prístup ponechajte údaje DN a Heslo prázdne.",
"User Login Filter" => "Filter prihlásenia používateľov",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Určuje použitý filter, pri pokuse o prihlásenie. %%uid nahradzuje používateľské meno v činnosti prihlásenia.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "použite zástupný vzor %%uid, napr. \\\"uid=%%uid\\\"",
"User List Filter" => "Filter zoznamov používateľov",
"Defines the filter to apply, when retrieving users." => "Definuje použitý filter, pre získanie používateľov.",
"without any placeholder, e.g. \"objectClass=person\"." => "bez zástupných znakov, napr. \"objectClass=person\"",
"Group Filter" => "Filter skupiny",
"Defines the filter to apply, when retrieving groups." => "Definuje použitý filter, pre získanie skupín.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "bez zástupných znakov, napr. \"objectClass=posixGroup\"",
"Connection Settings" => "Nastavenie pripojenia",
"Configuration Active" => "Nastavenia sú aktívne ",
"When unchecked, this configuration will be skipped." => "Ak nie je zaškrtnuté, nastavenie bude preskočené.",
"Port" => "Port",
"Backup (Replica) Host" => "Záložný server (kópia) hosť",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Zadajte záložný LDAP/AD. Musí to byť kópia hlavného LDAP/AD servera.",
"Backup (Replica) Port" => "Záložný server (kópia) port",
"Disable Main Server" => "Zakázať hlavný server",
"When switched on, ownCloud will only connect to the replica server." => "Pri zapnutí sa ownCloud pripojí len k záložnému serveru.",
"Use TLS" => "Použi TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Nepoužívajte pre pripojenie LDAPS, zlyhá.",
"Case insensitve LDAP server (Windows)" => "LDAP server nerozlišuje veľkosť znakov (Windows)",
"Turn off SSL certificate validation." => "Vypnúť overovanie SSL certifikátu.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Ak pripojenie pracuje len s touto možnosťou, tak importujte SSL certifikát LDAP serveru do vášho servera ownCloud.",
"Not recommended, use for testing only." => "Nie je doporučované, len pre testovacie účely.",
"Cache Time-To-Live" => "Životnosť objektov v cache",
"in seconds. A change empties the cache." => "v sekundách. Zmena vyprázdni vyrovnávaciu pamäť.",
"Directory Settings" => "Nastavenie priečinka",
"User Display Name Field" => "Pole pre zobrazenia mena používateľa",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Atribút LDAP použitý na vygenerovanie mena používateľa ownCloud ",
"Base User Tree" => "Základný používateľský strom",
"One User Base DN per line" => "Jedna používateľská základná DN na riadok",
"User Search Attributes" => "Atribúty vyhľadávania používateľov",
"Optional; one attribute per line" => "Voliteľné, jeden atribút na jeden riadok",
"Group Display Name Field" => "Pole pre zobrazenie mena skupiny",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Atribút LDAP použitý na vygenerovanie mena skupiny ownCloud ",
"Base Group Tree" => "Základný skupinový strom",
"One Group Base DN per line" => "Jedna skupinová základná DN na riadok",
"Group Search Attributes" => "Atribúty vyhľadávania skupín",
"Group-Member association" => "Priradenie člena skupiny",
"Special Attributes" => "Špeciálne atribúty",
"Quota Field" => "Pole kvóty",
"Quota Default" => "Predvolená kvóta",
"in bytes" => "v bajtoch",
"Email Field" => "Pole email",
"User Home Folder Naming Rule" => "Pravidlo pre nastavenie mena používateľského priečinka dát",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Nechajte prázdne pre používateľské meno (predvolené). Inak uveďte atribút LDAP/AD.",
"Test Configuration" => "Test nastavenia",
"Help" => "Pomoc"
);