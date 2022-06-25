<!DOCTYPE html>
  <html>
  <head>
  <title></title>
  <link rel="stylesheet" href="loginSignup.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
  <script>
    
    function login()
	{
		var uname = document.getElementById("email").value;
		var pwd = document.getElementById("pwd1").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter user name.");
		}
		else if(pwd=='')
		{
        	alert("enter the password");
		}
		else if(!filter.test(uname))
		{
			alert("Enter valid email id.");
		}
		else if(pwd.length < 6 || pwd.length > 6)
		{
			alert("Password min and max length is 6.");
		}
		else
		{
	alert('You are logged in!');
  //Redirecting to other page or webste code or you can set your own html page.
       window.location = "finvesthome.html";
			}
	}
	//Reset Inputfield code.
	function clearFunc()
	{
		document.getElementById("email").value="";
		document.getElementById("pwd1").value="";
	}	
    
    </script>
  </head>

	<body>
    <header>
        <nav>
            <div class="logo" style="font-family: 'Cinzel', serif;">Finvest</div>
            <div class="menu">
                <ul>
                    <li><a href="finvesthome.html">Home</a></li>
                    <li><a href="finvesthome.html">Services</a></li>
                    <!-- <li><a href="">Contact Us</a></li> -->
					<li><a href="contactus.html">Contact Us</a></li>
                    <!-- <li><a href="login.php">Login/Signup</a></li> -->
                     <li><a href="signup.php">Signup</a></li>
                    <!-- <li><a href="logout.php">Logout</a></li> -->
					<li><a href="account.php">Account</a></li>
                </ul>
            </div>
        </nav>


    </header>
</br></br></br></br>

	<!-- Main div code -->
	<div class="form">
	<div class="h-tag">
	<h2> Account Login</h2>
	</div>
	<!-- Login box -->
	<!-- <div class="login"> -->
	<table>
	<tr>
	
	<td><input type="text" placeholder="Email-id" id="email" class="tb" /></td>
	</tr>
	<tr>
	
	<td><input type="password" placeholder="Password" id="pwd1" class="tb" /></td>
	</tr>
	<tr>
	<td>
    
	<div class="details">
	<input class="btn" type="submit" value="Reset" onclick="clearFunc()"   />
	<input class="btn" type="submit" value="Login"  onClick="login()" />
</div>
</td>
	</tr>
	</table>
	<!-- </div> -->
  	 <!-- login box div ending here.. -->
	
    <p>No account yet? <a href='signup.php'></br>Sign Up</a></p>
	<!-- Main div ending here... -->
    </div>
  </body>
  </html>
  