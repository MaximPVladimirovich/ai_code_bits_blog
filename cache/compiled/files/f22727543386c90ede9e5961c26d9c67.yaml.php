<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/blueprints.yaml',
    'modified' => 1665247262,
    'size' => 944,
    'data' => [
        'name' => 'Pinpress',
        'slug' => 'pinpress',
        'type' => 'theme',
        'version' => '1.4.1',
        'description' => 'PinPress is a creative Flat Blog/Magazine grav theme and it is the perfect choice for professionals who’s looking for a magazine theme or a personal niche, corporate, and marketing blogs.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-pinpress',
        'demo' => 'http://demo.getgrav.org/pinpress-skeleton',
        'keywords' => 'pinpress, theme, onepage, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-pinpress/issues',
        'license' => 'CC BY 3.0',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
