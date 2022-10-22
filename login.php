<?php
require_once "config.php";
require_once "session.php";

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['submit'])){


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty(['email'])){
        $error .= '<p class="error">Email should not be empty!</p>';
    }
    if(empty(['password'])){
        $error .= '<p class="error">Password should not be empty!</p>';
    }

    if(empty($error)){
        if($query = $db -> prepare("SELECT FROM users WHERE email = ?")){
            $query->bind_param('s',$email);
            $query->execute();
            $row = $query->fetch();

                if($row){
                    if(password_verify($password,$row['$password'])){
                        $_SESSION['userID'] = $row['userId'];
                        $_SESSION['user'] = $row;

                        header("location:home.php");
                        exit;

                    }else{
                        $error .='<p>The password is invalid.</p>';
                    }
                }else{
                    $error .= '<p>Email entered does not exist.</p>';
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
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card row mx-auto">
                    <div class="form-group">
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
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>