<?php
ech;o "send successfull";
print_r($_POST);
if(isset($_POST)) {
  echo "inside";
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$location= $_POST['location'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$msg= $_POST['msg'];
$pp=$_POST['file'];
$subject = "Your profile submission acknowledgement";
$body = "Dear " .$name.","."<br><br>"."Thanks for sharing your profile. One of our managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisVentures Team<br>www.arrisventures.in";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if( $success== true ) {
echo " 111111111";
}else {
echo "222222";
}
$mailfrom = $_POST['email'];
$cat=$_POST['cat'];
if($cat=="general")
{
$subject="Resume for opportunities with ArrisVentures";
}
else if($cat=="arristech"){
  $subject="Resume for opportunities with ArrisTechnologies";
  }
else if($cat=="arristrr"){
  $subject="Resume for opportunities with ArrisTrraining";
  }
else if($cat=="arriswe"){
  $subject="Resume for opportunities with ArrisWellness";
  }
else if($cat=="arrisfoo"){
  $subject="Resume for opportunities with ArrisFooundation";
  }
try {
    $mail = new PHPMailer;
    $mail->FromName   = $_POST['name'];
    $to_email ="shahidrazorbee@gmail.com";
    $mail->AddAddress($to_email);
    $mail->From       = $mailfrom;
    $mail->Subject  = $subject;
  $body ="Dear Gaurav,<br><br>Please find the resume of " .$name. " with the following details. This resume has been submitted through Arris Website for your kind perusal and further processing.<br><br>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$name. "<br><br>Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$mobile. "<br><br>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$email. "<br><br>Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$location. "<br><br>Resume:<br><br>".$msg. "<br>";
    $mail->MsgHTML($body);
    $mail->IsSendmail();
    $mail->AddReplyTo($mailfrom);
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->WordWrap   = 80;
    $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    $mail->IsHTML(true);
    $mail->Send();
    echo "success";
      }
catch (phpmailerException $e) {
  echo $e->errorMessage();
}
}
?>
