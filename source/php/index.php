<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Kezdőlap</title>
    </head>
    <body>
        <?php
            #require_once "header.php";
        ?>
        <table>
            <?php
                require_once "alljokes.php";
            ?>
        </table>
    </body>
</html>