<?php

if (isset($_POST['submitted'])){
	include('connect.php');
	    //include('/action_page.php');
	
$email= $_POST['email'];
$password= $_POST['psw'];
 
 $sqlinsert="INSERT INTO user_info (Email,Password) VALUES('$email','$password')";

if(!mysqli_query($con,$sqlinsert)){
	echo "error";
}
}

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
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	#welcome_div{position:absolute;
		border:1px solid #fff400;
		width:100px;
		height:45px;
		padding:5px 5px 5px 5xp;
		padding-left:0px;
		text-align:center;
		left:1320px;
		top:35px;
		background-color:#fff400;
		-webkit-border-radius:2px;
		-webkit-box-shadow:rgb(0,0,0) 0px 3px 8px;
		cursor:pointer;
	}
	
	#welcome{
		position:relative;
		left:2.5px;
		font-weight:bold;
		font-size:15px;
	}
		
	#dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;

	}
	#dropdown-content {
		display: none;
		position: absolute;
		top:45px;
		background-color: #f9f9f9;
		width:166.9px;
		height:200px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}
	
	#dropdown-content a:hover {background-color: #f1f1f1}

	#welcome_div:hover #dropdown-content {
    display: block;
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
			
			<!--WELCOME USER-->
			<div id="welcome_div">
				<span id="welcome">welcome</span> <br/>
				<?php echo $_POST['email']; ?>
				<div id="dropdown-content">
					<a href="#">My orders</a>
					<a href="#">link1</a>
					<a href="#">link1</a>		
					<a href="feedback form.php">complaints/feedbacks</a>				
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