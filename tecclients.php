<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home || ArrisTechnologies </title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-responsive.css">

  <!-- My Styles -->
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
  <link rel="stylesheet" type="text/css" href="css/clients.css" />
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css"?ver=1.0/>
  <link rel="stylesheet" type="text/css" href="css/style1.css"/>

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-itouch-icon" href="img/favicon.png">
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <style>
     	#menu{display:none;}
     </style>
<![endif]-->
<!--[if lt IE 8]>
     <script type="text/javascript">
     	alert("This website is best viewed in browsers Internet Explorer 8 and above. Kindly update your browser or view the website on Mozilla Firefox or Google Chrome");
     </script>
<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
$( document ).ready(function() {
$("#form").submit(function(e){
e.preventDefault();
var form_data = new FormData(this);
//$(this).serialize(),
$.ajax({
                url: 'ctraining.php',
                type: 'post',
                dataType : 'json',
                           contentType: false,
                           cache: false,
                           processData:false,
                data: form_data,
                success: function(  ){
               $("#submit_button").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:17px;position:  absolute;margin-top: -60px;margin-left: -190px;'>Thank you for contacting us.</span>");
                  $('#form')[0].reset();
               },
                error: function( aa ){
                  $("#submit_button").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -60px;margin-left: -180px;'>Thank you for contacting us.</span>");
                  $('#form')[0].reset();
                }
            });


});
});
</script>
</head>

<body>
	<!-- Container for all the Content -->
	<div class="container-fluid at">

	<!-- Header Row -->
	<div class="row-fluid">
        <div class="span3 offset1"><!--Logo content-->
          <img id="logo" src="img/train.png" alt="ArrisTechnologies Logo" class="js trl"  />

        </div>

        <div class="span7 spann7"><!--Navigation-->
          <ul id="nav">
          <li ><a href="arristraining.php" class="tooltip1">Home<span class="hidden-phone tt">The Genesis</span></a></li>
            <li ><a href="skills.php" class="tooltip1"><span>Skills</span><span class="hidden-phone tt">Our Abilities</span></a>
            </li>
            <li ><a href="training.php" class="tooltip1"><span>Trainers</span><span class="hidden-phone tt">Our Strength</span></a>
            </li>
            <li class="selected "><a href="tecclients.php" class="tooltip1"><span>Clients</span><span class="hidden-phone tt">Our Pride</span></a>
            	            </li>
            <li><a href="About.php" class="tooltip1">About<span class="hidden-phone tt">Our Intent</span></a></li>
            <li><a href="tekcontact.php" class="tooltip1">Contact<span class="hidden-phone tt">Contact-Us</span><span class="hidden-phone tt">Get Started</span></a></li>
          </ul>
        </div>
  	</div><!-- end of header row -->

  <!-- *************** Main Content Area ******************** -->
  <!-- splash image -->
  <!-- Content -->  <!-- ***************** End of Main Content Area ************************** -->
  <div class="row-fluid">
        <div class="text_content span10 offset1">
          <!--Text Content-->
<h1>Clients</h1>

<h4>Testimonial 1</h4>
  <p>Excellent trainer, obviously an expert in his field; practical sessions really helped. Very engaging presentation with lots of opportunity to participate.</p>
  <h5>Manikandan S, HR Manager – IT Software Company, Chennai</h5>
<p class="sep"></p>
<h4>Testimonial 2</h4>
  <p>I liked the fact that it was practical and examples I could relate to were used.  It was also full of exercises. Everything I wanted was actually covered in details.
  </p>
  <h5>Nitesh M, Program Manager – Pharmaceutical Company, Bangalore
