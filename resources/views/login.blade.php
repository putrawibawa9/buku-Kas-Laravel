<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>

  <body>
    <div class="wrapper">
      <header>Login Form</header>
      <form id="loginForm" action="#">
        <div class="field email">
          <div class="input-area">
            <input type="text" placeholder="Email Address" />
            <i class="icon fas fa-envelope"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Email can't be blank</div>
        </div>
        <div class="field password">
          <div class="input-area">
            <input type="password" placeholder="Password" />
            <i class="icon fas fa-lock"></i>
            <i class="error error-icon fas fa-exclamation-circle"></i>
          </div>
          <div class="error error-txt">Password can't be blank</div>
        </div>
        <!-- Simple CAPTCHA-like task -->
        <div class="field captcha">
          <div class="input-area">
            <input type="checkbox" id="captchaCheckbox" />
            <label for="captchaCheckbox">I'm not a robot</label>
          </div>
          <div class="error error-txt">Please check the box</div>
        </div>
        <br />
        <!-- End of CAPTCHA-like task -->
        <div class="pass-txt"><a href="#">Forgot password?</a></div>
        <input type="submit" value="Login" />
      </form>
      <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
