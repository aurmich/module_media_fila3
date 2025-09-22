<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Modulo Media',
    'siteDescription' => 'Modulo Media',
    'lang' => 'it',
<<<<<<< HEAD
    'collections' => [
        'posts' => [
            'path' => fn($page): string => $page->lang . '/posts/' . Str::slug($page->getFilename()),
        ],
        'docs' => [
            'path' => fn($page): string => $page->lang . '/docs/' . Str::slug($page->getFilename()),
        ],
    ],
    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
    // navigation menu
    'navigation' => require_once __DIR__ . '/navigation.php',
    // helpers
    'isActive' => fn($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isItemActive' => fn($page, $item) => Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath())),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(fn($child): bool => trimPath($page->getPath()) === trimPath($child));
=======

    'collections' => [
        'posts' => [
            'path' => fn ($page): string => $page->lang.'/posts/'.Str::slug($page->getFilename()),
        ],
        'docs' => [
            'path' => fn ($page): string => $page->lang.'/docs/'.Str::slug($page->getFilename()),
        ],
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once (__DIR__.'/navigation.php'),

    // helpers
    'isActive' => fn ($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isItemActive' => fn ($page, $item) => Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath())),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(fn ($child): bool => trimPath($page->getPath()) === trimPath($child));
>>>>>>> b97b11d (.)
        }
    },
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }

        // return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
<<<<<<< HEAD
        return url('/' . $page->lang . '/' . trimPath($path));
    },
    'children' => fn($_page, $_docs): array => (
        // return $docs->where('parent_id', $page->);
        []
    ),
=======
        return url('/'.$page->lang.'/'.trimPath($path));
    },

    'children' => fn ($page, $docs): array =>
        // return $docs->where('parent_id', $page->);
        [],
>>>>>>> b97b11d (.)
];
