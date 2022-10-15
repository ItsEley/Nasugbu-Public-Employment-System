<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Employee | PESO Nasugbu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-signup.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="form">
        <h2>Sign Up</h2>
        <p>It's free and always will be.</p>
        <form action="">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label for="">First Name</label>
                    <input id="firstName"type="text" name="fname" placeholder="First Name" require pattern="[a-zA-Z'-'\s]*">
                </div>
                <div class="input">
                    <label for="">Last Name</label>
                    <input id="lastName"type="text" name="lname" placeholder="Last Name" require pattern="[a-zA-Z'-'\s]*">
                </div>
                <div class="input">
                    <label for="">Email</label>
                    <input id="email"type="email" name="email" placeholder="Email" require>
                </div>
                <div class="input">
                    <label for="">Phone</label>
                    <input id="phone"type="phone" name="phone" placeholder="Phone Number" require pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter Valid Phone Number')" oninput="this.setCustomValidity('')">
                </div>
                <div class="grid-details">
                    <div class="input">
                        <label for="">Password</label>
                        <input id="passWord" type="password" name="pass" placeholder="Password" require>
                    </div>
                    <div class="input">
                        <label for="">Confirm Password</label>
                        <input id="cpassWord"type="password" name="cpass" placeholder="Confirm Password" require>
                    </div>
                </div>
                <div class="btn">
                    <input onclick="connect.php"type="submit" value="Signup Now" class="btn-primary">
                </div>
                <div class="link">Already signed up ? <a href="#">Login now!</a></div>
               
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>