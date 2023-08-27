<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $smail = new PHPMailer(true);
    $smail->isSMTP();
    $smail->Host = 'smtp.gmail.com';
    $smail->SMTPAuth = true;
    $smail->Username = 'your-set-email-address';
    $smail->Password = 'your-app-password-(step 1)';
    $smail->Port = 465;
    $smail->SMTPSecure = 'ssl';
    $smail->isHTML(true);
    $smail->setFrom("an@address.mail", "ADMIN SITE");
    $smail->addAddress("an@address.mail");
    $smail->Subject = ("Subject of this mail");
    $smail->Body = ("This is the content of the mail");
    $smail->send();
?>