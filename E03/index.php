<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Books</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Clean Code',
            'author' => 'Martin',
            'website' => 'https://example.com',
            'releaseYear'=> 2010
        ],
        [
            'name' => 'JavaScript Next',
            'author' => 'Raju',
            'website' => 'https://example.com',
            'releaseYear' => 2019
        ],
        [
            'name' => 'PHP8 Objects, Patterns and Practice',
            'author' => 'Matt',
            'website' => 'https://example.com',
            'releaseYear' => 2022
        ],
        [
            'name' => 'Clean Architecture',
            'author' => 'Martin',
            'website' => 'https://example.com',
            'releaseYear' => 2010
        ]
    ];
    $filter = function ($items,$key, $value)
    {
        $filteredBooks = [];
        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredBooks[] = $item;
            }
        }
        return $filteredBooks;
    };

    ?>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($filter($books, 'name', 'Clean Code') as $book) : ?>
            <li>
                <a href="<?= $book['website'] ?>">
                    <?= $book['name'] ?> | Author: <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>