<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});
</script>





<?php
// Start the session
session_start();
include('connect.php');


if (isset($_POST['submitted0'])){
	include('connect.php');
	    //include('/action_page.php');

$name= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['psw']; 
 $sqlinsert="INSERT INTO user_info (Username,Email,Password) VALUES('$name','$email','$password')";
}



if (isset($_POST['submitted2'])){
	include('connect.php');
	    //include('/action_page.php');

$_SESSION["em"] = $_POST['uname'];
$_SESSION["pas"] = $_POST['pass'];
	
$emal= $_POST['uname'];
$passwod= $_POST['pass'];

  $raw_results = mysqli_query($con,"SELECT * FROM user_info WHERE Email='".$emal."' and Password='".$passwod."' ") or die(mysqli_error($con));
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
            while($results = mysqli_fetch_array($raw_results)){
				if($results['Email']==$emal and $results['Password'] == $passwod){
					$_SESSION["username"] =$results['Username'];
				}
			}
		}
	elseif(empty((mysqli_num_rows($raw_results)))){
				$_SESSION["em"]="";
				$_SESSION["pas"] = "";
	
$emal= "";
$passwod= "";
$varr='ee';
		}	 
}

if (isset($_POST['submitted3'])){
	include('connect.php');
	    
$_SESSION["em"] ="";
$_SESSION["pas"] ="";

}

if (isset($_POST['submitted4'])){
	include('connect.php');
	    
$_SESSION["item"] = $_POST['Item'];
header("Location: allproductpage.php");

}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative Link Effects: Subtle and modern effects for links or menu items" />
	<meta name="keywords" content="link effect, css transition, style, inspiration, css3, menu item, web design" />
	<meta name="author" content="Codrops" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
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
	/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_1.gif) center no-repeat #fff;
}


	#big_wrapper{
		cursor:default;
	}
	#top_header{
	background:#41d9f4;
	
	}
	#top_menu{
		top:-10px;
	}
	#new_div{
	display:-webkit-box;
	-webkit-box-orient:vertical; 
	background:#f4f5f7;	
	
	}
	#top_design{
		position:fixed;
		width:100%;
		z-index:2;
	 box-shadow:0px 0.4px 5px #0d5cad;
	}
		input {
  
	outline:none;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
   border-bottom:1px solid #9ecaed;
    box-shadow: 0px 1px 0px #9ecaed;
   -moz-transition: all 1s;
	  -webkit-transition: all 1s;
	  transition: all 1s;
}
	.modal{z-index:3;}
	
	#top_menu{
	margin-top
	background:#073b70 ;
	color:white;
	height:30px;
	margin-top:100px;
}


#searchbar{
	box-shadow: 0px 2px 5px #454647;
}

#searchbar:hover, #searchbar:focus {
	box-shadow: 0px 3px 8px #454647;
}

#cart_box{
	box-shadow: 0px 2px 5px #454647;
}
#cart_box:active{
	font:normal 18px Arial;
	color:black;
	width:120px;
	height:45px;
	background-color:#fff400;
	box-shadow: 0px 2px 5px #454647;
	border: none;
    text-decoration:none;
	outline:none;
	border-radius:3%;
}

#shopping_cart{
	position:absolute;
	top:-8px;
}


