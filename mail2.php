<?php

$headers =  'From: ' . strip_tags($_POST['email']) . "\n" .
            "MIME-Version: 1.0\n" .
            "Content-Type: text/html; charset=ISO-8859-1\n";

$subject = 'Bestelling van ' . $_POST['voornaam'] . ' ' . $_POST['naam'];

$receiver = strip_tags($sender);

include('mailbody.php');

mail($receiver, $subject, $body, $headers);

/*
if(mail($receiver, $subject, $body, $headers)) {
  echo '<div class='alert alert-success'>Email verzonden! Als je de email niet aangekregen hebt, <b>kijk dan in je spam-folder of junk mail</b>. <br>Als je hem nog niet vindt, neem dan contact op met Christian Rutges op het nummer 0495/03.75.79.</div>';
} else {
  print_r(error_get_last());
  echo '<div class="alert alert-danger">De e-mail is niet verzonden! Probeer opnieuw of neem contact op met Christian Rutges op het nummer 0495/03.75.79.</div>';
}
*/
?>
