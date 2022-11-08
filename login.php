<?php
require_once "config.php";
require_once "session.php";

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['submit'])){


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty(['email'])){
        header("Location: login.php?error=EMail should not be empty");
    }
    if(empty(['password'])){
        header("Location: login.php?error=Password should not be empty");
    }

    if(empty($error)){
        if($query = $db -> prepare("SELECT * FROM users WHERE email = ?")){
            $query->bind_param('s',$email);
            $query->execute();
            $row = $query->fetch();

                if($row){
                    if(password_verify($password,$row['$password'])){
                        $_SESSION['Id'] = $row['Id'];
                        $_SESSION['userId'] = $row;

                        header("location:home.php");
                        exit;

                    }else{
                        header("Location: login.php?error=Password is invalid");
                    }
                }else{
                    header("Location: login.php?error=Email does not exist");
                }
        }
        $query->close();

    }
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PESO Nasugbu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="row mx-auto">
            <div class="col-lg-6 col-md-8 col-sm-12 row mx-auto mt-5 p-5">
                <div class="card row mx-auto">
                    <div class="form-group">
                        <?php if (isset($_GET['error'])) { ?>
     		                <p class="error"><?php echo $_GET['error']; ?></p>
     	                <?php } ?>
                        <label for="">
                            Email
                        </label>
                        <input type="email" name="email" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Password
                        </label>
                        <input type="password" name="password" class="form-control" require>
                    </div>
                    <div class="form-group text-center m-3">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>