<?php
include_once __DIR__ . '/../validate/validate.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $directory = __DIR__ . '/../names';
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
    if ($gender === 'male') {
        $filePath = $directory . '/male_names.json';
    } elseif ($gender === 'female') {
        $filePath = $directory . '/female_names.json';
    } else {
        header("Location: ../views/main.php?error=invalid_gender");
        exit;
    }
    if (file_exists($filePath)) {
        $existingData = json_decode(file_get_contents($filePath), true);
        if (!is_array($existingData)) {
            $existingData = [];
        }
    } else {
        $existingData = [];
    }
    checkIfNameExists($name, $existingData);
    $existingData[] = $name;
    file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));
    header("Location: ../views/main.php?created_name=" . urlencode($name));
    exit;
}
?>
