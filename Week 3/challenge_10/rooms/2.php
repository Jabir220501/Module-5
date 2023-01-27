<?php

$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {
    header("location: ../");
} else {

    if ($_COOKIE[$cookie_name] != 2) {
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
    <title>Room 2</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/room2.css">
</head>

<body>
    <div id="container">
    <div class="login-box" style="height: 375px;">
    <input id="tv" type="text" placeholder="8721" name="a" value="De code is hier ergens op deze pagina verstopt, typ de code in het tekstvak om verder te gaan.">
  <form action="../checkanswer.php" method="POST">
    <div class="user-box">
      <input type="text" name="code" required="" placeholder="code">
      <input type="hidden" name="room" value="2">
    </div>
    <a>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
      <input type="submit" value="Submit" style="top: 30%; right: 0%; margin-left: 30px; width: 110%; height: 100%; display: flex; align-self: center; position: absolute; border: none; z-index: 90; opacity: 0; margin-top: -15px">
    </a>
  </form>
</div>
    </div>
</body>

</html>