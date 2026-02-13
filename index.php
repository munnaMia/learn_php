<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Test demo</h1>

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

    // lamda function = anonomuys func
    function Filter($items, $fn)
    {
        $fillteritems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $fillteritems[] = $item; // php append syntax...   
            }
        }

        return $fillteritems;
    };

    $autherFilter =  Filter($books, function ($book) {
        return $book['auther'] === 'munna';
    });

    ?>

    <ul>
        <?php foreach ($autherFilter as  $book): // calling func
        ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name'] ?> ===== <?= $book['auther'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>