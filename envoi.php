<?php
$nomprenom = $_POST['nomprenom'];
$mail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$headers ='From: postmaster@riou-kevin.fr'."\n";
$headers .='Reply-To:' .$mail."\n";
$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
$headers .='Content-Transfer-Encoding: 8bit';
mail('riou.kkevin@gmail.com', $sujet, $message." \n\n ".$nomprenom, $headers); 
header('Location: index.html#p6');
exit();
?>
