<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style-signup.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <p class="login-text"></p>
        <div class="login-social">\
            <a href="#"><i class="fa fa-facebook">Facebook</i></a>
            <a href="#"><i class="fa fa-twitter">Twitter</i></a>
            <a href="#"><i class="fa fa-google">Google</i></a>
            <a href="#"><i class="fa fa-facebook">Facebook</i></a>
        </div>
        <form action="login-email">
            <p class="login-text">Login with Email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" require>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" require>
            </div>
            <div class="input-group">
                <button class="btn">Login</button>
            </div>
        </form>
    </div>
    <?php
    
    echo"System";
    
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>