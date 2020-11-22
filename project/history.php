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
    <header id="id3">
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
		<div class="cart">	
	    <form>
		    <fieldset style="background-color:#ff3333">
			<center>
			<center >
                <legend style="font-size:20px;color:#000000";><h1><b><u>PURCHASE HISTORY</u></b></h1></legend>
		        <table style="border: 1px solid black;">
			        <tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">ORDER NO</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">Total Amount</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Discount</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Total Paid</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Return</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Order Placed/Cancel</td>	
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">01</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">2000</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">00</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">2000</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">00</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Placed</td>	
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">02</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">4000</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">100</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">4000</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">100</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Placed</td>	
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">03</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">5000</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">100</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">00</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">00</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Cancel</td>	
			        </tr>
					
			    </table>
			</center>
			</fieldset>
			
        </form>
		</div>
	</header>
</body>

</html>