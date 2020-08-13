<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedávno vytvorené',
    'recently_created_pages' => 'Nedávno vytvorené stránky',
    'recently_updated_pages' => 'Nedávno aktualizované stránky',
    'recently_created_chapters' => 'Nedávno vytvorené kapitoly',
    'recently_created_books' => 'Nedávno vytvorené knihy',
    'recently_created_shelves' => 'Nedávno vytvorené knižnice',
    'recently_update' => 'Nedávno aktualizované',
    'recently_viewed' => 'Nedávno zobrazené',
    'recent_activity' => 'Nedávna aktivita',
    'create_now' => 'Vytvoriť teraz',
    'revisions' => 'Revízie',
    'meta_revision' => 'Upravené vydanie #:revisionCount',
    'meta_created' => 'Vytvorené :timeLength',
    'meta_created_name' => 'Vytvorené :timeLength používateľom :user',
    'meta_updated' => 'Aktualizované :timeLength',
    'meta_updated_name' => 'Aktualizované :timeLength používateľom :user',
    'entity_select' => 'Entita vybraná',
    'images' => 'Obrázky',
    'my_recent_drafts' => 'Moje nedávne koncepty',
    'my_recently_viewed' => 'Nedávno mnou zobrazené',
    'no_pages_viewed' => 'Nepozreli ste si žiadne stránky',
    'no_pages_recently_created' => 'Žiadne stránky neboli nedávno vytvorené',
    'no_pages_recently_updated' => 'Žiadne stránky neboli nedávno aktualizované',
    'export' => 'Exportovať',
    'export_html' => 'Obsahovaný webový súbor',
    'export_pdf' => 'PDF súbor',
    'export_text' => 'Súbor s čistým textom',

    // Permissions and restrictions
    'permissions' => 'Oprávnenia',
    'permissions_intro' => 'Ak budú tieto oprávnenia povolené, budú mať prioritu pred oprávneniami roly.',
    'permissions_enable' => 'Povoliť vlastné oprávnenia',
    'permissions_save' => 'Uložiť oprávnenia',

    // Search
    'search_results' => 'Výsledky hľadania',
    'search_total_results_found' => ':count výsledok found|:počet nájdených výsledkov',
    'search_clear' => 'Vyčistiť hľadanie',
    'search_no_pages' => 'Žiadne stránky nevyhovujú tomuto hľadaniu',
    'search_for_term' => 'Hľadať :term',
    'search_more' => 'Načítať ďalšie výsledky',
    'search_advanced' => 'Rozšírené vyhľadávanie',
    'search_terms' => 'Hľadané výrazy',
    'search_content_type' => 'Typ obsahu',
    'search_exact_matches' => 'Presná zhoda',
    'search_tags' => 'Vyhľadávanie značiek',
    'search_options' => 'Možnosti',
    'search_viewed_by_me' => 'Videné mnou',
    'search_not_viewed_by_me' => 'Nevidené mnou',
    'search_permissions_set' => 'Oprávnenia',
    'search_created_by_me' => 'Vytvorené mnou',
    'search_updated_by_me' => 'Aktualizované mnou',
    'search_date_options' => 'Možnosti dátumu',
    'search_updated_before' => 'Aktualizované pred',
    'search_updated_after' => 'Aktualizované po',
    'search_created_before' => 'Vytvorené pred',
    'search_created_after' => 'Vytvorené po',
    'search_set_date' => 'Nastaviť Dátum',
    'search_update' => 'Aktualizujte vyhľadávanie',

    // Shelves
    'shelf' => 'Polica',
    'shelves' => 'Police',
    'x_shelves' => ':count Shelf|:count Police',
    'shelves_long' => 'Poličky na knihy',
    'shelves_empty' => 'Neboli vytvorené žiadne police',
    'shelves_create' => 'Vytvoriť novú policu',
    'shelves_popular' => 'Populárne police',
    'shelves_new' => 'Nové police',
    'shelves_new_action' => 'Nová polica',
    'shelves_popular_empty' => 'Najpopulárnejšie police sa objavia tu.',
    'shelves_new_empty' => 'Najpopulárnejšie police sa objavia tu.',
    'shelves_save' => 'Uložiť policu',
    'shelves_books' => 'Knihy na tejto polici',
    'shelves_add_books' => 'Pridať knihy do tejto police',
    'shelves_drag_books' => 'Potiahnite knihy sem a pridajte ich do tejto police',
    'shelves_empty_contents' => 'Táto polica nemá priradené žiadne knihy',
    'shelves_edit_and_assign' => 'Uprav policu a priraď knihy',
    'shelves_edit_named' => 'Upraviť poličku::name',
    'shelves_edit' => 'Upraviť policu',
    'shelves_delete' => 'Odstrániť knižnicu',
    'shelves_delete_named' => 'Odstrániť knižnicu :name',
    'shelves_delete_explain' => "Týmto vymažete policu s názvom ': name'. Obsahované knihy sa neodstránia.",
    'shelves_delete_confirmation' => 'Ste si istý, že chcete zmazať túto knižnicu?',
    'shelves_permissions' => 'Oprávnenia knižnice',
    'shelves_permissions_updated' => 'Oprávnenia knižnice aktualizované',
    'shelves_permissions_active' => 'Oprávnenia knižnice aktívne',
    'shelves_copy_permissions_to_books' => 'Copy Permissions to Books',
    'shelves_copy_permissions' => 'Copy Permissions',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this bookshelf to all books contained within. Before activating, ensure any changes to the permissions of this bookshelf have been saved.',
    'shelves_copy_permission_success' => 'Bookshelf permissions copied to :count books',

    // Books
    'book' => 'Kniha',
    'books' => 'Knihy',
    'x_books' => ':count Book|:count Books',
    'books_empty' => 'Žiadne knihy neboli vytvorené',
    'books_popular' => 'Populárne knihy',
    'books_recent' => 'Nedávne knihy',
    'books_new' => 'New Books',
    'books_new_action' => 'New Book',
    'books_popular_empty' => 'Najpopulárnejšie knihy sa objavia tu.',
    'books_new_empty' => 'The most recently created books will appear here.',
    'books_create' => 'Vytvoriť novú knihu',
    'books_delete' => 'Zmazať knihu',
    'books_delete_named' => 'Zmazať knihu :bookName',
    'books_delete_explain' => 'Toto zmaže knihu s názvom \':bookName\', všetky stránky a kapitoly budú odstránené.',
    'books_delete_confirmation' => 'Ste si istý, že chcete zmazať túto knihu?',
    'books_edit' => 'Upraviť knihu',
    'books_edit_named' => 'Upraviť knihu :bookName',
    'books_form_book_name' => 'Názov knihy',
    'books_save' => 'Uložiť knihu',
    'books_permissions' => 'Oprávnenia knihy',
    'books_permissions_updated' => 'Oprávnenia knihy aktualizované',
    'books_empty_contents' => 'Pre túto knihu neboli vytvorené žiadne stránky alebo kapitoly.',
    'books_empty_create_page' => 'Vytvoriť novú stránku',
    'books_empty_sort_current_book' => 'Zoradiť aktuálnu knihu',
    'books_empty_add_chapter' => 'Pridať kapitolu',
    'books_permissions_active' => 'Oprávnenia knihy aktívne',
    'books_search_this' => 'Hľadať v tejto knihe',
    'books_navigation' => 'Navigácia knihy',
    'books_sort' => 'Zoradiť obsah knihy',
    'books_sort_named' => 'Zoradiť knihu :bookName',
    'books_sort_name' => 'Sort by Name',
    'books_sort_created' => 'Sort by Created Date',
    'books_sort_updated' => 'Sort by Updated Date',
    'books_sort_chapters_first' => 'Chapters First',
    'books_sort_chapters_last' => 'Chapters Last',
    'books_sort_show_other' => 'Zobraziť ostatné knihy',
    'books_sort_save' => 'Uložiť nové zoradenie',

    // Chapters
    'chapter' => 'Kapitola',
    'chapters' => 'Kapitoly',
    'x_chapters' => ':count Chapter|:count Chapters',
    'chapters_popular' => 'Populárne kapitoly',
    'chapters_new' => 'Nová kapitola',
    'chapters_create' => 'Vytvoriť novú kapitolu',
    'chapters_delete' => 'Zmazať kapitolu',
    'chapters_delete_named' => 'Zmazať kapitolu :chapterName',
    'chapters_delete_explain' => 'Toto zmaže kapitolu menom \':chapterName\', všetky stránky budú ostránené
        a pridané priamo do rodičovskej knihy.',
    'chapters_delete_confirm' => 'Ste si istý, že chcete zmazať túto kapitolu?',
    'chapters_edit' => 'Upraviť kapitolu',
    'chapters_edit_named' => 'Upraviť kapitolu :chapterName',
    'chapters_save' => 'Uložiť kapitolu',
    'chapters_move' => 'Presunúť kapitolu',
    'chapters_move_named' => 'Presunúť kapitolu :chapterName',
    'chapter_move_success' => 'Kapitola presunutá do :bookName',
    'chapters_permissions' => 'Oprávnenia kapitoly',
    'chapters_empty' => 'V tejto kapitole nie sú teraz žiadne stránky.',
    'chapters_permissions_active' => 'Oprávnenia kapitoly aktívne',
    'chapters_permissions_success' => 'Oprávnenia kapitoly aktualizované',
    'chapters_search_this' => 'Search this chapter',

    // Pages
    'page' => 'Stránka',
    'pages' => 'Stránky',
    'x_pages' => ':count stránok',
    'pages_popular' => 'Populárne stránky',
    'pages_new' => 'Nová stránka',
    'pages_attachments' => 'Prílohy',
    'pages_navigation' => 'Navigácia',
    'pages_delete' => 'Zmazať stránku',
    'pages_delete_named' => 'Zmazať stránku :pageName',
    'pages_delete_draft_named' => 'Zmazať koncept :pageName',
    'pages_delete_draft' => 'Zmazať koncept',
    'pages_delete_success' => 'Stránka zmazaná',
    'pages_delete_draft_success' => 'Koncept stránky zmazaný',
    'pages_delete_confirm' => 'Ste si istý, že chcete zmazať túto stránku?',
    'pages_delete_draft_confirm' => 'Ste si istý, že chcete zmazať tento koncept stránky?',
    'pages_editing_named' => 'Upraviť stránku :pageName',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'Uložiť koncept',
    'pages_edit_draft' => 'Upraviť koncept stránky',
    'pages_editing_draft' => 'Upravuje sa koncept',
    'pages_editing_page' => 'Upravuje sa stránka',
    'pages_edit_draft_save_at' => 'Koncept uložený pod ',
    'pages_edit_delete_draft' => 'Uložiť koncept',
    'pages_edit_discard_draft' => 'Zrušiť koncept',
    'pages_edit_set_changelog' => 'Nastaviť záznam zmien',
    'pages_edit_enter_changelog_desc' => 'Zadajte krátky popis zmien, ktoré ste urobili',
    'pages_edit_enter_changelog' => 'Zadať záznam zmien',
    'pages_save' => 'Uložiť stránku',
    'pages_title' => 'Titulok stránky',
    'pages_name' => 'Názov stránky',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Náhľad',
    'pages_md_insert_image' => 'Vložiť obrázok',
    'pages_md_insert_link' => 'Vložiť odkaz na entitu',
    'pages_md_insert_drawing' => 'Insert Drawing',
    'pages_not_in_chapter' => 'Stránka nie je v kapitole',
    'pages_move' => 'Presunúť stránku',
    'pages_move_success' => 'Stránka presunutá do ":parentName"',
    'pages_copy' => 'Copy Page',
    'pages_copy_desination' => 'Copy Destination',
    'pages_copy_success' => 'Page successfully copied',
    'pages_permissions' => 'Oprávnenia stránky',
    'pages_permissions_success' => 'Oprávnenia stránky aktualizované',
    'pages_revision' => 'Revision',
    'pages_revisions' => 'Revízie stránky',
    'pages_revisions_named' => 'Revízie stránky :pageName',
    'pages_revision_named' => 'Revízia stránky :pageName',
    'pages_revisions_created_by' => 'Vytvoril',
    'pages_revisions_date' => 'Dátum revízie',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_changelog' => 'Záznam zmien',
    'pages_revisions_changes' => 'Zmeny',
    'pages_revisions_current' => 'Aktuálna verzia',
    'pages_revisions_preview' => 'Náhľad',
    'pages_revisions_restore' => 'Obnoviť',
    'pages_revisions_none' => 'Táto stránka nemá žiadne revízie',
    'pages_copy_link' => 'Kopírovať odkaz',
    'pages_edit_content_link' => 'Upraviť obsah',
    'pages_permissions_active' => 'Oprávnienia stránky aktívne',
    'pages_initial_revision' => 'Prvé zverejnenie',
    'pages_initial_name' => 'Nová stránka',
    'pages_editing_draft_notification' => 'Práve upravujete koncept, ktorý bol naposledy uložený :timeDiff.',
    'pages_draft_edited_notification' => 'Táto stránka bola odvtedy upravená. Odporúča sa odstrániť tento koncept.',
    'pages_draft_edit_active' => [
        'start_a' => ':count používateľov začalo upravovať túto stránku',
        'start_b' => ':userName začal upravovať túto stránku',
        'time_a' => 'odkedy boli stránky naposledy aktualizované',
        'time_b' => 'za posledných :minCount minút',
        'message' => ':start :time. Dávajte pozor aby ste si navzájom neprepísali zmeny!',
    ],
    'pages_draft_discarded' => 'Koncept ostránený, aktuálny obsah stránky bol nahraný do editora',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Page Template',

    // Editor Sidebar
    'page_tags' => 'Štítky stránok',
    'chapter_tags' => 'Chapter Tags',
    'book_tags' => 'Book Tags',
    'shelf_tags' => 'Shelf Tags',
    'tag' => 'Štítok',
    'tags' =>  'Štítky',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'Hodnota štítku (Voliteľné)',
    'tags_explain' => "Pridajte pár štítkov pre uľahčenie kategorizácie Vášho obsahu. \n Štítku môžete priradiť hodnotu pre ešte lepšiu organizáciu.",
    'tags_add' => 'Pridať ďalší štítok',
    'tags_remove' => 'Remove this tag',
    'attachments' => 'Prílohy',
    'attachments_explain' => 'Nahrajte nejaké súbory alebo priložte zopár odkazov pre zobrazenie na Vašej stránke. Budú viditeľné v bočnom paneli.',
    'attachments_explain_instant_save' => 'Zmeny budú okamžite uložené.',
    'attachments_items' => 'Priložené položky',
    'attachments_upload' => 'Nahrať súbor',
    'attachments_link' => 'Priložiť odkaz',
    'attachments_set_link' => 'Nastaviť odkaz',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Presuňte súbory alebo klinknite sem pre priloženie súboru',
    'attachments_no_files' => 'Žiadne súbory neboli nahrané',
    'attachments_explain_link' => 'Ak nechcete priložiť súbor, môžete priložiť odkaz. Môže to byť odkaz na inú stránku alebo odkaz na súbor v cloude.',
    'attachments_link_name' => 'Názov odkazu',
    'attachment_link' => 'Odkaz na prílohu',
    'attachments_link_url' => 'Odkaz na súbor',
    'attachments_link_url_hint' => 'Url stránky alebo súboru',
    'attach' => 'Priložiť',
    'attachments_edit_file' => 'Upraviť súbor',
    'attachments_edit_file_name' => 'Názov súboru',
    'attachments_edit_drop_upload' => 'Presuňte súbory sem alebo klinknite pre nahranie a prepis',
    'attachments_order_updated' => 'Poradie príloh aktualizované',
    'attachments_updated_success' => 'Detaily prílohy aktualizované',
    'attachments_deleted' => 'Príloha zmazaná',
    'attachments_file_uploaded' => 'Súbor úspešne nahraný',
    'attachments_file_updated' => 'Súbor úspešne aktualizovaný',
    'attachments_link_attached' => 'Odkaz úspešne pripojený k stránke',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'Používateľ už :time',
    'profile_created_content' => 'Vytvorený obsah',
    'profile_not_created_pages' => ':userName nevytvoril žiadne stránky',
    'profile_not_created_chapters' => ':userName nevytvoril žiadne kapitoly',
    'profile_not_created_books' => ':userName nevytvoril žiadne knihy',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Komentár',
    'comments' => 'Komentáre',
    'comment_add' => 'Add Comment',
    'comment_placeholder' => 'Tu zadajte svoje pripomienky',
    'comment_count' => '{0} No Comments|{1} 1 Comment|[2,*] :count Comments',
    'comment_save' => 'Uložiť komentár',
    'comment_saving' => 'Saving comment...',
    'comment_deleting' => 'Deleting comment...',
    'comment_new' => 'New Comment',
    'comment_created' => 'commented :createDiff',
    'comment_updated' => 'Updated :updateDiff by :username',
    'comment_deleted_success' => 'Comment deleted',
    'comment_created_success' => 'Comment added',
    'comment_updated_success' => 'Comment updated',
    'comment_delete_confirm' => 'Ste si istý, že chcete odstrániť tento komentár?',
    'comment_in_reply_to' => 'Odpovedať na :commentId',

    // Revision
    'revision_delete_confirm' => 'Naozaj chcete túto revíziu odstrániť?',
    'revision_restore_confirm' => 'Naozaj chcete obnoviť túto revíziu? Aktuálny obsah stránky sa nahradí.',
    'revision_delete_success' => 'Revízia bola vymazaná',
    'revision_cannot_delete_latest' => 'Nie je možné vymazať poslednú revíziu.'
];