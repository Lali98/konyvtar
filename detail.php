<?php
include_once('php/Books.php');

$books = new Books();

$book = $books->getBookId(intval($_GET['book']));
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <header>
        <h2>Részletes nézet</h2>
    </header>
    <main>
        <h2><?= $book['title'] ?></h2>
        <div class="col-4">
            <img id="konyv" src="" alt="<?= $book['title'] ?>" title="<?= $book['title'] ?>">
        </div>
        <div class="col-8">
            <table id="t">
                <tr>
                    <th>Szerző:</th>
                    <td><?= $book['author'] ?></td>
                </tr>
                <tr>
                    <th>Oldalszám:</th>
                    <td><?= $book['page_size'] ?></td>
                </tr>
                <tr>
                    <th>Nyelv:</th>
                    <td><?= $book['lang'] ?></td>
                </tr>
                <tr>
                    <th>Kategóriak:</th>
                    <td><?= $book['category'] ?></td>
                </tr>
            </table>
            <h5>Leirás:</h5>
            <p>Short paragraph - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem aperiam recusandae ipsum tempore sapiente aut, voluptates, est commodi fugiat, consequatur iste unde perspiciatis nesciunt? Voluptatum praesentium sequi eaque fuga deserunt!</p>
        </div>
    </main>
</body>
</html>