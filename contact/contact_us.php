<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>



<script>
var ractive = new Ractive({
  el: '#container',
  template: '#template',
  data: {}
});


</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:100);
body{
  background-image: url("./Elements/images/banner.jpg");
}
form.contact-form {
  width: 100%;
  max-width: 350px;
  margin: 10px auto;
  font-size: 15.5px;
  font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: 100;
  line-height: 25.079px;
  letter-spacing: -0.5px;
  -webkit-transition: box-shadow 0.4s ease;
  transition: box-shadow 0.4s ease;
  box-shadow: 0px 2px 10px #eee;
}
form.contact-form:hover {
  box-shadow: 0px 4px 14px #ddd, 0px 0px 6px #ffffff;
}
form.contact-form span {
  text-align: center;
  display: block;
  color: white;
  padding: 19.375px 19.375px 7.75px;
  font: inherit;
  font-size: 25.079px;
}
form.contact-form ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
form.contact-form ul li {
  padding: 0;
  border-bottom: 1px solid #ddd;
  margin: 0;
  text-align: center;
  width: 100%;
}
form.contact-form ul li i.form-icon {
  display: inline-block;
  vertical-align: middle;
  width: 2%;
  text-align: center;
  margin: 0 0.5% 0 1%;
  padding: 0;
  font-size: 16.275px;
  color: #aaa;
}
form.contact-form ul li input[type="text"] {
  width: 90%;
  background: none;
  margin: 0;
  padding: 10.33333385px 2%;
  border: 0;
  border-bottom: 3px solid rgba(0, 0, 0, 0);
  text-align: left;
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  -webkit-transition: border-bottom 0.35s ease;
  transition: border-bottom 0.35s ease;
}
form.contact-form ul li input[type="text"]:focus {
  outline: none;
  border-bottom: 3px solid #f1a6f3;
}
form.contact-form ul li input[type="text"]::-webkit-input-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li input[type="text"]:-moz-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li input[type="text"]::-moz-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li input[type="text"]:-ms-input-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li input[type="text"]:focus::-webkit-input-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li input[type="text"]:focus:-moz-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li input[type="text"]:focus::-moz-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li input[type="text"]:focus:-ms-input-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li textarea {
  display: inline-block;
  vertical-align: top;
  width: 88%;
  background: none;
  padding: 10.33333385px 2%;
  resize: none;
  border: 0;
  border-bottom: 3px solid rgba(0, 0, 0, 0);
  text-align: left;
  height: auto;
  min-height: 133px;
  margin: 0;
  font-size: inherit;
  font-weight: inherit;
  font-family: inherit;
  -webkit-transition: border-bottom 0.35s ease;
  transition: border-bottom 0.35s ease;
}
form.contact-form ul li textarea:focus {
  outline: none;
  border-bottom: 3px solid #f1a6f3;
}
form.contact-form ul li textarea::-webkit-scrollbar {
  width: 4px;
}
form.contact-form ul li textarea::-webkit-scrollbar-thumb {
  background: #ffffff;
  border-radius: 2px;
}
form.contact-form ul li textarea::-webkit-input-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li textarea:-moz-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li textarea::-moz-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li textarea:-ms-input-placeholder {
  -webkit-transition: color 0.35s ease;
  transition: color 0.35s ease;
  color: #ccc;
}
form.contact-form ul li textarea:focus::-webkit-input-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li textarea:focus:-moz-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li textarea:focus::-moz-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li textarea:focus:-ms-input-placeholder {
  color: #f1a6f3;
}
form.contact-form ul li input[type="submit"] {
  margin: 15px auto 15px;
  padding: 10.33333385px 19.375px;
  border: 1px solid #d0d0d0;
  display: inline-block;
  border-radius: 6px;
  background: rgba(255, 255, 255, 0);
  font-weight: inherit;
  font-family: inherit;
  font-size: inherit;
  -webkit-transition: background border 0.35s ease;
  transition: background border 0.35s ease;
}
form.contact-form ul li input[type="submit"]:focus {
  outline: none;
  border: 1px solid #f1a6f3;
}
form.contact-form ul li input[type="submit"]:hover {
  background: #eaeaea;
  border: 1px solid #f1a6f3;
}
form.contact-form ul li input[type="submit"]:active {
  background: #d0d0d0;
}
.error
{
  color: red;
  font-size: 8px;
}
</style>


<body style="background-image: url(abc.png)">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../Elements/images/logo.png" height="25px" width="25px" style="padding-top: 7px; padding-right: 5px">
          <span>
            <a href="index.html">Hisaab Kitaab</a>
          </span>
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../Elements/index.html">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
        

  <?php

require './PHPMailer/class.phpmailer.php';
require './PHPMailer/class.smtp.php';

$name_error = $email_error = $sub_error="";
$name = $email = $company= $sub= $message= $success= "";

if($_SERVER["REQUEST_METHOD"]== "POST")
{
  if(empty($_POST["name"]))
    $name_error= "Name is required";
  else
  {
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/", $name))
      $name_error= "Only letters and white spaces allowed";
  }

  if(empty($_POST["email"]))
    $email_error= "Email is required";
  else
  {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      $email_error= "Invalid email format";
  }
  if(empty($_POST["sub"]))
    $sub_error= "Subject is required";
  else
  {
    $sub= test_input($_POST["sub"]);
  }

  if(empty($_POST["message"]))
    $message="";
  else 
  {
    $message= test_input($_POST["message"]);
  }

  if($name_error=="" and $email_error=="" and $sub_error=="")
  {
    $message_body="";
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) 
    { 
      $message_body .= "key: $value\n";
    }

    $mail = new PHPMailer;
    $mail->setFrom('noreply@email.com');
    $mail->addAddress('mittal.jain@somaiya.edu');
    $mail->Subject = $sub;
    $mail->Body = "From ".$email.", \n".$message;
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

function test_input($data)
{
  $data= trim($data);
  $data= stripcslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}
?>


<form action="<?= $_SERVER['PHP_SELF'];?>" class="contact-form" method="POST">
  
  <span>Contact Us!</span>

  <ul>
    <li>
      <i class="fa fa-user form-icon"></i>
      <input type="text" id="name" name="name" value="<?= $name?>" placeholder="Name"/>
    </li>
    <div style="color: #FA8072; font-size: 8px;"><?php echo $name_error ?></div>
    <li>
      <i class="fa fa-at form-icon"></i>
      <input type="text" id="email" name="email" value="<?= $email?>" placeholder="Email"/>
    </li>
    <div style="color: #FA8072; font-size: 8px;"><?php echo $email_error ?></div>
    <li>
      <i class="fa fa-university form-icon"></i>
      <input type="text" id="company" name="company" placeholder="Company Name" value="<?= $company?>"/>
    </li>
    <li>
      <i class="fa fa-paper-plane form-icon"></i>
      <input type="text" id="sub" name="sub" value="<?= $sub?>" placeholder="Subject"/>
    </li>
    <div style="color: #FA8072; font-size: 8px;"><?php echo $sub_error ?></div>
    <li>
      <i class="fa fa-envelope form-icon"></i>
      <textarea placeholder="Message" name="message" rows="2"></textarea>
    </li>
    <li>
      <input type="submit" placeholder="Submit" id="submit" />
      <span style="color:#FA8072; font-size: 13px;"><?= $success?></span>
    </li>
    
  </ul>
</form>
</body>
</html>

