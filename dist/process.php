<?php
//add the recipient's address here
$myemail = 'oskamaya@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['nombres_usuario']);
$last_name = strip_tags($_POST['apellidos_usuario']);
$email = strip_tags($_POST['email_usuario']);
$message = strip_tags($_POST['mensaje_usuario']);
echo "<span class=\"alert alert-success\" >Your message has been received, and we will get back to you as soon as possible. Here is what you submitted:</span><br><br>";
echo "<stong>Nombres:</strong> ".$name."<br>"; 
echo "<stong>Apellidos:</strong> ".$name."<br>";   
echo "<stong>Email:</strong> ".$email."<br>"; 
echo "<stong>Mensaje:</strong> ".$message."<br>";

//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>