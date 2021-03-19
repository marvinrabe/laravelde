<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Laravel DACH',
    'siteDescription' => 'Deutschsprachige Laravel Community',
    'siteAuthor' => 'Marvin Rabe',
    'navigation' => [
        [
            'title' => 'Forum',
            'url' => 'https://laraboard.io/'
        ],
        [
            'title' => 'YouTube',
            'url' => 'https://www.youtube.com/channel/UCTXsbGt5J7bbTcC_TZcJPqQ'
        ]
    ],
    'social' => [
        [
            'icon' => 'twitter',
            'color' => '#1DA1F2',
            'title' => 'Twitter',
            'url' => 'https://twitter.com/laravelphp_de'
        ],
        [
            'icon' => 'telegram',
            'color' => '#2CA5E0',
            'title' => 'Telegram',
            'url' => 'https://t.me/laraveldeutschland'
        ],
        [
            'icon' => 'discord',
            'color' => '#7289DA',
            'title' => 'Discord',
            'url' => 'https://discord.gg/sggQqGm3BC'
        ]
    ],
    'upcomingOnlineMeetup' => [
        'date' => Carbon::parse('2021-04-12 20:00:00+0200'),
        'youtubeUrl' => 'https://www.youtube.com/channel/UCTXsbGt5J7bbTcC_TZcJPqQ',
        'calendarBase64' => '',
        'talks' => [],
        'sparks' => [],
    ],
    'pastOnlineMeetups' => [
        [
            'date' => Carbon::parse('2021-03-01 20:00:00+0100')
        ]
        [
            'date' => Carbon::parse('2021-02-01 20:00:00+0100'),
            'youtubeUrl' => '',
            'talks' => [
            [
                'title' => 'How to Fachbuch',
                'description' => '',
                'speaker' => [
                    'firstName' => 'Lars',
                    'lastName' => 'Peterke',
                    'shortBio' => '',
                    'avatarUrl' => 'https://pbs.twimg.com/profile_images/1073168355505385472/WJu6Gnh0_400x400.jpg',
                ],
            ],
            [
                'title' => 'Wie bereite ich einen Tech-Talk vor?',
                'description' => '',
                'speaker' => [
                    'firstName' => 'Marvin',
                    'lastName' => 'Rabe',
                    'shortBio' => '',
                    'avatarUrl' => 'https://pbs.twimg.com/profile_images/1327300108132769795/2Y_cMV1L_400x400.jpg',
                ],
            ],
            [
                'title' => 'Drag & Drop Workflow Package',
                'description' => '',
                'speaker' => [
                    'firstName' => 'Max',
                    'lastName' => 'Hutschenreiter',
                    'shortBio' => '',
                    'avatarUrl' => 'https://pbs.twimg.com/profile_images/583617993160192000/DqPq8zKp_400x400.jpg',
                ],
            ],
            ],
            'sparks' => [],
        ],
        [
            'date' => Carbon::parse('2021-01-04 20:00:00+0100'),
            'youtubeUrl' => '',
            'talks' => [
                [
                    'title' => 'Laravel Enlighten',
                    'description' => '',
                    'speaker' => [
                        'firstName' => 'Johannes',
                        'lastName' => 'Ahrndt',
                        'shortBio' => '',
                        'avatarUrl' => '',
                    ],
                ]
            ],
            'sparks' => [
                [
                    'title' => 'Laravel Enlighten',
                    'description' => '',
                    'speaker' => [
                        'firstName' => 'Johannes',
                        'lastName' => 'Ahrndt',
                        'shortBio' => '',
                        'avatarUrl' => '',
                    ],
                ]
            ],
        ],
    ],
    'localMeetups' => [
        'de' => [
            [
                'title' => 'Berlin',
                'url' => 'https://www.meetup.com/de-DE/laravel-berlin/',
                'members' => 539
            ],
            [
                'title' => 'München',
                'url' => 'https://www.meetup.com/de-DE/laravel-munich/',
                'members' => 478
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
            ],
            [
                'title' => 'Nürnberg',
                'url' => 'https://www.meetup.com/de-DE/Laravel-Usergroup-Nurnberg/',
                'members' => 45
            ],
            [
                'title' => 'Mainfranken',
                'url' => 'https://www.meetup.com/de-DE/Laravel-Mainfranken/',
                'members' => 30
            ]
        ],
        'at' => [
            [
                'title' => 'Wien',
                'url' => 'https://www.meetup.com/de-DE/Laravel-Frameworkers-Vienna/',
                'members' => 253
            ],
        ],
        'ch' => [
            [
                'title' => 'Luzern',
                'url' => 'https://www.meetup.com/de-DE/Laravel-Switzerland/',
                'members' => 77
            ],
            [
                'title' => 'Lausanne',
                'url' => 'https://www.meetup.com/de-DE/laravel-artisans/',
                'members' => 75
            ],
            [
                'title' => 'Basel',
                'url' => 'https://www.meetup.com/de-DE/laravel-basel/',
                'members' => 49
            ],
            [
                'title' => 'Bern',
                'url' => 'https://www.meetup.com/de-DE/laravel-bern/',
                'members' => 28
            ]
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
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
