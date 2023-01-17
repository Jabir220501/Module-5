<?php
$fname = $_GET["fname"];
$tussenvoegsel = $_GET ["tussenvoegsel"];
$lname = $_GET["lname"];
$whitespace = " ";
$color = $_GET ["fav_color"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 Results</title>
</head>
<body style="background-color: <?php echo $_GET ["fav_color"]?>;">
    <h2><?php echo $fname . $whitespace . $tussenvoegsel . $whitespace . $lname;?></h2>
    <h3>Color picked: <?php echo $color?></h3>
</body>
</html>