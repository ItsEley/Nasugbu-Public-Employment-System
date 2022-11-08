<?php
require_once "config.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
        $error = '';

        $query->bind_param('s',$email);
        $query->execute();

        $query->store_result();
            if($query->num_rows > 0){
                header("Location: register.php?error=Email is registered already");
            }else{

                if (strlen($password)<8){
                    header("Location: register.php?error=Password should have atleast 8 characters");
                }
                
                if(empty($confirm_password)){
                    header("Location: register.php?error=enter confirm pass");

                }else{

                    if(empty($error) && ($password != $confirm_password)){
                        header("Location: register.php?error=Password is did not match");
                    }
                }
                if(empty($error)){
                    $insertQuery = $db -> prepare("INSERT INTO users (fname,lname,email,phone,password,confirm_password) VALUES (?,?,?,?,?,?)");
                    $insertQuery->bind_param("ssssss",$fname,$lname,$email,$phone,$password,$confirm_password);
                    $result = $insertQuery->execute();
                    if ($result){
                        header("Location: register.php?error=Success");

                    }else{
                        header("Location: register.php?error=Something went wrongs");
                    }
                }
            }
    }
$query->close();
mysqli_close($db);
exit;

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-register2.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="navv" id="navv">
          <nav class="navbar navbar-expand-lg navbar-light" id="navbar-main">
              <a href="#" class="navbar-brand mx-3">
                <img src="" alt="LOGO" srcset="" height="100" width="100">
              </a>
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contentMenu">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse " id="contentMenu">
                <ul class="navbar-nav mx-5">
                    <li class="nav-item active">
                      <a href="#" class="nav-link ">Jobs</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Companies</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Career Guide</a></li>
                    <span></span>
                    <li class="nav-item ">
                      <a href="" class="nav-link">I'm a Jobseeker</a></li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">I'm an Employer</a></li>
                </ul>
          </nav>
        </div>
    </div>
    
    <div class="container">
        <div class="form-container">
            <div class="signin-signup">
              <form action="#" class="sign-in-form">
                <h2 class="title">Sign up as Employer</h2>
                    <div class="input-field">
                        <i class="fas fa-building"></i>
                        <input type="text" placeholder="Business Name" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Business Email" />
                    </div>
                  <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Business Phone" />
                  </div>
                  <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                  </div>
                  <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" />
                  </div>
                <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
                <h2 class="title">Signup as Employee</h2>
                    <div class="input-field">
                          <i class="fas fa-user"></i>
                          <input type="text" placeholder="First Name" />
                    </div>
                    <div class="input-field">
                          <i class="fas fa-user"></i>
                          <input type="text" placeholder="Last Name" />
                    </div>  
                    <div class="input-field">
                          <i class="fas fa-envelope"></i>
                          <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                          <i class="fas fa-phone"></i>
                          <input type="email" placeholder="Phone" />
                    </div>
                    <div class="input-field">
                          <i class="fas fa-lock"></i>
                          <input type="password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                          <i class="fas fa-lock"></i>
                          <input type="password" placeholder="Confirm Password" />
                    </div>
                <input type="submit" class="btn" value="Sign up" />
                  <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                          <a href="#" class="social-icon">
                              <i class="fab fa-facebook-f"></i>
                          </a>
                          <a href="#" class="social-icon">
                              <i class="fab fa-twitter"></i>
                          </a>
                          <a href="#" class="social-icon">
                              <i class="fab fa-google"></i>
                          </a>
                    </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Looking for a job to apply ?</h3>
            <p>
             Signup Now!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/jobs-img.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Looking for someone to hire ?</h3>
            <p>
              Signup Now!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/emp-img.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="register2-app.js"></script>
  </body>
</html>
