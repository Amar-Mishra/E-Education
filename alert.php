<? php 
    

    //include PHPMailerAutoload.php
    
    require 'PHPMailer/PHPMailerAutoload.php';
    
    //create an instance of PHPMailer

    $mail = new PHPMailer();

    //set a host

$mail->Host = "smtp.gmail.com"
    
    //enable SMTP
    
   // $mail->isSMTP();
    
    //set authentication to true

$mail->SMTPAuth = true;
    
    //set login details for gmail account
    
$mail->Username = "amarmishra382@gmail.com";
$mail->Password = "amar2018";

    //set type of protection

mail->SMTPSecure = "ssl"; //or we can use TLS
    
    //set a port 

$mail->Port = 465; //or 587 if TLS


    //set Subject
    
$mail->Subject  = "test email";

    //set body

$mail->Body = "this is body..";
    
    //set who is sending an email

$mail->setFrom(address'e-education.com', name:'education');
    
    //set where we are sending email(recipients)

$mail->addAddress(address'hello@e-educaton.com');

    
    //send an email

if($mail->send())
    
    echo "mail is send";

else

echo "some thing is wrong";

?>







