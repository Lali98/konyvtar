<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/res.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <main class="col-6 from-panel">
        <header>
            <h1>Új könyv rögzítése / Könyv módosítása</h1>
            <span class="fr">
                <a href="../index.php">
                    <img src="../img/logout.png" alt="kilépés" title="Kilépés">
                </a>
            </span>
        </header>
        <form action="/action-page" method="post" enctype="multipart/form-data" id="from-inside">
            <label for="cim" class="col-3">Cím</label>
            <input type="text" name="cim" class="col-6">

            <label for="szam" class="col-3">Oldalszám</label>
            <input type="number" name="szam" id="" class="col-6">

            <label for="nyelv" class="col-3">Nyelv</label>
            <input type="text" name="nyelv" class="col-6">

            <label for="szerzo" class="col-3">Szerző</label>
            <select name="szerzo" id="" class="col-8">
                <option value="">J.R.R Tolkien</option>
                <option value="">Rhonda Brain</option>
            </select>

            <span class="col-3 p-t-s-10">Kategoria</span>
            <div class="checkbox-group col-8">
                <input type="checkbox" name="fantasy"><label for="fantasy">Fantasy</label>
                <input type="checkbox" name="regeny"><label for="regeny">Regény</label>
                <input type="checkbox" name="motivacio"><label for="motivacio">Motivacio</label>
            </div>

            <span class="col-3 p-t-s-10">Kép</span>
            <input type="file" name="kep" id="" class="col-8">

            <span class="col-3 p-t-s-10">Leirás</span>
            <textarea name="leiras" class="col-8">Könyv leirás</textarea>

            <div class="col-12">
                <input type="submit" value="Ment">
                <button type="button" onclick='location.href="../index.php"'>Bezárás</button>
            </div>
        </form>
    </main>
</body>
</html>