<?php 

if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message'])){
      if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Message'])){
      $name = $_POST['Name'];
          $email = $_POST['Email'];
          $message = $_POST['Message'];
          
          if (! filter_var($email, FILTER_VALIDATE_Email)){
              echo 'Kindly provide Valid Email';
          } else {
              $body = $name."\n".$email."\n".$message;
              
                  if(('amarmishra0206@gmail.com', 'Website Response',$body,'From:response@mywebsite.com')){
                      echo 'Thanks for feedback.';
                  } else{
                      echo 'There is a'
                  }
          }
          
          
}  else {
   echo 'All feilds are required';
} 
}  else {

echo 'Not ok';
}



?>