Trainers Testimonial</h5>
<p class="sep"></p>
<p id="frmm">If you are looking for any Corporate Training for your organisation, please write to us on your requirement.</p>
<div class="row-fluid tcc">  <!--action="http://projects.razorbee.com/arrisventures/ctraining.php" target="_blank" /arristechn/ctraining.php-->
  <form id="form"  name="form" method="POST" class="tcform" >
    <h2 id="form_title" style="color:white;background-color: #01babd;margin-bottom:50px;">LOOKING FOR CORPORATE TRAINING?</h2>
  	<div class="form-group">
  		<div class="col-sm-6">
  			<input type="text" class="form-control" maxlength="50" id="namef" name="namef" pattern="^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]$" placeholder="*Enter First Name" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  		<div class="col-sm-6 get_hire">
  			<input type="text" class="form-control" maxlength="50" id="namel" name="namel" pattern="^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]$" placeholder="Enter Last Name" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-6">
  			<input  class="form-control" maxlength="20" id="mobile" name="mobile" pattern="^[789]\d{9}$" placeholder="*Enter Mobile Number" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  		<div class="col-sm-6 get_hire">
  			<input type="email" class="form-control" id="email" maxlength="50" name="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" placeholder="*Enter Email Id" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-6">
  			<input type="text" class="form-control" maxlength="50" id="compname" name="compname"  pattern="^[a-zA-Z0-9][-./&+\w\s]*$" placeholder="*Enter Company Name" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  		<div class="col-sm-6 get_hire">
  			<input style="" type="text" class="form-control" maxlength="100" id="compurl" name="compurl" pattern="^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$"  placeholder="*Enter Company URL" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-6">
  			<input type="text" class="form-control" maxlength="20" id="cloc" name="cloc" pattern="^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" placeholder="*Enter Company Location" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  		<div class="col-sm-6 get_hire">
  			<input type="text" class="form-control" maxlength="50" id="desig" name="desig" pattern="^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$" placeholder="*Enter Deisignation" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-6">
  			<input type="text" class="form-control" maxlength="50" id="hire" name="hire"  placeholder="Enter Industry Serviced" onkeyup="send_mail2_contact(this.id);" required/>
  		</div>
  		<div class="col-sm-6 get_hire">
        <select class="form-control" name="title" id="ct" onkeyup="send_mail2_contact(this.id);" required>
<option selected="selected" disabled="disabled" value="">Which of the Corporate Trainings you are looking?</option>
<option value="Technology Training ">Technology Training </option>
<option value="Project Management Training">Project Management Training</option>
<option value="Quality Training">Quality Training</option>
<option value="Sales & Leadership Training ">Sales & Leadership Training  </option>
<option value="Behavioural & Soft Skills Training ">Behavioural & Soft Skills Training </option>
<option value="Campus to Corporate Training">Campus to Corporate Training</option>
<option value="Sales & Leadership Training ">Workshops & Seminars</option>
<option value="Behavioural & Soft Skills Training ">Coaching & Mentoring</option>
<option value="Campus to Corporate Training">Other Training</option>
</select>
  		</div>
  	</div>

  	<div class="form-group">
  		<div class="col-sm-12 tct">
  			<textarea style="width:100%;" rows="6" cols="44" id="com" name="com"  maxlength="1000"  placeholder="*Enter Comment..." onkeyup="send_mail2_contact(this.id);" required/></textarea>
  		</div>
  	</div>


  	<div style="text-align:center;">
  		<div class="col-sm-offset-0 col-sm-12">
  			<button type="submit" name="submit3" id="submit_button" class="btn btn-info submit_button" onclick="send_mail2_contact()">Submit</button>
  			<button type="reset" value="Reset" onclick="$('#changeclas').hide();" class="btn btn-warning">Reset</button>
  		</div>
  	</div>

  </form>
</div>
        </div>
    </div>
