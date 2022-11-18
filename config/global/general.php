<?php
return array(
    // Product
    'product' => array(
        'name'        => 'Irego',
        'description' => 'Irego',
        'preview'     => '#',
        'purchase'    => '#',
        'license'     => '',
        'tooltips'    => array(
            "docs-and-components" => '',
            'layout-builder'      => '',
        ),
        'demos'       => array(
            'demo1' => array(
                'published' => true,
                'thumbnail' => 'demos/demo1.png',
            ),
        ),
    ),

    // Meta
    'meta'    => array(
        'title'       => 'Irego',
        'description' => 'management tool',
        'keywords'    => 'questions, management',
        'canonical'   => '#',
    ),

    // General
    'general' => array(
        'website'             => '#',
        'about'               => '#',
        'contact'             => '#',
        'support'             => '#',
        'bootstrap-docs-link' => '#',
        'licenses'            => '#',
        'social-accounts'     => array(
            array(
                'name' => 'Youtube', 'url' => 'https://www.youtube.com/', 'logo' => 'svg/social-logos/youtube.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Github', 'url' => 'https://github.com/', 'logo' => 'svg/social-logos/github.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Twitter', 'url' => 'https://twitter.com/', 'logo' => 'svg/social-logos/twitter.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Instagram', 'url' => 'https://www.instagram.com/', 'logo' => 'svg/social-logos/instagram.svg', "class" => "h-20px",
            ),

            array(
                'name' => 'Facebook', 'url' => 'https://www.facebook.com/', 'logo' => 'svg/social-logos/facebook.svg', "class" => "h-20px",
            ),
            array(
                'name' => 'Dribbble', 'url' => 'https://dribbble.com/', 'logo' => 'svg/social-logos/dribbble.svg', "class" => "h-20px",
            ),
        ),
    ),

    // Layout
    'layout'  => array(
        // Docs
        'docs'          => array(
            'logo-path'  => array(
                'default' => 'logos/logo-1.svg',
                'dark'    => 'logos/logo-1-dark.svg',
            ),
            'logo-class' => 'h-25px',
        ),

        // Illustration
        'illustrations' => array(
            'set' => 'sketchy-1',
        ),
    ),

);
