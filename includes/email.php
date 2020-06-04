
<?php
session_start();
require './PHPMailer/class.phpmailer.php';
require './PHPMailer/class.smtp.php';

  $con = mysqli_connect("localhost","root",""); 
  mysqli_select_db($con, "project_inv");
  if(isset($_SESSION['Username']))
  {
    $table = $_SESSION["Username"];
    $login = "select * from user where username = '$_POST[Username]'";
    $loginresult = mysqli_query($con, $login);
    if( mysqli_num_rows( $loginresult )==0 ){
            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
     }
     else
     {
            while( $row = mysqli_fetch_assoc( $loginresult ) ){
              $email=$row["email"];
            }


    $mail = new PHPMailer;
    $mail->setFrom('noreply@email.com');
    $mail->addAddress($email);
    $mail->Subject = "Generated Bill/Invoice";
    $mail->addAttachment($pdf);        
  //$mail->addAttachment("images/profile.png");
    //$mail->Body = "From ".$email.", \n".$message;
    $mail->IsSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Port = 465;

    //Set your existing gmail address as user name
    $mail->Username = 'kjsce.2019@gmail.com';

    //Set the password of your gmail address here
    $mail->Password = 'Kjsce065';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Email error: ' . $mail->ErrorInfo;
    } else {
      $success= 'Message sent, thank you for contacting us!';
      $name=$email=$sub='';
    }
  }
}
?>