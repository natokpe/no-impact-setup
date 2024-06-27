<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\ImpactSetup\Engine;

/* Config: Post types */
return [
    'course' => [
        'label'  => 'Course',
        'labels' => [
            'name'                     => 'Courses',
            'singular_name'            => 'Course',
            'add_new'                  => 'Add New Course',
            'add_new_item'             => 'Add New Course',
            'edit_item'                => 'Edit Course',
            'new_item'                 => 'New Course',
            'view_item'                => 'View Course',
            'view_items'               => 'View Courses',
            'search_items'             => 'Search Courses',
            'not_found'                => 'No courses found',
            'not_found_in_trash'       => 'No courses found in Trash',
            'parent_item_colon'        => 'Parent Course:',
            'all_items'                => 'All Courses',
            'archives'                 => 'Course Archives',
            'attributes'               => 'Course Attributes',
            'insert_into_item'         => 'Insert into course',
            'uploaded_to_this_item'    => 'Uploaded to this course',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Courses',
            'filter_items_list'        => 'Filter courses list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Courses list navigation',
            'items_list'               => 'Courses list',
            'item_published'           => 'Course published.',
            'item_published_privately' => 'Course published privately.',
            'item_reverted_to_draft'   => 'Course reverted to draft.',
            'item_trashed'             => 'Course trashed.',
            'item_scheduled'           => 'Course scheduled.',
            'item_updated'             => 'Course updated.',
            'item_link'                => 'Course Link',
            'item_link_description'    => 'A link to a course.',
        ],
        'description'         => 'Courses',
        'public'              => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'        => 'dashicons-book-alt',
        'capability_type'     => ['course', 'courses'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            // 'trackbacks',
            // 'author',
            'excerpt',
            'page-attributes',
            'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

    // Register the "class" custom post type
    'class' => [
        'label'  => 'Class',
        'labels' => [
            'name'                     => 'Classes',
            'singular_name'            => 'Class',
            'add_new'                  => 'Add New Class',
            'add_new_item'             => 'Add New Class',
            'edit_item'                => 'Edit Class',
            'new_item'                 => 'New Class',
            'view_item'                => 'View Class',
            'view_items'               => 'View Classes',
            'search_items'             => 'Search Classes',
            'not_found'                => 'No classes found',
            'not_found_in_trash'       => 'No classes found in Trash',
            'parent_item_colon'        => 'Parent Class:',
            'all_items'                => 'All Classes',
            'archives'                 => 'Class Archives',
            'attributes'               => 'Class Attributes',
            'insert_into_item'         => 'Insert into class',
            'uploaded_to_this_item'    => 'Uploaded to this class',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Classes',
            'filter_items_list'        => 'Filter classes list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Classes list navigation',
            'items_list'               => 'Classes list',
            'item_published'           => 'Class published.',
            'item_published_privately' => 'Class published privately.',
            'item_reverted_to_draft'   => 'Class reverted to draft.',
            'item_trashed'             => 'Class trashed.',
            'item_scheduled'           => 'Class scheduled.',
            'item_updated'             => 'Class updated.',
            'item_link'                => 'Class Link',
            'item_link_description'    => 'A link to a class.',
        ],
        'description'         => 'Classes',
        'public'              => false,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-media-interactive',
        'capability_type'     => ['class', 'classes'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            // 'trackbacks',
            'author',
            'excerpt',
            'page-attributes',
            // 'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

    // 'assessment' => [
    //     'label'  => 'Assessment',
    //     'labels' => [
    //         'name'                     => 'Assessments',
    //         'singular_name'            => 'Assessment',
    //         'add_new'                  => 'Add New Assessment',
    //         'add_new_item'             => 'Add New Assessment',
    //         'edit_item'                => 'Edit Assessment',
    //         'new_item'                 => 'New Assessment',
    //         'view_item'                => 'View Assessment',
    //         'view_items'               => 'View Assessments',
    //         'search_items'             => 'Search Assessments',
    //         'not_found'                => 'No assessments found',
    //         'not_found_in_trash'       => 'No assessments found in Trash',
    //         'parent_item_colon'        => 'Parent Assessment:',
    //         'all_items'                => 'All Assessments',
    //         'archives'                 => 'Assessment Archives',
    //         'attributes'               => 'Assessment Attributes',
    //         'insert_into_item'         => 'Insert into assessment',
    //         'uploaded_to_this_item'    => 'Uploaded to this assessment',
    //         'featured_image'           => 'Featured image',
    //         'set_featured_image'       => 'Set featured image',
    //         'remove_featured_image'    => 'Remove featured image',
    //         'use_featured_image'       => 'Use as featured image',
    //         'menu_name'                => 'Assessments',
    //         'filter_items_list'        => 'Filter assessments list',
    //         'filter_by_date'           => 'Filter by date',
    //         'items_list_navigation'    => 'Assessments list navigation',
    //         'items_list'               => 'Assessments list',
    //         'item_published'           => 'Assessment published.',
    //         'item_published_privately' => 'Assessment published privately.',
    //         'item_reverted_to_draft'   => 'Assessment reverted to draft.',
    //         'item_trashed'             => 'Assessment trashed.',
    //         'item_scheduled'           => 'Assessment scheduled.',
    //         'item_updated'             => 'Assessment updated.',
    //         'item_link'                => 'Assessment Link',
    //         'item_link_description'    => 'A link to a assessment.',
    //     ],
    //     'description'         => 'Assessments',
    //     'public'              => false,
    //     'hierarchical'        => false,
    //     'exclude_from_search' => true,
    //     'publicly_queryable'  => false,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
    //     'show_in_rest'        => true,
    //     'menu_position'       => 20,
    //     // 'menu_icon'        => 'dashicons-chart-pie',
    //     'capability_type'     => ['assessment', 'assessments'],
    //     // 'capabilities'     => [],
    //     'map_meta_cap'        => true,
    //     'supports'            => [
    //         'title',
    //         'editor',
    //         // 'trackbacks',
    //         'author',
    //         'excerpt',
    //         'page-attributes',
    //         // 'thumbnail',
    //     ],
    //     'taxonomies' => [
    //     ],
    //     'has_archive' => false,
    //     'rewrite'     => [
    //         // 'slug'       => '',
    //         'with_front' => false,
    //     ],
    //     // 'query_var ' => '',
    //     'can_export'       => true,
    //     'delete_with_user' => false,
    // ],

    // 'certificate' => [
    //     'label'  => 'Certificate',
    //     'labels' => [
    //         'name'                     => 'Certificates',
    //         'singular_name'            => 'Certificate',
    //         'add_new'                  => 'Add New Certificate',
    //         'add_new_item'             => 'Add New Certificate',
    //         'edit_item'                => 'Edit Certificate',
    //         'new_item'                 => 'New Certificate',
    //         'view_item'                => 'View Certificate',
    //         'view_items'               => 'View Certificates',
    //         'search_items'             => 'Search Certificates',
    //         'not_found'                => 'No certificates found',
    //         'not_found_in_trash'       => 'No certificates found in Trash',
    //         'parent_item_colon'        => 'Parent Certificate:',
    //         'all_items'                => 'All Certificates',
    //         'archives'                 => 'Certificate Archives',
    //         'attributes'               => 'Certificate Attributes',
    //         'insert_into_item'         => 'Insert into certificate',
    //         'uploaded_to_this_item'    => 'Uploaded to this certificate',
    //         'featured_image'           => 'Featured image',
    //         'set_featured_image'       => 'Set featured image',
    //         'remove_featured_image'    => 'Remove featured image',
    //         'use_featured_image'       => 'Use as featured image',
    //         'menu_name'                => 'Certificates',
    //         'filter_items_list'        => 'Filter certificates list',
    //         'filter_by_date'           => 'Filter by date',
    //         'items_list_navigation'    => 'Certificates list navigation',
    //         'items_list'               => 'Certificates list',
    //         'item_published'           => 'Certificate published.',
    //         'item_published_privately' => 'Certificate published privately.',
    //         'item_reverted_to_draft'   => 'Certificate reverted to draft.',
    //         'item_trashed'             => 'Certificate trashed.',
    //         'item_scheduled'           => 'Certificate scheduled.',
    //         'item_updated'             => 'Certificate updated.',
    //         'item_link'                => 'Certificate Link',
    //         'item_link_description'    => 'A link to a certificate.',
    //     ],
    //     'description'         => 'Certificates',
    //     'public'              => false,
    //     'hierarchical'        => false,
    //     'exclude_from_search' => true,
    //     'publicly_queryable'  => false,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
    //     'show_in_rest'        => true,
    //     'menu_position'       => 20,
    //     'menu_icon'        => 'dashicons-awards',
    //     // 'capability_type'     => ['certificate', 'certificates'],
    //     // 'capabilities'     => [],
    //     'map_meta_cap'        => true,
    //     'supports'            => [
    //         'title',
    //         'editor',
    //         // 'trackbacks',
    //         'author',
    //         'excerpt',
    //         'page-attributes',
    //         // 'thumbnail',
    //     ],
    //     'taxonomies' => [
    //     ],
    //     'has_archive' => false,
    //     'rewrite'     => [
    //         // 'slug'       => '',
    //         'with_front' => false,
    //     ],
    //     // 'query_var ' => '',
    //     'can_export'       => true,
    //     'delete_with_user' => false,
    // ],

    'enrollment' => [
        'label'  => 'Enrollment',
        'labels' => [
            'name'                     => 'Enrollments',
            'singular_name'            => 'Enrollment',
            'add_new'                  => 'Add New Enrollment',
            'add_new_item'             => 'Add New Enrollment',
            'edit_item'                => 'Edit Enrollment',
            'new_item'                 => 'New Enrollment',
            'view_item'                => 'View Enrollment',
            'view_items'               => 'View Enrollments',
            'search_items'             => 'Search Enrollments',
            'not_found'                => 'No enrollments found',
            'not_found_in_trash'       => 'No enrollments found in Trash',
            'parent_item_colon'        => 'Parent Enrollment:',
            'all_items'                => 'All Enrollments',
            'archives'                 => 'Enrollment Archives',
            'attributes'               => 'Enrollment Attributes',
            'insert_into_item'         => 'Insert into enrollment',
            'uploaded_to_this_item'    => 'Uploaded to this enrollment',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Enrollments',
            'filter_items_list'        => 'Filter enrollments list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Enrollments list navigation',
            'items_list'               => 'Enrollments list',
            'item_published'           => 'Enrollment published.',
            'item_published_privately' => 'Enrollment published privately.',
            'item_reverted_to_draft'   => 'Enrollment reverted to draft.',
            'item_trashed'             => 'Enrollment trashed.',
            'item_scheduled'           => 'Enrollment scheduled.',
            'item_updated'             => 'Enrollment updated.',
            'item_link'                => 'Enrollment Link',
            'item_link_description'    => 'A link to a enrollment.',
        ],
        'description'         => 'Enrollments',
        'public'              => false,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_ui'             => false,
        'show_in_menu'        => false,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'show_in_rest'        => false,
        'menu_position'       => 20,
        // 'menu_icon'        => 'dashicons-chart-pie',
        'capability_type'     => ['enrollment', 'enrollments'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            // 'title',
            // 'editor',
            // 'trackbacks',
            // 'author',
            // 'excerpt',
            // 'page-attributes',
            // 'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => false,
        'delete_with_user' => false,
    ],

    'payment' => [
        'label'  => 'Payment',
        'labels' => [
            'name'                     => 'Payments',
            'singular_name'            => 'Payment',
            'add_new'                  => 'Add New Payment',
            'add_new_item'             => 'Add New Payment',
            'edit_item'                => 'Edit Payment',
            'new_item'                 => 'New Payment',
            'view_item'                => 'View Payment',
            'view_items'               => 'View Payments',
            'search_items'             => 'Search Payments',
            'not_found'                => 'No payments found',
            'not_found_in_trash'       => 'No payments found in Trash',
            'parent_item_colon'        => 'Parent Payment:',
            'all_items'                => 'All Payments',
            'archives'                 => 'Payment Archives',
            'attributes'               => 'Payment Attributes',
            'insert_into_item'         => 'Insert into payment',
            'uploaded_to_this_item'    => 'Uploaded to this payment',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Payments',
            'filter_items_list'        => 'Filter payments list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Payments list navigation',
            'items_list'               => 'Payments list',
            'item_published'           => 'Payment published.',
            'item_published_privately' => 'Payment published privately.',
            'item_reverted_to_draft'   => 'Payment reverted to draft.',
            'item_trashed'             => 'Payment trashed.',
            'item_scheduled'           => 'Payment scheduled.',
            'item_updated'             => 'Payment updated.',
            'item_link'                => 'Payment Link',
            'item_link_description'    => 'A link to a payment.',
        ],
        'description'         => 'Payments',
        'public'              => false,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'        => 'dashicons-money-alt',
        'capability_type'     => ['payment', 'payments'],
        'capabilities'     => [
            'create_posts'    => false,
            'delete_posts'    => false,
            'delete_payments' => false,
        ],
        'map_meta_cap'        => true,
        'supports'            => [
            // 'title',
            // 'editor',
            // 'trackbacks',
            // 'author',
            // 'excerpt',
            // 'page-attributes',
            // 'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => false,
        'delete_with_user' => false,
    ],

    // Register the "faq" custom post type
    'faq' => [
        'label'  => 'FAQs',
        'labels' => [
            'name'                     => 'FAQs',
            'singular_name'            => 'FAQ',
            'add_new'                  => 'Add New FAQ',
            'add_new_item'             => 'Add New FAQ',
            'edit_item'                => 'Edit FAQ',
            'new_item'                 => 'New FAQ',
            'view_item'                => 'View FAQ',
            'view_items'               => 'View FAQs',
            'search_items'             => 'Search FAQs',
            'not_found'                => 'No faqs found',
            'not_found_in_trash'       => 'No faqs found in Trash',
            'parent_item_colon'        => 'Parent FAQ:',
            'all_items'                => 'All FAQs',
            'archives'                 => 'FAQ Archives',
            'attributes'               => 'FAQ Attributes',
            'insert_into_item'         => 'Insert into faq',
            'uploaded_to_this_item'    => 'Uploaded to this faq',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'FAQs',
            'filter_items_list'        => 'Filter faqs list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'FAQs list navigation',
            'items_list'               => 'FAQs list',
            'item_published'           => 'FAQ published.',
            'item_published_privately' => 'FAQ published privately.',
            'item_reverted_to_draft'   => 'FAQ reverted to draft.',
            'item_trashed'             => 'FAQ trashed.',
            'item_scheduled'           => 'FAQ scheduled.',
            'item_updated'             => 'FAQ updated.',
            'item_link'                => 'FAQ Link',
            'item_link_description'    => 'A link to a faq.',
        ],
        'description'         => 'Frequently Asked Questions (FAQs)',
        'public'              => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'        => 'dashicons-editor-help',
        'capability_type'     => ['faq', 'faqs'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            'trackbacks',
            'author',
            'excerpt',
            'page-attributes',
            'thumbnail',
        ],
        'taxonomies' => [
            'faq-topic'
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var'        => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

];
