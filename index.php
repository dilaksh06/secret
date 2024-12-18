<?php
// Load the JSON file
$jsonData = file_get_contents('secret.json');

// Decode the JSON data
$data = json_decode($jsonData, true);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['secret_code'] ?? '';

    // Check if the input matches the secret code
    if ($userInput === $data['secret_code']) {
        echo "Hello!";
    } else {
        echo "Invalid secret code.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Code</title>
</head>

<body>
    <form method="POST">
        <label for="secret_code">Enter Secret Code:</label>
        <input type="text" id="secret_code" name="secret_code" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>