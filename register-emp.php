<?php
require_once "config.php";
require_once "session-emp.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){

    $business_name = trim($_POST['business_name']);
    $business_email = trim($_POST['business_email']);
    $business_phone = trim($_POST['business_phone']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    if($query = $db->prepare("SELECT * FROM employers WHERE business_email = ?")){
        $error = '';

        $query->bind_param('s',$email);
        $query->execute();

        $query->store_result();
            if($query->num_rows > 0){
                echo("Email is registered already");
            }else{

                if (strlen($password)<8){
                    header("Location: register-emp.php?error=Password should have atleast 8 characters");
                }
                
                if(empty($confirm_password)){
                    header("Location: register-emp.php?error=enter confirm pass");

                }else{

                    if(empty($error) && ($password != $confirm_password)){
                        header("Location: register-emp.php?error=Password is did not match");
                    }
                }
                if(empty($error)){
                    $insertQuery = $db -> prepare("INSERT INTO employers (business_name,business_email,business_phone,password,confirm_password) VALUES (?,?,?,?,?)");
                    $insertQuery->bind_param("sssss",$business_name,$business_email,$business_phone,$password,$confirm_password);
                    $result = $insertQuery->execute();
                    if ($result){
                        echo("Success");

                    }else{
                        header("Location: register-emp.php?error=Something went wrongs");
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
                      <a href="home.php" class="nav-link ">Jobs</a></li>
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
                        <div class="col-lg-6 col-md-3 col-sm-4 ">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                                <h2 class="signup-title my-3">Signup as Employer Now!</h2>
                                <p class="signup-sub my-2">Improve your business with us !</p>
                                    <div class="form-container row mx-auto">
                                    <form action="" method="post">
                                        <div class="form-group my-3 mt-5">
                                            <input type="text" name="business_name" class="form-control" placeholder="Business Name" require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="email" name="business_email" class="form-control" placeholder="Business Email" require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="number" name="business_phone" class="form-control" placeholder="Business Phone"require>
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" require>
                                        </div>

                                        <div class="form-group my-3">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" require>
                                        </div>
                                        <div class="form-group my-3 mt-5">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Signup" >
                                        </div class="text-center">
                                        <p class="redi-login">Already have an account? <a href="login.php">Login</a></p>
                                    </form>
                                    </div>
                                    

                    </div>
                    <div id="signup-text"class="col-lg-6 col-md-3 col-sm-4 bg-primary">
                           <img id="signup-logo"src="https://cdn-static.talent.com/img/home-page/img-home-1.png" alt="signup-logo" srcset="">
                        </div>
                </div>
                
                
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 