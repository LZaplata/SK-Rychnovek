<?php return [
    'plugin' => [
        'name' => 'Pages',
        'description' => 'Plugin for pages and its content management',
    ],
    'permission' => [
        'default' => 'Plugin access',
        'page' => [
            'label' => 'Page',
            'create' => [
                'label' => 'Create',
            ],
            'delete' => [
                'label' => 'Delete',
            ],
            'reorder' => [
                'label' => 'Order',
            ],
        ],
        'content' => [
            'label' => 'Content',
            'create' => [
                'label' => 'Create',
            ],
            'update' => [
                'label' => 'Edit',
                'type' => [
                    'label' => 'Type',
                ],
            ],
            'delete' => [
                'label' => 'Delete',
            ],
        ],
    ],
    'page' => [
        'column' => [
            'title' => [
                'label' => 'Title',
            ],
            'sort_order' => [
                'label' => 'Order',
            ],
        ],
        'field' => [
            'contents' => [
                'label' => 'Content',
            ],
            'title' => [
                'label' => 'Title',
            ],
            'slug' => [
                'label' => 'Slug',
            ],
            'parent' => [
                'label' => 'Parent',
                'prompt' => '--None--',
            ],
            'sort_order' => [
                'label' => 'Order',
            ],
            'fullslug' => [
                'label' => 'Full Slug',
            ],
            'breadcrumb' => [
                'label' => 'Breadcrumb URL',
                'option' => [
                    'auto' => 'Automatic',
                    'manual' => 'Manual',
                ],
            ],
            'menu' => [
                'label' => 'Menu',
                'prompt' => '--None--',
            ],
        ],
        'create' => [
            'title' => 'Create page',
            'flash' => 'Page has been successfully created',
        ],
        'update' => [
            'title' => 'Edit page',
            'flash' => 'Page has been successfully edited',
        ],
        'delete' => [
            'flash' => 'Page has been successfully deleted',
        ],
    ],
    'content' => [
        'column' => [
            'title' => [
                'label' => 'Title',
            ],
            'type' => [
                'label' => 'Type',
            ],
        ],
        'field' => [
            'title' => [
                'label' => 'Title',
            ],
            'type' => [
                'label' => 'Type',
                'option' => [
                    'gallery' => [
                        'label' => 'Gallery',
                    ],
                    'cookies' => [
                        'label' => 'Cookies settings',
                    ],
                ],
            ],
            'text' => [
                'label' => 'Text',
            ],
            'heading' => [
                'label' => 'Heading',
            ],
            'gallery' => [
                'label' => 'Gallery',
                'prompt' => '--Choose--',
            ],
        ],
        'create' => [
            'title' => 'Create content',
        ],
        'edit' => [
            'title' => 'Edit content',
        ],
    ],
    'menuitem' => [
        'listtype' => [
            'page' => [
                'label' => 'Page',
            ],
        ],
    ],
    'component' => [
        'page' => [
            'name' => 'Page',
            'description' => 'Component for insert page variables to the theme',
            'column' => [
                'title' => 'Column',
                'description' => 'Column name (index) to match with the primary record.',
            ],
            'value' => [
                'title' => 'Value',
                'description' => 'URL code (slug) used to find the primary record.',
            ],
        ],
        'breadcrumbs' => [
            'name' => 'Breadcrumbs',
            'description' => 'Component for insert page breadcrumbs',
        ],
    ],
];
