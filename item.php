<?php

	include('connect.php');
	
	
?>
<?php
// Start the session
session_start();
?>
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

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="style2.css"/>
	<script src="javascript.js"></script>
	<style>
	#big_wrapper{
		cursor:default;
	}
	#top_header{
	background:#41d9f4;
	}
	
	#new_div{
	display:-webkit-box;
	-webkit-box-orient:vertical; 
	background:#f4f5f7;				
	
	}
	#button{
	
	position:relative;
	top:-10px;
	
	}
	#dropdown-content {
    display: none;
    position: absolute;
	top:130px;
    background-color: #f9f9f9;
    width:166.9px;
	height:200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}
	


	#menu_list span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}

	#menu_list span:after {
	  content: '\25bc';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}

	#menu_list:hover span {
	  padding-right: 25px;
	}

	#menu_list:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
	}
	
	#return-to-top i {
		color: #fff;
		margin: 0;
		position: relative;
		left: 16px;
		top: 13px;
		font-size: 19px;
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		-ms-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
	}
	#return-to-top:hover {
		background: rgba(0, 0, 0, 0.9);
	}
	#return-to-top:hover i {
		color: #fff;
		top: 5px;
	}
	
	#shoplink:active{
		color:none;
	}
	
	input[type=email], input[type=password] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
	border:none;
	border-bottom: 1px solid #ccc;
    box-sizing: border-box;
}

	#container{
	width:100%;
	height: 280px;
	border:none;
	margin: 10px auto;
	margin-top:20px;
	position: relative;
	margin-bottom:0px;
	}
	
	#container>#btn1{
	position: absolute;
	top:100px;
	background-color: white;
	box-shadow: 5px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	font-weight:bold;
    font-size: 21px;
    cursor: pointer;
	height:60px;
	width:43px;
	outline:0;
	z-index:0;
	border-radius:0px;
	border-top-right-radius:0.18em;
	border-bottom-right-radius:0.18em;
}

	#container>#btn2{
	position: absolute;
	top:100px;
	right:0px;
	background-color: white;
	box-shadow: -5px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight:bold;
    font-size: 21px;
    cursor: pointer;
	height:60px;
	width:43px;
	outline:0;
	z-index:0;
	
	border-radius:0px;
	border-top-left-radius:0.18em;
	border-bottom-left-radius:0.18em;
}
		
		
	#container>#btn1:hover{
		box-shadow: 6px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	#container>#btn2:hover{
		box-shadow: -6px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	
	
	#container>#btn1:focus{
	outline:0;
	}

	#container>#btn2:focus{
	outline:0;
	}
	
	
	.column {
	 height:350px;
		margin-right:8px;
		margin-left:8px;
	  margin-top:0px;
	  margin-bottom: 17px;
	  padding: 0 8px;
	  padding-bottom:0px;
	  box-shadow: 0px 0px 8px 0 rgba(0, 0, 0, 0.2);
	background:white;

	}
	
	@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
	}
	}




	#each_search_item{
	
		margin-top:15px;
	
		margin-left:5px;
		
		width:270px;
		height:500px;
		display:inline-block;
		
	
	}
	
	div.searchitem_div {
		
		overflow:hidden;
		white-space:nowrap;
		margin-left:300px;
		margin-right:0px;
		
	}
	
		.ad_column {
	 height:350px;
		margin-right:8px;
		margin-left:8px;
	  margin-top:0px;
	  margin-bottom: 17px;
	  padding: 0 8px;
	  padding-bottom:0px;
	  padding-left:25px;
	  box-shadow: 0px 0px 8px 0 rgba(0, 0, 0, 0.2);
	background:white;

	}
	
	#ad_each_search_item{
	
		margin-top:15px;
		
		margin-left:5px;
		
		width:330px;
		height:250px;
		display:inline-block;
		
	
	}
	
	div.ad_searchitem_div {
		
		overflow:hidden;
		white-space:nowrap;
		margin-left:10px;
		margin-right:0px;
		padding-top:50px;
		
		
	}
	
	#ad_title{
		position:relative;
		top:30px;
		left:20px;
		font-weight:bold;
		font-size:16px;
		color:#646566;
	}

	#itemcategory{
		position:absolute;
		left:0px;
		box-shadow: 1px 0px 5px 0px rgba(0, 0, 0, 0.2);
		padding-top:110px;
		padding-left:100px;
		width:300px;
		height:350px;
		font-size:25px;
		font-weight:bold;
		color:#646566;
		
	}
	
	#search_text{
		position:relative;
		top:30px;
		left:100px;
		color:black;
	}
	
	#search_text_link,#search_text_link:link, #search_text_link:active, #search_text_link:hover ,#search_text_link:visited{
		text-decoration:none;
		color:black;
		font-weight:bold;
		font-size:15px;
	}
	
	#offertext{
		position:relative;
		color:green;
		margin-top:5px;
		left:-0px;
	}
	
	#row_container {
	margin-top:-3px;
	}
	
	.left-button{
	position:absolute;
	left:300px;
	background-color: white; /* Green */
	box-shadow: 2px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
	margin-top:130px;
    cursor: pointer;
	height:80px;
	width:50px;
	outline:0;
	z-index:1;
	opacity:0.988;
	border-radius:0px;
	border-top-right-radius:0.15em;
	border-bottom-right-radius:0.15em;
	}
	
	.right-button{
	position:absolute;
	right:6px;
	background-color: white; /* Green */
	box-shadow: -2px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
    cursor: pointer;
	height:80px;
	width:50px;
	outline:0;
	margin-top:130px;
	z-index:1;
	opacity:0.988;
	border-radius:0px;
	border-top-left-radius:0.15em;
	border-bottom-left-radius:0.15em;
	}
	
	.left-button:hover{
		box-shadow: 2px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	.right-button:hover{
		box-shadow: -2px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	
	
	.ad_left-button{
	position:absolute;
	left:6px;
	background-color: white; /* Green */
	box-shadow: 2px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
	margin-top:90px;
    cursor: pointer;
	height:80px;
	width:50px;
	outline:0;
	z-index:1;
	opacity:0.988;
	border-radius:0px;
	border-top-right-radius:0.15em;
	border-bottom-right-radius:0.15em;
	}
	
	.ad_right-button{
	position:absolute;
	right:6px;
	background-color: white; /* Green */
	box-shadow: -2px 0px 5px 0px rgba(0, 0, 0, 0.2);
    border: none;
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
    cursor: pointer;
	height:80px;
	width:50px;
	outline:0;
	margin-top:130px;
	z-index:1;
	opacity:0.988;
	border-radius:0px;
	border-top-left-radius:0.15em;
	border-bottom-left-radius:0.15em;
	}
	
	.ad_left-button:hover{
		box-shadow: 2px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	.ad_right-button:hover{
		box-shadow: -2px 0px 8px 2px rgba(0, 0, 0, 0.2);
	}
	
	
	.mainimage{
		z-index:-1;
	}
	
	.mainimage img {
		-moz-transition: all 0.05s;
	  -webkit-transition: all 0.05s;
	  transition: all 0.05s;
	}
	.mainimage:hover img {
	  -moz-transform: scale(1.05);
	  -webkit-transform: scale(1.05);
	  transform: scale(1.04);
	}
	
	#big_wrapper{
	
	margin:0px 0px;
	display:-webkit-box;
	-webkit-box-orient:vertical;
	-webkit-box-flex: 1;
	
	}

	#productname{
		text-decoration:none;
		border:none;
		background:white;
		outline:none;
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
				<input type="text" name="query" placeholder="Search for Books and More" id="searchbar" autocomplete="off">
                  
				<div class="w3-container">
					<button class="fa fa-search" id="searchbutton" input type="submit" value="Search" /></button>
				</div>
			</form>
			
			<!--shopping cart-->
			<a href="shoppingcart.php" id="shoplink">
				<div id="shopping_cart">
		
					<div id="cart_symbol_div"> <span class="glyphicon">&#xe116;</span></div>
				
					<div id="cart_box_div"><button id="cart_box">Cart</button></div>
				</div>
			</a>
			
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
				<p><a href="contact us.php" id="contact_us">Contact Us</a></p>
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
				
				<ul>
				
				<div id="first">
					<span id="menu_list">
					<li id="button"><span>Shop by Category</span></li>
					<div id="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
					</span>
				</div>
				
				<div id="second">
					<span id="menu_list">
					<li id="button"><span>HOME</span></li>
					<div id="dropdown-content">
						<a href="#">Link 4</a>
						<a href="#">Link 5</a>
						<a href="#">Link 6</a>
					</div>
					</span>
				</div>
				
				<div id="third">
					<span id="menu_list">
					<li id="button"><span>DEALS</span></li>
					<div id="dropdown-content">
						<a href="#">Link 7</a>
						<a href="#">Link 8</a>
						<a href="#">Link 9</a>
					</div>
					</span>
				</div>
				
				<div id="fourth">
					<span id="menu_list">
					<li id="button"><span>SELL</span></li>
					<div id="dropdown-content">
						<a href="#">Link 10</a>
						<a href="#">Link 11</a>
						<a href="#">Link 12</a>
					</div>
					</span>
				</div>
				
				<li id="button">24x7 CUSTOMER SERVICE</li>
				
				<div id="your_order"><li id="button">YOUR ORDERS</li></div>
				
				</ul>
			
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
				  <label><b>Username</b></label>
				  <input type="text"  placeholder="Enter Name" name="username" required>

				  <label><b>Email</b></label>
				  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter Email" name="email" required>

				  <label><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" required>
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
			  <form class="modal-content animate" action="page.php" method="post">
			  <input type="hidden" name="submitted" value="true">
				<div class="imgcontainer">
				  <span onclick="document.getElementById('id02').style.display='none'" class="close_login" title="Close Modal">&times;</span>
				</div>

				<div class="container">
				  <label><b>Email</b></label>
				  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter Email" name="uname" required>

				  <label><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="pass" required>
					
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
				$var = $_POST['Item']; 
			
			 $raw_results = mysqli_query($con,"SELECT * FROM mainproduct
            WHERE (`Itemname` LIKE '%".$var."%')") or die(mysqli_error($con));
         
			
            while($results = mysqli_fetch_array($raw_results)){
						
							if($results['Itemname']==$var){
							echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['Itemimage'] ).'" width=250" height="250" style="cursor:pointer;"/>';
							echo 'price: '.'&#8377;'.$results['price'];
						
							}
				
					
			 }
             
        
			?>
	
				
		</div>
		
		<footer id="the_footer">
			Copyright thenewboston 2017
		</footer>
		
	</div>
	</body>
	</html>