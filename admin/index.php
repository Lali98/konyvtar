<?php
include_once('../php/Books.php');
include_once('../php/Categories.php');
include_once('../php/Author.php');

$books = new Books();
$categories = new Categories();
$author = new Author();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/res.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/admin_script.js"></script>
</head>
<body>
    <header>
        <h1>Könyvtár Program</h1>
        <span class="fr">
            <a href="../index.php">
                <img src="../img/logout.png" alt="kilépés" title="Kilépés">
            </a>
        </span>
    </header>

    <main>
        <div class="col-12">
            <div class="col-6">
                <h2>Szerzők listája</h2>
                <button type="button">Új szerző</button>
                <table>
                    <tr>
                        <th>Név</th>
                        <th>Funkciók</th>
                    </tr>
                    <?php
                    foreach ($author->getAuthor() as $key=>$item)
                    {
                    ?>
                    <tr>
                        <td><?= $item['name'] ?></td>
                        <td class="fun">
                            <a href="konyvek_form.php?author=<?= $item['id'] ?>"><img src="../img/edit.png" alt="modositas" title="modositas"></a>
                            <a href="#" class="delete_rec" table="author" rec_id="<?= $item['id'] ?>"><img src="../img/delete.png" alt="töles" title="töles"></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-6">
                <h2>Kategóriák listája</h2>
                <button type="button">Új kategória</button>
                <table>
                    <tr>
                        <th>Név</th>
                        <th>Funkciók</th>
                    </tr>
                    <?php
                    foreach ($categories->getCategories() as $key=>$item)
                    {
                    ?>
                    <tr>
                        <td><?= $item['name'] ?></td>
                        <td class="fun">
                            <a href="konyvek_form.php?category=<?= $item['id'] ?>"><img src="../img/edit.png" alt="modositas" title="modositas"></a>
                            <a href="#" class="delete_rec" table="author" rec_id="<?= $item['id'] ?>"><img src="../img/delete.png" alt="töles" title="töles"></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="col-12">
            <h2>Könyvek listája</h2>
            <button type="button" onclick='location.href="konyvek_form.html"'>Új könyv</button>
            <table>
                <tr>
                    <th>Cim</th>
                    <th>Oldalszám</th>
                    <th>Nyelv</th>
                    <th>Szerző</th>
                    <th>Kategoria</th>
                    <th>Funkciók</th>
                </tr>
                <?php
                foreach ($books->getBooks() as $key=>$book)
                {
                ?>
                <tr>
                    <td><?= $book['title'] ?></td>
                    <td><?= $book['page_size'] ?></td>
                    <td><?= $book['lang'] ?></td>
                    <td><?= $book['author'] ?></td>
                    <td><?= $book['category'] ?></td>
                    <td class="fun">
                        <a href="konyvek_form.php?book=<?= $book['id'] ?>"><img src="../img/edit.png" alt="modositas" title="modositas"></a>
                        <a href="#" class="delete_rec" table="books" rec_id="<?= $book['id'] ?>"><img src="../img/delete.png" alt="töles" title="töles"></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </main>
</body>
</html>