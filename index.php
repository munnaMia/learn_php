
<?php

$books = [
    [
        'name' => 'dopamin diasdtox',
        'auther' => 'munna',
        'url' => '#',
        'year' => 2016
    ],
    [
        'name' => 'dopamin 4r23',
        'auther' => 'munna',
        'url' => '#',
        'year' => 2016
    ],
    [
        'name' => 'bangladesh',
        'auther' => 'munna',
        'url' => '#',
        'year' => 2010
    ],
    [
        'name' => '234234 ditox',
        'auther' => 'mia',
        'url' => '#',
        'year' => 2016
    ]
];

// php default array filter
$autherFilter =  array_filter($books, callback: function ($book) {
    return $book['auther'] === 'munna';
});



// Calling view both does the same job.
// include 'index.view.php';
require 'index.view.php';
