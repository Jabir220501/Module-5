<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form1results.php" method="GET">
        <div class="name">
            <label for="fname">Voornaam</label>
            <input type="text" name="fname" id="fname" required>
        </div>
        <div class="tussenvoegsel">
            <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" name="tussenvoegsel">
        </div>
        <div class="last_name">
            <label for="lname">Achternaam</label>
            <input type="text" name="lname" id="lname" required>
        </div>
        <div class="fav_color">
            <input type="radio" name="fav_color" value="blue" required>
            <label for="Blauw">Blauw</label>
            <input type="radio" id="css" name="fav_color" value="green" required>
            <label for="Groene">Groen</label>
            <input type="radio" id="javascript" name="fav_color" value="yellow" required>
            <label for="Geel">Geel</label>
            <input type="radio" id="javascript" name="fav_color" value="red" required>
            <label for="Rood">Rood</label>
            <input type="radio" id="javascript" name="fav_color" value="orange" required>
            <label for="Oranje">Oranje</label>
            <input type="radio" id="javascript" name="fav_color" value="purple" required>
            <label for="Paars">Paars</label>
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Verzenden">
        </div>
    </form>
    <form action="form2results.php" method="POST">
        <div class="email">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="password">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd">
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Verzenden">
        </div>
    </form>
</body>

</html>