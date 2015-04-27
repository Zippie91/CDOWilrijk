<?php
$headers = "From: " . strip_tags('rafsmits@gmail.com') . "\r\n";
$headers .= "Reply-To: ". strip_tags('rafsmits@gmail.com') . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = 'Test mail 2';

$receiver = 'raf_smits@hotmail.com';

$content = 'Dit is nog eens een test mail.';

mail($receiver, $subject, $content, $headers);
?>
