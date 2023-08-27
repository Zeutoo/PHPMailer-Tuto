
# PHP MAILER | TUTO

How use PHPMailer simply


## First

Create a google account, active **Two-step validation**.
After https://myaccount.google.com/u/2/apppasswords and create one **SELECT AN APP** you put other and name it like you like. After that you go in https://gmail.com with the good account ! **Settings**->**See all settings**->**Transfer and POP/IMAP**->**IMAP access** = **Enable IMAP**


## Second

Clone the PHPMailer in your workspace 

```bash
  cd c:\\xampp\htdocs\my-sample-workspace
  git clone https://github.com/PHPMailer/PHPMailer.git
```

## Third
```bash
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
```

## Fourth
```bash
if(isset($_POST['send'])){
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$subject = htmlentities($_POST['subject']);
$message = htmlentities($_POST['message']);

$smail = new PHPMailer(true);
                     $smail->isSMTP();
                     $smail->Host = 'smtp.gmail.com';
                     $smail->SMTPAuth = true;
                     $smail->Username = 'your-set-email-address';
                     $smail->Password = 'your-app-password-(step 1)';
                     $smail->Port = 465;
                     $smail->SMTPSecure = 'ssl';
                     $smail->isHTML(true);
                     $smail->setFrom($email, $name);
                     $smail->addAddress($email);
                     $smail->Subject = ($subject);
                     $smail->Body = ($message);
                     $smail->send();

//header("Location: ./response.php");
echo'Mail sent succesfuly to '.$email.' ! <br>
Subject: '.$subject.' <br>
Name: '.$name.' <br>
From: '.$email.' <br>
Content: '.$message.' <br>
';
}
?>

<form action="" method="POST">
<div align="center">

<input type="text" placeholder="Name" name="name" id="name"><br>
<input type="text" placeholder="Email" name="email" id="email"><br>
<input type="text" placeholder="Subject" name="subject" id="subject"><br> 
<input type="text" placeholder="Message..." name="message" id="message"><br> 
<button type="submit" name="send" id="send">SEND</button>
</div>
</form>
```


## Screenshots

![Result 1](https://github.com/Zeutoo/PHPMailer-Tuto/blob/main/Sent1.PNG?raw=true)
![Result 2](https://github.com/Zeutoo/PHPMailer-Tuto/blob/main/Sent2.PNG?raw=true)

