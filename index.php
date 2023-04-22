<?php
require_once "./php/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create']))
{
 $email = $_POST['email'];
 $qry = "INSERT INTO `user_info` (`email`) VALUES(`$email`)";
 $run = mysqli_query($con,$qry);
 if($run==true)
 ?> 
 {
           <script>
            alert('Please Enter Further Details !!'); 
            </script>
 } 
 <?php
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/netflix-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
    <title>Netflix-clone</title>
</head>
<body>
    <div class="container-main">
        <header>
            <a href="#"><img src="./assets/img/logo.png" alt="Logo"></a>
             <nav>
                <ul>
                    <li>
                        <select>
                            <option>English</option>
                            <option>Portuguese</option>
                        </select>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="content-main">

            <div class="title-main">
                <h1>Movies, series and much more. No Boundaries.</h1>
                <h2>Watch wherever you want. Cancel whenever you want.</h2>
            </div>

            <h3>Ready to watch? Enter your email to create or restart your subscription.
            </h3>

           <form action="./signin.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <button type="submit" name="create" value="create">Create Account</button>
            </form> 

        </div>
    </div>

    <section class="devices">
        <div class="device">
            <div class="device-title">
                <h1>Enjoy on tv </h1>
                <h2>Watch on Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more
                    devices.</h2>
            </div>
            <div class="images">
                <img src="./assets/img/tv.png" class="tv-device">
            </div>
        </div>
        <div class="device">
            <div class="images">
                <img src="./assets/img/mobile.png" class="mobile-device">
            </div>
            <div class="device-title">
                <h1>Download series to watch offline.</h1>
                <h2>Save your favorite titles and always have something to watch.</h2>
            </div>
        </div> 
        <div class="device">
            <div class="device-title">
                <h1>Watch whenever you want.</h1>
                <h2>Watch on your cell phone, tablet, Smart TV or notebook without paying extra for it.</h2>
            </div>

            <div class="images">
                <img src="./assets/img/pc.png" class="pc-device">
            </div>
        </div>
        <div class="device">
            <div class="images">
                <img src="./assets/img/kids11.png" class="mobile-device">
            </div>
            <div class="device-title">
                <h1>Create profiles for children.</h1>
                <h2>Let the kids adventure with their favorite characters in a space made just for them, without paying extra for it.</h2>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container-faq">

            <h2>Common questions</h2>
            
            <ul>
                <li>What is Netflix?<img src="./assets/img/mais.png"></li>
                <li>How much does Netflix cost? <img src="./assets/img/mais.png"></li>
                <li>Where can I watch? <img src="./assets/img/mais.png"></li>
                <li>How do I cancel?<img src="./assets/img/mais.png"></li>
                <li>What can I watch on Netflix? <img src="./assets/img/mais.png"></li>
            </ul>
            
            <h3>Ready to watch? Enter your email to create or reset your subscription.</h3>
            
            <form action="./signin.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <button type="submit" name="create" value="create">Create Account</button>
            </form> 
         
        </div>
    </section>

    <footer>
        <div class="container-footer">

            <p>Doubts? Call 9874563201</p>
            
            <div class="listas">
                <ul>
                    <li><a href="">Common questions</a></li>
                    <li><a href="">Relationship with investors</a></li>
                    <li><a href="">ways to watch</a></li>
                    <li><a href="">corporate informations</a></li>
                    <li><a href="">Originais Netflix</a></li>
                </ul>
                
                <ul>
                    <li><a href="">help center</a></li>
                    <li><a href="">careers</a></li>
                    <li><a href=""> Terms of use</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                
                <ul>
                    <li><a href="">Account</a></li>
                    <li><a href=""> Redeem prepaid card</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Speed ​​test</a></li>
                </ul>
                
                <ul>
                    <li><a href="">Press</a></li>
                    <li><a href="">Buy prepaid card</a></li>
                    <li><a href="">Cookie Preferences</a></li>
                    <li><a href="">Legal Notices</a></li>
                </ul>
            </div>
            
            <select>
                <option>English</option>
                <option>Portuguese</option>
            </select>
            
            
            <p>Netflix Brasil</p>
            
        </div>
    </footer>
 </body>
</html>