<?php
$artists = [
    "Artist 1",
    "Artist 2",
    "Artist 3",
    "Artist 4",
    "Artist 5",
    "Artist 6"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <select>
        <?php foreach($artists as $artist): ?>
        <option><?= $artist ?></option>
        <?php endforeach; ?>
    </select>
</body>
</html>