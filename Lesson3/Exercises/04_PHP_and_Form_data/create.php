<?php
if (empty($_POST['name']) ||
    empty($_POST['year']) ||
    empty($_POST['artist']) ||
    empty($_POST['type']) ||
    empty($_POST['description']) ||
    empty($_POST['year'])
) {
    http_response_code(400);
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Album Created</title>
</head>
<body>
    <h1>Success!</h1>
    <p>
        <b>Name:</b> <?= $_POST['name'] ?>
    </p>
    <p>
        <b>Year:</b> <?= $_POST['year'] ?>
    </p>
    <p>
        <b>Artist:</b> <?= $_POST['artist'] ?>
    </p>
    <p>
        <b>Type:</b> <?= $_POST['type'] ?>
    </p>
    <p>
        <b>Description:</b> <?= $_POST['description'] ?>
    </p>
</body>
</html>