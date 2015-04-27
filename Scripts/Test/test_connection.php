<?php
$host = "smtp.donboscowilrijk.be";
$port = "465";
$checkconn = fsockopen($host, $port, $errno, $errstr, 5);
if(!$checkconn){
  echo "($errno) $errstr";
} else {
  echo 'ok';
}

?>
