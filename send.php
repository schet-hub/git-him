<?php
$to = 'schet19@outlook.com';

$phone = $_POST['phone'];
$email = $_POST['email'];
$desk = $_POST['desk'];

$mes = "Номер: $phone \nE-mail: $email \nХарактеристики: $desk";

$send = mail($to, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email")
?>