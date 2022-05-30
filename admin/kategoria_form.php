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
            <h1>Új kategória rögzítése / Kategória módosítása</h1>
            <span class="fr">
                <a href="../index.php">
                    <img src="../img/logout.png" alt="kilépés" title="Kilépés">
                </a>
            </span>
        </header>
        <form action="/action-page" method="post" id="from-inside">
            <label for="nev" class="col-3">Név</label>
            <input type="text" name="nev" id="" class="col-8">

            <div class="col-12 btn">
                <input type="submit" value="Ment">
                <button type="button" onclick='location.href="../index.php"'>Mégsem</button>
            </div>
        </form>
    </main>
</body>
</html>