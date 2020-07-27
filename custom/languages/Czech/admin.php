<?php 
/*
 *	Made by Samerton, translated by Zemos, Renzotom, Ethxrnity and sad_mirai
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Czech Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Prosím znovu se přihlášte.',
	
	// Sidebar
	'dashboard' => 'Nástěnka',
	'configuration' => 'Konfigurace',
	'layout' => 'Rozložení',
	'user_management' => 'Správce uživatelů',
	'admin_cp' => 'Ovládací panel administrátora',
	'administration' => 'Administrace',
	'overview' => 'Přehled',
	'core' => 'Nastavení',
	'integrations' => 'Integrace',
	'minecraft' => 'Minecraft',
	'modules' => 'Doplňky',
	'security' => 'Zabezpečení',
	'sitemap' => 'Sitemap',
	'styles' => 'Styly',
	'users_and_groups' => 'Uživatelé a skupiny',
	
	// Overview
	'running_nameless_version' => 'NamelessMC aktuálně běží na verzi <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP verze <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiky',
	'registrations' => 'Registrace',
	'topics' => 'Témat',
	'posts' => 'Příspěvků',
    'notices' => 'Upozornění',
    'no_notices' => 'Žádná upozornění.',
    'email_errors_logged' => 'Chyby s e-maily byly zaznamenány',
	
	// Core
	'settings' => 'Nastavení',
	'general_settings' => 'Obecné nastavení',
	'sitename' => 'Název stránky',
	'default_language' => 'Hlavní jazyk',
	'default_language_help' => 'Uživatelé si budou moci vybrat z libovolných nainstalovaných jazyků.',
	'install_language' => 'Instalovat jazyk',
	'update_user_languages' => 'Aktualizovat jazyk uživatelů',
	'update_user_languages_warning' => 'Tímto aktualizujete jazyk pro všechny uživatele na vašem webu, i když již zvolili některý jiný!',
	'updated_user_languages' => 'Uživatelské jazyky byly aktualizovány.',
	'installed_languages' => 'Všechny nové jazyky byly úspěšně nainstalovány.',
	'default_timezone' => 'Základní časové pásmo',
	'registration' => 'Registrace',
	'enable_registration' => 'Povolit registraci?',
	'verify_with_mcassoc' => 'Povolit ověřování pomocí MCAssoc?',
	'email_verification' => 'Povolit ověřování pomocí e-mailu?',
	'registration_settings_updated' => 'Nastavení registrace bylo úspěšně aktualizováno.',
	'homepage_type' => 'Typ hlavní stránky',
	'post_formatting_type' => 'Typ formátování',
	'portal' => 'Portál',
	'private_profiles' => 'Soukromé profily',
	'missing_sitename' => 'Vložte název webu o délce 2 až 64 znaků.',
	'missing_contact_address' => 'Vložte prosím kontaktní e-mailovou adresu o délce 3 až 255 znaků.',
	'use_friendly_urls' => 'Přátelské URL adresy?',
	'use_friendly_urls_help' => 'DŮLEŽITÉ: Váš server musí být nakonfigurován tak, aby umožnil použití souborů mod_rewrite a .htaccess.',
	'config_not_writable' => 'Váš <strong>core/config.php</strong> není přepisovatelný. Zkontrolujte oprávnění pro tento soubour.',
	'settings_updated_successfully' => 'Obecné nastavení bylo úspěšně aktualizováno.',
	'social_media' => 'Sociální média',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Použít pro Twitter tmavý vzhled?',
	'discord_id' => 'ID Discord serveru',
	'discord_widget_theme' => 'Discord Widget Theme',
	'discord_id_length' => 'Please ensure your Discord ID is 18 characters long.',
	'discord_id_numeric' => 'Please ensure your Discord ID is numeric (Numbers only).',
	'dark' => 'Tmavý',
	'light' => 'Světlý',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Nastavení sociálních médií bylo úspěšně aktualizováno.',
	'successfully_updated' => 'Úspěšně aktualizováno',
    'debugging_and_maintenance' => 'Ladění a údržba',
    'maintenance' => 'Údržba',
    'debugging_settings_updated_successfully' => 'Nastavení ladění bylo úspěšně aktualizováno.',
    'enable_debug_mode' => 'Povolit režim ladění?',
    'force_https' => 'Vynucené https?',
    'force_https_help' => 'Pokud je zapnuto, všechny požadavky na Váš web budou přesměrovány na https. Jestli chcete, aby to tato možnost fungovala správně, tak musíte mít platný a aktivovaný SSL certifikát.',
    'force_www' => 'Vynutit www?',
    'contact_email_address' => 'Kontaktní e-mailová adresa',
    'emails' => 'E-maily',
    'email_errors' => 'Chyby s e-maily',
    'registration_email' => 'Registrační e-mail',
    'contact_email' => 'Kontaktní e-mail',
    'forgot_password_email' => 'E-mail se zapomenutým heslem',
    'unknown' => 'Neznámý',
    'delete_email_error' => 'Smazat chybu',
    'confirm_email_error_deletion' => 'Jste si jist, že chcete smazat tuto chybu?',
    'viewing_email_error' => 'Zobrazení chyby',
    'unable_to_write_email_config' => 'Nepodařilo se psát do souboru <strong>core/email.php</core>. Zkontrolujte prosím soubor s oprávněními.',
    'enable_mailer' => 'Zapnout PHPMailer?',
    'enable_mailer_help' => 'Zapněte tuto možnost, pokud nejsou emaily posílány standartně. Použití PHPMailer vyžaduje, abyste měli službu schopnou posílat emaily, jako Gmail nebo poskytovatel SMTP.',
    'outgoing_email' => 'Odchozí e-mailová adresa',
    'outgoing_email_info' => 'Toto je e-mailová adresa, z jaké NamelessMC posílá e-maily.',
    'mailer_settings_info' => 'Jestliže máte zapnutý PHPMailer, tak jsou následující pole povinná. Pro více informací, jak tyto pole vyplnit, se podívejte na <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">wiki</a>.',
    'host' => 'Host',
	  'email_port' => 'Port',
    'email_password_hidden' => 'Z bezpečnostních důvodů neni heslo zobrazeno.',
    'send_test_email' => 'Odeslat zkušební e-mail',
    'send_test_email_info' => 'Následující tlačítko se pokusí odeslat e-mail na Vaši e-mailovou adresu, <strong>{x}</strong>. Objeví se zde všechny chyby při odesílání e-mailu.', // Don't replace {x}
    'send' => 'Odeslat',
    'test_email_error' => 'Chyby zkušebního e-mailu:',
	'test_email_success' => 'Zkušební e-mail úspěšně odeslán!',
	'edit_email_messages' => 'Email Messages',
	'email_language_info' => 'Not seeing your language? Make sure \'emails.php\' is in your language directory and it is writable by your webserver.',
	'editing_language' => 'Editing Language',
	'email_preview_popup' => 'Preview',
	'email_preview_popup_message' => 'Click here to see a preview of the email.',
	'email_message_greeting' => 'Greeting',
	'email_message_thanks' => 'Thanks',
	'email_message_options' => 'Options',
	'email_message_subject' => 'Subject',
	'email_message_message' => 'Message',
    'terms_error' => 'Ujistěte se prosím, že Vaše podmínky nejsou delší než 100000 znaků.',
    'privacy_policy_error' => 'Zadejte prosím zásady ochrany osobních údajů do 100000 znaků.',
    'terms_updated' => 'Podmínky úspěšně aktualizovány.',
    'avatars' => 'Avatary',
    'allow_custom_avatars' => 'Povolit vlastní avatary uživatelů?',
    'default_avatar' => 'Výchozí avatar',
    'custom_avatar' => 'Vlastní avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Zdroj avatara z Minecraftu',
    'built_in_avatars' => 'Zabudovaná služba avatarů',
    'minecraft_avatar_perspective' => 'Perspektiva Minecraft avatara',
    'face' => 'Obličej',
    'head' => 'Hlava',
   	'bust' => 'Poprsí',
    'select_default_avatar' => 'Vyberte nového výchozího avatara:',
    'no_avatars_available' => 'Žádný avatar není dostupný. Nahrajte prosím nový obrázek výše.',
    'avatar_settings_updated_successfully' => 'Nastavení avatarů úspěšně aktualizováno.',
    'navigation' => 'Navigace',
    'navbar_order' => 'Pořadí v navigační liště',
    'navbar_order_instructions' => 'Každé položce můžete dát číslo 0 k seřazení položek v navigační liště, číslo 1 bude první položka navigační lišty a další čísla za 1 se v ní budou dale seřazovat.',
    'navbar_icon' => 'Navbar ikona',
    'navbar_icon_instructions' => 'Ke každé položce navbar můžete také přidat ikonu, například pomocí <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a> nebo <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Nastavení navigace bylo úspěšně aktualizováno.',
    'dropdown_items' => 'Rozevírací položky',
    'enable_page_load_timer' => 'Zapnout čas načítání stránky?',
    'google_recaptcha' => 'Povolit Google reCAPTCHA?',
    'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
    'captcha_type' => 'Captcha Type',
    'recaptcha_site_key' => 'reCAPTCHA Klíč webu',
    'recaptcha_secret_key' => 'reCAPTCHA Tajný klíč',
    'registration_disabled_message' => 'Zpráva zakázána',
    'enable_nicknames_on_registration' => 'Povolit přezdívky pro nové uživatele?',
    'validation_promote_group' => 'Skupina po validaci',
    'validation_promote_group_info' => 'Toto je skupina, na kterou bude uživatel povýšen, jakmile potvrdí svůj účet.',
    'login_method' => 'Metoda přihlášení',
    'privacy_and_terms' => 'Ochrana osobních údajů a podmínky',

	// Reactions
	'icon' => 'Ikonka',
	'type' => 'Typ',
	'positive' => 'Pozitivní',
	'neutral' => 'Neutrální',
	'negative' => 'Negativní',
	'editing_reaction' => 'Upravit reakce',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nová reakce',
	'creating_reaction' => 'Vytvořit reakci',
	'no_reactions' => 'Zatím zde nejsou žádné reakce.',
	'reaction_created_successfully' => 'Reakce byla úspěšně vytvořena.',
	'reaction_edited_successfully' => 'Reakce byla úspěšně upravena.',
	'reaction_deleted_successfully' => 'Reakce byla úspěšně odstraněna.',
	'name_required' => 'Je vyžadován název',
	'html_required' => 'Je vyžadováno HTML',
	'type_required' => 'Je vyžadován typ',
	'name_maximum_16' => 'Název nesmí být delší než 16 znaků',
	'html_maximum_255' => 'HTML nesmí obsahovat více než 255 znaků',
	'confirm_delete_reaction' => 'Opravdu chcete tuto reakci smazat?',
	
	// Custom profile fields
	'custom_fields' => 'Vlastní profilová pole',
	'new_field' => '<i class="fa fa-plus-circle"></i> nové pole',
	'required' => 'Povinný',
	'editable' => 'Upravitelné',
	'public' => 'Veřejný',
	'forum_posts' => 'Display on Forum',
	'text' => 'Text',
	'textarea' => 'Oblast textu',
	'date' => 'Datum',
	'creating_profile_field' => 'Vytváření profilového pole',
	'editing_profile_field' => 'Upravování profilového pole',
	'field_name' => 'Název pole',
	'profile_field_required_help' => 'Požadovaná pole musí být vyplněna uživatelem a zobrazí se už při registraci.',
	'profile_field_public_help' => 'Veřejná pole budou zobrazena všem uživatelům. Pokud je tato možnost vypnuta, pouze moderátoři a vyšší mohou vidět hodnoty v polích.',
	'profile_field_error' => 'Vložte prosím název pole dlouhý 2 až 16 znaků.',
	'description' => 'Popis',
	'display_field_on_forum' => 'Zobrazit pole na fórum?',
	'profile_field_forum_help' => 'Pokud je zapnuto, pole bude zobrazeno vedle příspěvku uživatele.',
	'profile_field_editable_help' => 'Pokud je tato možnost povolena, uživatelé budou mít oprávnění upravovat pole v nastavení profilu.',
	'no_custom_fields' => 'Zatím zde nejsou žádná vlastní pole.',
	'profile_field_updated_successfully' => 'Pole profilu bylo úspěšně aktualizováno.',
	'profile_field_created_successfully' => 'Pole profilu bylo úspěšně vytvořeno.',
	'profile_field_deleted_successfully' => 'Pole profilu bylo úspěšně odstraněno.',
	
	// Minecraft
	'enable_minecraft_integration' => 'Povolit Minecraft?',
    'mc_service_status' => 'Stav provozu Minecraftu',
    'service_query_error' => 'Nepodařilo se načíst stav provozu.',
    'authme_integration' => 'Integrace AuthMe',
    'authme_integration_info' => 'Když je integrace AuthMe zapnuta, hráči se mohou registrovat pouze ve hře.',
    'enable_authme' => 'Zapnout integraci AuthMe?',
    'authme_db_address' => 'Adresa na databázi s pluginem AuthMe',
    'authme_db_port' => 'Port na databázi',
    'authme_db_name' => 'Název databáze',
    'authme_db_user' => 'Uživatelské jméno k databázi',
    'authme_db_password' => 'Heslo k databázi',
    'authme_db_password_hidden' => 'Heslo z databáze AuthMe je z bezpečnostních důvodů skryto.',
    'authme_hash_algorithm' => 'Algoritmus ověřování pravosti',
    'authme_db_table' => 'Hráčská tabulka',
    'enter_authme_db_details' => 'Zadejte prosím správné údaje databáze.',
    'authme_password_sync' => 'Synchronizovat heslo s AuthMe?',
    'authme_password_sync_help' => 'Pokud je zapnuto, tak kdykoli bude hráčovo heslo změněno ve hře, bude změněno i na webu.',
    'minecraft_servers' => 'Minecraft servery',
    'account_verification' => 'Ověření Minecraft účtu',
    'server_banners' => 'Bannery serveru',
    'query_errors' => 'Query chyby',
    'add_server' => '<i class="fa fa-plus-circle"></i> Přidat server',
    'no_servers_defined' => 'Dosud nebyly definovány žádné servery',
    'query_settings' => 'Nastavení Query',
    'default_server' => 'Výchozí server',
    'no_default_server' => 'Žádný výchozí server',
    'external_query' => 'Použít externí query?',
    'external_query_help' => 'Pokud výchozí query serveru nefunguje, povolte tuto možnost.',
    'adding_server' => 'Přidat server',
    'server_name' => 'Název serveru',
    'server_address' => 'Adresa serveru',
    'server_address_help' => 'Zde je IP adresa, nebo doména serveru sloužící k připojení, bez portu.',
    'server_port' => 'Server Port',
    'parent_server' => 'Nadřazený server',
    'parent_server_help' => 'Nadřazený server je typicky Bungee případ, na který se server připojuje (pokud nějaký je).',
    'no_parent_server' => 'Žádný nadřazený server',
    'bungee_instance' => 'BungeeCord případ?',
    'bungee_instance_help' => 'Vyberte tuto možnost, pokud je to případ BungeeCord.',
    'server_query_information' => 'Chcete-li zobrazit seznam online hráčů na Vašem webu, Váš server <strong>musí</strong> mít povolenou možnost \'enable-query\' ve Vašem serverovém souboru <strong>server.properties</strong>.',
    'enable_status_query' => 'Povolit stav query?',
    'status_query_help' => 'Pokud je toto povoleno, stránka se stavem zobrazí tento server jako online či offline.',
    'show_ip_on_status_page' => 'Zobrazit IP na stráne statusu?',
    'show_ip_on_status_page_info' => 'Pokud je tato možnost povolena, uživatelé budou moci zobrazit a kopírovat adresu IP při zobrazení stránky Status',
    'enable_player_list' => 'Povolit seznam hráčů?',
    'pre_1.7' => 'Minecraft verze starší jak 1.7?',
    'player_list_help' => 'Pokud je tato možnost zapnuta, stránka se stavem zobrazí seznam online hráčů.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'Toto je možnost query.port ve Vašem serverovém souboru server.properties, za předpokladu, že možnost enable-query ve stejném souboru je nastavena na true.',
    'server_name_required' => 'Zadejte prosím název serveru',
    'server_name_minimum' => 'Zajistěte, aby název Vašeho serveru byl minimálně 1 znak dlouhý.',
    'server_name_maximum' => 'Zajistěte, aby název Vašeho serveru byl maximálně 20 znaků dlouhý.',
    'server_address_required' => 'Zadejte prosím adresu serveru',
    'server_address_minimum' => 'Zajistěte, aby adresa Vašeho serveru byla minimálně 1 znak dlouhý.',
    'server_address_maximum' => 'Zajistěte, aby název Vašeho serveru byla maximálně 64 znak dlouhý.',
    'server_port_required' => 'Zadejte prosím port serveru',
    'server_port_minimum' => 'Zajistěte, aby port Vašeho serveru byl minimálně 2 znak dlouhý.',
    'server_port_maximum' => 'Zajistěte, aby port Vašeho serveru byl maximálně 5 znaků dlouhý.',
    'server_parent_required' => 'Vyberte prosím nadřazený server',
    'query_port_maximum' => 'Zajistěte, aby Váš query port byl maximálně 5 znaků dlouhý.',
    'server_created' => 'Server úspěšně vytvořen.',
    'confirm_delete_server' => 'Jste si jist, že chcete smazat tento server?',
    'server_updated' => 'Server úspěšně aktualizován.',
    'editing_server' => 'Upravování serveru',
    'server_deleted' => 'Server úspěšně smazán.',
    'unable_to_delete_server' => 'Nepodařilo se smazat server.',
    'leave_port_empty_for_srv' => 'Pokud je port 25565, nebo pokud Vaše doména používá SRV záznam, tak toto pole můžete nechat prázdné.',
    'viewing_query_error' => 'Zobrazení Query chyby',
    'confirm_query_error_deletion' => 'Jste si jist, že chcete odstranit tuto Query chybu?',
    'no_query_errors' => 'Žádné Query chyby nezaznamenány.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nový banner',
    'purge_errors' => 'Vymazat chyby',
    'confirm_purge_errors' => 'Jste si jist, že chcete vymazat všechny chyby?',
	'email_errors_purged_successfully' => 'Chyby e-mailu byly úspěšně vymazány.',
	'error_deleted_successfully' => 'Chyba byla úspěšně smazána.',
	'no_email_errors' => 'Nejsou zaznamenány žádné chyby e-mailu.',
	'email_settings_updated_successfully' => 'Nastavení e-mailu byla úspěšně aktualizována.',
	'content' => 'Obsah',
    'mcassoc_help' => 'mcassoc je externí služba, která může být použita k ověření, zda uživatelé vlastní Minecraft účet, se kterým se zaregistrovali. Pro použití této možnosti se budete muset zaregistrovat pro získání sdíleného klíče <a href="https://mcassoc.lukegb.com/" target="_blank">zde</a>.',
    'mcassoc_key' => 'mcassoc sdílený klíč',
    'mcassoc_instance' => 'mcassoc případový klíč',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klikněte k vygenerování případového klíče</a>',
    'mcassoc_error' => 'Ujistěte se prosím, zda jste zadal Váš sdílený klíč správně, a následně správně vygeneroval případový klíč.',
    'updated_mcassoc_successfully' => 'Nastavení mcassoc úspěšně aktualizováno.',
    'force_premium_accounts' => 'Vyžadovat prémiové účty?',
    'banner_background' => 'Pozadí banneru',
    'query_interval' => 'Interval Query (v minutách, musí být mezi 5 a 60)',
    'player_graphs' => 'Grafy hráčů',
    'player_count_cronjob_info' => 'Následujícím příkazem můžete nastavit "cron job" k query Vašich serverů každých {x} minut:', // Don't replace "{x}" or "{y}"
    'status_page' => 'Zapnout stránku statusu?',
    'minecraft_settings_updated_successfully' => 'Nastavení bylo úspěšně aktualizováno.',
    'server_id_x' => 'ID Serveru: {x}', // Don't replace {x}
    'server_information' => 'Informace o Serveru',
    'query_information' => 'Informace o Query',
    'query_errors_purged_successfully' => 'Query Chyby byly úspěšně vymazány.',
    'query_error_deleted_successfully' => 'Query Chyba byla úspěšně odstraněna.',
    'banner_updated_successfully' => 'Banner byl úspěšně aktualizován. Změny se projeví až za chvíli.',
	
	// Modules
	'modules_installed_successfully' => 'Všechny nové moduly se nainstalovaly.',
	'enabled' => 'Zapnuto',
	'disabled' => 'Zakázáno',
	'enable' => 'Povolit',
	'disable' => 'Zakázat',
	'module_enabled' => 'Modul povolen.',
	'module_disabled' => 'Modul zakázán.',
	'author' => 'Autor',
	'author_x' => 'Autor: {x}', // Don't replace {x}
	'module_outdated' => 'Zjistili jsme, že tento modul je určen pro Nameless verzi {x}, ale používáte Nameless verzi {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Najít moduly',
	'view_all_modules' => 'Zobrazit všechny moduly',
	'unable_to_retrieve_modules' => 'Nelze načíst moduly',
	'module' => 'Modul',
	'unable_to_enable_module' => 'Nelze povolit nekompatibilní modul.',
	
	// Styles
	'templates' => 'Šablony',
	'panel_templates' => 'Šablony panelů',
	'template_outdated' => 'Zjistili jsme, že šablona je určena pro verze {x} , ale Vy používáte verzi {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktivní',
	'deactivate' => 'Deaktivovat',
	'activate' => 'Aktiovat',
	'warning_editing_default_template' => 'Varování! Doporučuje se, abyste neupravovali výchozí šablonu.',
	'images' => 'Obrázky',
	'upload_new_image' => 'Nahrát nový obrázek',
	'reset_background' => 'Resetovat pozadí',
	'install' => '<i class="fa fa-plus-circle"></i> Nainstalovat nové šablony',
	'template_updated' => 'Šablona byla úspěšně aktualizována.',
	'default' => 'Výchozí',
	'make_default' => 'Nastavit jako výchozí',
	'default_template_set' => 'Výchozí šablona {x} byla úspěšně nastavena.', // Don't replace {x}
	'template_deactivated' => 'Šablona zakázána.',
	'template_activated' => 'Šablona aktivována.',
	'permissions' => 'Oprávnění',
	'setting_perms_for_x' => 'Nastavení oprávnění pro šablonu {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Všechny nové šablony byly úspěšně nainstalovány.',
	'confirm_delete_template' => 'Jste si jist, že chcete smazat tuto šablonu?',
	'delete' => 'Smazat',
	'template_deleted_successfully' => 'Šablona úspěšně odstraněna.',
	'background_image_x' => 'Obrázek na pozadí: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Banner obrázek: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'Adresář <strong> nahrání / pozadí </strong> nelze upravovat!',
	'template_banners_directory_not_writable' => 'Adresář <strong> uploady / šablony bannerů </strong> nelze upravovat!',
	'template_banner_reset_successfully' => 'Banner byl úspěšně resetován.',
	'template_banner_updated_successfully' => 'Banner byl úspěšně aktualizován.',
	'reset_banner' => 'Obnovit Banner',
	'find_templates' => 'Najít Template',
	'view_all_templates' => 'Zobrazit všechny šablony',
	'unable_to_retrieve_templates' => 'Nelze načíst šablony',
	'template' => 'Šablona',
	'stats' => 'Statistiky',
	'downloads_x' => 'Stažení: {x}',
	'views_x' => 'Zobrazení: {x}',
	'rating_x' => 'Hodnocení: {x}',
	'editing_template_x' => 'Úprava šablony {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Úprava souboru {x} v šabloně {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Nelze upravovat soubory templatu! Zkontrolujte prosím oprávnění k souborům.',
	'unable_to_delete_template' => 'Template nelze zcela odstranit. Zkontrolujte prosím oprávnění k souborům.',
	'background_reset_successfully' => 'Pozadí bylo úspěšně obnoveno.',
	'background_updated_successfully' => 'Pozadí bylo úspěšně aktualizováno.',
	'unable_to_enable_template' => 'Nelze povolit nekompatibilní Template.',

	// Users & groups
	'users' => 'Uživatel',
	'groups' => 'Skupiny',
	'group' => 'Skupina',
	'new_user' => '<i class="fa fa-plus-circle"></i> nový uživatel',
	'creating_new_user' => 'Vytvořit nového uživatele',
	'registered' => 'Registrován',
	'user_created' => 'Uživatel úspěšně vytvořen',
	'cant_delete_root_user' => 'Nemůžete smazat hlavního uživatele!',
	'cant_modify_root_user' => 'Nemůžete změnit skupinu pro hlavního uživatele!',
	'user_deleted' => 'Uživatel úspěšně smazán.',
	'confirm_user_deletion' => 'Opravdu chcete smazat uživatele <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Ověřit uživatele',
	'update_uuid' => 'Aktualizovat UUID',
	'update_mc_name' => 'Aktualizovat Minecraft jméno',
	'reset_password' => 'Obnovit heslo',
	'punish_user' => 'Potrestat uživatele',
	'delete_user' => 'Smazat uživatele',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Další akce',
	'disable_avatar' => 'Zakázat avatar',
	'select_user_group' => 'Musíte vybrat skupinu uživatele!',
	'uuid_max_32' => 'UUID musí být maximálně 32 znaků dlouhé.',
	'title_max_64' => 'Uživatelské jméno musí mít maximálně 64 znaků.',
	'group_id' => 'Skupina ID',
	'name' => 'Název',
	'title' => 'Jméno uživatele',
	'new_group' => '<i class="fa fa-plus-circle"></i> nová skupina',
	'group_name_required' => 'Prosím zadejte název skupiny.',
	'group_name_minimum' => 'Zajistěte, aby název Vaší skupiny byl minimálně 2 znaky dlouhý.',
	'group_name_maximum' => 'Zajistětě, aby název Vaší skupiny byl maximálně 20 znaků dlouhý.',
	'creating_group' => 'Vytvořit novou skupinu',
	'group_html_maximum' => 'Zajistěte, aby HTML kód Vaší skupiny nebyl delší než 1024 znaků.',
	'group_html' => 'HTML skupiny',
	'group_html_lg' => 'Velké HTML skupiny',
	'group_username_colour' => 'Barva názvu skupiny',
	'group_username_css' => 'Group Username CSS',
	'group_staff' => 'Bude tato skupina pracovní?',
	'delete_group' => 'Smazat skupinu',
	'confirm_group_deletion' => 'Opravdu chcete smazat tuto skupinu: {x}?', // Don't replace {x}
	'group_not_exist' => 'Tato skupina neexistuje.',
	'secondary_groups' => 'Vedlejší skupiny',
	'secondary_groups_info' => 'Od těchto skupin získá uživatel jakákoliv další oprávnění',
	'unable_to_update_uuid' => 'Nelze aktualizovat UUID.',
	'default_group' => 'Je skupina výchozí skupinou (pro nové uživatele)?',
	'user_id' => 'Uživatelské ID',
	'uuid' => 'UUID',
	'group_order' => 'Pořadí skupiny',
	'group_created_successfully' => 'Skupina byla úspěšně vytvořena.',
	'group_updated_successfully' => 'Skupina byla úspěšně aktualizována.',
	'group_deleted_successfully' => 'Skupina byla úspěšně odstraněna.',
	'unable_to_delete_group' => 'Nelze odstranit výchozí skupinu nebo skupinu, která může zobrazit AdminPanel. Nejdříve aktualizujte nastavení skupiny!',
	'can_view_staffcp' => 'Může skupina zobrazit AdminPanel?',
	'user' => 'Uživatel',
	'user_validated_successfully' => 'Uživatel byl úspěšně ověřen.',
	'user_updated_successfully' => 'Uživatel byl úspěšně aktualizován.',
	'editing_user_x' => 'Úprava uživatele {x}', // Don't replace {x}
	'details' => 'Podrobnosti',

	// Permissions
	'select_all' => 'Vybrat vše',
	'deselect_all' => 'Odznačit vše',
	'background_image' => 'Obrázek na pozadí',
	'can_edit_own_group' => 'Může upravovat oprávnění vlastní skupiny',
	'permissions_updated_successfully' => 'Oprávnění byla úspěšně aktualizována.',
	'cant_edit_this_group' => 'Nelze upravit oprávnění této skupiny!',
	
	// General Admin language
	'task_successful' => 'Úspěšná Práce.',
	'invalid_action' => 'Neplatná akce.',
	'enable_night_mode' => 'Zapnout noční režim.',
	'disable_night_mode' => 'Vypnout noční režim.',
	'view_site' => 'Přejít na web',
	'signed_in_as_x' => 'Přihlášen jako {x}', // Don't replace {x}
	'warning' => 'Varování',

	// Maintenance
	'maintenance_mode' => 'Režim údržby',
	'maintenance_enabled' => 'Režim údržby je aktuálně zapnutý.',
	'enable_maintenance_mode' => 'Zapnout režim údržby?',
	'maintenance_mode_message' => 'Zpráva režimu údržby',
	'maintenance_message_max_1024' => 'Ujistěte se prosím, že Vaše zpráva o údržbě je maximálně 1024 zprávů dlouhá.',

	// Security
	'acp_logins' => 'Přihlášení správce',
	'please_select_logs' => 'Vyberte protokoly, které chcete zobrazit',
	'ip_address' => 'IP Adresa',
	'template_changes' => 'Změna šablony',
	'file_changed' => 'Soubor byl změněn',
	'all_logs' => 'Všechny protokoly',
	'action' => 'Akce',
	'action_info' => 'Informace o akcích',
	
	// Updates
	'update' => 'Aktualizace',
	'current_version_x' => 'Současná verze: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nová verze: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'K dispozici je nová aktualizace',
	'new_urgent_update_available' => 'K dispozici je nová aktualizace verze. Aktualizujte co nejdříve!',
	'up_to_date' => 'Používáte nejnovější verzi!',
	'urgent' => 'Tato aktualizace je důležitá!',
	'changelog' => 'Seznam změn',
	'update_check_error' => 'Při kontrole aktualizace došlo k chybě:',
	'instructions' => 'Instrukce',
	'download' => 'Stáhnout',
	'install_confirm' => 'Ujistěte se prosím, že jste stáhl balíček a nejprve jste nahrál obsažené soubory!',
	'check_again' => 'Zkontrolovat znovu',

	// Widgets
	'widgets' => 'Widgety',
	'widget_enabled' => 'Widget zapnut.',
	'widget_disabled' => 'Widget vypnut.',
	'widget_updated' => 'Widget updated.',
	'editing_widget_x' => 'Upravování widgetu {x}', // Don't replace {x}
	'module_x' => 'Doplněk: {x}', // Don't replace {x}
	'widget_order' => 'Pořadí Widgetů',

    // Online users widget
    'include_staff_in_user_widget' => 'Zahrnout AdminTeam do uživatelského widgetu?',
    'show_nickname_instead_of_username' => 'Zobrazit přezdívku uživatele namísto uživatelského jména?',

	// Custom Pages
	'pages' => 'Stránky',
	'custom_pages' => 'Stránky',
	'new_page' => '<i class="fa fa-plus-circle"></i> Nová stránka',
	'no_custom_pages' => 'Zatím nebyly vytvořeny žádné stránky.',
	'creating_new_page' => 'Vytváření stránky',
	'page_title' => 'Název stránky',
	'page_path' => 'Cesta ke stránce (s předchozím /, např. /příklad)',
	'page_icon' => 'Ikona stránky',
	'page_link_location' => 'Lokace odkazu na stránku',
	'page_link_navbar' => 'Navigační lišta',
	'page_link_footer' => 'Zápatí',
	'page_link_more' => '"Více položek" v rozbalovací nabídce',
	'page_link_none' => 'Žádný odkaz',
	'page_content' => 'Obsah stránky',
	'page_redirect' => 'Přesměrování stránky?',
	'page_redirect_to' => 'Přesměrovat odkaz (s předchozím http://)',
	'unsafe_html' => 'Povolit nebezpečné HTML?',
	'unsafe_html_warning' => 'Povolením této možnosti, jakékoli HTML může být na této straně použito, včetně potenciálně nebezpečného jazyku JavaScript. Povolte to pouze v případě, zda jste si jist, že Váš HTML kód je bezpečný.',
	'include_in_sitemap' => 'Zahrnout do souboru Sitemap?',
	'sitemap_link' => 'Odkaz na soubor Sitemap:',
	'basic_page' => 'Basic page?',
	'page_permissions' => 'Oprávnění stránky',
	'view_page' => 'Může tuto stránku vidět?',
	'editing_page_x' => 'Upravování stránky {x}', // Don't replace {x}
	'unable_to_create_page' => 'Nepodařilo se vytvořit stránku:',
	'page_title_required' => 'Název stránky je požadován.',
	'page_url_required' => 'Cesta ke stránce je požadovaná.',
	'link_location_required' => 'Lokace odkazu na stránku je požadovaná.',
	'page_title_minimum_2' => 'Název stránky musí mít minimálně 2 znaky.',
	'page_url_minimum_2' => 'Cesta ke stránce musí mít maximálně 2 znaky.',
	'page_title_maximum_30' => 'Zajistětě, aby název Vaší stránky byl maximálně 30 znaků dlouhý.',
	'page_icon_maximum_64' => 'Zajistětě, aby ikona Vaší stránky byla maximálně 64 znaků dlouhá.',
	'page_url_maximum_20' => 'Zajistětě, aby cesta k Vaší stránce byla maximálně 20 znaků dlouhá.',
	'page_content_maximum_100000' => 'Zajistětě, aby obsah Vaší stránky byl maximálně 100000 znaků dlouhý.',
	'page_redirect_link_maximum_512' => 'Zajistětě, aby odkaz na přesměrování Vaší stránky byl maximálně 512 znaků dlouhý.',
	'confirm_delete_page' => 'Jste si jist, že chcete tuto stránku odstranit?',
	'page_created_successfully' => 'Stránka byla úspěšně vytvořena.',
	'page_updated_successfully' => 'Stránka byla úspěšně aktualizována.',
	'page_deleted_successfully' => 'Stránka byla úspěšně odstraněna.',

	// API
	'api' => 'API',
	'enable_api' => 'Povolit API?',
	'api_info' => 'Rozhraní API umožňuje interakci modulů plug-in a dalších služeb s webovými stránkami, jako je například <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >oficiální Nameless plugin</a>.',
	'enable_legacy_api' => 'Povolit starší rozhraní API?',
	'legacy_api_info' => 'Starší rozhraní API umožňuje používat pluginy, které používají staré rozhraní API Nameless verze 1 pro práci s webovou stránkou verze 2.',
	'confirm_api_regen' => 'Opravdu chcete obnovit klíč API?',
	'api_key' => 'API Klíč',
	'api_url' => 'API Odkaz',
	'copy' => 'Kopírovat',
	'api_key_regenerated' => 'Klíč API byl úspěšně obnoven.',
	'api_registration_email' => 'Email pro registraci API',
	'show_registration_link' => 'Zobrazit registrační odkaz',
	'registration_link' => 'Registrační odkaz',
	'link_to_complete_registration' => 'Odkaz pro dokončení registraci: {x}', // Don't replace {x}
	'api_verification' => 'Povolit ověřování rozhraní API?',
	'api_verification_info' => 'Pokud je tato možnost povolena, účty lze ověřit pouze prostřednictvím rozhraní API, například ve hře pomocí oficiálního pluginu Nameless. <strong> Tato volba přepíše ověření e-mailu a účty budou automaticky aktivovány. </strong> <br /> Měli byste nastavit výchozí skupinu tak, aby měla omezená oprávnění, a poté aktualizovat skupinu po ověření v AdminPanel -> Konfigurace -> Karta Registrace na plnou členskou skupinu s normálními oprávněními.',
	'enable_username_sync' => 'Povolit synchronizaci uživatelských jmen?',
	'enable_username_sync_info' => 'Pokud je tato možnost povolena, uživatelská jména webových stránek budou aktualizována tak, aby odpovídala herním jmenem.',
	'api_settings_updated_successfully' => 'Nastavení rozhraní API bylo úspěšně aktualizováno.',
	'group_sync' => 'ynchronizace skupiny',
	'group_sync_info' => 'Rozhraní API můžete nakonfigurovat tak, aby automaticky změnilo skupinu webových stránek uživatele, když se změní jejich skupina ve hře. Jednoduše zadejte název skupiny ve skupině a skupinu stránek, kterou chcete synchronizovat s níže uvedeným názvem.',
	'ingame_group' => 'Název skupiny ve hře',
	'website_group' => 'Skupina webových stránek',
	'set_as_primary_group' => 'Nastavit jako primární skupinu?',
	'set_as_primary_group_info' => 'Je-li tato možnost povolena, bude aktualizována primární skupina webových stránek uživatele. Pokud je zakázáno, skupina ve hře bude přidána do sekundárních skupin uživatele.',
	'ingame_group_maximum' => 'Ujistěte se, že název vaší skupiny je maximálně 64 znaků.',
	'select_website_group' => 'Vyberte skupinu webových stránek.',
	'ingame_group_already_exists' => 'Pravidlo synchronizace pozice již bylo vytvořeno pro tuto skupinu ve hře.',
	'group_sync_rule_created_successfully' => 'Pravidlo synchronizace skupiny bylo úspěšně vytvořeno.',
	'group_sync_rules_updated_successfully' => 'Pravidla synchronizace skupiny byla úspěšně aktualizována.',
	'group_sync_rule_deleted_successfully' => 'Pravidlo synchronizace skupiny bylo úspěšně odstraněno.',
	'existing_rules' => 'Stávající pravidla',
	'new_rule' => 'Nové pravidlo',

	// File uploads
	'drag_files_here' => 'Soubory přetáhněte sem pro nahrání.',
	'invalid_file_type' => 'Špatný formát souboru!',
	'file_too_big' => 'Soubor je příliš velký! Tvůj soubor má {{filesize}} a limit je {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Povolené servery proxy',
	'allowed_proxies_info' => 'Řádek oddělený seznam povolených proxy IP.',

	// Error logs
	'error_logs' => 'Záznamy chyb',
	'notice_log' => 'Záznam protokolu',
	'warning_log' => 'Výstražný protokol',
	'custom_log' => 'Vlastní protokol',
	'other_log' => 'Další protokol',
	'fatal_log' => 'Fatální protokol',
	'log_file_not_found' => 'Soubor protokolu nebyl nalezen.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'hooks' => 'Webhooks',
	'hooks_info' => 'Webhooks allow external services to be notified when certain events happen. When the specified events happen.',
	'new_hook' => 'New Hook',
	'creating_new_hook' => 'Creating New Webhook',
	'editing_hook' => 'Editing Webhook',
	'delete_hook' => 'Are you sure you want to delete this hook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Webhook Type',
	'hook_events' => 'Events to trigger this webhook',
	'invalid_hook_url' => 'Invalid webhook url',
	'invalid_hook_events' => 'You must select at least 1 event',
	'register_hook_info' => 'Registrace uživatele',
	'validate_hook_info' => 'Ověření uživatele',
	'delete_hook_info' => 'Smazání uživatele',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Nelze načíst soubor sitemap {x}', // Don't replace {x}
	'sitemap_generated' => 'Soubor Sitemap byl úspěšně vygenerován',
	'sitemap_not_writable' => 'Adresář <strong> cache / sitemaps </strong> nelze upravovat.',
	'cache_not_writable' => 'Adresář <strong> cache </strong> nelze upravovat.',
	'generate_sitemap' => 'Generovat soubor Sitemap',
	'download_sitemap' => 'Stáhnout soubor Sitemap',
	'sitemap_not_generated_yet' => 'Soubor Sitemap ještě nebyl vygenerován!',
	'sitemap_last_generated_x' => 'Soubor Sitemap byl naposledy vygenerován {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Metadata stránky',
	'metadata_page_x' => 'Zobrazení metadat pro stránku {x}', // Don't replace {x}
	'keywords' => 'Klíčová slova',
	'description_max_500' => 'Popis musí mít maximálně 500 znaků.',
	'page' => 'Stránka',
	'metadata_updated_successfully' => 'Metadata byla úspěšně aktualizována.',

	// Dashboard
	'total_users' => 'Celkový počet uživatelů',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Noví uživatelé',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Průměrní hráči',
	'nameless_news' => 'NamelessMC Novinky',
	'unable_to_retrieve_nameless_news' => 'Nelze načíst nejnovější novinky',
	'confirm_leave_site' => 'Chystáte se opustit tento web! Opravdu chcete navštívit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Kompatibilita serverů',
	'issues' => 'Problémy',

	// Other
	'source' => 'Zdroj',
	'support' => 'Podpora',
	'admin_dir_still_exists' => 'Varování! The <strong>modules/Core/pages/admin</strong> adresář stále existuje. Odstraňte prosím tento adresář.',
	'mod_dir_still_exists' => 'Varování! The <strong>modules/Core/pages/mod</strong> adresář stále existuje. Odstraňte prosím tento adresář.',
	'forum_topic_reply_email' => 'Forum Topic Reply',

	// Announcements
	'announcements' => 'Announcements',
	'new_announcement' => 'New Announcement',
	'creating_announcement' => 'Creating Announcement',
	'editing_announcement' => 'Editing Announcement',
	'creating_announcement_success' => 'Announcement created successfully.',
	'editing_announcement_success' => 'Announcement updated successfully.',
	'creating_announcement_failure' => 'Announcement creation failed.',
	'editing_announcement_failure' => 'Announcement update failed.',
	'announcement_icon_instructions' => 'You can also add an icon to each announcement here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
	'header' => 'Header',
	'message' => 'Message',
	'pages' => 'Pages',
	'text_colour' => 'Text Colour',
	'background_colour' => 'Background Colour',
	'closable' => 'Closable',
	'can_view_announcement' => 'Can view Announcement',
	'verify_delete_announcement' => 'Are you sure you want to delete this announcement?',
	'deleted_announcement_success' => 'Announcement deleted successfully.',
	'header_required' => 'Header is required.',
	'message_required' => 'Message is required',
	'background_colour_required' => 'Background Colour is required',
	'text_colour_required' => 'Text Colour is required',

	// Discord
	'discord' => 'Discord',
	'enable_discord_integration' => 'Enable Discord integration?',
	'discord_role_id' => 'Discord Role ID',
	'discord_role_id_numeric' => 'Discord Role ID must be numeric.',
	'discord_role_id_length' => 'Discord Role ID must be 18 digits long.',
	'discord_settings_updated' => 'Your Discord settings were updated successfully.',
	'discord_guild_id_required' => 'Please enter your Discord Server ID for Discord integration to work.',
	'discord_bot_url' => 'Discord Bot URL',
	'discord_bot_url_info' => 'The location which your custom instance of the Nameless Link bot. Only change this value if you know what you are doing!',
	'discord_bot_url_required' => 'Please enter your Bot URL for Discord integration to work.',
	'discord_invalid_api_url' => 'Looks like your API URL has changed. Please get the guild owner to update the URL with the Nameless Link bot.',
);
