<?php
require_once "./php/connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignIn'])) 
  {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pass = md5($password);
    $qry = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$pass'";
    $run = mysqli_query($con, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1)
      {
       ?> <script>
            alert("Not a registered user !!");
            window.open('signin.php', '_self');
        </script>
        <?php
      }
      else
      {
         ?> <script>
             alert("Welcome User🙏");
             window.open('home-user.php', '_self');
         </script> <?php
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
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="pass" placeholder="Password">
                <button type="submit" name="SignIn" value="Sign in" id="btnEntrar">Sign up</button>
            </form>

            <div class="help">
                <div>
                    <input type="radio" id="me">
                    <label for="me">Remember me</label>
                </div>
                    
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