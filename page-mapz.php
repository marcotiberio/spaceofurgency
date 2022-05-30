<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();

$context['archiveMap'] = Timber::get_posts([
    'post_type' => 'mapproject',
    'order' => 'DESC',
    'post_status' => array( 'publish', 'public'),
    'posts_per_page' => -1
]);

Timber::render('templates/page-mapz.twig', $context);
