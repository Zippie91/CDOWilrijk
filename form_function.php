<?php
  if(isset($_POST['email'])) {
    $to = strip_tags($_POST['email']);

    $subject = "Dinerreservatie voor " . $_POST['voornaam'] . " " . $_POST['naam'];

    $headers = "From: bestelling@" . strip_tags($_POST['recipient']) . "\r\n";
    $headers .= "Cc: " . strip_tags($_POST['recipient']) . "\r\n";

    send($to, $subject, $message, $headers);
  }
?>
