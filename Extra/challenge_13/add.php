<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="./assets/css/add.css">
</head>

<body>
    <p>
        <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </p>
    <form method="POST" action="./assets/models/insert.php">
        <label for="kenteken">Kenteken</label>
        <input type="text" name="kenteken" id="kenteken" maxlength="6" placeholder="Kenteken van de auto" required>
        <label for="merk">Merk</label>
        <input type="text" name="merk" id="merk" placeholder="Merk van de auto" required>
        <label for="kleur">Kleur</label>
        <input type="text" name="kleur" id="kleur" placeholder="Kleur van de auto" required>
        <label for="bouwjaar">Bouwjaar</label>
        <input type="number" name="bouwjaar" id="bouwjaar" placeholder="Bouwjaar van de auto" required>
        <label for="prijs">Prijs</label>
        <input type="number" name="prijs" id="prijs" placeholder="Prijs van de auto" required>
        <input type="submit" id="submit" name="submit">
    </form>
</body>
</html>