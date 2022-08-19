
<?php
//Code Recieved from Ajith Jojo Joseph
//https://codeconia.com/contact-form-with-phpmail-for-your-website/

//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$to = "andrewcrandall4040@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
} 
//redirect
header("Location:index.html");
?>