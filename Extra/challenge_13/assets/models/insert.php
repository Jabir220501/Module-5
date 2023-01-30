<?php
include("connection.php");

if (
    isset($_POST['submit']) &&
    isset($_POST['merk']) &&
    isset($_POST['kleur']) &&
    isset($_POST['bouwjaar']) &&
    isset($_POST['prijs'])
) {
    $kenteken = $_POST["kenteken"];
    $merk = $_POST["merk"];
    $kleur = $_POST["kleur"];
    $bouwjaar = $_POST["bouwjaar"];
    $prijs = $_POST["prijs"];

    if (
        $kenteken != "" &&
        $merk != "" &&
        $kleur != "" &&
        $bouwjaar != "" &&
        $prijs != ""
    ) {
        $sql = "INSERT INTO `autos`(`kenteken`, `merk`, `kleur`, `bouwjaar`, `prijs`)
        VALUES ('$kenteken','$merk','$kleur','$bouwjaar','$prijs')";

        $result = mysqli_query($conn, $sql);

        header('Location: ../../index.php');
    } else {
        header("location: ../../add.php?msg=Please fill in all fields");
        exit();
    }
}
?>