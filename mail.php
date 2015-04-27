<?php
require_once('PHPMailer/PHPMailerAutoload.php');
include('mailbody.php');

$mail = new PHPMailer(true);

$mail->IsSMTP();

try {
  $mail->Host       = 'mail.donboscowilrijk.be';                    // SMTP server
  $mail->SMTPDebug  = 2;                                            // enable SMTP Debug information
  $mail->SMTPAuth   = true;                                         // enable SMTP authentication
  $mail->SMTPSecure = "tls";                                   // sets the prefix to the server
  $mail->Port       = 587;                                          // set the SMTP port for the GMAIL server
  $mail->Username   = $account;                                     // GMAIL username
  $mail->Password   = $password;                                    // GMAIL password
  $mail->SetFrom($sender, $sendername);
  $mail->AddReplyTo($sender, $sendername);
  $mail->AddAddress($_POST['email'], ($_POST['voornaam'] . ' ' . $_POST['naam']));
  $mail->AddBCC($sender, $sendername);
  $mail->Subject = 'Bestelling van' . " " . $_POST["voornaam"] . " " . $_POST["naam"];
  $mail->MsgHTML($body);                                            // Get $body from mailbody.php
  $mail->Send();
  echo '<div class="alert alert-success">Email verzonden! Als je de email niet aangekregen hebt, <b>kijk dan in je spam-folder of junk mail</b>. <br>Als je hem nog niet vindt, neem dan contact op met Christian Rutges op het nummer 0495/03.75.79.</div>';
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>
