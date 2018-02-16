<?php
header('Access-Control-Allow-Origin: *');
echo "-----after--";
if(isset($_POST)) {
echo "-----after111--";
$name = $_POST['name'];
$location= $_POST['location'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$msg= $_POST['msg'];
$subject = "Request for information regarding ArrisEvaluation";
$body ="<html><body>";
						$body .="<table>";
						$body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
						$body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
						$body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
						$body .="<tr><td>Message</td><td>: &nbsp;</td></tr>";
						$body .="</table>";
                                                $body .="<p> &nbsp;&nbsp;" . $_POST['msg'] . "</p>";
                                                $body .="<p><br>With Regards,<br>www.arrisventures.in</p>";
						$body .="</body></html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:".$email. "\r\n";
$success=mail("info@arristeck.com",$subject,$body,$headers);
if( $success== true ) {
echo "111";
}else {
echo "222";
}
}
/*else if(isset($_POST['submit1'])) {

$name = $_POST['name'];
$email= $_POST['email'];
$subject = "Your profile / resume submission acknowledgement";
$body = "Dear" .$name. "," ."<br><br>". "Thanks for sharing your profile / resume. One of our managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisVentures Team<br>www.arrisventures.in";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if( $success== true ) {
echo "<script type='text/javascript'>alert('Mail Sent successfully');</script>";
}else {
echo "<script type='text/javascript'>alert('Unable to send mail');</script>";
}
}*/
?>
