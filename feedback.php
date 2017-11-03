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
        
        mail($to, $subject, $message, $headers, $email, $subject2, $message2, $headers2);
        mail($email, $subject2, $message2, $header2);
      
			echo "<h1>Sent Successfully! Thank you"." ".$name." , Your feedback is important to us.</h1>";


   
}
?>



<!DOCTYPE html>
<html>
<title>FEEDBACK</title>
<head>
<link href = "animate.css" rel = "stylesheet">
  <style>
  body{background-image:url("feedback.jpg");
  }
h1{text-size:300%;
  text-align:center;
  text-shadow:3px 4px 3px khaki;
  text-color:black;
  text-decoration:underline;
  }
  h2{text-size:500%;
  text-align:center;
  text-shadow:3px 4px 3px khaki;
  text-color:black;
  }

.blink {
	-webkit-animation: blink 1.0s linear infinite;
	-moz-animation: blink 1.0s linear infinite;
	-ms-animation: blink 1.0s linear infinite;
	-o-animation: blink 1.0s linear infinite;
	 animation: blink 1.0s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
#d7{font-color:white;}
  </style>
  </head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body id="myPage">
<div class="d1 animated fadeInDown">
<h1 align="center">FEEDBACK</h1>
<h2 class="tab blink"> If you like our work or you want to give any suggesition then plz take a moment and  give us a feedback</h2>
<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>This is programmer work, so we have ip address not physical address </p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Jabalpur, M.P.</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9425937182</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  amar.mishra0206@gmail.com</p>
    </div>
    <div class="w3-col m7">
        <form action="" method="post" name="form" class="w3-container w3-card-4 w3-padding-16 w3-white">
             <div class="w3-section"> 
      	<label for="name">Name</label><br>
			<input type="text" name="name" class="w3-input" placeholder="Enter Your Name" required><br>
            </div>
             <div class="w3-section"> 
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="w3-input" placeholder="Enter Your Email" required><br>
            </div>
             <div class="w3-section"> 
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="w3-input" placeholder="Enter Your Phone" required><br>
            </div>
             <div class="w3-section"> 
			<label for="message">Message</label><br>
			<textarea name="msg" class="w3-input" placeholder="Enter Your Message Here..." required></textarea>
            </div>
                 <br>
             <div class="w3-section"> 
			<input type="submit" name="submit" value="Send" class="w3-button w3-right w3-theme">
            </div>
      </form>
    </div>
  </div>
</div>



<!-- Google Maps -->

<h1 id="d7">You Can Locate Us On Google Maps</h1>




<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.1234228278554!2d79.87264221462075!3d23.12916348489911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b3caccc2274b%3A0xc066b027d5fb1488!2sGyan+Ganga+Institute+of+Technology+%26+Sciences!5e0!3m2!1sen!2sin!4v1495077749962" width="1250" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<script src="https://www.google.co.in/maps/place/Gyan+Ganga+Institute+of+Technology+%26+Sciences/@23.1291635,79.8726422,17z/data=!3m1!4b1!4m5!3m4!1s0x3981b3caccc2274b:0xc066b027d5fb1488!8m2!3d23.1291635!4d79.8748309">
</script>
</script>
</body>
</html>