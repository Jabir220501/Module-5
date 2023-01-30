<?php
include("connection.php");

if (
    isset($_POST['submit']) &&
    isset($_POST['merk']) &&
    isset($_POST['kleur']) &&
    isset($_POST['bouwjaar']) &&
    isset($_POST['prijs']) 
) {
    $id = $_POST["id"];
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
        $sql = "UPDATE autos SET kenteken='$kenteken', merk='$merk', kleur='$kleur', bouwjaar='$bouwjaar', prijs='$prijs' WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        header('Location: ../../index.php');
    } else {
        header("location: ../../update.php?msg=Please fill in all fields");
        exit();
    }
}
?>