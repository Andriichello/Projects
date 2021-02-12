<?php
$filename = "../data/books.json";
// creating file
/*
$books = [
    (object)[
        'title' => 'Sweetbitter',
        'author' => 'Stephanie Danler',
        'year' => 2016
    ],
    (object)[
        'title' => 'M Train',
        'author' => 'Stephanie Danler',
        'year' => 2015
    ],
    (object)[
        'title' => 'Homeland Elegies',
        'author' => 'Ayad Akhtar',
        'year' => 2020
    ],
    (object)[
        'title' => 'Flash Boys: A Wall Street Revolt',
        'author' => 'Michael Lewis',
        'year' => 2014
    ],
    (object)[
        'title' => 'The Orphan\'s Tale',
        'author' => 'Pam Jenoff',
        'year' => 2017
    ],
];

file_put_contents($filename, json_encode($books));
*/

// reading from file
$json = file_get_contents($filename, true);
$books = json_decode($json);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
    <style>
        .booksContainer {
            width: 50%;
            min-width: 250px;

            margin: auto;
        }

        .bookItem {
            border-radius: 10px;
            border: solid 2px #7ab37b;

            padding: 10px;
            margin-bottom: 10px;
        }

        .bookHeader {
            font-size: 20px;
        }

        .bookDescription {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="booksContainer">
        <h3 style="text-align: center">Available books</h3>

        <?php foreach ($books as $book) { ?>
            <div class="bookItem">
                <span class="bookHeader"><?= $book->title?><span/><br>
                <span class="bookDescription"><?= $book->author?>, <?= $book->year?></span>
            </div>
        <?php } ?>

    </div>
</body>

</html>