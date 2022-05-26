<?php
include_once('php/Books.php');
include_once('php/Categories.php');

$books = new Books();
$categories = new Categories();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek kategorizált listája</title>
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <main>
        <div class="col-9" id="tartalam">
            <header>
               <span>
                   <img src="img/menu.png" alt="Menü" title="Menü" id="nyito">
               </span>
               <h1>Könyvek kategorizált listája</h1>
            </header>
            <div>
                <table>
                    <tr>
                        <th>Cim</th>
                        <th>Szerző</th>
                        <th>Kategoria</th>
                    </tr>
                    <?php
                    foreach ($books->getBooksCategory(intval($_GET['cat'])) as $key=>$book)
                    {?>
                        <tr>
                            <td><?= $book['title'] ?></td>
                            <td><?= $book['author'] ?></td>
                            <td><?= $book['category'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <br>
            <button type="button" onclick="location.href='index.php'">Vissza</button>
        </div>

    </main>
</body>
</html>