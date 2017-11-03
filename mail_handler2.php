<?php
error_reporting(0);

if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
    $sub=$_POST['sub'];
		$msg=$_POST['msg'];
        
        $to='amarmishra382@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject="Form Submission".$sub;
        $subject2="Thanks by the team of e-education".$sub;
		$message="Name :".$name."\n\n"."Phone :".$phone."\n\n"."Wrote the following :\n\n".$msg;
        $message2="Hello thanks for Feedback:\n\n"."Name:".$name."\n\n"."Phone:".$phone."\n\n"."Wrote the following :\n\n".$msg;
		$headers="From: ".$email;
        $header2="From:".$to;
        
      if  (mail($to, $subject, $message, $headers, $email, $subject2, $message2, $headers2));
       
      {
			echo "<h1>Sent Successfully! Thank you"." ".$name." , Your feedback is important to us.</h1>";

}
   
}
?>


<html>
<head>
    <style>
        body{
            background-image: url(done.png);
            background-repeat: no-repeat;
            background-size: 100% 80%;
        background-color: bisque;
        }
        h1{
            color: cadetblue;
            text-shadow: 2px 2px 2px black;
        }
        
        background-image{
            padding-top: 30%;
        }
    </style>
    </head>
<body>
    
    
    
    
    
    
    
    
    </body>


</html>