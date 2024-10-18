<?php
function checkIfNameExists($name, $existingData) {
    if (in_array($name, $existingData)) {
        header("Location: ../views/main.php?error=name_exists&name=" . $name);
        exit;
    }
}
?>