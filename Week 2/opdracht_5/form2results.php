<?php
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $correct_input_email = "test@test.nl";
    $correct_input_pwd = "tEst";

    if ($email == $correct_input_email && $password == $correct_input_pwd){
        echo "<script>alert('Je hebt toegang tot deze pagina.');</script>";
    }else{
        echo "<script>alert('Je hebt geen toegang tot deze pagina.');</script>";
    }
?>
