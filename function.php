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

    function autherFilter($books, $auther)
    {
        $fillterBooks = [];

        foreach ($books as $book) {
            if ($book['auther'] === $auther) {
                $fillterBooks[] = $book; // php append syntax...   
            }
        }

        return $fillterBooks;
    }

    ?>

    <ul>
        <?php foreach (autherFilter($books, 'munna') as $book): // calling func
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