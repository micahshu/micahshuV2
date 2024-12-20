<?php
/**
 * Template for displaying single projects
 */

$context = Timber::context();
$timber_post = Timber::get_post();
$context['post'] = $timber_post;



Timber::render(['single-project.twig', 'single.twig'], $context);