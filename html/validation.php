<?php
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$number ="";	//Subject of mail
$date ="";	//Date Event
$message ="";	//Sender's Message 

$nameERR ="";			
$emailERR ="";
$numberERR ="";
$messageERR ="";
$successMessage ="";

//On submitting form below function will execute

if(isset($_POST['submit']))
  {
  // checking null values in message
    if (empty($_POST["name"])){
        $nameERR = "Name is required";
      } 
   else {
       $name = test_input($_POST["name"]);
       // check name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameERR = "Only letters and white space allowed"; 
         }
     }
 // checking null values in message  
   if (empty($_POST["email"])) {
       $emailERR = "Email is required";
      } 
   else {
      $email = test_input($_POST["email"]);
      }
 // checking null values in message    
   if (empty($_POST["number"])) {
      $numberERR = "Phone Number is required";
     }
   else { 
	  $number = test_input($_POST["number"]);  
	 } 
	if (empty($_POST["date"])) {
      $dateERR = "Event Date is required";
     }
   else { 
	  $date = test_input($_POST["date"]);  
	 } 
// checking null values in message
   if (empty($_POST["message"])) {
      $messageError = "Message is required";
     } 
   else { 
	  $message = test_input($_POST["message"]);  
	 } 
  // checking null values in all fields  
if( !($name=='') && !($email=='') && !($number=='') &&!($date=='') &&!($message=='') )

      $to = "info@thegallery-houston.com";
    $subject = "Feedback form";

    $headers = "From: $email_from" . "\r\n" . "Reply-To: $email" . "\r\n" ;
    
    $message = 'Name: ' . $name . "\n" . 'Email: ' .  $email . "\n" . 'Phone Number: ' . $number . "\n" . 'Date: ' . $date . "\n" . $guests . "\n" . 'Message: ' . "\n" . $message;

    $m = mail ($to, $subject, $message, $headers);
    
    if ($m) {
        echo "Your Message has been sent! Loading...";
		echo "<meta http-equiv=\"refresh\" content=\"5;url=http://thegallery-houston.com/html/connect.html\"/>";
    } else {
        echo "Your Message has not been sent";
    }
}

?>