		<?php
if(isset($_POST)) {
 $namef = $_POST['namef'];
 $namel = $_POST['namel'];
 $location= $_POST['cloc'];
 $mobile= $_POST['mobile'];
 $email= $_POST['email'];
 $compname= $_POST['compname'];
 $compurl = $_POST['compurl'];
$designation= $_POST['desig'];
$hire= $_POST['hire'];
$ct= $_POST['title'];
 $msg= $_POST['com'];
		$subject = "Your request acknowledgement";
		$body ="Dear " .$namef. "," ."<br><br>". "Thanks for business enquiry. One of our sales managers will be contacting you shortly and do the needful.<br><br>With Regards,<br><br>Sales Team<br><br> Mobile : 7353775774 <br><br>www.arristeck.com";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
		$success=mail($email,$subject,$body,$headers);
		if( $success== true ) {
		echo "1111";
		}else {
		echo "222";
		}
		$subject = "Business Enquiry";
		$body = "Dear Sales Team,<br><br>You have received an online business enquiry with the following details.<br/><br/>Fisrt Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$namef. "<br/><br/>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:".$namel. "<br/><br/>Mobile No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$mobile. "<br/><br/>Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$email. "<br/><br/>Company Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$compname."<br/><br/>Company URL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$compurl. "<br/><br/>Company Loc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$location. "<br/><br/>Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$designation."<br/><br/>Industry Serviced &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$hire. "<br/><br/>Services Looking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$ct. "<br><br>Comments <br><br>:" .$msg. "<br><br>With Regards,<br>www.arrisventures.in";
		// Always set content-type when sending HTML email
		$body ="<html><body>";
		$body .= "<p>Dear Rekha,<br><br>You have received an online business enquiry with the following details.</p><br>";
		$body .="<table>";
		$body .="<tr><td>First Name</td><td>: &nbsp;" . $_POST['namef'] . "</td></tr>";
		$body .="<tr><td>Last Name</td><td>: &nbsp;" . $_POST['namel'] . "</td></tr>";
		$body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
		$body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
		$body .="<tr><td>Company Name</td><td>: &nbsp;" . $_POST['compname'] . "</td></tr>";
		$body .="<tr><td>Company URL</td><td>: &nbsp;" . $_POST['compurl'] . "</td></tr>";
		$body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
		$body .="<tr><td>Designation</td><td>: &nbsp;" . $_POST['desig'] . "</td></tr>";
		$body .="<tr><td>Industry Serviced</td><td>: &nbsp;" . $_POST['hire'] . "</td></tr>";
		$body .="<tr><td>Services Looking for</td><td>: &nbsp;" . $_POST['title'] . "</td></tr>";
		$body .="<tr><td>Comments</td><td>: &nbsp;" . $_POST['msg'] . "</td></tr>";
		$body .="</table>";
		$body .="<p><br>With Regards,<br>www.arrisventures.in</p>";
		$body .="</body></html>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:".$email. "\r\n";
		$success1=mail("shahidrazorbee@gmail.com",$subject,$body,$headers);
		/*if( $success1== true ) {
		echo "<script type='text/javascript'>alert('Mailqq Sent successfully');</script>";
		}else {
		echo "<script type='text/javascript'>alert('Unableqq to send mail');</script>";
	}*/
		}
		?>
