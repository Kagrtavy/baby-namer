<?php
$maleFilePath = __DIR__ . '/../names/male_names.json';
$femaleFilePath = __DIR__ . '/../names/female_names.json';

if (file_exists($maleFilePath)) {
    $maleNames = json_decode(file_get_contents($maleFilePath), true);
    if (!is_array($maleNames)) {
        $maleNames = [];
    }
} else {
    $maleNames = [];
}

if (file_exists($femaleFilePath)) {
    $femaleNames = json_decode(file_get_contents($femaleFilePath), true);
    if (!is_array($femaleNames)) {
        $femaleNames = [];
    }
} else {
    $femaleNames = [];
}

$maxNames = max(count($maleNames), count($femaleNames));
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Baby Namer</title>
        <link href="../css/style.css" rel="stylesheet"/>
    </head>
    <body>
    <header>
        <h1>BABY NAMER</h1>
    </header>
    <main>
        <div>
            <?php include 'form.php'; ?>
            <?php if (isset($_GET['error']) && $_GET['error'] === 'name_exists'):
                $existingName = htmlspecialchars($_GET['name']); ?>
                <p>This name is already in the list: <?= $existingName ?></p>
            <?php endif; ?>
        </div>
        <?php include 'table.php'; ?>
    </main>
    <footer>
        <?php if (isset($_GET['created_name'])):
            $createdName = htmlspecialchars($_GET['created_name']); ?>
            Created name - <?= $createdName ?>, 2024
        <?php endif; ?>
    </footer>
    </body>
</html>