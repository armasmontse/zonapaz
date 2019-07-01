<?php

namespace App\Taxonomies\Spaces\Media;

use Illuminate\Taxonomy;

class MediaTopics extends Taxonomy
{
    const nombre_plural = 'Tópicos';
    const nombre_singular = 'tópico';
    const slug = 'media-topics';

    protected static $postypes = [
    	'media',
        'photo',
        'bibliohemerography',
    ];

    protected static $initialTerms = [];

}
