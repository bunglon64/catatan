<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>
<body>
    <h1>Backend/</h1>
        <?php
        $dir    = './';
        $files = scandir($dir);
        foreach ($files as $file) {
        ?>
            <a href="https://catatan-tri.herokuapp.com/backend/<?php echo ($file); ?>" target="blank">
                <li><?php echo ($file); ?></li>
            </a>
        <?php
        } ?>
</body>
</html>