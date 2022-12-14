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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | PESO Nasugbu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-main">
            <a href="home.php" class="navbar-brand mx-3">
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
                      <a href="companies.php" class="nav-link" >Companies</a></li>
                    <li class="nav-item ">
                      <a href="#" class="nav-link" >Career Guide</a></li>
                    <span></span>
                    <li class="nav-item ">
                      <a href="register.php" class="nav-link">I'm a Jobseeker</a></li>
                    <li class="nav-item">
                    <a href="register-emp.php" class="nav-link">I'm an Employer</a></li>
                    <li class="nav-item ">
                      <a href="login.php" class="nav-link" >Login</a></li>
                </ul>
            </nav>
        <div class="row mx-2">
            <div class="col-lg-12 col-md-6 col-sm-8">
                <div class="card border-0 shadow my-5">
                    <div class="row">
                        <div id="signup-text"class="col-lg-6 col-md-3 col-sm-4 bg-primary">
                           <img id="signup-logo"src="https://cdn-static.talent.com/img/home-page/img-home-1.png" alt="signup-logo" srcset="">
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-4 ">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                                <h2 class="signup-title my-3">Signup as jobseeker Now!</h2>
                                <p class="signup-sub my-2">Apply to your dream job now !</p>
                                    <div class="form-container row mx-auto">
                                    <form action="" method="post">
                                        <div class="form-group my-3 mt-5">
                                            <input type="text" name="lname" class="form-control" placeholder="First Name" require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" name="fname" class="form-control" placeholder="Last Name" require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email"require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="number" name="phone" class="form-control" placeholder="Phone"require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" require>
                                        </div>

                                        <div class="form-group my-3">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" require>
                                        </div>
                                        <div class="form-group my-3 mt-5">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Signup" >
                                        </div>
                                        <p class="redi-login text-center">Already have an account? <a href="login.php">Login</a></p>
                                    </form>
                                    </div>

                    </div>
                </div>
                
                
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 