<?php

header('Access-Control-Allow-Origin: *');

echo "send successfull";


echo "----before---";

print_r($_FILES);
echo "-----after--";

print_r($_POST);
if(isset($_POST)) {
  echo "inside";
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$location= $_POST['location'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$msg= $_POST['msg'];
$pp=$_POST['pasteprofile'];
$subject = "Your profile submission acknowledgement";
$body = "Dear " .$name.","."<br><br>"."Thanks for sharing your profile. One of our managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisVentures Team<br>www.arrisventures.in";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if( $success== true ) {
echo "111111111";
}else {
echo "222222";
}
if($pp!="")
{
  $res="Please find the resume pasted for your kind perusal and further processing.";
}
else {
  $res="Please find the resume attached for your kind perusal and further processing.";
}
try {
    $mail = new PHPMailer;
    $mail->FromName   = $_POST['name'];
    $to_email ="shahidrazorbee@gmail.com";
    $mail->AddAddress($to_email);
    $mail->From       = $_POST['email'];
    $mail->AddCC("saleempasha928@gmail.com");
    $mail->Subject  = $subject;
  /*$body ="Dear Gaurav,<br><br>Please find the resume of " .$name. " with the following details. This resume has been submitted through Arris Website for your kind perusal and further processing.<br><br>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$name. "<br><br>Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$mobile. "<br><br>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$email. "<br><br>Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$location. "<br><br>Resume:<br><br>".$msg. "<br>";*/
    $body ="<html><body>";
    $body .= "<p>Dear Rekha,<br><br>You have received an online Trainer Profile from " . $_POST['name'] . " with the following details.</p><br>";
    $body .="<table>";
    $body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
    $body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
    $body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
    $body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
    $body .="<tr><td>Message</td><td>: &nbsp;" . $_POST['msg'] . "</td></tr>";
    $body .="<tr><td>Resume</td><td>: &nbsp;</td></tr>";
    $body .="</table>";
    $body .="<p>" . $res . "</p>";
    $body .="<p>" . $_POST['pasteprofile'] . "</p>";
    $body .="<p><br>With Regards,<br>www.arrisventures.in</p>";
    $body .="</body></html>";
    $mail->MsgHTML($body);
    $mail->IsSendmail();
    $mail->AddReplyTo($mailfrom);
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->WordWrap   = 80;
    $mail->AddAttachment($_FILES['profile']['tmp_name'], $_FILES['profile']['name']);
    $mail->IsHTML(true);
    $mail->Send();
    echo "success";
      }
catch (phpmailerException $e) {
  echo $e->errorMessage();
}
}
?>
