<?php
$name = $_POST['name'];
$email= $_POST['email'];
$option= $_POST['option'];
$message= $_POST['message'];
$to = "info@angelafoto.ee";
$subject = "Kontakt Angelafoto kodulehelt";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Option = " . $option ."\r\n Message =" . $message;
$headers = "From: kontaktivorm@angelafoto.ee" . "\r\n" /*."CC: info@angelafoto.ee"."X-Mailer: PHP/"*/ . phpversion();

/*if($email!=NULL){*/
    mail($to,$subject,$txt,$headers,'-finfo@angelafoto.ee');
/*}*/

//redirect
header("Location:kontakt.html");
?>

