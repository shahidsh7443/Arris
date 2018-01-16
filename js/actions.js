function send_mail1_career()
{
  var fname=$("#name").val();
  var flen=fname.length;
    var mob=$("#mobile").val();
    var moblen=mob.length;
    var email=$("#email").val();
    var cloc=$("#location").val();
    var ct=$("#cat").val();
    var pr=$("#msg").val();
    var atr=$("#file").val();
  var freg = /^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var regg3=/^[7-9]\d{9}$/;
  var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/^[a-zA-Z0-9][-./&+\w\s]*$/;
  var cureg=/^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$/;
  var reg2=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var desreg=/^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$/;
  if(fname=="")
  {
    alert("Please enter your  name");
  }
  else if(flen<3) {
  alert("Enter more than 3 Characters");
  }
  else {
  if(!freg.test(fname)) {
    alert("Not a valid  name");
    $("#fname").prop('autofocus', true);
  }
  }
  if(mob=="")
  {
    alert("Please enter contact number");
  }
  else if(moblen<10)
  {
    alert("Please enter a valid  contact number");
  }
  else {
  if(!regg3.test(mob)) {
    alert("Not a valid contact number");
    res1=0;
  }
  }
  if(email=="")
  {
    alert("Please enter your e-mail id");
  }
  else {
  if(!reg4.test(email)) {
    alert("Not a valid e-mail id");
    res1=0;
  }
  }
  if(cloc=="")
  {
    alert("Please enter Location");
  }
  else {
  if(!reg2.test(cloc)) {
    alert("Not a valid location");
    res1=0;
  }
  }
  if(ct==null)
  {
    alert("Please select business that you are looking for");
  }
  if(pr=="" && atr=="")
  {
    $("#msg").prop('required', true);
    $("#file").prop('required', true)
    alert("Please paste your Resume or Attach your Resume");
  }
  if(pr=="" && atr!="")
  {
    $("#msg").prop('required', false);
  }
  else {
    $("#file").prop('required', false)
  }
}
function send_mail3_contact()
{
  var fname=$("#name").val();
  var flen=fname.length;
    var mob=$("#mobile").val();
    var moblen=mob.length;
    var email=$("#email").val();
    var cname=$("#compname").val();
    var curl=$("#compurl").val();
    var cloc=$("#cloc").val();
    var des=$("#desig").val();
    var ins=$("#hire").val();
    var com=$("#com").val();
  var freg = /^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var regg3=/^[7-9]\d{9}$/;
  var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/^[a-zA-Z0-9][-./&+\w\s]*$/;
  var cureg=/^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$/;
  var reg2=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var desreg=/^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$/;
  if(fname=="")
  {
    alert("Please enter your First name");
  }
  else if(flen<3) {
  alert("Enter more than 3 Characters");
  }
  else {
  if(!freg.test(fname)) {
    alert("Not a valid First name");
    $("#fname").prop('autofocus', true);
  }
  }
  if(des=="")
  {
    alert("Please enter your designation");
  }
  else {
  if(!desreg.test(des)) {
    alert("Not a valid designation");
    res1=0;
  }
  }
  if(mob=="")
  {
    alert("Please enter contact number");
  }
  else if(moblen<10)
  {
    alert("Please enter a valid  contact number");
  }
  else {
  if(!regg3.test(mob)) {
    alert("Not a valid contact number");
    res1=0;
  }
  }
  if(email=="")
  {
    alert("Please enter your e-mail id");
  }
  else {
  if(!reg4.test(email)) {
    alert("Not a valid e-mail id");
    res1=0;
  }
  }
  if(cname=="")
  {
    alert("Please enter your Company name");
  }
  else {
  if(!creg.test(cname)) {
    alert("Not a valid Company name");
    $("#cname").prop('autofocus', true);
  }
  }
  if(curl=="")
  {
    alert("Please enter your Company Url");
  }
  else {
  if(!cureg.test(curl)) {
    alert("Not a valid Company Url");
    $("#curl").prop('autofocus', true);
  }
  }
  if(cloc=="")
  {
    alert("Please enter Location");
  }
  else {
  if(!reg2.test(cloc)) {
    alert("Not a valid location");
    res1=0;
  }
  }

  if(ins=="")
  {
    alert("Please enter industry serviced");
  }
  else {
  if(!desreg.test(ins)) {
    alert("Not a valid industry serviced");
    res1=0;
  }
  }
  if(com=="")
  {
    alert("Please enter comments");
  }
}
function send_mail2_contact()
{
  var fname=$("#namef").val();
  var flen=fname.length;
  var lname=$("#namel").val();
  var llen=lname.length;
  var mob=$("#mobile").val();
  var moblen=mob.length;
  var email=$("#email").val();
  var cname=$("#compname").val();
  var curl=$("#compurl").val();
  var cloc=$("#cloc").val();
  var des=$("#desig").val();
  var ins=$("#hire").val();
  var ct=$("#ct").val();
  var com=$("#com").val();
  var freg = /^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]*$/;
  var lreg = /^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]*$/;
  var regg3=/^[7-9]\d{9}$/;
  var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/^[a-zA-Z0-9][-./&+\w\s]*$/;
  var cureg=/^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$/;
  var reg2=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var desreg=/^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$/;
  if(fname=="")
  {
    alert("Please enter your First name");
  }
  else if(flen<3) {
    alert("Enter more than 3 Characters");
  }
  else {
    if(!freg.test(fname)) {
      alert("Not a valid First name");
      $("#fname").prop('autofocus', true);
    }
  }
  if(lname=="")
  {
    alert("Please enter your Last name");
  }
  else if(llen<3) {
    alert("Enter more than 3 Characters");
  }
  else {
    if(!lreg.test(lname)) {
      alert("Not a valid Last name");
      $("#lname").prop("autofocus");
    }
  }
  if(mob=="")
  {
    alert("Please enter contact number");
  }
  else if(moblen<10)
  {
    alert("Please enter a valid  contact number");
  }
  else {
    if(!regg3.test(mob)) {
      alert("Not a valid contact number");
      res1=0;
    }
  }
  if(email=="")
  {
    alert("Please enter your e-mail id");
  }
  else {
    if(!reg4.test(email)) {
      alert("Not a valid e-mail id");
      res1=0;
    }
  }
  if(cname=="")
  {
    alert("Please enter your Company name");
  }
  else {
    if(!creg.test(cname)) {
      alert("Not a valid Company name");
      $("#cname").prop('autofocus', true);
    }
  }
  if(curl=="")
  {
    alert("Please enter your Company Url");
  }
  else {
    if(!cureg.test(curl)) {
      alert("Not a valid Company Url");
      $("#curl").prop('autofocus', true);
    }
  }
  if(cloc=="")
  {
    alert("Please enter Location");
  }
  else {
    if(!reg2.test(cloc)) {
      alert("Not a valid location");
      res1=0;
    }
  }
  if(des=="")
  {
    alert("Please enter your designation");
  }
  else {
    if(!desreg.test(des)) {
      alert("Not a valid designation");
      res1=0;
    }
  }
  if(ins=="")
  {
    alert("Please enter industry serviced");
  }
  else {
    if(!desreg.test(ins)) {
      alert("Not a valid industry serviced");
      res1=0;
    }
  }
  if(ct==null)
  {
    alert("Please select trainings that you are looking for");
  }
  if(com=="")
  {
    alert("Please enter comments");
  }
}

