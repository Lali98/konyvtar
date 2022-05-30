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
    <title>Könyvtár Program</title>
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <span>
            <img src="img/menu.png" alt="Menü" title="Menü" id="nyito">
        </span>
        <h1>Könyvtár Program</h1>
    </header>
    <main>
        <div class="col-3" id="kategoria">
            <header class="m-d-10">
                <h2>Kategoriák</h2>
                <span class="fr">
                    <img src="img/arrow_left.png" alt="Összecsuk" title="Összecsuk" id="zaro">
                </span>
            </header>
            <div id="kat">
                <?php
                    foreach ($categories->getCategories() as $key=>$category)
                    {?>
                        <input type="checkbox" name="<?= $category['name'] ?>" id="<?= $category['name'] ?>" data-szoveg="<?= $category['name'] ?>"><label onclick="location.href = 'kategoria.php?cat=<?= $category['id'] ?>'" for="<?= $category['name'] ?>" id="<?= $category['name'].'_lbl' ?>"><?= $category['name'] ?></label><br>
                <?php
                    }
                ?>
                <!--<input type="checkbox" name="fantasy" id="fantasy" data-szoveg="Fantasy"><label for="fantasy" id="fantasy_lbl">Fantasy</label><br>
                <input type="checkbox" name="regeny" id="regeny" data-szoveg="Regény"><label for="regeny" id="regeny_lbl">Regény</label><br>
                <input type="checkbox" name="motivacio" id="motivacio" data-szoveg="Motivacio"><label for="motivacio" id="motivacio_lbl">Motivacio</label><br>-->
                <br>
                <hr>
                <a href="admin/login.html">
                    <span><img src="img/login.png" alt="Belépés" title="Belépés"></span>Belépés
                </a>
            </div>
        </div>

        <div class="col-9" id="tartalam">
            <header class="m-d-20">
                <h2>Könyvek listája</h2>
            </header>
            <div>
                <input type="search" name="search" class="m-d-20">
                <button id="kereses">Keresés</button>
                <button class="megsem">Mégsem</button>

                <table>
                    <tr>
                        <th>Cim</th>
                        <th>Szerző</th>
                        <th>Kategoria</th>
                    </tr>

                    <?php
                        foreach ($books->getBooks() as $key=>$book)
                        {?>
                    <tr>
                        <td><a href="detail.php?book=<?= $book['id'] ?>"><?= $book['title'] ?></a></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['category'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>

                </table>
            </div>
        </div>
    </main>
</body>
</html>