#top_menu li{
	background: #4f6819 ;
	display:inline-block;
	list-style:none;
	padding-top:15px;
	padding-bottom:10px;
	padding-left:25px;
	padding-right:25px;
	font:bold 14px Tahoma;
	border-right:2px solid  #fff400;
	margin-top:10px;
}
#the_footer{
		background:white;
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

	#searchbutton{
		outline:none;
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
	 height:300px;
		margin-right:8px;
		margin-left:8px;
	  margin-top:0px;
	  margin-bottom: 17px;
	  padding: 0 8px;
	  padding-bottom:0px;
	  box-shadow: 0px 0px 8px 0 rgba(0, 0, 0, 0.2);
	background:white;
	position:relative;

	}
	
	@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
	}
	}




	#each_search_item{
	
		margin-top:15px;
	
		margin-left:15px;
		
		
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
		margin-right:8px;
		
		
	
		display:inline-block;
		
	
	}
	
	#ad_each_search_item:hover {
	
	
		
		
		   box-shadow: 0px 10px 15px rgba(0,0,0,0.08);
  transition: box-shadow 0.3s ease-in-out;
	
	
		
	
	}
	
	.ad_mainimage{
		 overflow: hidden;
		 border-radius:3px;
		 cursor:pointer;
	}
	.ad_mainimage:hover{
		 border-radius:3px;
	}
	
	.ad_mainimage img {
		-moz-transition: all 0.7s;
	  -webkit-transition: all 0.7s;
	  transition: all 0.7s;
	    
	 
	}
	.ad_mainimage:hover img {
	  -moz-transform: scale(1.07);
	  -webkit-transform: scale(1.07);
	  transform: scale(1.07);
		
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
		height:300px;
		font-size:25px;
		font-weight:bold;
		color:#646566;
		
	}
	
	#search_text{
		position:relative;
		top:10px;
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
		left:-50px;
	}
	
	#pdt_name{
		margin-top:20px;
		position:relative;
		left:-20px;
	}
	
	#row_container {
	margin-top:10px;
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
	margin-top:110px;
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
	margin-top:110px;
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
		z-index:-2;
	}
	
	.mainimage img {
		-moz-transition: all 0.05s;
	  -webkit-transition: all 0.05s;
	  transition: all 0.05s;
	 margin-top:30px;
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
	
	.containerx{
		width:100%;
		margin-top:10px;
		
		}
		
		.item{
			width:1519px;
			height:300px;
			cursor:pointer;
		}
		.left.carousel-control{
	border:none;
	width:150px;
	height:300px;
	
		}
		
		.glyphicon.glyphicon-chevron-left:hover{
			color:white;
		}
		
		.glyphicon.glyphicon-chevron-left{	
		font-size:50px;
		left:50px;
		top:130px;
		color:white;
		}
		
			.glyphicon.glyphicon-chevron-right{	
		font-size:50px;
		right:80px;
		top:140px;
		color:white;
		}
		
		.right.carousel-control{
	border:none;
	width:150px;
	height:300px;
		}
		
	.glyphicon.glyphicon-chevron-right:hover{color:white;}

	#bar{
		border:none;
		outline:none;
		background:white;
	}
	
@media screen and (max-width:100px){
	#big_wrapper{
		width:100%;
	}
}

#welcome_div{
		position:absolute;
		left:500px;
		top:0px;
		
		
	}	
	
	
	#topest_menu a {
	position: relative;
	left:-25px;
	display: inline-block;
	margin: 15px 25px;
	margin-top:-5px;
	outline: none;
	color: black;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 0px;
	font-weight: 400;
	text-shadow: 0 0 1px rgba(255,255,255,0.3);
	font-size:1em;
	font-family:Calibri;

}

#topest_menu a:hover,
#topest_menu a:focus {
	outline: none;
	text-decoration:none;
	color:#6a6a6b;
}


/* Effect 3: bottom line slides/fades in */
.cl-effect-3 a {
	padding: 8px 0;
}

.cl-effect-3 a::after {
	position: absolute;
	top: 70%;
	left: 0;
	width: 100%;
	height: 2px;
	background: rgba(0,0,0,0.1);
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	-moz-transition: opacity 0.3s, -moz-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	transform: translateY(10px);
}

.cl-effect-3 a:hover::after,
.cl-effect-3 a:focus::after {
	opacity: 1;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	transform: translateY(0px);
}

	</style>


