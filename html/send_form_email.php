<?php
 
if(isset($_POST['email'])) {
 
     
 
    // To Whom??
 
    $email_to = "info@TheGallery-Houston.com";
 
    $email_subject = "Form Information";
     
 
     
 
    function died($error) {
 
        // Errors!
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists, if it's empty, it'll freak out.
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['date']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['number']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $date = $_POST['date']; // not required
 
    $email = $_POST['email']; // required
 
    $number = $_POST['number']; // not required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
	
 
    $string2_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The Message you entered does not appear to be valid. Please include some information about your event.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
  
  if(!preg_match($string2_exp,$message)) {
	  
	  $error_message .= 'It seems that you have entered characters we do not accept, please remove anything that would be questionable';
	  
  }
 
    $email_message = "This is what your sender had to say, Paula!\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Date: ".clean_string($date)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Telephone: ".clean_string($number)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
 //HTML DOC:
  ?>
  <!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Connect</title>
<link href="../css/gallery.css" rel="stylesheet" type="text/css">
<style>
#success{
	width: 450px;
	height: 200px;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 20px;
	padding-top: 50px;
	border: 2px solid #FFFFFF;
	text-align:center;
}
#success h2{
	margin-top:2%;
	color: #ffffff;
	font-style: italic;
	font-family: serif;
}
#success h2 a {
	color: #625e5e;
	font-style: italic;
	font-family: serif;
	text-decoration:underline
}
@media screen and (max-width: 58em)  {
#success {
	width:60%;
	min-width:250px;
}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/alex-brush:n4:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
<div id="logo"><img src="../images/logo.jpg" width="1650" height="300" alt=""/></div>
<nav>
<ul>
<div class="outline"><li><a href="http://thegallery-houston.com">about</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="prices.html">pricing</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="ceremony-&-reception.html">details</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="images.html">images</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="http://thegallery-houston.com/calendar.html">calendar</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="connect.html">connect</a><hr></li></div>
</ul>
</nav>
<div id="moretext">
<div id="talk">
<h2>Let's Connect.</h2>
</div>
  <div id="success">
  <?php  
  //Content Displayed!
  if (@mail) {
		echo "<h2>Thank you for your inquiry! We will be in contact soon!</h2>"; }
	else {
        echo "<h2>Your Message has not been sent.<br> Please click send <a href='mailto:info@theGallery-houston.com?Subject=Failed%20Contact%20Form'>here</a> your inquiry to Info@TheGallery-Houston.com</h2>";
		}
    
}
 
?>
</div>
      </div>
<div class="wrapper2">
<div class="social">
<div class="facebook"><a href="https://www.facebook.com/pages/The-Gallery-Houston-Wedding-Event-Venue/147620825258579" target="_blank">facebook</a>
</div>
<div class="instagram"><a href="http://instagram.com/thegalleryhouston" target="_blank">instagram</a>
</div>
<div class="wedwire"><a href="http://www.weddingwire.com/biz/the-gallery-houston/2c2703fd8d9286a6.html" target="_blank">wedding wire</a>
</div>
</div>
<div class="outside">
<div class="info"><p>6303 Beverly Hill St. Houston, TX 77057</p><p>713.255.2889</p>
</div>
</div>
<div id="copy">
<p>Website Designed by <a href="http://littlehouse-design.com" target="_blank">LittleHouse-Design.com</a></p>
<span><p>Copyright &copy; The Gallery 2016</p></span>
</div>
</div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2466391-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>