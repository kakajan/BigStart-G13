<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Stat</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $bookName = "Clean Code";
    $read = false;
    if ($read) {
        $message = "You had read the book: $bookName";
    } else {
        $message = "You had NOT read the book: $bookName";
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>

</html>