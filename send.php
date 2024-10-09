<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/Exception.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru','phpmailer/language/');
    
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $desk = $_POST['desk'];

    $mail->IsSMPTP();
    $mail->Host = 'smpt.mail.ru';
    $mail->SMTPAuth = true;
    $mail->Username ='himiliahostplast@mail.ru';
    $mail->Passward = 'nU6tWXnRiRg5nAtqGD3S';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('himiliahostplast@mail.ru');
    $mail->addAddress('schet19@outlook.com');

    $mail->IsHTML(true);

    $mail->Subject = 'Заявка с сайта';
    $mail->Body = 'Номер телефона'.$phone .'Почта:' .$email .'Описание заказа' .$desk ;
    $mail->AltBody ='';

    if (!$mail->send()){
        echo'yes';
    }
    else{
        echo'no gay';
    }

?>