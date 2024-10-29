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
            'website' => 'https://example.com'
        ],
        [
            'name' => 'JavaScript Next',
            'author' => 'Raju',
            'website' => 'https://example.com'
        ],
        [
            'name' => 'PHP8 Objects, Patterns and Practice',
            'author' => 'Matt',
            'website' => 'https://example.com'
        ],
        [
            'name' => 'Clean Architecture',
            'author' => 'Martin',
            'website' => 'https://example.com'
        ]
    ];
    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach (filterByAuthor($books,'Raju') as $book) : ?>
            <li>
                <a href="<?= $book['website'] ?>">
                    <?= $book['name'] ?> | Author: <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>