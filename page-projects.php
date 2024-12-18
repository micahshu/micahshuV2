<?php
$args = [
    'post_type' => ['projects', 'project'],
    'posts_per_page' => -1,
    'post_status' => 'publish'
];

$context = Timber::context();
$context['projects'] = Timber::get_posts($args);


$context['project_types'] = Timber::get_terms([
    'taxonomy' => 'project-type',
    'hide_empty' => true
]);

Timber::render('page-projects.twig', $context);