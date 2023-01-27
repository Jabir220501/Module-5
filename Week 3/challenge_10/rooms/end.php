<?php

$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {
    header("location: ../");
} else {

    if ($_COOKIE[$cookie_name] != "end") {
        header("location: ./" . $_COOKIE[$cookie_name] . ".php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room 1</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/room1.css">
</head>

<body>
    <div id="container">
    <div class="login-box">
  <h2>Het is je gelukt, je hebt de escaperoom uitgespeeld!</h2>
    <a>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
</div>
    </div>
</body>

</html>