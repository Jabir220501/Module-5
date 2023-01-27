<?php

if (isset($_POST["room"]) != true) {
    exit();
}

if ($_POST["room"] == "1") {
    if ($_POST["code"] == "4921") {
        $cookie_value = 2;
        setcookie('progress', $cookie_value, 2147483647, "/");
        header("location: ./rooms/2.php");
    } else {
        header("location: ./rooms/1.php");
    }
}

if ($_POST["room"] == "2") {
    if ($_POST["code"] == "8721") {
        $cookie_value = 3;
        setcookie('progress', $cookie_value, 2147483647, "/");
        header("location: ./rooms/3.php");
    } else {
        header("location: ./rooms/2.php");
    }
}

if ($_POST["room"] == "3") {
    if ($_POST["code"] == "0039") {
        $cookie_value = "end";
        setcookie('progress', $cookie_value, 2147483647, "/");
        header("location: ./rooms/end.php");
    } else {
        header("location: ./rooms/3.php");
    }
}
