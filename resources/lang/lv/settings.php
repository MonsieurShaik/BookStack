<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Iestatījumi',
    'settings_save' => 'Saglabāt iestatījumus',
    'settings_save_success' => 'Iestatījumi saglabāti',

    // App Settings
    'app_customization' => 'Pielāgojumi',
    'app_features_security' => 'Funkcijas un drošība',
    'app_name' => 'Lietotnes nosaukums',
    'app_name_desc' => 'This name is shown in the header and in any system-sent emails.',
    'app_name_header' => 'Show name in header',
    'app_public_access' => 'Publiska piekļuve',
    'app_public_access_desc' => 'Enabling this option will allow visitors, that are not logged-in, to access content in your BookStack instance.',
    'app_public_access_desc_guest' => 'Publisku apmeklētāju piekļuvi var kontrolēt "Guest" (Viesa) lietotāja uzstādījumos.',
    'app_public_access_toggle' => 'Atļaut publisku piekļuvi',
    'app_public_viewing' => 'Atļaut publisku piekļuvi?',
    'app_secure_images' => 'Paaugstinātas drošības attēlu ielāde',
    'app_secure_images_toggle' => 'Ieslēgt paaugstinātas drošības attēlu ielādi',
    'app_secure_images_desc' => 'For performance reasons, all images are public. This option adds a random, hard-to-guess string in front of image urls. Ensure directory indexes are not enabled to prevent easy access.',
    'app_editor' => 'Lapas redaktors',
    'app_editor_desc' => 'Select which editor will be used by all users to edit pages.',
    'app_custom_html' => 'Custom HTML Head Content',
    'app_custom_html_desc' => 'Any content added here will be inserted into the bottom of the <head> section of every page. This is handy for overriding styles or adding analytics code.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Lietotnes logo',
    'app_logo_desc' => 'This image should be 43px in height. <br>Large images will be scaled down.',
    'app_primary_color' => 'Galvenā aplikācijas krāsa',
    'app_primary_color_desc' => 'Sets the primary color for the application including the banner, buttons, and links.',
    'app_homepage' => 'Aplikācijas sākumlapa',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'Izvēlēties lapu',
    'app_footer_links' => 'Footer Links',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Saites nosaukums',
    'app_footer_links_url' => 'Saites URL',
    'app_footer_links_add' => 'Add Footer Link',
    'app_disable_comments' => 'Izslēgt komentārus',
    'app_disable_comments_toggle' => 'Izslēgt komentārus',
    'app_disable_comments_desc' => 'Atslēdz komentārus visās aplikācijas lapās.<br> Jau eksistējoši komentāri netiks attēloti.',

    // Color settings
    'content_colors' => 'Satura krāsas',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Plaukta krāsa',
    'book_color' => 'Grāmatas krāsa',
    'chapter_color' => 'Nodaļas krāsa',
    'page_color' => 'Lapas krāsa',
    'page_draft_color' => 'Lapas uzmetuma krāsa',

    // Registration Settings
    'reg_settings' => 'Reģistrācija',
    'reg_enable' => 'Iespējot reģistrāciju',
    'reg_enable_toggle' => 'Iespējot reģistrāciju',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Noklusētā lietotāja loma pēc reģistrācijas',
    'reg_enable_external_warning' => 'Šis uzstādījums tiek ignorēts kamēr tiek izmantota ārēja LDAP vai SAML autentifikācija. Tiks izveidoti lietotāju konti neeksistējošiem leitotājiem, ja autentifikācija pret ārējo sistēmu būs veiksmīga.',
    'reg_email_confirmation' => 'E-pasta apstiprinājums',
    'reg_email_confirmation_toggle' => 'Pieprasīt epasta apstiprināšanu',
    'reg_confirm_email_desc' => 'Ja ieslēgts domēnu ierobežojums, tad būs nepieciešama epasta apstiprināšana un šis uzstādījums tiks ignorēts.',
    'reg_confirm_restrict_domain' => 'Domēnu ierobežojums',
    'reg_confirm_restrict_domain_desc' => 'Enter a comma separated list of email domains you would like to restrict registration to. Users will be sent an email to confirm their address before being allowed to interact with the application. <br> Note that users will be able to change their email addresses after successful registration.',
    'reg_confirm_restrict_domain_placeholder' => 'Nav ierobežojumu',

    // Maintenance settings
    'maint' => 'Apkope',
    'maint_image_cleanup' => 'Tīrīt neizmantotās bildes',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_delete_images_only_in_revisions' => 'Dzēst arī attēlus, kas izmantoti tikai vecās lapu satura versijās',
    'maint_image_cleanup_run' => 'Veikt tīrīšanu',
    'maint_image_cleanup_warning' => ':count iespējami neizmantoti attēli atrasti. Vai tiešām vēlaties izdzēst šos attēlus?',
    'maint_image_cleanup_success' => ':count iespējami neizmantoti attēli atrasti un izdzēsti!',
    'maint_image_cleanup_nothing_found' => 'Nav atrasti neizmantoti attēli, nekas netika izdzēsts!',
    'maint_send_test_email' => 'Nosūtīt testa epastu',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Nosūtīt testa epastu',
    'maint_send_test_email_success' => 'Epasts nosūtīts uz :address',
    'maint_send_test_email_mail_subject' => 'Testa epasts',
    'maint_send_test_email_mail_greeting' => 'Izskatās, ka epasta piegāde strādā!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Dzēsta vienība',
    'recycle_bin_deleted_by' => 'Izdzēsa',
    'recycle_bin_deleted_at' => 'Dzēšanas laiks',
    'recycle_bin_permanently_delete' => 'Neatgriezeniski izdzēst',
    'recycle_bin_restore' => 'Atjaunot',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'Šī darbība pilnībā izdzēsis šo vienību kopā ar tai pakārtotajiem elementiem no sistēmas, un jūs nevarēsiet šo saturu atjaunot. Vai tiešām vēlaties pilnībā izdzēst šo vienību?',
    'recycle_bin_destroy_list' => 'Dzēšamās vienības',
    'recycle_bin_restore_list' => 'Atjaunojamās vienības',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Auditācijas pieraksti',
    'audit_desc' => 'Šie auditācijas pieraksti attēlo sarakstu ar sistēmā reģistrētajām aktivitātēm. Šis saraksts nav filtrēts atšķirībā no līdzīgiem aktivitāšu sarakstiem sistēmā, kur ir piemēroti atļauto darbību filtri.',
    'audit_event_filter' => 'Notikumu filtrs',
    'audit_event_filter_no_filter' => 'Bez filtra',
    'audit_deleted_item' => 'Dzēsta vienība',
    'audit_deleted_item_name' => 'Vārds: :name',
    'audit_table_user' => 'Lietotājs',
    'audit_table_event' => 'Notikums',
    'audit_table_related' => 'Saistīta vienība vai detaļa',
    'audit_table_date' => 'Notikuma datums',
    'audit_date_from' => 'Datums no',
    'audit_date_to' => 'Datums līdz',

    // Role Settings
    'roles' => 'Lomas',
    'role_user_roles' => 'Lietotāju lomas',
    'role_create' => 'Izveidot jaunu lomu',
    'role_create_success' => 'Loma veiksmīgi izveidota',
    'role_delete' => 'Dzēst lomu',
    'role_delete_confirm' => 'Loma \':roleName\' tiks dzēsta.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "Don't migrate users",
    'role_delete_sure' => 'Are you sure you want to delete this role?',
    'role_delete_success' => 'Role successfully deleted',
    'role_edit' => 'Edit Role',
    'role_details' => 'Role Details',
    'role_name' => 'Role Name',
    'role_desc' => 'Short Description of Role',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'System Permissions',
    'role_manage_users' => 'Manage users',
    'role_manage_roles' => 'Manage roles & role permissions',
    'role_manage_entity_permissions' => 'Manage all book, chapter & page permissions',
    'role_manage_own_entity_permissions' => 'Manage permissions on own book, chapter & pages',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Manage app settings',
    'role_asset' => 'Asset Permissions',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'All',
    'role_own' => 'Own',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Save Role',
    'role_update_success' => 'Role successfully updated',
    'role_users' => 'Users in this role',
    'role_users_none' => 'No users are currently assigned to this role',

    // Users
    'users' => 'Users',
    'user_profile' => 'User Profile',
    'users_add_new' => 'Add New User',
    'users_search' => 'Search Users',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'User Roles',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Only fill the below if you would like to change your password.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Delete User',
    'users_delete_named' => 'Delete user :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Are you sure you want to delete this user?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'Edit User',
    'users_edit_profile' => 'Edit Profile',
    'users_edit_success' => 'User successfully updated',
    'users_avatar' => 'User Avatar',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Preferred Language',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Connect Account',
    'users_social_disconnect' => 'Disconnect Account',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API dokumentācija',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Vārds',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Derīgs līdz',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];