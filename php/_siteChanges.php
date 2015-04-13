<?php
//Most recent goes on top
/* Template entry:
['date' => '1/23/45',
    ['fullChange'  => '',
     'shortChange' => ''
    ],
    ['fullChange'  => '',
     'shortChange' => ''
    ]
]
*/
$changes =
[
    ['date' => '4/13/15',
      ['fullChange'  => 'Updated font for readability and necessary CSS spacings to accommodate',
       'shortChange' => 'Changed site font'
      ],
      ['fullChange'  => 'Added a page for JQuery and made minor change in the way the headerDiv is generated',
       'shortChange' => 'Added JQuery page'
      ]
    ],
    ['date' => '4/9/2015',
        ['fullChange'  => 'To reduced page loads, database effecting php files were broken into smaller pieces and are now added through an iframe and some simple Javascript',
         'shortChange' => 'Database editable form a single page'
        ]
    ],
    ['date' => '4/8/15',
        ['fullChange'  => 'Fixed dropdown menu items so you can mouse over any part of the box, not just the text',
         'shortChange' => 'Fixed Dropdown menu mouseover'
        ],
        ['fullChange' => 'Finished CRUD services for the SQL table, some of you have already abused it',
         'shortChange' => 'Finished SQL Table'
        ]
    ],
    ['date' => '4/6/15',
        ['fullChange'  => 'SQL Table now connects and generates it\'s information from the database',
         'shortChange' => 'SQL Table generates from database'
        ],
        ['fullChange'  => 'Created new, round, site icon',
         'shortChange' => 'Changed site icon'
        ]
    ],
    ['date' => '3/30/15',
        ['fullChange'  => 'Started work on creating and formating a table to display information from an SQL Database',
         'shortChange' => 'Added a page for the SQL Table'
        ]
    ],
    ['date' => '3/20/15',
        ['fullChange'  => 'Fixed CSS a:hover bug',
         'shortChange' => 'Fixed CSS a:hover bug'
        ]
    ],
    ['date' => '3/15/15',
        ['fullChange'  => 'Turned the static HTML into dynamic PHP for ease of page creation and management',
         'shortChange' => 'Templated with PHP'
        ],
        ['fullChange'  => 'After many hours of hard work, water began to spew forth from my eyes until I slowly slipped into a catatonic state',
         'shortChange' => 'Quietly cried self to sleep'
        ]
    ],
    ['date' => '2/15/15',
        ['fullChange'  => 'Added a change log',
         'shortChange' => 'Added a change log'
        ],
        ['fullChange'  => 'Modified CSS to better support resizing of the web page',
         'shortChange' => 'Worked on resizability'
        ],
        ['fullChange'  => 'Added multiple CSS file to support multiple screen sizes.',
         'shortChange' => 'Added multiple CSS files'
        ]
    ],
    ['date' => '2/13/15',
        ['fullChange'  => 'Site launched',
         'shortChange' => 'Site launched'
        ]
    ]
];

function changeArray(){ return $GLOBALS['changes'];}
?>