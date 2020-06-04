<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log in / Sign up</title>
  <link rel="stylesheet" href="./login.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
            <form action="../validate-register/validation.php" method="POST">
              <input name="Username" placeholder="Username" type="text" /><input name="Password" placeholder="Password" type="Password" />
              <!-- <div class="btn" onclick="location.href='../dashboard/dashboard.html'">
                Log in
              </div> -->
              <input type="submit" name="Log in" value="Log in" class="btn">
            </form>            
          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <form action="../validate-register/registration.php" method="POST">
              <input name="fullName" placeholder="Full Name" type="text" /><input name="email" placeholder="Email" type="email" /><input name="companyName" placeholder="Company Name" type="text" /><input name="Username" placeholder="Username" type="text" /><input name="Password" placeholder="Password" type="Password" />
              <!-- <div class="btn"  onclick="location.href='../register/register.html'">
                Sign up
              </div> -->
              <input type="submit" name="Sign up" value="Sign up" class="btn">
            </form>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./login.js"></script>

</body>
</html>