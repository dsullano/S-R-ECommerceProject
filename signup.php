<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_signup.css">
  </head>
  <body>
  <?php
      session_start();
  ?>
    <div class="container">
    
        <div class="login-container">
            <div class="login-bg">
                
            </div>
    
            <div class="loginForm">
                <h1>Register!</h1>
    
                <form method="POST">
                    <div class="row my-4">
                        <div class="col">
                            <label for="fname">First Name</label>
                            <input class="form-control" id="fname" placeholder="John" name="fname" value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : ''; ?>" required>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label>
                            <input class="form-control" id="lname" placeholder="Doe" name="lname" value="<?php echo isset($_POST["lname"]) ? $_POST["lname"] : ''; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="emailaddress">Email address</label>
                      <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp" placeholder="johndoe@gmail.com" name="emailaddress" value="<?php echo isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : ''; ?>" required>
                        <div class="invalid-feedback email-invalid">This account already exists.</div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" value="<?php echo isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ''; ?>" required>
                        <div class="invalid-feedback password-invalid">Password does not match.</div>
                      </div>
                    
                      <div class="flex-wrapper">
                        <label class="label-form1" for="gndr">Gender:</label>
                        <input id="gndr" class="label-form1" type="radio" name="gender" value="male" checked> Male
                        <input class="label-form1" type="radio" name="gender" value="female"> Female
                        <input class="label-form1" type="radio" name="gender" value="other"> Other
                    </div>
                    
                    <button type="submit" class="btn btn-warning" name="register">Register</button>
                </form>                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </div>

  <!-- FOoter-->

  <footer class="py-3 primary-color">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3 mx-4 footer-border">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="aboutUs.php" class="nav-link px-2 text-body-secondary">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
      </ul>
      <div class="d-flex justify-content-between">
          <ul class="nav justify-content-start ps-4">
              <li class="nav-item px-2 text-white">BSCS-2 F1</li>
              <li class="nav-item px-2 text-white">Frenz Repunte</li>
              <li class="nav-item px-2 text-white">© 2024 S&R Holdings</li>
          </ul>

          <ul class="nav justify-content-end pe-4">
              <li class="nav-item ">
                  <a href="http://facebook.com" class="nav-link py-0 px-2 text-body-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                      </svg>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="http://instagram/com" class="nav-link py-0 px-2 text-body-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                      </svg>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="http://youtube.com" class="nav-link py-0 px-2 text-body-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                      </svg>
                  </a>
              </li>
          </ul>
      </div>
  </footer>

  </body>
</html>

<?php
include ("register.php");
?>