<?php

$cookie_name = "progress";

if (!isset($_COOKIE[$cookie_name])) {
    header("location: ../");
} else {

    if ($_COOKIE[$cookie_name] != 3) {
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
    <link rel="stylesheet" href="../assets/css/room3.css">
</head>

<body>
    <div id="container">
    <div class="login-box" style="height: 375px;">
    <p id="tv">Vind de code en typ hem in dit formulier!</p>
  <form action="../checkanswer.php" method="POST">
    <div class="user-box">
      <input type="text" name="code" required="" placeholder="code">
      <input type="hidden" name="room" value="3">
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

<script defer>
var _0x4de9eb=_0x420a;function _0x420a(_0x4fa6fa,_0x3ba243){var _0x2df7a0=_0x2df7();return _0x420a=function(_0x420a82,_0x2b9f92){_0x420a82=_0x420a82-0x17e;var _0x1c26c4=_0x2df7a0[_0x420a82];return _0x1c26c4;},_0x420a(_0x4fa6fa,_0x3ba243);}(function(_0x3d2578,_0x4ec56e){var _0x13425c=_0x420a,_0x257a3a=_0x3d2578();while(!![]){try{var _0x28845e=-parseInt(_0x13425c(0x187))/0x1+parseInt(_0x13425c(0x183))/0x2*(-parseInt(_0x13425c(0x18a))/0x3)+parseInt(_0x13425c(0x184))/0x4*(parseInt(_0x13425c(0x17f))/0x5)+parseInt(_0x13425c(0x182))/0x6*(-parseInt(_0x13425c(0x17e))/0x7)+parseInt(_0x13425c(0x189))/0x8*(-parseInt(_0x13425c(0x185))/0x9)+-parseInt(_0x13425c(0x180))/0xa*(parseInt(_0x13425c(0x181))/0xb)+parseInt(_0x13425c(0x188))/0xc;if(_0x28845e===_0x4ec56e)break;else _0x257a3a['push'](_0x257a3a['shift']());}catch(_0x43ac85){_0x257a3a['push'](_0x257a3a['shift']());}}}(_0x2df7,0x6e59c),console['log'](_0x4de9eb(0x186)));function _0x2df7(){var _0x418941=['6YdhVBA','5002VaQbEV','1466544yETlFn','96372FJbdDe','de\x20code\x20is:\x200039','511414PINRwA','39249612WKgFJc','552gQwDES','1047ZwtRMo','3145513iitHlY','5xIhLYp','10BwylOo','6742637abCjnu'];_0x2df7=function(){return _0x418941;};return _0x2df7();}
</script>

</html>