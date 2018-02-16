<?php
if(isset($_POST)) {
	$namef = $_POST['name'];
	$location= $_POST['cloc'];
	$mobile= $_POST['mobile'];
	$email= $_POST['email'];
	$compname= $_POST['compname'];
	$compurl = $_POST['compurl'];
	$designation= $_POST['desig'];
	$hire= $_POST['hire'];
	$msg= $_POST['com'];
	$subject = "Your request acknowledgement";
$body ="Dear " .$namef. "," ."<br><br>". "Thanks for business enquiry. One of our sales managers will be contacting you shortly and do the needful.<br><br>With Regards,<br><br>Sales Team<br><br> Mobile : 7353775774 <br><br>www.arristeck.com";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:rekha@arristeck.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if( $success== true ) {
echo "1111";
}else {
echo "2222";
}
$subject = "Business Enquiry";
// Always set content-type when sending HTML email
$body ="<html><body>";
$body .= "<p>Dear Rekha,<br><br>You have received an online business enquiry with the following details.</p><br>";
$body .="<table>";
$body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
$body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
$body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
$body .="<tr><td>Company Name</td><td>: &nbsp;" . $_POST['compname'] . "</td></tr>";
$body .="<tr><td>Company URL</td><td>: &nbsp;" . $_POST['compurl'] . "</td></tr>";
$body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['cloc'] . "</td></tr>";
$body .="<tr><td>Designation</td><td>: &nbsp;" . $_POST['desig'] . "</td></tr>";
$body .="<tr><td>Industry Serviced</td><td>: &nbsp;" . $_POST['hire'] . "</td></tr>";
$body .="<tr><td>Comments</td><td>: &nbsp;" . $_POST['com'] . "</td></tr>";
$body .="</table>";
$body .="<p><br>With Regards,<br>www.arrisventures.in</p>";
$body .="</body></html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:".$email. "\r\n".
"CC: anil@arristeck.com,arvind@arristeck.com"; 
$success1=mail("rekha@arristeck.com",$subject,$body,$headers);
/*if( $success1== true ) {
echo "1";
}else {
echo "0";
}*/
}
?>
