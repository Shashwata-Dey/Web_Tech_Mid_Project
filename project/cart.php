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
                <legend style="font-size:25px;color:#000000";><h1><b><u>My Cart</u></b></h1></legend>
		        <table style="border: 1px solid black;">
			        <tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Product Name</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">Quantity</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Price Per Quantity</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Amount</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">Remove</td>
						
			        </tr>
					 <tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Soap</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">2</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">40</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">80</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Biscuit</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">5</td>
						<td align="center"style="border: 1px solid black;font-size: 25px;">50</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">250</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Chips</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">10</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">50</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">500</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Chanachur</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">10</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">50</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">500</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Drinks</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">10</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">50</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">500</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
			            <td align="center" style="border: 1px solid black;font-size: 25px;">Snacks</td>
				        <td align="center" style="border: 1px solid black;font-size: 25px;">10</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">50</td>
						<td align="center" style="border: 1px solid black;font-size: 25px;">500</td>
						<td align="center" style= "border: 1px solid black;font-size: 25px;" >
                            <input type="submit" name="remove" value="Remove">
                        </td>
			        </tr>
					<tr>
						<td colspan="3" align="center" style="border: 1px solid black;font-size: 25px;">Voucher Code :</td>
						<td colspan="2">
                            <input type="text" placeholder="Place Your Voucher Code Here.." size="30" name="voucher"> 
                        </td>	
			        </tr>
					<tr>
						<td colspan="3"align="center" style="border: 1px solid black;font-size: 25px;">Discount Amount</td>
						<td colspan="2" align="center" style="border: 1px solid black;font-size: 25px;">330</td>
			        </tr>
					<tr>
						<td colspan="3"align="center" style="border: 1px solid black;font-size: 25px;">Total Amount</td>
						<td colspan="2" align="center" style="border: 1px solid black;font-size: 25px;">2030</td>
			        </tr>
					<tr>
					    <td colspan="3" align="center" style= "border: 1px solid black;font-size: 35px;" >
                            <input type="submit" name="place order" value="CANCEL ORDER">
                        </td>
						<td colspan="2" align="center" style= "border: 1px solid black;font-size: 35px;" >
                            <input type="submit" name="place order" value="PLACE ORDER">
                        </td>
			        </tr>
			    </table>
			</center>
			</fieldset>
			
        </form>
		</div>
	</header>
</body>

</html>