<html>
    <head>
    <meta http-equiv="refresh" content="1;url=index.html">
    </head>
<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipent = "hwoolsportfolio@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipent, $subject, $formcontent, $mailheader) or die("Error!" + $php_errormsg);
echo "<script type='text/javascript'>alert('Thank you!');</script>";

?>
</html>