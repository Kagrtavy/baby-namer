<?php if (isset($_GET['created_name'])):
    $createdName = htmlspecialchars($_GET['created_name']); ?>
    Created name - <?= $createdName ?>, 2024
<?php endif; ?>