<?php
require_once "./php/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignUp']))
{
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['conf_pass'];
    if($password==$confirm_password)
    {
            $pass= md5($password);
            $psqry = "INSERT INTO `user_info` (`first_name`,`last_name`,`email`,`password`) VALUES ('$fname', '$lname','$email','$pass')";
            $psrun = mysqli_query($con,$psqry);
                        ?> <script>
            alert('Registration Successfull!'); 
            window.open('home-user.php','_self');
            </script> <?php
    }
    else{
            if($password!=$confirm_password){
               ?> <script>
                alert('Password does not match!')
                </script> <?php
            }
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/netflix-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">

    <title>Netflix-clone</title>
</head>

<body>
    <div class="container">
        <header>
            <a href="./index.php"><img src="./assets/img/logo.png" alt="Logo"></a>
        </header>

        <div class="container-login">
            <h1>To enter</h1>

            <form action="" method="post">
                <input type="text" name="fName" placeholder="Fisrt Name" require>
                <input type="text" name="lName" placeholder="Last Name" require>
                <input type="text" name="email" placeholder="Email or phone number" require>
                <input type="password" name="pass" placeholder="Password" require>
                <input type="password" name="conf_pass" placeholder="Confirm Password" require>
                <button type="submit" name="SignUp" value="Sign up" id="btnEntrar">Sign up</button>
            </form>
            <div class="help">
                <a href="">Need help?</a>
            </div>

            <a href="" class="facebook"><img src="./assets/img/facebook.png" class="icon"/>Connect with Facebook</a>

            <div class="connect">
                <p>New around here? <span id="span01">subscribe now</span>.</p>
                <p>This page is protected by Google reCAPTCHA to ensure you are not a robot. <span id="span02">know more.</span></p>
            </div>
        </div>

        <footer>
            <div class="container-footer">
                <p>Doubts?<a href="">Call 0800-761-4631</a></p>
    
                <div class="lists">
                    <ul>
                        <li><a href="">Common questions</a></li>
                        <li><a href="">corporate information</a></li>
                        <li><a href="">Cookie Preferences</a></li>
                        <li><a href="">help center</a></li>
                        <li><a href=""> Privacy</a></li>
                        <li><a href="">Terms of use</a></li>
                    </ul>
                </div>
    
                <select>
                    <option>English</option>
                    <option>Portuguese</option>
                </select>
            </div>
        </footer>
    </div>
</body>
</html>