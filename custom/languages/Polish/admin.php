<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Polish Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Zaloguj się ponownie',

	// Sidebar
	'dashboard' => 'Panel kontrolny',
	'configuration' => 'Konfiguracja',
	'layout' => 'Wygląd',
	'user_management' => 'Zarządzanie użytkownikami',
	'admin_cp' => 'AdminCP',
	'administration' => 'Administracja',
	'overview' => 'Przegląd',
	'core' => 'Ustawienia',
	'integrations' => 'Integracje',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduły',
	'security' => 'Bezpieczeństwo',
	'sitemap' => 'Mapa strony',
	'styles' => 'Style',
	'users_and_groups' => 'Użytkownicy i Grupy',

	// Overview
	'running_nameless_version' => 'Wersja NamelessMC: <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Wersja PHP: <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statystyki',
	'registrations' => 'Rejestracje',
	'topics' => 'Tematy',
	'posts' => 'Posty',
	 'notices' => 'Powiadomienia',
	 'no_notices' => 'Brak powiadomień.',
	 'email_errors_logged' => 'Błędy email zostały zapisane. Kliknij <a href="{x}">tutaj</a> aby je zobaczyć.', // Don't replace "{x}"

	// Core
	'settings' => 'Ustawienia',
	'general_settings' => 'Główne ustawienia',
	'sitename' => 'Nazwa strony',
	'default_language' => 'Domyślny język',
	'default_language_help' => 'Użytkownicy będą mogli wybrać dowolny z zainstalowanych języków.',
	'install_language' => 'Install Language',
	'update_user_languages' => 'Zmień język użytkowników',
	'update_user_languages_warning' => 'Ta opcja sprawi, że język wszystkich użytkowników zmieni się na ten wybrany przez ciebie!',
	'updated_user_languages' => 'Języki użytkowników zostały zaktualizowane.',
	'installed_languages' => 'Nowe języki zostały zainstalowane.',
	'default_timezone' => 'Domyślna strefa czasowa',
	'registration' => 'Rejestracja',
	'enable_registration' => 'Włączyć rejestrację?',
	'verify_with_mcassoc' => 'Weryfikować konto używając MCAssoc?',
	'email_verification' => 'Włączyć weeryfikację email?',
	'registration_settings_updated' => 'Ustawnienia rejestracji zostały zaktualizowane.',
	'homepage_type' => 'Typ strony głównej',
	'post_formatting_type' => 'Typ formatowania posta',
	'portal' => 'Portal',
	'private_profiles' => 'Prywatne profile',
	'missing_sitename' => 'Wpisz nazwę strony mającą on 2 od 64 znaków długości.',
	'missing_contact_address' => 'Wpisz aders emailu kontaktowego mający od 3 do 255 znaków.',
	'use_friendly_urls' => 'Przyjazne adresy URL',
	'use_friendly_urls_help' => 'WAŻNE: Twój serwer musi być skonfigurowany tak, by pozwalał na korzystanie z plików mod_rewrite i .htaccess, aby strona działała.',
	'config_not_writable' => 'Twój plik <strong>core/config.php</strong> nie jest zapisywalny. Sprawdź uprawnienia plików.',
	'settings_updated_successfully' => 'Ustawienia zostały zaktualizowane pomyślnie.',
	'social_media' => 'Social Media',
	'youtube_url' => 'URL Youtube',
	'twitter_url' => 'URL Twitter',
	'twitter_dark_theme' => 'Użyć ciemnego stylu twitter?',
	'discord_id' => 'ID Serwera Discord',
	'discord_widget_theme' => 'Styl widgetu Doscord',
	'discord_id_length' => 'Sprawdź czy twoje ID Serwera Discord ma 18 znaków.',
	'discord_id_numeric' => 'Sprawdź czy twoje ID Discord ma odpowiednią ilość znaków (Tylko numery).',
	'dark' => 'Ciemny',
	'light' => 'Jasny',
	'google_plus_url' => 'URL Google Plus',
	'facebook_url' => 'URL Facebook ',
	'social_media_settings_updated' => 'Ustwanienia social mediów zostały zaktualizowane.',
	'successfully_updated' => 'Pomyślnie zaktualizowano',
	'debugging_and_maintenance' => 'Debugowanie i konserwacja',
	'maintenance' => 'Konserwacja',
	'debugging_settings_updated_successfully' => 'Ustawienia debugowania zostały zaktualizowane.',
	'enable_debug_mode' => 'Włączyć tryb debugowania?',
	'force_https' => 'Wymusić https?',
	'force_https_help' => 'Po włączeniu tej opcji wszystkie połączenia do Twojej witryny będą przekierowywane na https. Aby ta funkcja działała poprawnie, musisz mieć aktywny aktywny certyfikat SSL.',
	'force_www' => 'Wymusić www?',
	'contact_email_address' => 'Kontaktowy adres email',
	'emails' => 'Emaile',
	'email_errors' => 'Błędy email',
	'registration_email' => 'Email rejestracyjny',
	'contact_email' => 'Email kontaktowy',
	'forgot_password_email' => 'Email przypominający hasło',
	'unknown' => 'Nieznany',
	'delete_email_error' => 'Usuń błąd',
	'confirm_email_error_deletion' => 'Jesteś pewien że chcesz usunąć ten błąd?',
	'viewing_email_error' => 'Błąd email',
	'unable_to_write_email_config' => 'Nie można zapisać pliku <strong>core/email.php</core>. Sprawdź uprawnienia plików.',
	'enable_mailer' => 'Użyć PHPMailer?',
	'enable_mailer_help' => 'Włącz tą funkcję jeśli emaile nie są wysyłane przy domyślnej konfiguracji. Korzystanie z PHPMailer wymaga posiadania usługi umożliwiającej wysyłanie wiadomości e-mail, takich jak Gmail lub dostawca SMTP.',
	'outgoing_email' => 'Email do wysyłania wiadomości',
	'outgoing_email_info' => 'Ten adres email będzie używany przez NamelessMC do wysyłania emaili.',
	'mailer_settings_info' => 'Następujące pola są wymagane, jeśli masz włączony PHPMailer. Aby uzyskać więcej informacji na temat wypełniania tych pól, przeczytaj <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">ten</a> artykuł w NamelessMC wiki.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Hasło nie jest pokazane ze względów bezpieczeństwa.',
	'send_test_email' => 'Wyślij testowy email',
	'send_test_email_info' => 'Poniższy przycisk wyśle wiadomość e-mail na twój adres e-mail <strong> {x} </strong>. Zostaną wyświetlone wszystkie błędy wygenerowane podczas wysyłania wiadomości.', // Don't replace {x}
	'send' => 'Wyślij',
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
	'test_email_error' => 'Błąd napotkany podczas wysyłania wiadomości testowej:',
	'test_email_success' => 'Testowy email został wysłany!',
	'terms_error' => 'Upewnij się że twój regulamin ma maksymalnie 100,000 znaków.',
	'privacy_policy_error' => 'Upewnij się że twoja polityka prywatności ma maksymalnie 100,000 znaków.',
	'terms_updated' => 'Regulamin został zaktualizowany pomyślnie.',
	'avatars' => 'Awatary',
	'allow_custom_avatars' => 'Zezwolić na niestandardowe awatary?',
	'default_avatar' => 'Domyślny awatar',
	'custom_avatar' => 'Niestandardowy awatar',
	'minecraft_avatar' => 'Awatar minecraft',
	'minecraft_avatar_source' => 'Źródło awataru minecraft',
	'built_in_avatars' => 'Wbudowana usługa awatara',
	'minecraft_avatar_perspective' => 'Perspektywa awataru z miencraft',
	'face' => 'Twarz',
	'head' => 'Głowa',
	'bust' => 'Popiersie',
	'select_default_avatar' => 'Wybierz nowy domyślny awatar:',
	'no_avatars_available' => 'Brak dostępnych awatarów. Najpierw prześlij nowy obrazek.',
	'avatar_settings_updated_successfully' => 'Ustawienia awataru zostały zaktualizowane pomyślnie.',
	'navigation' => 'Nawigacja',
	'navbar_order' => 'Kolejność na pasku nawigacji',
	'navbar_order_instructions' => 'Możesz podać dowolny numer wyższy niż 0, by ułożyć zakładki na pasku nawigacji w wybranej kolejności. Numer 1 będzie pierwszy w kolejności, 2 drugi w kolejności, itd.',
	'navbar_icon' => 'Ikona na pasku nawigacji',
	'navbar_icon_instructions' => 'Możesz dodać ikonę do każdego elementu na pasku nawigacji, używając na przykład serwisu <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
	'navigation_settings_updated_successfully' => 'Ustawienia paska nawigacji zostały zaktualizowane.',
	'dropdown_items' => 'Rozwijane elementy',
	'enable_page_load_timer' => 'Włączyć wskaźnik czasu ładowania strony?',
	'google_recaptcha' => 'Włączyć Google reCAPTCHA?',
	'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
	'captcha_type' => 'Captcha Type',
	'recaptcha_site_key' => 'Klucz strony reCAPTCHA',
	'recaptcha_secret_key' => 'Sekretny klucz reCAPTCHA',
	'registration_disabled_message' => 'Wiadomość o wyłączonej rejestracji',
	'enable_nicknames_on_registration' => 'Włączyć nicki dla rejestrowanych użytkowników?',
	'validation_promote_group' => 'Grupa po weryfikacji',
	'validation_promote_group_info' => 'Użytkownik otrzyma tą grupę gdy zweryfikuje swoje konto.',
	'login_method' => 'Metoda logowania',
	'privacy_and_terms' => 'Polityka Prywatności i Regulamin',

	// Reactions
	'icon' => 'Ikona',
	'type' => 'Typ',
	'positive' => 'Pozytywny',
	'neutral' => 'Neutralny',
	'negative' => 'Negatywny',
	'editing_reaction' => 'Edytowanie reakcji',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nowa Reakcja',
	'creating_reaction' => 'Tworzenie Reakcji',
	'no_reactions' => 'Nie stworzono jeszcze żadnych reakcji.',
	'reaction_created_successfully' => 'Reakcja została utworzona pomyślnie.',
	'reaction_edited_successfully' => 'Reakcja została edytowane pomyślnie.',
	'reaction_deleted_successfully' => 'Reakcja została usunięta pomyślnie.',
	'name_required' => 'Musisz podać nazwę reakcji',
	'html_required' => 'Musisz podać HTML reakcji',
	'type_required' => 'Musisz wybrać typ reakcji',
	'name_maximum_16' => 'Nazwa reakcji może mieć maksymalnie 16 znaków',
	'html_maximum_255' => 'HTML reakcji może mieć maksymalnie 255 znaków',
	'confirm_delete_reaction' => 'Jesteś pewien, że chcesz usunąć tą reakcję?',

	// Custom profile fields
	'custom_fields' => 'Niestandardowe pola w profilu',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nowe Pole',
	'required' => 'Wymagane',
	'editable' => 'Edytowalne',
	'public' => 'Publiczne',
	'forum_posts' => 'Display on Forum',
	'text' => 'Tekst',
	'textarea' => 'Obszar tekstowy',
	'date' => 'Data',
	'creating_profile_field' => 'Tworzenie pola w profilu',
	'editing_profile_field' => 'Edytowanie pola w profilu',
	'field_name' => 'Nazwa pola',
	'profile_field_required_help' => 'Wymagane pola muszą być wypełnione przez użytkownika i pojawią się podczas rejestarcji.',
	'profile_field_public_help' => 'Publiczne pola będą widziane przez wszystkich użytkowników. Jeśli ta funkcja zostanie wyłączona, tylko moderatorzy będą je widzieć.',
	'profile_field_error' => 'Nazwa pola musi mieć od 2 do 16 znaków długości.',
	'description' => 'Opis',
	'display_field_on_forum' => 'Pokazywać pole na forum?',
	'profile_field_forum_help' => 'Gdy opcja jest włączona, pole będzie wyświetlać się przy postach użytkownika na forum.',
	'profile_field_editable_help' => 'Gdy opcja jest włączona, użytkownic będą mogli edytować to pole w ustawieniach profilu.',
	'no_custom_fields' => 'Nie stworzono jeszcze żadnych niestandardowych pól profilowych.',
	'profile_field_updated_successfully' => 'Pole w profilu zostało zaktualizowane pomyślnie.',
	'profile_field_created_successfully' => 'Pole w profilu zostało edytowane pomyślnie.',
	'profile_field_deleted_successfully' => 'Pole w profilu zostało usunięte pomyślnie.',

	 // Minecraft
	 'enable_minecraft_integration' => 'Włączyć integrację minecraft?',
	 'mc_service_status' => 'Status serwerów mojang',
	 'service_query_error' => 'Nie można uzyskać statusu serwerów mojang.',
	 'authme_integration' => 'Integracja AuthMe',
	 'authme_integration_info' => 'Gdy integracja AuthMe jes włączona, użytkownicy rejestrują się tylko w grze.',
	 'enable_authme' => 'Włączyć integrację AuthMe?',
	 'authme_db_address' => 'Adres bazy danych AuthMe',
	 'authme_db_port' => 'Port bazy danych AuthMe',
	 'authme_db_name' => 'Nazwa bazy danych AuthMe',
	 'authme_db_user' => 'Użytkownik bazy danych AuthMe',
	 'authme_db_password' => 'Hasło do bazy danych AuthMe',
	 'authme_hash_algorithm' => 'Algorytm mieszający AuthMe',
	 'authme_db_table' => 'Tabela AuthMe',
	 'enter_authme_db_details' => 'Wprowadź poprawne dane bazy danych.',
	 'authme_password_sync' => 'Synchronizować hasło AuthMe?',
	 'authme_password_sync_help' => 'Gdy włączone, po każdorazowym zaktualizowaniu hasła użytkownika, hasło zostanie również zaktualizowane na stronie.',
	 'minecraft_servers' => 'Serwery Minecraft',
	 'account_verification' => 'Weryfikacja konta Minecraft',
	 'server_banners' => 'Bannery serwerów',
	 'query_errors' => 'Błędy',
	 'add_server' => '<i class="fa fa-plus-circle"></i> Dodaj Serwer',
	 'no_servers_defined' => 'Nie zostały dodane jeszcze żadne serwery',
	 'query_settings' => 'Ustawienia ogólne',
	 'default_server' => 'Domyślny serwer',
	 'no_default_server' => 'Brak domyślnego serwera',
	 'external_query' => 'Użyć external query?',
	 'external_query_help' => 'Gdy domyślne ustawienia serwera nie działają, włącz tą opcję.',
	 'adding_server' => 'Dodawanie serwera',
	 'server_name' => 'Nazwa serwera',
	 'server_address' => 'Adres serwera',
	 'server_address_help' => 'Tu wpisz adres IP lub domenę (bez portu), której używasz do połączenia się z serwerem.',
	 'server_port' => 'Port serwera',
   'parent_server' => 'Serwer nadrzędny',
   'parent_server_help' => 'Serwer nadrzędny jest zazwyczaj serwerem z silnikeim Bungeecord do którego serwer obecnie konfigurowany jest podłączony.',
   'no_parent_server' => 'Brak serwera nadrzędnego',
   'bungee_instance' => 'Serwer Bungeecord?',
   'bungee_instance_help' => 'Wybierz tą opcję jeśli serwer jest w sieci Bungeecord.',
   'server_query_information' => 'Aby wyświetlić listę graczy na twojej stronie, serwer <strong>musi</strong> mieć włączoną opcję \'enable-query\' w pliku <strong>server.properties</strong>',
   'enable_status_query' => 'Włączyć sprawdzanie statusu?',
   'status_query_help' => 'Gdy opcja jest włączona, na stronie statusu serwera będzie pokazane czy jest on online czy offline.',
   'show_ip_on_status_page' => 'Pokazać IP na stronie statusu?',
   'show_ip_on_status_page_info' => 'Jeśli włączone użytkownicy będą mogli kopiować IP serwera na stronie statusu..',
   'enable_player_list' => 'Włączyć listę graczy?',
   'pre_1.7' => 'Wersja Minecraft starsza od 1.7?',
   'player_list_help' => 'Gdy włączone, strona statusu serwera będzie pokazywała listę graczy online.',
   'server_query_port' => 'Query port serwera',
   'server_query_port_help' => 'To jest opcja query.port w pliku <strong>server.properties</strong>, w katalogu serwera, wyświetlana pod warunkiem, że opcja enable-query w tym samym pliku jest ustawiona na true.',
   'server_name_required' => 'Wpisz nazwę serwera',
   'server_name_minimum' => 'Upewnij się że nazwa serwera ma co najmniej 1 znak.',
   'server_name_maximum' => 'Upewnij się żę nazwa serwera ma maksymalnie 20 znaków.',
   'server_address_required' => 'Wpisz adres serwera',
   'server_address_minimum' => 'Upewnij się że adres serwera ma co najmniej 1 znak.',
   'server_address_maximum' => 'Upewnij się żę aders serwera ma maksymalnie 64 znaki.',
   'server_port_required' => 'Wpisz port serwera',
   'server_port_minimum' => 'Upewnij się żę port serwera ma co najmniej 2 znaki.',
   'server_port_maximum' => 'Upewnij sięże port serwera ma maksymalnie 5 znaków.',
   'server_parent_required' => 'Wybierz serwer nadrzędny',
   'query_port_maximum' => 'Upewnij się że twój query port ma maksymalnie 5 znaków',
   'server_created' => 'Serwer został stworzony pomyślnie.',
   'confirm_delete_server' => 'Jesteś pewien że chcesz usunąć ten serwer?',
	 'server_updated' => 'Serwer został zaktualizowany pomyślnie.',
	 'editing_server' => 'Edytowanie serwera',
	 'server_deleted' => 'Serwer został usunięty pomyślnie',
	 'unable_to_delete_server' => 'Nie można usunąć serwera.',
	 'leave_port_empty_for_srv' => 'Możesz zostawić to pole puste jeśli port serwera to 25565, lub jeśli twoja domena używa rekordu SRV.',
   'viewing_query_error' => 'Błąd połączenia',
   'confirm_query_error_deletion' => 'Jesteś pewien że chcesz usunąć ten błąd?',
   'no_query_errors' => 'Nie znaleziono żadnych błędów połączenia.',
   'new_banner' => '<i class="fa fa-plus-circle"></i> Nowy banner',
	 'purge_errors' => 'Usuń błędy',
	 'confirm_purge_errors' => 'Jestś pewien że chcesz usunąć wszystkie błędy?',
	'email_errors_purged_successfully' => 'Błędy email zostały wyczyszczone pomyślnie.',
 	'error_deleted_successfully' => 'Błąd został usunięty pomyślnie.',
 	'no_email_errors' => 'Nie zarejestrowano błędów email.',
 	'email_settings_updated_successfully' => 'Ustawineia email zostały zaktualizowane pomyślnie.',
 	'content' => 'Zawartość',
	 'mcassoc_help' => 'Mcassoc to usługa zewnętrzna, za pomocą której można zweryfikować, czy użytkownicy są właścicielami zarejestrowanego konta Minecraft. By użyć tej funkcji musisz zarejestrować się <a href="https://mcassoc.lukegb.com/" target="_blank">tutaj</a> aby zdobyć klucz.',
	 'mcassoc_key' => 'Klucz mcassoc',
	 'mcassoc_instance' => 'Klucz instancji mcassoc',
	 'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Kliknij by wygenerować klucz instancji</a>',
	 'mcassoc_error' => 'Upewnij się, że wpisałeś poprawnie swój klucz i poprawnie wygenerowałeś klucz instancji.',
	 'updated_mcassoc_successfully' => 'Ustawienia mcassoc zostały zaktualizowane pomyślnie.',
	 'force_premium_accounts' => 'Wymuśić posiadanie konta miencraft premium?',
	 'banner_background' => 'Tło bannera',
	 'query_interval' => 'Opóźnienie query (w minutach, wpisz liczbę między 5 a 60)',
	 'player_graphs' => 'Wykres graczy',
	 'player_count_cronjob_info' => 'Możesz ustawić zadanie cron, aby wysyłać zapytania do serwerów co {x} minut za pomocą następującej komendy:',
	 'status_page' => 'Włączyć stronę statusu?',
	 'minecraft_settings_updated_successfully' => 'Ustawienia zostały zaktualizowane pomyślnie.',
	 'server_id_x' => 'ID serwera: {x}', // Don't replace {x}
	 'server_information' => 'Informacje o serwerze',
	 'query_information' => 'Informacje o query',
	 'query_errors_purged_successfully' => 'Błędy query zostały wyczyszczone.',
	 'query_error_deleted_successfully' => 'Błędy query zostały usunięte.',
	 'banner_updated_successfully' => 'Baner został zmieniony pomyślnie. Jego aktualizacja może chwilę potrwać.',

	// Modules
	'modules_installed_successfully' => 'Nowe moduły zostały zainstalowane.',
	'enabled' => 'Włączony',
	'disabled' => 'Wyłączony',
	'enable' => 'Włącz',
	'disable' => 'Wyłącz',
	'module_enabled' => 'Moduł został włączony.',
	'module_disabled' => 'Moduł został wyłączony.',
	'author' => 'Autor:',
	'author_x' => 'Autor: {x}', // Don't replace {x}
	'module_outdated' => 'Wykryliśmy, e ten moduł jest przeznaczony do wersji Nameless {x}, a ty używasz wersji Nameless {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Znajdź moduły',
	'view_all_modules' => 'Pokaż wszystkie moduły',
	'unable_to_retrieve_modules' => 'Podczas pobierania modułów wystąpił błąd.',
	'module' => 'Moduł',
	'unable_to_enable_module' => 'Nie możesz włączyć niekompatybilnego modułu.',

	// Styles
	'templates' => 'Szablony',
	'panel_templates' => 'Szablony panelu administracji',
	'template_outdated' => 'Wykryliśmy że ten szablon jest przeznaczony do wersji Nameless {x}, a ty używasz wersji Nameless {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktywny',
	'deactivate' => 'Dezaktywuj',
	'activate' => 'Aktywuj',
	'warning_editing_default_template' => 'Uwaga! Zalecamy nie edytować domyślnego szablonu.',
	'images' => 'Grafiki',
	'upload_new_image' => 'Wgraj nową grafikę',
	'reset_background' => 'Zresetuj tło',
	'install' => '<i class="fa fa-plus-circle"></i> Zainstaluj',
	'template_updated' => 'Szablon został zainstalowany pomyślnie.',
	'default' => 'Domyślny',
	'make_default' => 'Ustaw jako domyślny',
	'default_template_set' => 'Szablon {x} został ustawiony jako domyślny.', // Don't replace {x}
	'template_deactivated' => 'Szablon został dezaktywowany.',
	'template_activated' => 'Szablon został aktywowany.',
	'permissions' => 'Uprawnienia',
	'setting_perms_for_x' => 'Ustawianie uprawnień dla szablonu {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Nowe szablony zostały zainstalowane pomyślnie.',
	'confirm_delete_template' => 'Jestś pewien że chcesz usunąć ten szablon?',
	'delete' => 'Usuń',
	'template_deleted_successfully' => 'Szablon został usunięty pomyślnie.',
	'background_image_x' => 'Grafika w tle: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Grafika na bannerze: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'Ścieżka <strong>uploads/backgrounds</strong> nie jest zapisywalna!',
	'template_banners_directory_not_writable' => 'Ścieżka <strong>uploads/template_banners</strong> nie jest zapisywalna!',
	'template_banner_reset_successfully' => 'Banner został zresetowany pomyślnie.',
	'template_banner_updated_successfully' => 'Banner został zaktualizowany pomyślnie.',
	'reset_banner' => 'Zresetuj banner',
	'find_templates' => 'Znajdź szablony',
	'view_all_templates' => 'Pokaż wszystkie szablony',
	'unable_to_retrieve_templates' => 'Podczas pobierania szablonów wystąpił błąd.',
	'template' => 'Szablon',
	'stats' => 'Statystyki',
	'downloads_x' => 'Pobrania: {x}',
	'views_x' => 'Wyświetlenia: {x}',
	'rating_x' => 'Ocena: {x}',
	'editing_template_x' => 'Edytownie szablonu {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Edytownie pliku {x} w szablonie {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Podczas zapisywania pliku szablonu wystąpił błąd. Sprawdź uprawnienia plików.',
	'unable_to_delete_template' => 'Podczas całkowitego usuwania szablonu wystąpił błąd. Sprawdź uprawnienia plików.',
	'background_reset_successfully' => 'Tło zostało zresetowane pomyślnie.',
	'background_updated_successfully' => 'Tło zostało zmienione pomyślnie.',
	'unable_to_enable_template' => 'Nie możesz włączyć niekompatybilnego szablonu.',

	// Users & groups
	'users' => 'Użytkownicy',
	'groups' => 'Grupy',
	'group' => 'Grupa',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nowy użytkownik',
	'creating_new_user' => 'Tworzenie nowego użytkownika',
	'registered' => 'Zarejestrowany',
	'user_created' => 'Użytkownik został stworzony pomyślnie.',
	'cant_delete_root_user' => 'Nie można usunąć właściciela strony!',
	'cant_modify_root_user' => 'Nie można zmodyfikować grupy właścieciela!',
	'user_deleted' => 'Użytkownik został usunięty.',
	'confirm_user_deletion' => 'Jesteś pewien że chcesz usunąć użytkownika <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Zweryfikuj konto użytkownika',
	'update_uuid' => 'Zmień UUID',
	'update_mc_name' => 'Zmień nick z minecraft',
	'reset_password' => 'Zresetuj hasło',
	'punish_user' => 'Ukarz użytkownika',
	'delete_user' => 'Usuń użytkownika',
	'minecraft_uuid' => 'UUID z minecraft',
	'other_actions' => 'Więcej akcji',
	'disable_avatar' => 'Dezaktywuj awatar',
	'select_user_group' => 'Musisz wybrać grupę użytkownika.',
	'uuid_max_32' => 'UUID może mieć maksymalnie 32 znaki.',
	'title_max_64' => 'Tytuł użytkownika może mieć maksymalnie 64 znaki.',
	'group_id' => 'ID Grupy',
	'name' => 'Nazwa',
	'title' => 'Tytuł użytkownika',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nowa Grupa',
	'group_name_required' => 'Wpisz nazwę grupy.',
	'group_name_minimum' => 'Upewnij się że nazwa grupy ma co najmniej 2 znaki.',
	'group_name_maximum' => 'Upewnij się że nazwa grupy ma maksymalnie 20 znaków.',
	'creating_group' => 'Tworzenie nowej grupy',
	'group_html_maximum' => 'Upewnij się że HTML twojej grupy ma maksymalnie 1024 znaków.',
	'group_html' => 'HTML Grupy',
	'group_html_lg' => 'HTML Grupy (duże)',
	'group_username_colour' => 'Kolor nazwy użytkownika w grupie',
	'group_username_css' => 'Group Username CSS',
	'group_staff' => 'Czy grupa jest grupą administarcji?',
	'delete_group' => 'Usuń grupę',
	'confirm_group_deletion' => 'Jesteś pewien że chcesz usunąć grupę {x}?', // Don't replace {x}
	'group_not_exist' => 'Ta grupa nie istnieje',
	'secondary_groups' => 'Drugorzedne grupy',
	'secondary_groups_info' => 'Użytkownik uzyska dodatkowe uprawnienia z tych grup. Ctrl + LPM, aby zaznaczyć / odznaczyć wiele grup.',
	'unable_to_update_uuid' => 'Nie można zaktualizować UUID.',
	'default_group' => 'Czy jest to domyślna grupa (dla nowych użytkowników)?',
	'user_id' => 'ID użytkownika',
	'uuid' => 'UUID',
	'group_order' => 'Kolejność grup',
	'group_created_successfully' => 'Grupa została stworzona pomyślnie.',
	'group_updated_successfully' => 'Grupa została zaktualizowana pomyślnie.',
	'group_deleted_successfully' => 'Grupa została usunięta pomyślnie.',
	'unable_to_delete_group' => 'Nie możesz usunąć domyślniej grupy lub grupy która może używać AdminCP. Najpierw zmień ustawienia usuwanej grupy.',
	'can_view_staffcp' => 'Czy grupa może używać AdminCP?',
	'user' => 'Użytkownik',
	'user_validated_successfully' => 'Użytkownik został zweryfikowany pomyślnie.',
	'user_updated_successfully' => 'Ustawienia użytkownika zostały zaktualizowane pomyślnie',
	'editing_user_x' => 'Edytowanie użytkownika {x}', // Don't replace {x}
	'details' => 'Szczegóły',

	// Permissions
	'select_all' => 'Zaznacz wszystko',
	'deselect_all' => 'Odznacz wszystko',
	'background_image' => 'Grafika tła',
	'can_edit_own_group' => 'Nie można zmienić uprawnień własnej grupy.',
	'permissions_updated_successfully' => 'Uprawnienia zostały zaktualizowane pomyślnie.',
	'cant_edit_this_group' => 'Nie możesz edytować uprawnień tej grupy!!',

	// General Admin language
	'task_successful' => 'Zadanie zostało zakończone powodzeniem.',
	'invalid_action' => 'Nieprawidłowe działanie.',
	'enable_night_mode' => 'Włącz tryb nocny',
	'disable_night_mode' => 'Wyłącz tryb nocny',
	'view_site' => 'Przejdź do strony',
	'signed_in_as_x' => 'Zalogowany jako {x}', // Don't replace {x}
   'warning' => 'Ostrzeżenie',

   // Maintenance
   'maintenance_mode' => 'Tryb konserwacji',
   'maintenance_enabled' => 'Tryb konserwacji jest aktualnie włączony.',
   'enable_maintenance_mode' => 'Włączyć tryb konserwacji?',
   'maintenance_mode_message' => 'Wiadomość trybu konserwacji',
   'maintenance_message_max_1024' => 'Upewnij się że wiadomość trybu konserwacji ma maksymalnie 1024 znaki.',

	// Security
	'acp_logins' => 'Logowania do panelu administratora',
	'please_select_logs' => 'Wybierz logi do wyświetlenia',
	'ip_address' => 'Adres IP',
	'template_changes' => 'Zmiany szablonów',
	'file_changed' => 'Zmiany plików',
	 'all_logs' => 'Wszystkie Logi',
   'action' => 'Akcja',
   'action_info' => 'Informacje o Akcji',

	// Updates
	'update' => 'Zaktualizuj',
	'current_version_x' => 'Aktualna wersja: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nowa wersja: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Dostępna jest nowa aktualizacja!',
	'new_urgent_update_available' => 'Dostępna jest nowa ważna aktualizacja. Zainstaluj ją możliwie jak najszybciej!',
	'up_to_date' => 'Twoja wersja NamelessMc jest aktualna!',
	'urgent' => 'Ta aktualizacja jest pilna!',
	'changelog' => 'Changelog',
	'update_check_error' => 'Podczas szukania aktualizacji wystąpił błąd:',
	'instructions' => 'Instrukcje',
	'download' => 'Pobierz',
	'install_confirm' => 'Upewnij się że pobrałeś pakiet i wypakowałeś pliki!',
	'check_again' => 'Sprawdź ponownie',

	// Widgets
	'widgets' => 'Widżety',
	'widget_enabled' => 'Widżet włączony.',
	'widget_disabled' => 'Widżet wyłączony.',
	'widget_updated' => 'Widżet został zaktualizowany.',
	'editing_widget_x' => 'Edytowanie widżetu: {x}', // Don't replace {x}
	'module_x' => 'Moduł: {x}', // Don't replace {x}
	'widget_order' => 'Kolejność widżetu',

	// Online users widget
	'include_staff_in_user_widget' => 'Pokazywać administrację w widżecie użytkownika?',
	'show_nickname_instead_of_username' => 'Pokazywać nick użytkownika zamiast nazwy?',

	// Custom Pages
	'pages' => 'Strony',
   'custom_pages' => 'Niestandardowe strony',
	 'new_page' => '<i class="fa fa-plus-circle"></i> Nowa strona',
	 'no_custom_pages' => 'Nie zostały stworzone jeszcze żadne strony.',
	 'creating_new_page' => 'Tworzenie nowej strony',
	 'page_title' => 'Tytuł strony',
	 'page_path' => 'Adres strony (poprzedzając /, np. /strona)',
	 'page_icon' => 'Ikona strony',
	 'page_link_location' => 'Lokacja linku do strony',
	 'page_link_navbar' => 'Pasek nawigacji',
	 'page_link_footer' => 'Stopka',
	 'page_link_more' => 'Rozwijana zakładka "Więcej"',
	 'page_link_none' => 'Bez linku',
	 'page_content' => 'Zawartość strony',
	 'page_redirect' => 'Przekierowanie strony?',
	 'page_redirect_to' => 'Przekierowanie strony (poprzedzając http://)',
	 'unsafe_html' => 'Zezwalać na niebezpieczne strony HTML?',
	 'unsafe_html_warning' => 'Włączenie tej opcji oznacza, że na stronie można użyć dowolnego kodu HTML, w tym potencjalnie niebezpiecznego kodu JavaScript. Włącz to tylko, jeśli masz pewność, że Twój kod HTML jest bezpieczny.',
	 'include_in_sitemap' => 'Uwzględnić w mapie strony?',
	 'sitemap_link' => 'Link do mapy strony:',
	 'basic_page' => 'Basic page?',
	 'page_permissions' => 'Uprawnienia strony',
	 'view_page' => 'Pokazać stronę?',
	 'editing_page_x' => 'Edytownie strony {x}', // Don't replace {x}
	 'unable_to_create_page' => 'Nie można stworzyć strony:',
	 'page_title_required' => 'Musisz wpisać tytuł strony.',
	 'page_url_required' => 'Musisz wpisać adres strony.',
	 'link_location_required' => 'Musisz wybrać lokalizację linku do strony.',
	 'page_title_minimum_2' => 'Tytuł strony musi mieć co najmniej 2 znaki.',
	 'page_url_minimum_2' => 'Adres strony musi mieć co najmniej 2 znaki.',
	 'page_title_maximum_30' => 'Tytuł strony może mieć maksymalnie 30 znaków.',
	 'page_icon_maximum_64' => 'Ikona strony może mieć maksymalnie 64 znaki.',
	 'page_url_maximum_20' => 'Adres strony może mieć maksymalnie 20 znaków.',
	 'page_content_maximum_20480' => 'Zawartość strony może mieć maksymalnie 20480 znaków.',
	 'page_redirect_link_maximum_512' => 'Link przekierowania strony może mieć maksymalnie 512 znaków.',
	 'confirm_delete_page' => 'Jesteś pewien, że chcesz usunąć tą stronę?',
	 'page_created_successfully' => 'Strona została stworzona pomyślnie.',
	 'page_updated_successfully' => 'Strona została zaktualizowana pomyślnie.',
	 'page_deleted_successfully' => 'Strona została usunięta pomyślnie.',

	  // API
	 'api' => 'API',
	 'enable_api' => 'Włączyć API?',
	 'api_info' => 'API pozwala pluginom i innym serwisom wchodzić w interakcje z twoją stroną, tak jak <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >oficjalny plugin NamelessMC</a>.',
	 'enable_legacy_api' => 'Włączyć legacy API?',
	 'legacy_api_info' => 'Legacy API pozwala pluginom, które używają starej wersji 1 API Nameless współpracować z 2 wersją strony.',
	 'confirm_api_regen' => 'Jesteś pewny, że chcesz wygenerować ponownie klucz API?',
	 'api_key' => 'Klucz API',
 	'api_url' => 'URL API',
 	'copy' => 'Kopiuj',
 	'api_key_regenerated' => 'Klucz API został pomyślnie wygenerowany ponownie.',
	 'api_registration_email' => 'Email rejestracji API',
	 'show_registration_link' => 'Pokaż link rejestracyjny',
 	'registration_link' => 'Link rejestracyjny',
	 'link_to_complete_registration' => 'Link do skończenia rejestracji: {x}', // Don't replace {x}
	 'api_verification' => 'Włączyć weryfikację API?',
	 'api_verification_info' => 'Gdy ta opcja jest włączona, konta mogą być weryfikowane tylko prez API, na przykład w grze używając oficjalnego pluginu Nameless. <strong>Ta opcja zastąpi weryfikację przez email i konta będą aktywowane automatycznie!</strong><br />Dla bezpieczeństwa, powinieneś ustawić aby domyślna grupa miała ograniczone uprawnienia, a następnie zaktualizować grupę otrzymywaną po weryfikacji konta w AdminCP -> Ustawienia -> Rejestracja i ustawić aby miała normalne uprawnienia  użytkownika.',
	 'enable_username_sync' => 'Włączyć synchronizację nazw użytkowników?',
	 'enable_username_sync_info' => 'Gdy ta opcja jest włączona, nazwy użytkowników na stronie będą zmienione tak, aby były takie same jak w grze.',
	 'api_settings_updated_successfully' => 'Ustawienia API zostały zaktualizowane pomyślne.',
 	'group_sync' => 'Synchronizacja grup',
 	'group_sync_info' => 'Możesz skonfigurować API tak, aby grupy na forum były automatycznie aktualizowane, żeby zawsze były takie same jak te na serwerze. Wystarczy, że wpiszesz poniżej grupy na serwerze i grupy na forum które mają być ze sobą synchronizowane.',
 	'ingame_group' => 'Nazwa grupy na serwerze',
 	'website_group' => 'Grupa na forum',
 	'set_as_primary_group' => 'Ustawić jako grupę podstawową?',
 	'set_as_primary_group_info' => 'Gdy włączone, pdstawowa grupa użytkownika na stronie zostanie zaktualizowana. Gdy wyłączone, grupa w grze zostanie dodane do wtórnych grup użytkownika na forum.',
 	'ingame_group_maximum' => 'Upewnij się, że nazwa twojej grupy ma maksymalnie 64 znaki.',
 	'select_website_group' => 'Wybierz grupę na forum.',
 	'ingame_group_already_exists' => 'Zasada synchronizowania tej grupy w grze jest już utworzona.',
 	'group_sync_rule_created_successfully' => 'Zasada synchronizowania grupy została stworzona pomyślnie.',
 	'group_sync_rules_updated_successfully' => 'Zasada synchronizowania grupy została zaktualizowana pomyślnie.',
 	'group_sync_rule_deleted_successfully' => 'Zasada synchronizowania grupy została usunięta pomyślnie',
 	'existing_rules' => 'Istniejące zasady',
 	'new_rule' => 'Nowa zasada',

	// File uploads
	'drag_files_here' => 'Przeciągnij pliki tutaj, aby je przesłać.',
	'invalid_file_type' => 'Zły typ pliku!',
	'file_too_big' => 'Plik jest za duży! Twój plik ma {{filesize}}, a limit wielkości wynosi {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Dozwolone Proxy',
	'allowed_proxies_info' => 'Rozdzielana wierszami lista dozwolonych IP Proxy.',

	// Error logs
	'error_logs' => 'Logi Błędów',
	'notice_log' => 'Logi Powiadomień',
	'warning_log' => 'Logi Ostrzeżeń',
	'custom_log' => 'Customowe Logi',
	'other_log' => 'Inne Logi',
	'fatal_log' => 'Fatalne Logi',
	'log_file_not_found' => 'Plik z logami nie został znaleziony.',
	'log_purged_successfully' => 'Log został wyczyszczony pomyślnie.',

	// Hooks
	'hooks' => 'Webhooki',
	'hooks_info' => 'Webhooki pozwalają wysyłać informacje zewnętrznym źródłom.',
	'new_hook' => 'Nowy Hook',
	'creating_new_hook' => 'Tworzenie Nowego Webhooka',
	'editing_hook' => 'Edytowanie Webhooka',
	'delete_hook' => 'Na pewno chcesz usunąć ten Webhook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Typ Webhooka',
	'hook_events' => 'Wydarzenia zasilające tego Webhooka',
	'invalid_hook_url' => 'Nieprawidłowy URL Webhooka',
	'invalid_hook_events' => 'Musisz wybrać minimum jedno wydarzenie',
	'register_hook_info' => 'Rejestracja użytkownika',
	'validate_hook_info' => 'Weryfikacja użytkownia',
	'delete_hook_info' => 'Usunięcie użytkownika',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Nie można załadować pliku mapy strony {x}', // Don't replace {x}
	'sitemap_generated' => 'Mapa strony została stworzona pomyślnie',
	'sitemap_not_writable' => 'Katalog <strong>cache/sitemaps</strong> nie jest zapisywalny.',
	'cache_not_writable' => 'Katalog <strong>cache</strong> nie jest zapisywalny.',
	'generate_sitemap' => 'Wygeneruj mapę strony',
	'download_sitemap' => 'Pobierz mapę strony',
	'sitemap_not_generated_yet' => 'Mapa strony nie została jeszcze stworzona!',
	'sitemap_last_generated_x' => 'Ostatnia mapa strony została wygenerowana {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Metadata ztrony',
	'metadata_page_x' => 'Przeglądanie matadaty strony {x}', // Don't replace {x}
	'keywords' => 'Słowa kluczowe',
	'description_max_500' => 'Opis może mieć maksymalnie 500 znaków.',
	'page' => 'Strona',
	'metadata_updated_successfully' => 'Metadata została zaktualizowana pomyślnie.',

	// Dashboard
	'total_users' => 'Wszyscy użytkownicy',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nowi użytkownicy',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Średnia liczba graczy',
	'nameless_news' => 'Newsy NamelessMC',
	'unable_to_retrieve_nameless_news' => 'Podczas pobierania newsów NamelessMC wystąpił błąd',
	'confirm_leave_site' => 'Zamierzasz opuścić tę stronę! Czy na pewno chcesz przejść do <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Kompatybilność serwera',
	'issues' => 'Problemy',

	// Other
	'source' => 'Źródło',
	'support' => 'Pomoc',
	'admin_dir_still_exists' => 'Uwaga! Katalog <strong>modules/Core/pages/admin</strong> nadal istnieje. Możesz go usunąć, ponieważ nie jest już do niczego potrzebny.',
	'mod_dir_still_exists' => 'Uwaga! Katalog <strong>modules/Core/pages/mod</strong> nadal istnieje. Możesz go usunąć, poniewać nie jest już do niczego potrzebny.',
	'forum_topic_reply_email' => 'Odpowiedź na temat w forum',

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
