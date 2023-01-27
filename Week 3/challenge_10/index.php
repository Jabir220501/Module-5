<?php

$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {

    $cookie_value = 1;
    setcookie($cookie_name, $cookie_value, 2147483647, "/");

    $isnew = true;

} else {

    $isnew = false;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escaperoom</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <div id="container">
        <?php
        if ($isnew == true || $_COOKIE[$cookie_name] == 1) {
            ?>
            <div id="message">
                <h3>Welkom bij de escaperoom, klik op het knopje om te starten!!</h3>
                <a onclick="window.location.href = './rooms/1.php'">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Start
                </a>
                <?php
        } else {
            ?>
                <h3>Je bent gebleven bij level
                    <?php echo $_COOKIE[$cookie_name] ?>, klik op de knop om verder te gaan waar je gebleven was
                </h3>

                <a onclick="window.location.href = './rooms/<?php echo $_COOKIE[$cookie_name] ?>.php'">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Verder
                </a>
                <?php
        }
        ?>
        </div>
    </div>

</body>

</html>