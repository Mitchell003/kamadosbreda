<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logokamado.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php require_once __DIR__ . '/header.php'; ?>
    <main>
        <h1>Beste Kamado's van Nederland!</h1>
        <h2>Reserveer en bestel hier nu up op maat gemaakte kamado's en gietijzer accessoires</h2>
        <div class="imagegallery">
            <div class="kamadoa">
                <a href="assortiment.php?categories=blauwekamados"><img src="img/kamadosfrontstore.jpg" alt="Kamados-frontstore"></a>
                <h3>Kamado BBQ's</h3>
                <p>*Goede reviews*</p>
            </div>
            <div class="assortimenta">
                <a href="assortiment.php?categories=gietijzer"><img src="img/kamadosfrontstore.jpg" alt="Accesoires"></a>
                <h3>Accessoires</h3>
                <p>*Goede reviews*</p>
            </div>
            <div class="masterclassa">
                <a href="masterclass.php"><img src="img/kamadosfrontstore.jpg" alt="Masterclass"></a>
                <h3>Masterclass</h3>
                <p>*Goede reviews*</p>
            </div>
        </div>
        </div>
        <div class="overonstitle">
        <h2>Over ons</h2>
        </div>
        <p class="overons">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Similique reprehenderit quo nihil adipisci magnam ducimus doloribus quaerat.<br>Harum quisquam illo cupiditate! Eos, ab hic.<br>Numquam repudiandae temporibus libero quis corrupti.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Optio minus ullam culpa autem deserunt obcaecati aut, ipsam harum quis natus officia atque quia, nam numquam est architecto asperiores molestiae corporis?<br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Doloremque sapiente enim quibusdam facere soluta.<br>Iste possimus aut optio exercitationem quae! Mollitia fugit ad harum ducimus quo nam tempore velit expedita.
        </p>
        <h2 class="title-3">Maak met deze formulier een ticket aan om een Kamato te bestellen!</h2>
        <form class="kamado-formulier" method="post" action="index.php">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" autocomplete="name" required>

            <label for="email">E-mailadres</label>
            <input type="email" id="email" name="email" autocomplete="email" required>

            <label for="kamado">Beschrijving van je ideale Kamado</label>
            <textarea id="kamado" name="kamado" rows="4" required></textarea>

            <button type="submit">Versturen</button>
        </form>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>

</html>