function send_mail1_contact()
 {
var inputVal = $("#name").val();
var loc=$("#location").val();
var loclen=loc.length;
 var len=inputVal.length;
 var mob=$("#mobile").val();
 var email=$("#email").val();
 var msg=$("#msg").val();
 var resume=$("#resume").val();
 var pasteresume=$("#pasteresume").val();
 var profile=$("#profile").val();
 var pasteprofile=$("#pasteprofile").val();
 var moblen=mob.length;
var numericReg = /^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
var reg2=/^[#]{1}[a-zA-Z0-9]+[\,][a-zA-Z0-9\s]|[a-zA-Z0-9\s,'-]*$/;
var regg3=/^[7-9]\d{9}$/;
var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(inputVal=="")
{
  alert("Please enter your name");
}
else if(len<3) {
alert("Enter more than 3 Characters");
}
else {
if(!numericReg.test(inputVal)) {
  alert("Not a valid name");
  $("#name").prop('autofocus', true);
  res1=0;
}
}
if(loc=="")
{
  alert("Please enter Location");
}
else {
if(!reg2.test(loc)) {
  alert("Not a valid location");
  res1=0;
}
}
if(mob=="")
{
  alert("Please enter contact number");
}
else if(moblen<10)
{
  alert("Please enter a valid  contact number");
}
else {
if(!regg3.test(mob)) {
  alert("Not a valid contact number");
  res1=0;
}
}
if(email=="")
{
  alert("Please enter your e-mail id");
}
else {
if(!reg4.test(email)) {
  alert("Not a valid e-mail id");
  res1=0;
}
}
if(msg=="")
{
  alert("Please enter Message");
}
if(pasteprofile=="" && profile=="")
{
  $("#pasteprofile").prop('required', true);
  $("#profile").prop('required', true)
  alert("Please paste your profile or Attach your Profile");
}
if(pasteprofile=="" && profile!="")
{
  $("#pasteprofile").prop('required', false);
}
else {
  $("#profile").prop('required', false)
}

if(pasteresume=="" && resume=="")
{
  $("#pasteresume").prop('required', true);
  $("#resume").prop('required', true)
  alert("Please aste your resume or attach your resume");
}
if(pasteresume=="" && resume!="")
{
  $("#pasteresume").prop('required', false);
}
else {
  $("#resume").prop('required', false)
}

}

function send_mail_contact()
{
     var name=$("#name").val();
     var address=$("#location").val();
     var phone=$("#mobile").val();
     var email=$("#email").val();
     var msg=$("#msg").val();
     var len=name.length;
	 var len2=phone.length;
	 ///---------------validate name---------------------------
	 var checkOK1 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
     var checkStr = name;
     var allValid1 = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK1.length;  j++)
     if (ch == checkOK1.charAt(j))
     break;
     if (j == checkOK1.length)
     {
     allValid1 = false;
     break;
     }
     }
     //-----------------------------------end---------------------------
     //--------------------------mobile validation----------------------
     var checkOK = "0123456789";
     var checkStr = phone;
     var allValid = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK.length;  j++)
     if (ch == checkOK.charAt(j))
     break;
     if (j == checkOK.length)
     {
     allValid = false;
     break;
     }
     }
	 //--------------------------end------------------------
	 //--------------------email validation--------------
	 var checkEmail = "@.";
        var checkStr = email;
        var EmailValid = false;
        var EmailAt = false;
        var EmailPeriod = false;
        for (i = 0;  i < checkStr.length;  i++)
        {
        ch = checkStr.charAt(i);
        for (j = 0;  j < checkEmail.length;  j++)
        {
        if (ch == checkEmail.charAt(j) && ch == "@")
        EmailAt = true;
        if (ch == checkEmail.charAt(j) && ch == ".")
        EmailPeriod = true;
	    if (EmailAt && EmailPeriod)
		break;
	    if (j == checkEmail.length)
		break;
	    }
       if (EmailAt && EmailPeriod)
       {
		EmailValid = true
		break;
	  }
      }
      //------------------end--------------------------

	  if (name=="")
     {
     alert("Enter Name");
     $('#name').focus();
     //return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");
   	 $('#name').focus();
   	 //return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     //return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     //return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
     //return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
    // return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits Long");
   	 $('#mobile').focus();
   	 //return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	// return false;
     }
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     //return false;
    }
    else if(msg=="")
     {
   	 alert("Please Enter Message");
   	 $('#msg').focus();
   	 //return false;
     }
     else{

$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"send_mail_contact",name:name,address:address,phone:phone,email:email,msg:msg},
		success: function ( res )
		{
		$('#success_msg').html( res );
		$("#name").val('');
        $("#location").val('');
        $("#mobile").val('');
        $("#email").val('');
        $("#msg").val('');
		}
	});
}}
function send_mail_career()
{
	 var name=$("#name").val();
     var address=$("#location").val();
     var phone=$("#mobile").val();
     var email=$("#email").val();
     var msg=$("#msg").val();
     //var cat=$("input[name='cat']:checked").val();
     var cat=$('select[name=cat] option:selected').val();
     //var cat = document.myform.cat.value;
     var len=name.length;
	 var len2=phone.length;
	 ///---------------validate name---------------------------
	 var checkOK1 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
     var checkStr = name;
     var allValid1 = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK1.length;  j++)
     if (ch == checkOK1.charAt(j))
     break;
     if (j == checkOK1.length)
     {
     allValid1 = false;
     break;
     }
     }
     //-----------------------------------end---------------------------
     //--------------------------mobile validation----------------------
     var checkOK = "0123456789";
     var checkStr = phone;
     var allValid = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK.length;  j++)
     if (ch == checkOK.charAt(j))
     break;
     if (j == checkOK.length)
     {
     allValid = false;
     break;
     }
     }
	 //--------------------------end------------------------
	 //--------------------email validation--------------
	 var checkEmail = "@.";
        var checkStr = email;
        var EmailValid = false;
        var EmailAt = false;
        var EmailPeriod = false;
        for (i = 0;  i < checkStr.length;  i++)
        {
        ch = checkStr.charAt(i);
        for (j = 0;  j < checkEmail.length;  j++)
        {
        if (ch == checkEmail.charAt(j) && ch == "@")
        EmailAt = true;
        if (ch == checkEmail.charAt(j) && ch == ".")
        EmailPeriod = true;
	    if (EmailAt && EmailPeriod)
		break;
	    if (j == checkEmail.length)
		break;
	    }
       if (EmailAt && EmailPeriod)
       {
		EmailValid = true
		break;
	  }
      }
      //------------------end--------------------------

	  if (name=="")
     {
     alert("Enter Name");
     $('#name').focus();
    // return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");
   	 $('#name').focus();
   	 //return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     //return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     //return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
    // return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
    // return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits long");
   	 $('#mobile').focus();
   	 //return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	// return false;
     }
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     //return false;
    }
    /*else if ($("input[name='cat']:checked").length == 0)
     {
     alert("Please Select One Category");
     //return false;
     }*/
     else if(cat=="0")
    {
    alert("Please Select One Category");
    $('#select_category').focus();
    return false;
    }
    else if(msg=="")
     {
   	 alert("Please Paste Your Resume Here");
   	 $('#msg').focus();
   	// return false;
     }
     else
     {
     	$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"send_mail_career",name:name,address:address,phone:phone,email:email,msg:msg,cat:cat},
		success: function ( res )
		{
		$('#success').html( res );
		$("#name").val('');
        $("#location").val('');
       $('#select_category option[value=0]').prop('selected',true);
        $("#mobile").val('');
        $("#email").val('');
        $("#msg").val('');
		}
	});
     }
     }
     function upload_resume()
     {
     	var file=$('#file').attr('value');
     	var cat=$('select[name=cat] option:selected').val();
     	$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"upload_resume",file:file,cat:cat},
		success: function ( res )
		{
		$('#success').html( res );
		}
	});
     }