</head>
<body>
	<div class="se-pre-con"></div>
	
	<div id="big_wrapper">
	<div id="top_design">
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
			
			
			<div id="topestmenu">	
			<!--Advertise-->
			<div id="advertise_div">
				<nav class="cl-effect-3" id="topest_menu">
				<a href="">Advertise</a>
				</nav>
			</div>
			
			<!--sell on website-->
			<div id="sell_on_div">
				<nav class="cl-effect-3" id="topest_menu">
					<a href="">Sell on Testname</a>
				</nav>
			</div>
			
			<!--contact Us-->
			<div id="contact_us_div">
				<nav class="cl-effect-3" id="topest_menu">
					<a href="contact us.php" class="f">Contact Us</a>
				</nav>
			</div>
			
			<!--About Us-->
			<div id="about_us_div">
				<nav class="cl-effect-3" id="topest_menu">
					<p><a href="">About Us</a>
				</nav>
			</div>
			
			<!--help-->
			<div id="help_div">
				<nav class="cl-effect-3" id="topest_menu">
					<a href="">Help</a>
				</nav>
			</div>
			
			</div>
			
			<div id="signingup">
			<!--WELCOME USER-->
			
			
			<?php 
			if(!empty($_SESSION["em"]) && !empty($_SESSION["pas"])){;
                    echo '<div id="welcome_div">';                 ?>
				 
				<span id="welcome">welcome</span> <br/>
				<form action="MAINPAGE.php" method="post">
				<input type="hidden" name="submitted3" value="true">
				 <button type="submit" >Logout</button>
				</form>
			
			<?php echo $_SESSION["username"];
			echo'</div>';
			}
				
			else { 
			?>
			
			
			<!--sign up-->
			<div id="sign_up_div">
				<nav class="cl-effect-3" id="topest_menu">
					<a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</a>
				</nav>
			</div>
			<!--log in-->
			<div id="log_in_div">
				<nav class="cl-effect-3" id="topest_menu">
					<a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log In</a>
				</nav>
			</div>
		
			
			<?php } ?>
			
			<!--bell icon-->
				<div id="bell_div"><i class="material-icons"><span="bell">&#xe7f4;</span></i></div>
				</div>
		</header>
		</div>
		
		<div>
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
		</div>
		
		
					   <script>
			// ===== Scroll to Top ==== 
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('#top_design').css({marginTop:'-23px',transition:'all 0.4s'}); 
					$('#cart_box').fadeOut(200);    // Fade in the arrow
					$('#topestmenu').fadeOut(200);    
					$('#signingup').css({position:'relative',left:'-10px',top:'-18px'});
					$('#searchbar').css({boxShadow:'none', borderRadius:'20px'});
					$('#searchbutton').css({borderRadius:'20px',width:'50px',position:'relative',left:'11px'});
				} else {
					$('#top_design').css({marginTop:'',transition:'all 0.1s'}); 
					$('#cart_box').fadeIn(200);   // Else fade out the arrow
					$('#topestmenu').fadeIn(200);   // Else fade out the arrow
					$('#signingup').css({position:'static'});
					$('#searchbar').css({boxShadow:'', borderRadius:''});
					$('#searchbutton').css({borderRadius:'',width:'',position:'',left:''});
				}
			});
	
			</script>
			
			
		<div id="new_div">
				
			<script type="text/javascript" src="jquery.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#feedback').load('check.php').show();
			$('#email_input').blur(function(){
				$.post('check.php',{email: sign.email.value },
			function(result){
				$('#feedback').html(result).show();
			});
			});
			});
			</script>	
				
				
			<!--signup-->
			<div id="id01" class="modal">
				<p class="animate"id="signup_image">Sign up</p>
				<a href="http://www.facebook.com"><button class="loginBtn loginBtn--facebook">
				  Login with Facebook
				  </button></a>

				<a href="http://www.gmail.com"><button class="loginBtn loginBtn--google">
				  Login with Google
				</button></a>
			  <form class="modal-content animate" action="MAINPAGE.php" method="post">
			  
                 <input type="hidden" name="submitted0" value="true">
				<span onclick="document.getElementById('id01').style.display='none'" class="close_signup" title="Close Modal">&times;</span>
				<div class="container">
				  <label><b>Username</b></label>
				  <input type="text"  placeholder="Enter Name" name="username" required>

				  <label><b>Email</b></label>
				  <input type="email" id="email_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter Email" name="email" autocomplete="off" required>
				<span id="loginwarn" style="position:absolute;top:145px;left:270px;font-size:20px;color:red;font-weight:bold;">&#9888;</span>
				<div id="feedback"></div>
	
				  <label><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" autocomplete="off" name="psw" required>
				  <input type="checkbox" checked="checked"> Remember me
				  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				  <div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<div id="signupsubmit"><a href="MAINPAGE.php"><button type="submit" class="signupbtn">Sign Up</button></a></div>
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
				<?php
				
				?>
			}
		}
		</script>

			
			<!--login-->
			<div id="id02" class="modal">
				<p class="animate"id="signup_image">Login</p>
			  <form class="modal-content animate" action="MAINPAGE.php" method="post">
			  <input type="hidden" name="submitted2" value="true">
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
			
			
			
			
			
			
			<!--return to top icon-->
			<!-- Return to Top -->
			<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


			<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	
			
			<script>
			// ===== Scroll to Top ==== 
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('#return-to-top').fadeIn(200);    // Fade in the arrow
				} else {
					$('#return-to-top').fadeOut(200);   // Else fade out the arrow
				}
			});
			$('#return-to-top').click(function() {      // When arrow is clicked
				$('body,html').animate({
					scrollTop : 0                       // Scroll to top of body
				}, 500);
			});
			</script>
			
			
			
				
					<div class="containerx">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators" style="z-index:1;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

  <div class="carousel-inner">

      <div class="item active">
	  <a href="adpage.php">
        <img src="ad100.jpg" alt="Los Angeles" style="width:100%;">
        </a>
      </div>

      <div class="item">
        <img src="ad101.jpg" alt="Chicago" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="ad7.jpg" alt="New York" style="width:100%;">
      </div>
  
	  <div class="item">
        <img src="ad5.jpg" alt="New York" style="width:100%;">
      </div>
	  
    </div>			


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
   </div>
   </div>
			
	<span class="row">
				<div id="row_container">
			  <div class="column">
			  <span id="itemcategory">BEST <p>BARGAINS</p></span>
		
		
		<?php

				include('connect.php');
					
						$raw_results = mysqli_query($con,"SELECT * FROM mainproduct") or die(mysqli_error($con));
						 
						echo '<div class="searchitem_div" id="content1">';
				?>
				
				<button class="left-button" id="L_button1">&#10094;</button>
					<button class="right-button"  id="R_button1">&#10095;</button>
				<?php
							
							while($results = mysqli_fetch_array($raw_results)){
								echo '<div id="each_search_item">';
										echo '<div class="mainimage">';
											echo '<form action="MAINPAGE.php" method="post">';
											 echo '<input type="hidden" name="submitted4" value="true">';
												echo '<button id="bar" type="submit"  name="Item" value="'.$results['Itemname'].'">'.'<img src="data:image/jpeg;base64,'.base64_encode( $results['Itemimage'] ).'" width=200" height="160" style="cursor:pointer;"/>'.'</button>';
											
										echo '</div>';	
										
											echo'<div id="search_text">';
												echo '<a  href="item.php" onclick="return runMyFunction();">';
													
													echo '<p id= "pdt_name">';
													
														echo '<input type="submit" id="productname" name="Item" value="'.$results['Itemname'].'">';
														echo '</p>';
												echo '</a>';
												
												echo '<p id="offertext">';
													echo $results['Itemname'];
														echo "10% full off";
												echo '</p>';
												
											echo '</div>';
											echo'</form>';
										
									echo '</div>';
									
							 }
						echo'</div>';
				?>
				
     <script data-require="jquery" data-semver="2.1.1" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

   
	<script>

   $('#R_button1').click(function() {
      event.preventDefault();
      $('#content1').animate({
        scrollLeft: "+=1200px"
      }, "medium");
   });
   
     $('#L_button1').click(function() {
      event.preventDefault();
      $('#content1').animate({
        scrollLeft: "-=1200px"
      }, "medium");
   });
   </script>
   
   </div>
   
	
	
			<div class="ad_column">
				<span id="ad_title">OUR FEATURED BRANDS </span>
		<?php

				include('connect.php');
					
						$raw_results = mysqli_query($con,"SELECT * FROM adprduct") or die(mysqli_error($con));
						 
						echo '<div class="ad_searchitem_div" id="content_ad">';
				?>
			
				<button class="ad_left-button" id="L_button_ad">&#10094;</button>
					<button class="ad_right-button" id="R_button_ad">&#10095;</button>
				<?php
							while($results = mysqli_fetch_array($raw_results)){
								echo '<div id="ad_each_search_item">';
										echo '<div class="ad_mainimage">';
											echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['ad_image'] ).'" width=380" height="220" style="border-radius:3px;" cursor:pointer;" />';
											echo '</div>';
										
									echo '</div>';
							 }
						echo'</div>';
				?>
				
				<script data-require="jquery" data-semver="2.1.1" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
				<script>
				// Add your javascript here

			   $('#R_button_ad').click(function() {
				  event.preventDefault();
				  $('#content_ad').animate({
					scrollLeft: "+=300px"
				  }, "slow");
			   });
			   
				 $('#L_button_ad').click(function() {
				  event.preventDefault();
				  $('#content_ad').animate({
					scrollLeft: "-=300px"
				  }, "slow");
			   });
			   </script>
				</div>
			
			
			
			  <div class="column">
				<span id="itemcategory">BEST <p>BARGAINS</p></span>
				
		<?php

				include('connect.php');
					
						$raw_results = mysqli_query($con,"SELECT * FROM mainproduct") or die(mysqli_error($con));
						 
						echo '<div class="searchitem_div" id="content2">';
				?>
			
				<button class="left-button" id="L_button2">&#10094;</button>
					<button class="right-button" id="R_button2">&#10095;</button>
				<?php
							while($results = mysqli_fetch_array($raw_results)){
								echo '<div id="each_search_item">';
										echo '<div class="mainimage">';
											echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['Itemimage'] ).'" width=200" height="160" style="cursor:pointer;"/>';
											echo '</div>';
											echo'<div id="search_text">';
												echo '<a href="#" id="search_text_link">';
												echo '<p id= "pdt_name">';
													echo $results['Itemname'].'';
												echo '</p>';
													echo '<p id="offertext">';
													echo "10% full off";
													echo '</p>';													
												echo '</a>';
											echo '</div>';
											
										
									echo '</div>';
							 }
						echo'</div>';
				?>
				 <script data-require="jquery" data-semver="2.1.1" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<script>
				// Add your javascript here

			   $('#R_button2').click(function() {
				  event.preventDefault();
				  $('#content2').animate({
					scrollLeft: "+=300px"
				  }, "slow");
			   });
			   
				 $('#L_button2').click(function() {
				  event.preventDefault();
				  $('#content2').animate({
					scrollLeft: "-=300px"
				  }, "slow");
			   });
			   </script>
			  </div>
			  
			  <div class="column">
				<span id="itemcategory">BEST <p>BARGAINS</p></span>
				
		<?php

				include('connect.php');
					
						$raw_results = mysqli_query($con,"SELECT * FROM mainproduct") or die(mysqli_error($con));
						 
						echo '<div class="searchitem_div" id="content3">';
				?>
			
				<button class="left-button" id="L_button3">&#10094;</button>
					<button class="right-button" id="R_button3">&#10095;</button>
				<?php
							while($results = mysqli_fetch_array($raw_results)){
								echo '<div id="each_search_item">';
										echo '<div class="mainimage">';
											echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['Itemimage'] ).'" width=200" height="160" style="cursor:pointer;"/>';
										echo '</div>';	
											echo'<div id="search_text">';
												echo '<a href="#" id="search_text_link">';
												echo '<p id= "pdt_name">';
													echo $results['Itemname'].'';
												echo '</p>';
													echo '<p id="offertext">';
													echo "10% full off";
													echo '</p>';													
												echo '</a>';
											echo '</div>';
											
										
									echo '</div>';
							 }
						echo'</div>';
				?>
				 <script data-require="jquery" data-semver="2.1.1" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<script>
				// Add your javascript here

			   $('#R_button3').click(function() {
				  event.preventDefault();
				  $('#content3').animate({
					scrollLeft: "+=300px"
				  }, "slow");
			   });
			   
				 $('#L_button3').click(function() {
				  event.preventDefault();
				  $('#content3').animate({
					scrollLeft: "-=300px"
				  }, "slow");
			   });
			   </script>
			   

			
			  </div>
			  
			  
			  </div>
			</span>
		
				
		</div>
		
		<footer id="the_footer">
			Copyright thenewboston 2017
		</footer>
		
	</div>
	</body>
	</html>