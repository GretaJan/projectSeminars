<?php

if(isset($_POST['button'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phoneFrom = $_POST['phone'];
    $msg = $_POST['message'];

    $mailTo = "gretajan09@gmail.com";
    $subject = "Klausimas";
    $headers = "Siuntėjas: ". $mailFrom . "Laikas: " . $_SERVER['REQUEST_TIME'];
    $txt = "Jūs gavote žinutė nuo ". $name.".\n\n". $msg;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: homepage.php?mailsend");
}

?>