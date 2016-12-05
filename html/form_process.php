<?php
    $email_from = "info@thegallery-houston.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $message = $_POST['message'];
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
?>