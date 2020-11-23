<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Laravel DE',
    'siteDescription' => 'Inoffizielle Laravel Deutschland Community Seite',
    'siteAuthor' => 'Marvin Rabe',
    'userGroups' => [
        [
            'title' => 'Berlin',
            'url' => 'https://www.meetup.com/de-DE/laravel-berlin/',
            'members' => 536
        ],
        [
            'title' => 'München',
            'url' => 'https://www.meetup.com/de-DE/laravel-munich/',
            'members' => 467
        ],
        [
            'title' => 'Hamburg',
            'url' => 'https://www.meetup.com/de-DE/Laravel-Hamburg/',
            'members' => 328
        ],
        [
            'title' => 'Rhein-Main',
            'url' => 'https://www.meetup.com/de-DE/Laravel-Meetup-Rhein-Main/',
            'members' => 223
        ],
        [
            'title' => 'Köln',
            'url' => 'https://www.meetup.com/de-DE/Laravel-Cologne/',
            'members' => 152
        ]
    ],
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated).'...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
