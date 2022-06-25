
<!DOCTYPE html>
<html>
<head>
 <title>Sign Up</title>
 <link rel="stylesheet" href="loginSignup.css" />
 <link rel="stylesheet" type="text/css" href= "formstyle.css"/>

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
 <script> 
 function clearFunc()
	{
		
		document.getElementById("username").value="";
        document.getElementById("password").value="";
        document.getElementById("email").value="";
        document.getElementById("number").value="";
	}
    </script>
</head>

  <body>
  <header>
        <nav>
            <div class="logo"  style="font-family: 'Cinzel', serif;">Finvest</div>
            <div class="menu">
                <ul>
                    <li><a href="finvesthome.html" >Home</a></li>
                    <li><a href="filnvesthome.html">Services</a></li>
                    <!-- <li><a href="">Contact Us</a></li> -->
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <!-- <li><a href="signup.php">Signup</a></li> -->
                    <!-- <li><a href="logout.php">Logout</a></li> -->
                    <li><a href="account.php">Account</a></li>
                </ul>
            </div>
        </nav>


    </header></br></br></br></br>
<div class="form">
 <h2>Create Account</h2>
 <form method="post" action="account.php">  

 
 <input type="text" id="username" name="username" placeholder="Username" required/>
 
 
 <input type="password" id="password" name="password" placeholder="Password"required/>
 
 <input type="email" id="email" name="email" placeholder="E-mail"required/>
 

 
 <input type="tel" id = "number" name="number" placeholder="Mobile Number"required/>
 

 <input  class="btn" type="submit" value="SIGN UP"/>
 <input class="btn" type="submit" value="Reset" onclick="clearFunc()"   />
</form>
</div>

</body>
</html>