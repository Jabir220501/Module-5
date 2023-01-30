<?php
include("assets/models/connection.php");

$id = $_POST["id"];

$sql = "SELECT * FROM `autos` WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="./assets/css/update.css">
</head>

<body>
    <p>
        <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    <form method="POST" action="./assets/models/update.php">
        <label for="kenteken">Kenteken</label>
        <input type="text" name="kenteken" id="kenteken" maxlength="6" placeholder="Kenteken van de auto"
            value="<?php echo $row['kenteken']; ?>">
        <label for="merk">Merk</label>
        <input type="text" name="merk" id="merk" placeholder="Merk van de auto" value="<?php echo $row['merk']; ?>">
        <label for="kleur">Kleur</label>
        <input type="text" name="kleur" id="kleur" placeholder="Kleur van de auto" value="<?php echo $row['kleur']; ?>">
        <label for="bouwjaar">Bouwjaar</label>
        <input type="number" name="bouwjaar" id="bouwjaar" placeholder="Bouwjaar van de auto"
            value="<?php echo $row['bouwjaar']; ?>">
        <label for="prijs">Prijs</label>
        <input type="number" name="prijs" id="prijs" placeholder="Prijs van de auto"
            value="<?php echo $row['prijs']; ?>">
        <input type="submit" id="submit" name="submit" value="Update">
        <input type="hidden" id="submit" name="id" value="<?php echo $row['id'] ?>">
    </form>
</body>

</html>