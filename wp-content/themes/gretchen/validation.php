<?php
// define variables and initialize with empty values
$nameError = $emailError = $phoneError = $messageError = "";
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Missing";
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $emailError = "Missing";
    }
    else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"]))  {
        $phoneError = "Missing";
    }
    else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["message"])) {
        $messageError = "Missing";
    }
    else {
        $message = $_POST["message"];
    }
}

?>