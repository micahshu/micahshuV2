<?php
$context = Timber::context();
$context['post'] = Timber::get_post();
$context['posts'] = Timber::get_posts();

// Add any custom data you want available in your template
$context['featured_posts'] = Timber::get_posts([
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date'
]);

$context['recent_posts'] = Timber::get_posts([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',

]);

$context['projects'] = Timber::get_posts([
    'post_type' => 'project',
    'posts_per_page' => 6,
    
    'order' => 'rand'
]);

$context['project_types'] = Timber::get_terms([
    'taxonomy' => 'project-type',
    'hide_empty' => true
]);


// Render the Twig template
Timber::render('front-page.twig', $context);