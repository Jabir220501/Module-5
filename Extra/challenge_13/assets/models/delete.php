<?php
include("connection.php");
    if(isset($_POST["id"])){
    $id = $_POST['id'];
        $sql = "DELETE FROM autos WHERE id=$id";
        $result = mysqli_query($conn, $sql);
    header("location: ../../index.php");
    }
?>