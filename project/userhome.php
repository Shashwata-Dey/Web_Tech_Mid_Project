<?php
    if(!isset($_COOKIE["uname"])){
		header("Location: login.php");
	}
?>
<html>
<head>
    <title>KENAKATA SUPERSHOP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header id="id1">
	    <div class="up" >
		    <div class=logo>
			    <img src="images/logo.png">
			</div>
		    <ul>
			    <li><a href="userhome.php">Home</a></li>
				<li><a href="profile.php">MyProfile</a></li>
				<li><a href="cart.php">MyCart</a></li>
				<li><a href="history.php">History</a></li>
				<li><a href="review.php">Review</a></li>
			</ul>
		</div>
		<div class="search">
            <td>
                <input type="text" placeholder="Search your product here" size="30" name="phoneCode"> 
            </td>
            <td><input type = "submit" value = "search"></td>
		</div>
		<div class="logout">
		    <ul>
			    <li><a href="home.php">Logout</a></li>
			</ul>
		</div>
		<div class="left" >
		    <ul>
				<li><a href="userhome.php">Category</a></li>
				<li><a href="voucher.php">Voucher & Offers</a></li>
				<li><a href="drinks.php">Drinks</a></li>
				<li><a href="h">Gadgets</a></li>
				<li><a href="h">Snacks</a></li>
				<li><a href="h">Cooking Assentials</a></li>
				<li><a href="h">Milk & Dairy Products</a></li>
				<li><a href="h">Drinks</a></li>
				<li><a href="h">Gadgets</a></li>
				<li><a href="h">Snacks</a></li>
				<li><a href="h">Cooking Assentials</a></li>
				<li><a href="h">Milk & Dairy Products</a></li>
			</ul>
		</div>
		<div class="picture">
		    <p><img src="images/discount.gif"></p>
		</div>
	</header>
</body>
</html>