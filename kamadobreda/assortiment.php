<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logokamado.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Assortiment</title>

    
</head>

<body>
    <?php require_once __DIR__ . '/header.php'; ?>
    <main>
        <div class="filter-bar">
            <label for="categories">Filter</label>
            <select id="categories" aria-label="Filter assortiment">
                <option value="all">All</option>
                <option value="blauwekamados">BBQ</option>
                <option value="gietijzer">Accessoires</option>
            </select>
        </div>
        <h1>Assortiment</h1>

        <div class="blauwekamados" data-category="blauwekamados">
            <article class="product-card">
                <img src="img/Kamadoblauw.jpg" alt="Blauwe Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadoblauw.jpg" alt="Blauwe Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadoblauw.jpg" alt="Blauwe Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadoblauw.jpg" alt="Blauwe Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
        </div>
        <div class="gietijzer" data-category="gietijzer"> 
            <article class="product-card">
                <img src="img/Kamadogietijzer.jpg" alt="Gietijzeren Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadogietijzer.jpg" alt="Gietijzeren Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadogietijzer.jpg" alt="Gietijzeren Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
            <article class="product-card">
                <img src="img/Kamadogietijzer.jpg" alt="Gietijzeren Kamado">
                <h2>Naam</h2>
                <p>Prijs</p>
                <p>Rating</p>
            </article>
        </div>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
    <script src="js/filter.js?v=<?= filemtime(__DIR__ . '/js/filter.js') ?>"></script>
</body>

</html>