</div> 
  <!-- Clients -->
  <p class="sep2" style="border:3px solid #00b8bb;"></p>
  <ul id="flexiselDemo3">
        <li><a href="http://www.3i-infotech.com" target="_blank"><img src="img/clients/separate page/infotech.jpg" /></a></li>
        <li><a href="http://www.accionlabs.com" target="_blank"><img src="img/clients/separate page/accion.jpg"/></a></li>
          <li><a href="http://www.arisglobal.com" target="_blank"><img src="img/clients/separate page/AG.jpg" /></a></li>
        <li><a href="http://www.adp.in" target="_blank"><img src="img/clients/separate page/adp.png" /></a></li>
          <li><a href="http://www.artechinfo.in" target="_blank"><img src="img/clients/separate page/artech.jpg"/></a></li>
          <li><a href="http://www.bensoncompany.com" target="_blank"><img src="img/clients/separate page/benson.jpg"/></a></li>
          <li><a href="http://www.boschindia.com" target="_blank"><img src="img/clients/separate page/bosch.jpg" /></a></li>
          <li><a href="http://www.uberdiagnostics.com" target="_blank"><img src="img/clients/separate page/cardio.jpg" /></a></li>
          <li><a href="http://www.cheersin.com" target="_blank"><img src="img/clients/separate page/cheers.jpg" /></a></li>
          <li><a href="http://www.eclinicalsol.com" target="_blank"><img src="img/clients/separate page/clinic.jpg"/></a></li>
          <li><a href="http://www.depusa.com" target="_blank"><img src="img/clients/separate page/dep.jpg" /></a></li>
          <li><a href="http://www.etherglobal.com" target="_blank"><img src="img/clients/separate page/ether.jpg" /></a></li>
          <li><a href="http://www.gmrgroup.in" target="_blank"><img src="img/clients/separate page/GMR.jpg" /></a></li>
          <li><a href="http://www.greytip.com" target="_blank"><img src="img/clients/separate page/greytip.jpg"/></a></li>
          <li><a href="http://www.bizprout.com" target="_blank"><img src="img/clients/separate page/Bizsprout.jpg" /></a></li>
          <li><a href="http://www.hombalegroup.com" target="_blank"><img src="img/clients/separate page/hombale.jpg"/></a></li>
          <li><a href="http://www.campussutra.com" target="_blank"><img src="img/clients/separate page/CampusSutra.jpg"/></a></li>
          <li><a href="http://www.ibm.com" target="_blank"><img src="img/clients/separate page/ibm.jpg"/></a></li>
          <li><a href="http://www.infogain.com" target="_blank"><img src="img/clients/separate page/infogain.jpg"/></a></li>
          <li><a href="http://www.itcinfotech.com" target="_blank"><img src="img/clients/separate page/itc.jpg"/></a></li>
          <li><a href="http://www.ivanti.com" target="_blank"><img src="img/clients/separate page/ivanti.jpg"/></a></li>
          <li><a href="http://www.jupitergroup.co.in" target="_blank"><img src="img/clients/separate page/jupiter.jpg"/></a></li>
          <li><a href="http://www.Keyfalcon" target="_blank"><img src="img/clients/separate page/keyfalcon.jpg"/></a></li>
          <li><a href="http://www.lumenatix.com" target="_blank"><img src="img/clients/separate page/lumenatrix.jpg"/></a></li>                    <li><a href="http://www.targetgroup.com" target="_blank"><img src="img/clients/separate page/targetgroup.jpg"/></a></li>
          <li><a href="http://www.mahindrafinance.com" target="_blank"><img src="img/clients/separate page/mahindra.jpg"/></a></li>
          <li><a href="http://www.maintec.com" target="_blank"><img src="img/clients/separate page/maintec.jpg"/></a></li>
          <li><a href="http://www.manthan.com" target="_blank"><img src="img/clients/separate page/manthan.jpg"/></a></li>
          <li><a href="http://www.mavenir.com" target="_blank"><img src="img/clients/separate page/mave.jpg"/></a></li>
          <li><a href="http://www.novonordisk.co.in" target="_blank"><img src="img/clients/separate page/novo.jpg"/></a></li>
          <li><a href="http://www.poorvihousing.com" target="_blank"><img src="img/clients/separate page/poorvi.jpg"/></a></li>
          <li><a href="http://www.pwc.in" target="_blank"><img src="img/clients/separate page/pwc.jpg"/></a></li>
          <li><a href="http://www.segemai.com" target="_blank"><img src="img/clients/separate page/sege.jpg"/></a></li>
          <li><a href="http://www.softtek.com" target="_blank"><img src="img/clients/separate page/soft.jpg"/></a></li>
          <li><a href="http://www.sparcstudio.in/" target="_blank"><img src="img/clients/separate page/sparcStudio.jpg"/></a></li>
          <li><a href="http://www.transwaters.com" target="_blank"><img src="img/clients/separate page/trans.jpg"/></a></li>
          <li><a href="http://www.zaggle.in" target="_blank"><img src="img/clients/separate page/zaggle.jpg"/></a></li>
            <li><a href="http://www.incaastudio.com" target="_blank"><img src="img/clients/separate page/icaa.jpg"/></a></li>

    </ul>
  <!--<div class="row-fluid" id="clients_strip">
  		<div class="span1 hidden-phone"></div>
        <div class="span10">
            <div id='carousel_container' class="carousel slide" data-ride="carousel"  data-pause="hover">
              <div id='carousel_inner'>
                <ul id='carousel_ul'>
                    <li><a href="http://www.3i-infotech.com" target="_blank"><img src="img/clients/separate page/infotech.jpg" /></a></li>
                	<li><a href="http://www.accionlabs.com" target="_blank"><img src="img/clients/separate page/accion.jpg"/></a></li>
                    <li><a href="http://www.arisglobal.com" target="_blank"><img src="img/clients/separate page/AG.jpg" /></a></li>
                  <li><a href="http://www.adp.in" target="_blank"><img src="img/clients/separate page/adp.png" /></a></li>
                    <li><a href="http://www.artechinfo.in" target="_blank"><img src="img/clients/separate page/artech.jpg"/></a></li>
                    <li><a href="http://www.bensoncompany.com" target="_blank"><img src="img/clients/separate page/benson.jpg"/></a></li>
                    <li><a href="http://www.boschindia.com" target="_blank"><img src="img/clients/separate page/bosch.jpg" /></a></li>
                    <li><a href="http://www.uberdiagnostics.com" target="_blank"><img src="img/clients/separate page/cardio.jpg" /></a></li>
                    <li><a href="http://www.cheersin.com" target="_blank"><img src="img/clients/separate page/cheers.jpg" /></a></li>
                    <li><a href="http://www.eclinicalsol.com" target="_blank"><img src="img/clients/separate page/clinic.jpg"/></a></li>
                    <li><a href="http://www.depusa.com" target="_blank"><img src="img/clients/separate page/dep.jpg" /></a></li>
                    <li><a href="http://www.etherglobal.com" target="_blank"><img src="img/clients/separate page/ether.jpg" /></a></li>
                    <li><a href="http://www.gmrgroup.in" target="_blank"><img src="img/clients/separate page/GMR.jpg" /></a></li>
                    <li><a href="http://www.greytip.com" target="_blank"><img src="img/clients/separate page/greytip.jpg"/></a></li>
                    <li><a href="http://www.bizprout.com" target="_blank"><img src="img/clients/separate page/Bizsprout.jpg" /></a></li>
                    <li><a href="http://www.hombalegroup.com" target="_blank"><img src="img/clients/separate page/hombale.jpg"/></a></li>
                    <li><a href="http://www.campussutra.com" target="_blank"><img src="img/clients/separate page/CampusSutra.jpg"/></a></li>
                    <li><a href="http://www.ibm.com" target="_blank"><img src="img/clients/separate page/ibm.jpg"/></a></li>
                    <li><a href="http://www.infogain.com" target="_blank"><img src="img/clients/separate page/infogain.jpg"/></a></li>
                    <li><a href="http://www.itcinfotech.com" target="_blank"><img src="img/clients/separate page/itc.jpg"/></a></li>
                    <li><a href="http://www.ivanti.com" target="_blank"><img src="img/clients/separate page/ivanti.jpg"/></a></li>
                    <li><a href="http://www.jupitergroup.co.in" target="_blank"><img src="img/clients/separate page/jupiter.jpg"/></a></li>
                    <li><a href="http://www.Keyfalcon" target="_blank"><img src="img/clients/separate page/keyfalcon.jpg"/></a></li>
                    <li><a href="http://www.lumenatix.com" target="_blank"><img src="img/clients/separate page/lumenatrix.jpg"/></a></li>                    <li><a href="http://www.targetgroup.com" target="_blank"><img src="img/clients/separate page/targetgroup.jpg"/></a></li>
                    <li><a href="http://www.mahindrafinance.com" target="_blank"><img src="img/clients/separate page/mahindra.jpg"/></a></li>
                    <li><a href="http://www.maintec.com" target="_blank"><img src="img/clients/separate page/maintec.jpg"/></a></li>
                    <li><a href="http://www.manthan.com" target="_blank"><img src="img/clients/separate page/manthan.jpg"/></a></li>
                    <li><a href="http://www.mavenir.com" target="_blank"><img src="img/clients/separate page/mave.jpg"/></a></li>
                    <li><a href="http://www.novonordisk.co.in" target="_blank"><img src="img/clients/separate page/novo.jpg"/></a></li>
                    <li><a href="http://www.poorvihousing.com" target="_blank"><img src="img/clients/separate page/poorvi.jpg"/></a></li>
                    <li><a href="http://www.pwc.in" target="_blank"><img src="img/clients/separate page/pwc.jpg"/></a></li>
                    <li><a href="http://www.segemai.com" target="_blank"><img src="img/clients/separate page/sege.jpg"/></a></li>
                    <li><a href="http://www.softtek.com" target="_blank"><img src="img/clients/separate page/soft.jpg"/></a></li>
                    <li><a href="http://www.sparcstudio.in/" target="_blank"><img src="img/clients/separate page/sparcStudio.jpg"/></a></li>
                    <li><a href="http://www.transwaters.com" target="_blank"><img src="img/clients/separate page/trans.jpg"/></a></li>
                    <li><a href="http://www.zaggle.in" target="_blank"><img src="img/clients/separate page/zaggle.jpg"/></a></li>
                      <li><a href="http://www.incaastudio.com" target="_blank"><img src="img/clients/separate page/icaa.jpg"/></a></li>

                </ul>
              </div>
              </div>
    </div>
  </div>--><!-- end of Clients Strip -->

	<!-- Bottom Navigation -->
    <div class="row-fluid bn" id="bottom_nav">
        <div class="span1 offset1">
        	<a href="index.html"><span class="bottom_nav_bold">Home</span></a>
        </div>
        <div class="span1">
        	<a href="the_group.html"><span class="bottom_nav_bold">The Group</a></span>
            <ul>
            	<a href="the_group.html#history"><li>History</li></a>
                <a href="the_group.html#leadership"><li>Leadership</li></a>
                <a href="the_group.html#initiatives"><li>Initiatives</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="advantage.html"><span class="bottom_nav_bold">Advantage</span></a>
        	<ul>
            	<a href="advantage.html#philosophy"><li>Philosophy</li></a>
            	<a href="advantage.html#vision"><li>Vision</li></a>
            	<a href="advantage.html#mission"><li>Mission</li></a>
            	<a href="advantage.html#innovation"><li>Innovation</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="ventures.html"><span class="bottom_nav_bold">Ventures</span></a>
            <ul>
            	<a href="ventures.html#technologies"><li>ArrisTechnologies</li></a>
                <a href="ventures.html#training"><li>ArrisTrraining</li></a>
                <a href="ventures.html#evaluation"><li>ArrisEvaluation</li></a>
                <a href="ventures.html#system"><li>ArrisSystems</li></a>
                <a href="ventures.html#consulting"><li>ArrisConsulting</li></a>
                  <a href="ventures.html#polymers"><li>ArrisPolymers</li></a>
                  <a href="ventures.html#welness"><li>ArrisWellness</li></a>
                  <a href="ventures.html#foundation"><li>ArrisFooundation</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="csr.html"><span class="bottom_nav_bold">CSR</span></a>
        </div>
        <div class="span1">
        	<a href="clients.html"><span class="bottom_nav_bold">Clients</span></a>
        	<ul>
            	<a href="clients.html#partialList"><li>Partial List</li></a>
            	<a href="clients.html#testimonials"><li>Testimonials</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="careers.php"><span class="bottom_nav_bold">Careers</span></a>
        </div>
        <div class="span1">
        	<a href="contact.php"><span class="bottom_nav_bold">Contact</span></a>
        </div>

        <!-- Social Icons -->
        <div class="span2 offset1" id="social_icons">
        <ul>
        	<li class="bottom_nav_bold" style="color:#000;">Social Network</li>
            <li><a href="https://www.linkedin.com/in/arvind-jain-67553a4/" target="_blank"><img class='social_icon' src="img/social_icons/linked_in.png" alt="LinkedIn" /> Linked In</a></li>
            <!--<img class='social_icon' src="img/social_icons/google.png" alt="Google" /> Google-->
            <li><a href="https://www.facebook.com/ArrisTech/" target="_blank"><img class='social_icon' src="img/social_icons/facebook.png" alt="Facebook" /> Facebook</a></li>
        	<li><a href="https://twitter.com/ArrisTech" target="_blank">
            <img class='social_icon' src="img/social_icons/twitter.png" alt="Twitter" /> Twitter</a></li>
        </ul>
        </div>
  	</div><!-- End of Bottom Navigation -->

    <!-- Footer -->
    <div class="row-fluid" id="footer">
    	<div class="span3 offset1" id="copyright" >
        	<!-- copyright -->
            All rights reserved. Copyright &copy; 2018 ArrisVentures.
        </div>
        <div class="span3 offset1" id="iqstudios">
        	Site built by <a href="http://www.razorbee.com" target="_blank">Razorbee Online Solutions</a>
        </div>
        <div class="span1 offset1">
        	<!-- Disclaimer -->
            <a href="disclaimer.html">Disclaimer</a>
        </div>
        <div class="span1">
        	<!-- Privacy Policy -->
            <a href="privacy.html">Privacy Policy</a>
        </div>

    </div><!-- End of Footer -->

    <script type="text/javascript">
      $(document).ready(function(){

          $("#flexiselDemo3").flexisel({
              visibleItems: 3,
              itemsToScroll: 1,
              animationSpeed: 400,
              infinite: true,
              autoPlay: {
                  enable: true,
                  interval: 2000,
                  pauseOnHover: true
              }
          });

      });
      </script>
      <script type="text/javascript" src="js/nav.js"></script>
      <script type="text/javascript" src="js/validations.js"></script>
      <script type="text/javascript" src="js/actions.js"></script>
      <script type="text/javascript" src="js/jquery.flexisel.js"></script>
</body>
</html>
