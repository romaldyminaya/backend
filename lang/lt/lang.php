<?php

return [
    'auth' => [
        'title' => 'Administracijos zona'
    ],
    'field' => [
        'invalid_type' => 'Netinkamas laukelio tipas :type.',
        'options_method_invalid_model' => "Artributas ':field' nenuskaito tinkamo modelio. Bandykite nurodyti parinkties metodą išskirtinai modelio klasei :model",
        'options_method_not_exists' => "Modelio klasė :model turi nurodyti metodą :method() gražinantį parinktis ':field' formos laukeliui."
    ],
    'widget' => [
        'not_registered' => "Valdiklio klasės pavadinimas ':name' neiregistruotas",
        'not_bound' => "Valdiklio klasės pavadinimas ':name' nepriskirtas kontroleriui"
    ],
    'page' => [
        'untitled' => 'Neužvardintas',
        'access_denied' => [
            'label' => 'Prieiga atmesta',
            'help' => "Neturite reikiamų prieigos teisių šio puslapio peržiūrai.",
            'cms_link' => 'Grįžti į administraciją'
        ],
        'no_database' => [
            'label' => 'Truksta duombazės',
            'help' => "Duomenų bazė reikalinga administracijos prieigai. Patikrinkite duomenų bazės konfigūraciją bei migracijas ir bandykite dar kartą.",
            'cms_link' => 'Grįžti į svetainę'
        ],
        'invalid_token' => [
            'label' => 'Netinkama saugos žyma'
        ]
    ],
    'partial' => [
        'not_found_name' => "Priedėlis ':name' nerastas."
    ],
    'account' => [
        'sign_out' => 'Atsijungti',
        'login' => 'Prisijungti',
        'reset' => 'Perstatyti',
        'restore' => 'Atstatyti',
        'login_placeholder' => 'vartotojas',
        'password_placeholder' => 'slaptažodis',
        'forgot_password' => 'Pamiršote slaptažodį?',
        'enter_email' => 'Įveskite savo el.paštą',
        'enter_login' => 'Įveskite savo vartotojo vardą',
        'email_placeholder' => 'el.paštas',
        'enter_new_password' => 'Įveskite naują slaptažodį',
        'password_reset' => 'Slaptažodžio Keitimas',
        'restore_success' => 'Išsiuntėme Jums laišką el.paštu su tolimesnėmis instrukcijomis.',
        'restore_error' => "Vartotojas prisijungimo vardu ':login' nerastas",
        'reset_success' => 'Slaptažodį pakeitėme. Dabar galite prisijungti.',
        'reset_error' => 'Peteikėte netinkamą slaptažodžio atstatymo informaciją. Bandykite dar kartą!',
        'reset_fail' => 'Slaptažodžio pakeisti nepavyko!',
        'apply' => 'Taikyti',
        'cancel' => 'Atšaukti',
        'delete' => 'trinti',
        'ok' => 'GERAI'
    ],
    'dashboard' => [
        'menu_label' => 'Valdymas',
        'widget_label' => 'Skydelis',
        'widget_width' => 'Plotis',
        'full_width' => 'pilnas proltis',
        'manage_widgets' => 'Tvarkyti skydelius',
        'add_widget' => 'Pridėti skydelį',
        'widget_inspector_title' => 'Skydelio konfigūracija',
        'widget_inspector_description' => 'Konfigūruoti ataskaitų skydelį',
        'widget_columns_label' => 'Plotis :columns',
        'widget_columns_description' => 'Skydelio plotis, skaitmuo nuo 1 iki 10.',
        'widget_columns_error' => 'Įveskite skydelio plotį skaitmenimisnuo 1 iki 10.',
        'columns' => '{1} stulpelis|[2,Inf] stulpeliai',
        'widget_new_row_label' => 'Priverstina nauja eilė',
        'widget_new_row_description' => 'Kelti skydelį į naują eilę.',
        'widget_title_label' => 'Skydelio pavadinimas',
        'widget_title_error' => 'Skydelio pavadinimas yra būtinas.',
        'reset_layout' => 'Atstatyti išdėstymą',
        'reset_layout_confirm' => 'Atstatyti išdėstymą į pirminę?',
        'reset_layout_success' => 'Išdėstymą atstatėme',
        'make_default' => 'Įrašyti kaip pagrindinį',
        'make_default_confirm' => 'Nustatyti dabartinį išdėstymą kaip pagrindinį?',
        'make_default_success' => 'Dabartinis išdėstymas dabar yra pagrindinis',
        'collapse_all' => 'Suskleisti visus',
        'expand_all' => 'Išskleisti visus',
        'status' => [
            'widget_title_default' => 'Sistemos būsena',
            'update_available' => '{0} galimų naujinimų!|{1} galimas naujinimas!|[2,Inf] galimi naujinimai!',
            'updates_pending' => 'Laukiantys programos naujinimai',
            'updates_nil' => 'Sistema yra pilnai atnaujinta',
            'updates_link' => 'Naujinti',
            'warnings_pending' => 'Tam tikros problemos reikalauja peržiūros',
            'warnings_nil' => 'Įspėjimų nėra',
            'warnings_link' => 'Žiūrėti',
            'core_build' => 'Sistemos sudėtis',
            'event_log' => 'Įvykių registras',
            'request_log' => 'Užklausų registras',
            'app_birthday' => 'Veikia nuo',
        ],
        'welcome' => [
            'widget_title_default' => 'Sveiki!',
            'welcome_back_name' => 'Sveiki sugrįžę į :app, :name.',
            'welcome_to_name' => 'Prisijungėte į :app, :name.',
            'first_sign_in' => 'Tai yra pirmas kartas kai prisijungiate.',
            'last_sign_in' => 'Paskutinį kartą prisijungėte',
            'view_access_logs' => 'Žiurėti prieigos registrą',
            'nice_message' => 'Geros Jums dienos!',
        ]
    ],
    'user' => [
        'name' => 'Administratorius',
        'menu_label' => 'Administratoriai',
        'menu_description' => 'Tvarkyti administracinius vartotojus, grupes ir prieigos leidimus.',
        'list_title' => 'Tvarkyti Administratorius',
        'new' => 'Naujas Administratorius',
        'login' => 'Prisijungimo vardas',
        'first_name' => 'Vardas',
        'last_name' => 'Pavardė',
        'full_name' => 'Pilnas vardas',
        'email' => 'El.paštas',
        'groups' => 'Grupės',
        'groups_comment' => 'Priskirkite vartotoją grupėms. Grupės nurodo prieigos leidimus, kurie gali būti perrašyti redaguojant vartotoją, Prieigų lentelėje.',
        'avatar' => 'Avataras/Foto',
        'password' => 'Slaptažodis',
        'password_confirmation' => 'Patvirtinti Slaptažodį',
        'permissions' => 'Prieigos leidimai',
        'account' => 'Vartotojas',
        'superuser' => 'Super Vartotojas',
        'superuser_comment' => 'Suteikia šiam vartotojui neribojamą prieigą į visus nustatymus sistemojeG. Super vartotojai gali pridėti bei tvarkyti vartotojus. ',
        'send_invite' => 'Siųsti pakvietimą el.paštu',
        'send_invite_comment' => 'Siunčia informuojantį laišką su prisijungimo informacija.',
        'delete_confirm' => 'Trinti šį administratorių?',
        'return' => 'Grįžti į administratorių sąrašą',
        'allow' => 'Leisti',
        'inherit' => 'Paveldima',
        'deny' => 'Neleisti',
        'activated' => 'Aktyvuotas',
        'last_login' => 'Paskutinis Prisijungimas',
        'created_at' => 'Sukurtas',
        'updated_at' => 'Atnaujintas',
        'group' => [
            'name' => 'Grupė',
            'name_comment' => 'Pavadinimas rodomas Administratoriaus pridėjimo formos grupių sąraše.',
            'name_field' => 'Pavadinimas',
            'description_field' => 'Aprašymas',
            'is_new_user_default_field_label' => 'Pagrindinė grupė',
            'is_new_user_default_field_comment' => 'Naujus administratorius priskirti šiai grupei automatiškai',
            'code_field' => 'Kodas',
            'code_comment' => 'Įveskite unikalų grupės kodą jei norėsite pasiekti šią grupę per API.',
            'menu_label' => 'Tvarkyti Grupes',
            'list_title' => 'Tvarkyti Grupes',
            'new' => 'Nauja Grupė',
            'delete_confirm' => 'Ištrinti šią administratorių grupę?',
            'return' => 'Grįžti į grupių sąrašą',
            'users_count' => 'Vartotojai(ų)'
        ],
        'preferences' => [
            'not_authenticated' => 'Nėra prisijungusio vartotojo, kurio nustatymus būtų galima užkrauti arba išsaugoti.'
        ]
    ],
    'list' => [
        'default_title' => 'Sąrašas',
        'search_prompt' => 'Ieškoti...',
        'no_records' => 'Kolkas nėra jokių įrašų.',
        'missing_model' => 'Sąrašo elgsenos nustatymai naudojami :class klasėje, neturi nurodyto modelio.',
        'missing_column' => 'Nėra stulpelio aprašų :columns stulpeliui.',
        'missing_columns' => 'Sąrašas naudojamas klasėje :class neturi nurodytų stulpelių.',
        'missing_definition' => "Sąrašo elgsena neturi stulpelio ':field'.",
        'missing_parent_definition' => "Sąrašo elgsena neturi nurodymo laukeliui ':definition'.",
        'behavior_not_ready' => 'Sąrašo elgsena neinicijuota. Pasitikrinkite ar naudojate funckiją makeLists() savo kontroleryje.',
        'invalid_column_datetime' => "Stulpelio reikšmė ':column' nėra DateTime objektas, galbūt nenurodėte \$dates kvietinio modelyje?",
        'pagination' => 'Rodomi įrašai: :from-:to iš :total',
        'first_page' => 'Pirmas puslapis',
        'last_page' => 'Paskutinis puslapis',
        'prev_page' => 'Ankstesnis puslapis',
        'next_page' => 'Sekantis puslapis',
        'refresh' => 'Perkrauti',
        'updating' => 'Atnaujinama...',
        'loading' => 'Kraunama...',
        'setup_title' => 'Sąrašo nustatymai',
        'setup_help' => 'Pažymėkite varnelėmis stulpelius, kuriuos norite matyti šąraše. Taip pat galite nustatyti stulpelių eiliškumą rikiuojant juos palės pagalba aukštyn ir žemyn.',
        'records_per_page' => 'Įrašų puslapyje',
        'records_per_page_help' => 'Pasirinkite norimą įrašų skaičių puslapyje. Primename, kad didelis kiekis įrašų viename puslapyje įtakos užkrovimo našumą.',
        'check' => 'Žymėti',
        'delete_selected' => 'Trinti pasirinktus',
        'delete_selected_empty' => 'Nepažymėjote nieko trynimui.',
        'delete_selected_confirm' => 'Ištrinti pasirinktus įrašus?',
        'delete_selected_success' => 'Pasirinktus įrašus ištrynėme.',
        'column_switch_true' => 'Taip',
        'column_switch_false' => 'Ne'
    ],
    'fileupload' => [
        'attachment' => 'Priedas',
        'help' => 'Įrašykite pavadinimą ir aprašymą šiam priedui.',
        'title_label' => 'Pavadinimas',
        'description_label' => 'Aprašymas',
        'default_prompt' => 'Spauskite %s arba įtempkite failus čia',
        'attachment_url' => 'Priedo URL',
        'upload_file' => 'Įkelti failą',
        'upload_error' => 'Įkėlimo klaida',
        'remove_confirm' => 'Ar tikrai?',
        'remove_file' => 'Pašalinti failą'
    ],
    'form' => [
        'create_title' => 'Naujas :name',
        'update_title' => 'Redaguoti :name',
        'preview_title' => 'Peržiūrėti :name',
        'create_success' => ':name sukurtas',
        'update_success' => ':name atnaujintas',
        'delete_success' => ':name ištrintas',
        'reset_success' => 'Atstatymas baigtas',
        'missing_id' => 'Formos įrašo ID nenurodytas.',
        'missing_model' => 'Formos elgsena naudojama klasėje :class neturi nurodyto modelio.',
        'missing_definition' => "Formos elgsena neturi laukelio reikšmei ':field'.",
        'not_found' => 'Formos įrašas su ID :id nebuvo rastas.',
        'action_confirm' => 'Ar tikrai?',
        'create' => 'Kurti',
        'create_and_close' => 'Kurti ir uždaryti',
        'creating' => 'Kuriama...',
        'creating_name' => 'Kuriama :name...',
        'save' => 'Saugoti',
        'save_and_close' => 'Saugoti ir uždaryti',
        'saving' => 'Saugome...',
        'saving_name' => 'Saugome :name...',
        'delete' => 'Trinti',
        'deleting' => 'Triname...',
        'confirm_delete' => 'Trinti įrašą?',
        'confirm_delete_multiple' => 'Trinti pasirinktus įrašus?',
        'deleting_name' => 'Triname :name...',
        'reset_default' => 'Atstatyti į pradžią',
        'resetting' => 'Atstatome',
        'resetting_name' => 'Atstatome :name',
        'undefined_tab' => 'Įvairus',
        'field_off' => 'Išjungta',
        'field_on' => 'Įjungta',
        'add' => 'Pridėti',
        'apply' => 'Taikyti',
        'cancel' => 'Atšaukti',
        'close' => 'Uždaryti',
        'confirm' => 'Patvirtinti',
        'reload' => 'Perkrauti',
        'complete' => 'Užbaigti',
        'ok' => 'GERAI',
        'or' => 'arba',
        'confirm_tab_close' => 'Uždaryti kortelę? Neišsaugoti pakeitimai bus prarasti.',
        'behavior_not_ready' => 'Formos elgsena nebuvo inicijuota, pasitikrinkite ar užklausėte funkciją initForm() savo kontroleryje.',
        'preview_no_files_message' => 'Nėra įkeltų failų.',
        'preview_no_record_message' => 'Nėra pasirinktų įrašų.',
        'select' => 'Pasirinkti',
        'select_all' => 'viską',
        'select_none' => 'nieko',
        'select_placeholder' => 'prašome pasirinkti',
        'insert_row' => 'Pridėti Eilutę',
        'insert_row_below' => 'Pridėti Eilutę Žemiau',
        'delete_row' => 'Trinti Eilutę',
        'concurrency_file_changed_title' => 'Failas buvo pakeistas',
        'concurrency_file_changed_description' => "Jūsų redaguojamą failą diske pakeitė kitas vartotojas. Galite perkrauti failą prarasdami pakeitimus arba perrašyti failą diske.",
        'return_to_list' => 'Grįžti į sąrašą'
    ],
    'recordfinder' => [
        'find_record' => 'Rasti Įrašą'
    ],
    'pagelist' => [
        'page_link' => 'Puslapio nuoroda',
        'select_page' => 'Pasirinkti puslapį...'
    ],
    'relation' => [
        'missing_config' => "Subendrinimo elgsena neturi konfigūracijos ':config'.",
        'missing_definition' => "Subendrinimo elgsena neturi nustatymo ':field' laukeliui.",
        'missing_model' => 'Subendrinimo elgsena naudojama klasėje :class neturi nustatyto modelio.',
        'invalid_action_single' => 'Šis veiksmas negalimas pavieniam subendrinimui.',
        'invalid_action_multi' => 'Šis veiksmas negalimas daugialypiui subendrinimui.',
        'help' => 'Spauskite elementą pridėjimui',
        'related_data' => 'Giminingi :name duomenys',
        'add' => 'Pridėti',
        'add_selected' => 'Pridėti pasirinktus',
        'add_a_new' => 'Pridėti naują :name',
        'link_selected' => 'Pasirinkta nuoroda',
        'link_a_new' => 'Jungti naują :name',
        'cancel' => 'Atšaukti',
        'close' => 'Uždaryti',
        'add_name' => 'Pridėti :name',
        'create' => 'Kurti',
        'create_name' => 'Kurti :name',
        'update' => 'Atnaujinti',
        'update_name' => 'Atnaujinti :name',
        'preview' => 'Peržiūrėti',
        'preview_name' => 'Peržiūrėti :name',
        'remove' => 'Pašalinti',
        'remove_name' => 'Pašalinti :name',
        'delete' => 'Ištrinti',
        'delete_name' => 'Ištrinti :name',
        'delete_confirm' => 'Ar tikrai?',
        'link' => 'Nuoroda',
        'link_name' => 'Nuoroda :name',
        'unlink' => 'Atjungti',
        'unlink_name' => 'Atjungti :name',
        'unlink_confirm' => 'Ar tikrai?'
    ],
    'reorder' => [
        'default_title' => 'Rūšiuoti įrašus',
        'no_records' => 'Nėra įrašų galimų rūšiavimui.'
    ],
    'model' => [
        'name' => 'Modelis',
        'not_found' => "Modelis ':class' su ID :id nerastas",
        'missing_id' => 'Nenurodytas ID modelio įrašui ieškoti.',
        'missing_relation' => "Modelis ':class' neturi nustatymo ':relation'.",
        'missing_method' => "Modelis ':class' neturi metodo ':method'.",
        'invalid_class' => "Modelis :model naudojamas klasėje :class yra netinkamas. Jis turi kreiptis į \Model klasę.",
        'mass_assignment_failed' => "Masinis priskyrimas nepavyko Modelio atributui ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Sistemos konfigūracijos patarimai',
        'tips_description' => 'Yra problemų į kurias turėtumėte atkreipti dėmesį norėdami sukonfigūruoti sistemą tinkamai.',
        'permissions'  => 'Direktorija :name arba jos subdirektorijos nėra įrašomos naudojant PHP. Prašome nustatyti rašymo prieigą serveryje šiai direktorijai.',
        'extension' => 'PHP priedas :name nėra įdiegtas. Prašome įdiegti ir aktyvuoti šį priedą.'
    ],
    'editor' => [
        'menu_label' => 'Redaktoriaus nustatymai',
        'menu_description' => 'Redaguoti bendrąsias redaktoriaus savybes, tokias kaip šrifto dydis ir spalvų schema.',
        'font_size' => 'Šrifto dydis',
        'tab_size' => 'Kortelės dydis',
        'use_hard_tabs' => 'Pastūmimas naudojant TAB',
        'code_folding' => 'Kodo suskleidimas',
        'code_folding_begin' => 'Žymėti pradžią',
        'code_folding_begin_end' => 'Žymėti pradžią ir pabaigą',
        'autocompletion' => 'Autopildymas',
        'word_wrap' => 'Perkėlimas',
        'highlight_active_line' => 'Paryškiti aktyvią eilutę',
        'auto_closing' => 'Automatiškai uždaryti žymas',
        'show_invisibles' => 'Rodyti nematomus simbolius',
        'show_gutter' => 'Rodyti paraštę',
        'basic_autocompletion'=> 'Paprastas autopildymas (Ctrl + Space)',
        'live_autocompletion'=> 'Autopildymas gyvai',
        'enable_snippets'=> 'Įjungti kodo fragmentus (Tab)',
        'display_indent_guides'=> 'Rodyti pastūmimo gidą',
        'show_print_margin'=> 'Rodyti spausdinimo ribą',
        'mode_off' => 'Išjungta',
        'mode_fluid' => 'Paslankus',
        '40_characters' => '40 Simbolių',
        '80_characters' => '80 Simbolių',
        'theme' => 'Spalvų schema',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Custom stylesheet',
        'custom styles_comment' => 'Custom styles to include in the HTML editor.',
        'markup_classes' => 'Žymėjimo Klasės',
        'paragraph' => 'Pastraipa',
        'link' => 'Nuoroda',
        'table' => 'Lentelė',
        'table_cell' => 'Lentelės Langelis',
        'image' => 'Paveiksliukas',
        'label' => 'Žymeklis',
        'class_name' => 'Klasės pavadinimas',
        'markup_tags' => 'Žymėjimo tagai',
        'allowed_empty_tags' => 'Leisti tuščius tagus',
        'allowed_empty_tags_comment' => 'Tagų sąrašas, kurie nepašalinami kai juose nėra turinio.',
        'allowed_tags' => 'Leidžiami tagai',
        'allowed_tags_comment' => 'Leidžiamų tagų sąrašas.',
        'no_wrap' => 'Neperkelti tagų',
        'no_wrap_comment' => 'Tagų sąrašas, kurie nebus perkeliami blokuose.',
        'remove_tags' => 'Pašalinti tagus',
        'remove_tags_comment' => 'Tagų sąrašas, kurie šalinami su esančiu turiniu juose.'
    ],
    'tooltips' => [
        'preview_website' => 'Peržiūrėti svetainę'
    ],
    'mysettings' => [
        'menu_label' => 'Mano nustatymai',
        'menu_description' => 'Nustatymai susieto su Jūsų administracine anketa'
    ],
    'myaccount' => [
        'menu_label' => 'Mano anketa',
        'menu_description' => 'Atnaujinkite savo anketos informaciją tokią kaip vardas, el.paštas ir slaptažodis.',
        'menu_keywords' => 'saugus prisijungimas'
    ],
    'branding' => [
        'menu_label' => 'Redaguoti posistemę',
        'menu_description' => 'Redaguoti adminsitracinės zonos pavadinimą, spalvas bei logotipą.',
        'brand' => 'Prekės ženklas',
        'logo' => 'Logotipas',
        'logo_description' => 'Įkelkite logotipą, kurį norite naudoti posistemėje.',
        'app_name' => 'Programos Pavadinimas',
        'app_name_description' => 'Šis pavadinimas bus rodomas naršyklės kortelėje naudojant administracinę zoną.',
        'app_tagline' => 'Programos Antraštė',
        'app_tagline_description' => 'Šią antraštę matysite prisijungimo į administracinę zoną puslapyje.',
        'colors' => 'Spalvos',
        'primary_color' => 'Pirminė spalva',
        'secondary_color' => 'Antrinė spalva',
        'accent_color' => 'Akcento spalva',
        'styles' => 'Stiliai',
        'custom_stylesheet' => 'Individualus stiliaus planas (CSS)',
        'navigation' => 'Navigacija',
        'menu_mode' => 'Meniu stilius',
        'menu_mode_inline' => 'Linijoje',
        'menu_mode_tile' => 'Langeliais',
        'menu_mode_collapsed' => 'Sutraukta'
    ],
    'backend_preferences' => [
        'menu_label' => 'Posistemės savybės',
        'menu_description' => 'Tvarkykite savo anketos savybes tokias kaip norima kalba.',
        'region' => 'Regionas',
        'code_editor' => 'Kodo redaktorius',
        'timezone' => 'Laiko Juosta',
        'timezone_comment' => 'Pritaikyti rodomas datas šiai laiko juostai.',
        'locale' => 'Kalba',
        'locale_comment' => 'Pasirinkite norimą kalbą.'
    ],
    'access_log' => [
        'hint' => 'Šis registras rodo sėkmingų administratoriaus prisijungimų sąrašą. Įrašai yra saugomi viso :days dienų.',
        'menu_label' => 'Prieigos registras',
        'menu_description' => 'Žiūrėti sėkmingų administratoriaus prisijungimų sąrašą.',
        'created_at' => 'Data ir Laikas',
        'login' => 'Prisijungimas',
        'ip_address' => 'IP adresas',
        'first_name' => 'Vardas',
        'last_name' => 'Pavardė',
        'email' => 'El.paštas'
    ],
    'filter' => [
        'all' => 'viską',
        'options_method_not_exists' => "Modelio klasė :model turi nurodyti metodą :method() gražinantš parinktis ':filter' filtrui.",
        'date_all' => 'visas periodas'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Įkelkite CSV failą',
        'import_file' => 'Importuoti failą',
        'first_row_contains_titles' => 'Pirma eilutė nurodo stulpelių pavadinimus',
        'first_row_contains_titles_desc' => 'Palikite pažymėtą jeigu norite naudoti pirmą eilutę kaip stulpelių pavadinimus.',
        'match_columns' => '2. Suderinkite failo stulpelius su duomenų bazės laukeliais',
        'file_columns' => 'Failo stulpeliai',
        'database_fields' => 'Duombazės laukeliai',
        'set_import_options' => '3. Nurodykite importavimo nustatymus',
        'export_output_format' => '1. Eksportavimo formatas',
        'file_format' => 'Failo formatas',
        'standard_format' => 'Standartinis formatas',
        'custom_format' => 'Individualus formatas',
        'delimiter_char' => 'Skirtuko simbolis',
        'enclosure_char' => 'Aptvėrimo simbolis',
        'escape_char' => 'Išėjimo simbolis',
        'select_columns' => '2. Pasirinkite stulpelius eksportavimui',
        'column' => 'Stulpelis',
        'columns' => 'Stulpeliai',
        'set_export_options' => '3. Nurodykite eksportavimo nustatymus',
        'show_ignored_columns' => 'Rodyti ignoruotus stulpelius',
        'auto_match_columns' => 'Automatiškai suderinti stulpelius',
        'created' => 'Sukurta',
        'updated' => 'Atnaujinta',
        'skipped' => 'Praleista',
        'warnings' => 'Įspėjimai',
        'errors' => 'Klaidos',
        'skipped_rows' => 'Praleistos Eilutės',
        'import_progress' => 'Importavimo progresas',
        'processing' => 'Vykdoma',
        'import_error' => 'Importavimo klaida',
        'upload_valid_csv' => 'Prašome įkelti tinkamą CSV failą.',
        'drop_column_here' => 'Ikelkite stulpelį čia...',
        'ignore_this_column' => 'Ignoruoti šį stulpelį',
        'processing_successful_line1' => 'Failo eksportavimas sėkmingai užbaigtas!',
        'processing_successful_line2' => 'Nukreipiame naršyklę į failo parsiuntimą.',
        'export_progress' => 'Eksportavimo progresas',
        'export_error' => 'Eksportavimo klaida',
        'column_preview' => 'Stulpelio peržiūra',
        'file_not_found_error' => 'Failas nerastas',
        'empty_error' => 'Nėra pateiktų duomenų eksportavimui',
        'empty_import_columns_error' => 'Prašome pasirinkti stulpelius, kuriuos norite eksportuoti.',
        'match_some_column_error' => 'Prašome suderinti stulpelius.',
        'required_match_column_error' => 'Prašome nurodyti atitikmenį laukeliui :label.',
        'empty_export_columns_error' => 'Prašome pasirinkti stulpelius, kuriuos norite eksportuoti.',
        'behavior_missing_uselist_error' => 'Turite įterpti kontrolerio elgesną ListController su aktyvuotu eksportavimo "useList" pasirinkimu.',
        'missing_model_class_error' => 'Prašome nurodyti modelClass atributą tipui :type',
        'missing_column_id_error' => 'Truksta stulpelių identifikatoriaus',
        'unknown_column_error' => 'Nežinomas stulpelis',
        'encoding_not_supported_error' => 'Nežinoma failo koduotė. Pasirinkite individualaus formato failą su tinkama koduote.',
        'encoding_format' => 'Failo koduotė',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Įkelti ir tvarkyti media elementus - paveiksliukus, video, garsus, dokumentus'
    ],
    'mediafinder' => [
        'label' => 'Failų Tvarkyklė',
        'default_prompt' => 'Spauskite %s mygtuką media failų paieškai'
    ],
    'media' => [
        'menu_label' => 'Media',
        'upload' => 'Įkelti',
        'move' => 'Perkelti',
        'delete' => 'Trinti',
        'add_folder' => 'Pridėti katalogą',
        'search' => 'Ieškoti',
        'display' => 'Rodyti',
        'filter_everything' => 'Viskas',
        'filter_images' => 'Paveiksliukai',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumentai',
        'library' => 'Biblioteka',
        'size' => 'Dydis',
        'title' => 'Pavadinimas',
        'last_modified' => 'Redaguotas',
        'public_url' => 'Viešas URL',
        'click_here' => 'Spauskite čia',
        'thumbnail_error' => 'Nepavyko atvaizduoti miniatiūros.',
        'return_to_parent' => 'Grįžti į pirminį katalogą',
        'return_to_parent_label' => 'Eiti aukštyn ..',
        'nothing_selected' => 'Nieko nepasirinkote.',
        'multiple_selected' => 'Pasirinkote keletą elementų.',
        'uploading_file_num' => 'Įkeliama :number failai(as)...',
        'uploading_complete' => 'Įkėlimas įvykdytas',
        'uploading_error' => 'Įkėlimas nepavyko',
        'type_blocked' => 'Failo tipas yra blokuojamas saugumo sumetimais.',
        'order_by' => 'Rūšiuoti pagal',
        'folder' => 'Katalogas',
        'no_files_found' => 'Pagal Jūsų paiešką failų neradome.',
        'delete_empty' => 'Pasirinkite emelentus trynimui.',
        'delete_confirm' => 'Trinti pasirinktus elementus?',
        'error_renaming_file' => 'Klaida pervadinant elementą.',
        'new_folder_title' => 'Naujas katalogas',
        'folder_name' => 'Katalogo pavadinimas',
        'error_creating_folder' => 'Klaida sukuriant katalogą',
        'folder_or_file_exist' => 'Katalogas ar failas šiuo pavadinimu jau yra.',
        'move_empty' => 'Pasirinkite elementus perkėlimui.',
        'move_popup_title' => 'Perkelti failus ar katalogus',
        'move_destination' => 'Paskirties katalogas',
        'please_select_move_dest' => 'Pasirinkite paskirties katalogą.',
        'move_dest_src_match' => 'Prašome pasirinkti kitą paskirties katalogą.',
        'empty_library' => 'Media biblioteka tuščiay. Pradžiai įkelkite failus ar sukurkite katalogus.',
        'insert' => 'Įterpti',
        'crop_and_insert' => 'Apkirpti ir Įterpti',
        'select_single_image' => 'Pasirinkite vieną paveiksliuką.',
        'selection_not_image' => 'pasirinktas elementas nėra paveiksliukas.',
        'restore' => 'Atstatyti visus pakeitimus',
        'resize' => 'Keisti išmatavimus...',
        'selection_mode_normal' => 'Normalus',
        'selection_mode_fixed_ratio' => 'Fiksuotas sdantykis',
        'selection_mode_fixed_size' => 'Fiksuotas dydis',
        'height' => 'Aukštis',
        'width' => 'Plotis',
        'selection_mode' => 'Pasirinkimo būdas',
        'resize_image' => 'Keisti paveiksliuko išmatavimus',
        'image_size' => 'Paveiksliuko dydis:',
        'selected_size' => 'Pasirinkta:'
    ]
];
