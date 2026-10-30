<?php
$inschrijvingMelding = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'] ?? null;
    $email = $_POST['email'] ?? null;

    if (!is_string($naam) || !is_string($email)) {
        $inschrijvingMelding = 'Vul een geldige naam en een geldig e-mailadres in.';
    } else {
        $naam = str_replace(["\r", "\n", "\t"], ' ', trim($naam));
        $email = trim($email);

        if ($naam === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $inschrijvingMelding = 'Vul een geldige naam en een geldig e-mailadres in.';
        } else {
            $bestand = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'masterclass_inschrijvingen.txt';
            $regel = date('c') . "\t" . $naam . "\t" . $email . PHP_EOL;

            if (file_put_contents($bestand, $regel, FILE_APPEND | LOCK_EX) === false) {
                error_log('Masterclass-inschrijving kon niet naar het bestand worden geschreven.');
                $inschrijvingMelding = 'De inschrijving kon niet worden opgeslagen. Probeer het later opnieuw.';
            } else {
                $inschrijvingMelding = 'Bedankt voor je inschrijving!';
            }
        }
    }
}
?>
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
    <title>Masterclass</title>
</head>

<body>
    <?php require_once __DIR__ . '/header.php'; ?>
    <main>
        <h1>Masterclass</h1>
        <div class="masterclass-inschrijving">
            <button type="button" id="open-masterclass">Schrijf je hier in voor de masterclass</button>
            <?php if ($inschrijvingMelding !== ''): ?>
                <p class="inschrijving-melding" role="status">
                    <?= htmlspecialchars($inschrijvingMelding, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
        </div>
        <dialog id="masterclass-dialog" aria-labelledby="masterclass-title">
            <div class="inschrijfformulier">
                <h2 id="masterclass-title">
                    Inschrijven voor de masterclass</h2>
                <form method="post" action="masterclass.php">
                    <label for="inschrijf-naam">Naam</label>
                    <input type="text" id="inschrijf-naam" name="naam" autocomplete="name" required>

                    <label for="inschrijf-email">E-mailadres</label>
                    <input type="email" id="inschrijf-email" name="email" autocomplete="email" required>

                    <button type="submit">Versturen</button>
                    <button type="button" id="close-masterclass">Sluiten</button>
                </form>
            </div>
        </dialog>

        <p class="loremtext">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Facilis at laboriosam
            voluptates, fugiat, esse temporibus consequuntur nesciunt inventore officiis natus veniam perferendis
            officia quod quibusdam.<br>Quam quis officia voluptatem enim.</p>
        <div class="masterclassfoto">
            <img src="img/kamadobezig.jpg" alt="voorbeeld-masterclass">
        </div>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
    <script src="js/brief.js"></script>
</body>

</html>