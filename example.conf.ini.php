<?php
// Mail Settings
require 'phpmailer/PHPMailerAutoload.php';
$mail = new \PHPMailer;
$receipt = new \PHPMailer;

$mail->isSMTP();
$mail->Host = '';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$receipt->isSMTP();
$receipt->Host = '';
$receipt->SMTPAuth = true;
$receipt->Username = '';
$receipt->Password = '';
$receipt->SMTPSecure = 'ssl';
$receipt->Port = 465;

// Slack Token
$token = "";
// Slack Announcements Channel ID
$get_channel = "";
