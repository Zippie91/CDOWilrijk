<?php

$headers =  'From: ' . strip_tags($_POST['email']) . "\n" .
            "MIME-Version: 1.0\n" .
            "Content-Type: text/html; charset=ISO-8859-1\n";

$subject = 'Bestelling van ' . $_POST['voornaam'] . ' ' . $_POST['naam'];

$receiver = strip_tags($sender);

include('mailbody.php');

if(mail($receiver, $subject, $body, $headers)) {
  echo '<div class='alert alert-success'>Email verzonden! Binnenkort krijg je een bevestiging van jouw bestelling. Heb je dit nog niet gekregen na een verloop van tijd, neem dan contact op met Christian Rutges op het nummer 0495/03.75.79.</div>';
} else {
  echo '<div class="alert alert-danger">De e-mail is niet verzonden! Probeer opnieuw of neem contact op met Christian Rutges op het nummer 0495/03.75.79.</div>';
}

?>
