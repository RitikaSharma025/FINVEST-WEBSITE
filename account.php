<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Account</title>
    <link rel="stylesheet" href="acc.css" />
</head>
<body>
<header>
        <nav>
            <div class="logo">Finvest</div>
            <div class="menu">
                <ul>
                    <li><a href="finvesthome.html">Home</a></li>
                    <li><a href="finvesthome.html">Services</a></li>
                    <!-- <li><a href="">Contact Us</a></li> -->
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li> 
                    <!-- <li><a href="account.php">Account</a></li> -->
                </ul>
            </div>
        </nav>


    </header>
</br></br></br></br>
<script>function AlertIt() {
    var answer = confirm ("You are logged out! Please login to continue.")
    if (answer)
    window.location="login.php";
    }</script>
<?php
// define variables and set to empty values
 $username = $password = $email = $number  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
 $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
 $number= test_input($_POST["number"]);
 
}
else{
  
   // header('Location: signup.php');
    echo '<script>alert("Please Sign UP first");
    window.location.href = "signup.php";</script>';
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?> 

<div class="form">
<h1>Your Account</h1> 
    <div class ="account">
        <img src="https://image.flaticon.com/icons/png/512/17/17004.png" height=70px></img>
    </div>
    <h1 text->Hi  <?php echo $_POST["username"]?></em>!</h1>
    <div class="details">
    <div class ="email"> 
    <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-email-512.png" height=40px></img>
       <?php echo $_POST["email"]?></div></br>
       <div class ="number">
        <img src="http://simpleicon.com/wp-content/uploads/iphone.png"height=50px></img>
        <?php echo $_POST["number"]?></div></br>
        <div class ="bank">
            <a href="#"><abbr title="Click for bank details">
        <img src="https://static.thenounproject.com/png/28416-200.png"height=40px></img>
</abbr>
        </a>Bank Details</div></br>


 <div class ="history">
            <a href="#"><abbr title="All your transactions">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Font_Awesome_5_solid_history.svg/1200px-Font_Awesome_5_solid_history.svg.png"height=40px></img>
</abbr>
        </a>History 
        </div>
        <div class='logout'>
        <!-- <a href='login.php'>Logout</a> -->
        <a href="javascript:AlertIt();">Logout</a></div>
        </div>
    
    </div>
</body>
</html>

