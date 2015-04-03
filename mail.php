<?php
require_once('PHPMailer/PHPMailerAutoload.php');
include('mailbody.php');

$mail = new PHPMailer(true);

$mail->IsSMTP();

try {
  $mail->Host       = 'smtp.gmail.com';                             // SMTP server
  //$mail->SMTPDebug  = 1;                                            // enable SMTP Debug information
  $mail->SMTPAuth   = true;                                         // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                                        // sets the prefix to the server
//$mail->Host       = "smtp.gmail.com";                             // sets GMAIL as the SMTP server
  $mail->Port       = 465;                                          // set the SMTP port for the GMAIL server
  $mail->Username   = "testyannicktest@gmail.com";                  // GMAIL username
  $mail->Password   = "yannick123";                                 // GMAIL password
  $mail->SetFrom('testyannicktest@gmail.com', 'Yannick Test');
  $mail->AddReplyTo('testyannicktest@gmail.com', 'Yannick Test');
  $mail->AddAddress($_POST['email'], ($_POST['voornaam'] . ' ' . $_POST['naam']));
  $mail->AddBCC('testyannicktest@gmail.com', 'Yannick Test');
  $mail->Subject = 'Bestelling van' . " " . $_POST["voornaam"] . " " . $_POST["naam"];
  $mail->MsgHTML($body);                                            // Get $body from mailbody.php
  $mail->Send();
  echo '<div class="alert alert-success">Email verzonden!</div>';
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>
