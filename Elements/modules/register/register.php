

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./register.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Company Details</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Set Up your account</h2>
    <h3 class="fs-subtitle">Complete you account in just three steps</h3>    
    <input type="text" name="code" placeholder="Enter Verification Code*" />
    <input type="button" name="next" class="next action-button" value="Next" />
    <h4 class="fs-subtitle">*Check your email for the verification code</h3>
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Company details</h2>
    <h3 class="fs-subtitle">Your Company information</h3>
    <input type="text" name="companyName" placeholder="Company Name" />
    <input type="text" name="gst" placeholder="GST Number" />
    <input type="email" name="gplus" placeholder="Company Mail Id" />
    <textarea name="companyAddress" placeholder="Company Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <input type="email" name="gplus" placeholder="Your Mail Id" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" onclick="location.href='../../../dashboard.php'"/>
  </fieldset>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./register.js"></script>

</body>
</html>