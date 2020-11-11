<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>TESTNAME</title>
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	#hi{
		
		margin:20px;
		border:2px solid black;
		width:270px;
		height:200px;
		display:inline-block;
		padding:50px;
		
	}
	
	</style>
</head>
<body>
	<div id="big_wrapper">
		<header id="top_header">
			<div id="site_name">
				<h1>TESTNAME</h1>
				
			</div>
			
			<!--search bar-->
			<form action="search.php" method="GET">
				<input type="text" name="query" placeholder="Search for Books and More" id="searchbar">
                  
				<div class="w3-container">
					<button class="fa fa-search" id="searchbutton" <input type="submit" value="Search" /></button>
				</div>
			</form>
			
			<!--shopping cart-->
			<div id="shopping_cart">
		
				<div id="cart_symbol_div"> <span class="glyphicon">&#xe116;</span></div>
				
				<div id="cart_box_div"><button id="cart_box">Cart</button></div>
			</div>
			
			<!--Advertise-->
			<div id="advertise_div">
				<p><a href="" id="advertise">Advertise</a></p>
			</div>
			
			<!--sell on website-->
			<div id="sell_on_div">
				<p><a href="" id="sell_on">Sell on Testname</a></p>
			</div>
			
			<!--contact Us-->
			<div id="contact_us_div">
				<p><a href="" id="contact_us">Contact Us</a></p>
			</div>
			
			<!--About Us-->
			<div id="about_us_div">
				<p><a href="" id="about_us">About Us</a></p>
			</div>
			
			<!--help-->
			<div id="help_div">
				<p><a href="" id="help">Help</a></p>
			</div>
			
			<!--sign up-->
			<div id="sign_up_div">
				<p><a href="#" id="sign_up" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</a></p>
			</div>
			<!--log in-->
			<div id="log_in_div">
				<p><a href="#" id="log_in"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log In</a></p>
			</div>
			
			<!--bell icon-->
				<div id="bell_div"><i class="material-icons"><span="bell">&#xe7f4;</span></i></div>
			
		</header>
		
		<!--navigation bar-->
		<nav id="top_menu">
			<div id="btn-group">
				<div id="first"><button id="button">Shop by Category</button>
				<div id="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>
				<div id="second"><button id="button">HOME</button>
				<div id="dropdown-content">
						<a href="#">Link 4</a>
						<a href="#">Link 5</a>
						<a href="#">Link 6</a>
					</div>
				</div>
				<div id="third"><button id="button">DEALS</button>
				<div id="dropdown-content">
						<a href="#">Link 7</a>
						<a href="#">Link 8</a>
						<a href="#">Link 9</a>
					</div>
				</div>
				<div id="fourth"><button id="button">SELL</button>
				<div id="dropdown-content">
						<a href="#">Link 10</a>
						<a href="#">Link 11</a>
						<a href="#">Link 12</a>
					</div>
				</div>
				<button id="button">24x7 CUSTOMER SERVICE</button>
				<div id="your_order"><button id="button">YOUR ORDERS</button></div>
			</div>
		</nav>
		
		<div id="new_div">
		
			<!--signup-->
			<div id="id01" class="modal">
				<p class="animate"id="signup_image">Sign up</p>
				<a href="http://www.facebook.com"><button class="loginBtn loginBtn--facebook">
				  Login with Facebook
				  </button></a>

				<a href="http://www.gmail.com"><button class="loginBtn loginBtn--google">
				  Login with Google
				</button></a>
			  <form class="modal-content animate" action="new.php" method="post">
			  
                 <input type="hidden" name="submitted" value="true">
				<span onclick="document.getElementById('id01').style.display='none'" class="close_signup" title="Close Modal">&times;</span>
				<div class="container">
				  <label><b>Email</b></label>
				  <input type="text" placeholder="Enter Email" name="email" required>

				  <label><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" required>

				  <label><b>Repeat Password</b></label>
				  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				  <input type="checkbox" checked="checked"> Remember me
				  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				  <div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<div id="signupsubmit"><a href="new.php"><button type="submit" class="signupbtn">Sign Up</button></a></div>
				  </div>
				</div>
			  </form>
			</div>
				
			<script>
		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>

			
			<!--login-->
			<div id="id02" class="modal">
				<p class="animate"id="signup_image">Login</p>
			  <form class="modal-content animate" action="/action_page.php">
				<div class="imgcontainer">
				  <span onclick="document.getElementById('id02').style.display='none'" class="close_login" title="Close Modal">&times;</span>
				</div>

				<div class="container">
				  <label><b>Username</b></label>
				  <input type="text" placeholder="Enter Username" name="uname" required>

				  <label><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" required>
					
				  <button type="submit" id="loginbutton">Login</button>
				  <p><p><p><input type="checkbox" checked="checked">Remember me</p></p></p>
				</div>

				<div class="container" style="">
				  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
				  <span class="psw">Forgot <a href="#">password?</a></span>
				</div>
			  </form>
			</div>

			<script>
			// Get the modal
			var modal = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
			</script>
			
			<?php

include('connect.php');
    $query = $_GET['query']; 
     
    $min_length =1;
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
         
        $query = mysqli_real_escape_string($con,$query);
         
        $raw_results = mysqli_query($con,"SELECT * FROM products
            WHERE (`Item` LIKE '%".$query."%')") or die(mysqli_error($con));
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
					
						echo '<li id="hi">';
							echo $results['Item'].'';	
						echo '</li>';
					
			 }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>

			<aside id="side_news">
				<h4>image<h4>
				
			</aside>
		</div>
		
		<footer id="the_footer">
			Copyright thenewboston 2017
		</footer>
		
	</div>
	</body>
	</html>
