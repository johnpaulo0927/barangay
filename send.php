<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;


  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/SMTP.php';

  if(isset($_POST["send"])){
    $mail = new PHPMailer (true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'paulomendez0927@gmail.com'; // Your    gmail
  $mail->Password = 'ifri xdir tmpq nnqr'; // Your gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  
  $mail->setFrom('paulomendez0927@gmail.com'); // Your gmail
       
  $mail->addAddress($_POST["email"]);
  
  $mail->isHTML(true);
  
  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];
  
  $mail->send();
  
  echo
"

<script>

alert('Sent Successfully');

document.location.href = 'index.html';
document.location.href = 'con.html';

document.location.href = 'Announcement.html';

document.location.href = 'About.html';

document.location.href = 'Community.html';

document.location.href = 'SanguniangKabataan.html';

document.location.href = 'Sports.html';


</script>

";

}
?>