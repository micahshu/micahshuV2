<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */



// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();



// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();

function modify_project_post_type() {
    register_post_type('project',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'project',
                'with_front' => false  // This is the key setting
            ),
            // ... future post type settings
        )
    );
}
add_action('init', 'modify_project_post_type');