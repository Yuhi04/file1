<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>University website design-easy tutorials</title>
	<style>
.header{
	min-height: 100vh;
	width: 100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(bravo.jpg);
	background-position: center;
	background-size: cover;
	position: relative;
}
nav{
	display: flex;
	padding: 2% 6%;
	justify-content: space-between;
	align-items: center;
}
nav img{
width: 150px;  	
}
.nav-links{
	flex: 1;
	text-align: right;
}
.nav-links ul li{
list-style: none;
display: inline-block;
padding: 8px 12px;
position: relative;
}
.nav-links ul li a{
color: #fff;
text-decoration: none;
font-size: 13px;
}
.nav-links ul li::after{
content: '';
width: 0px;
height: 2px;
background: #f44336;
display: block;
margin: auto;
transition: 0.5s;	
}
.nav-links ul li:hover::after{
width: 100%;	
}
.text-box{
	width: 90%;
	color: #fff;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.text-box h1{
	font-size: 62px;
}
.text-box p{
	margin: 10px 0 40px;
	font-size: 14px;
	color: #fff;
}
</style>
</head>
<body>
<section class="header">	
<nav>
<img src="download.jpg">
<div class="nav-links" id="navLinks">
<ul>
<li><a href="">HOME</a></li>
<li><a href="">ABOUT</a></li>
<li><a href="log.php">LOGIN</a></li>
<li><a href="">BLOG</a></li>
<li><a href="">CONTACT</a></li>	
</ul>	
</div>
</nav>
<div class="text-box">
<h1> World's biggest Hotel</h1>
<p>making fast food is now easiest thing in world.<br>you just need to learn cooking</p>	
<a href="">Visit us to know more</a>
</div>
</section>
</body>
</html>