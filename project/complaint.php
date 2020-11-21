<?php include_once "php_code/registration_validation.php" ;?>
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
			    <li><a href="home.php">Home</a></li>
				<li><a href="selling.php">Top Selling</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="complaint.php">Complaint</a></li>
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
			    <li><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div class="left" >
		    <ul>
				<li><a href="complaint.php">Category</a></li>
				<li><a href="category.php">Drinks</a></li>
				<li><a href="category.php">Gadgets</a></li>
				<li><a href="category.php">Snacks</a></li>
				<li><a href="category.php">Cooking Assentials</a></li>
				<li><a href="category.php">Milk & Dairy Products</a></li>
				<li><a href="category.php">Drinks</a></li>
				<li><a href="category.php">Gadgets</a></li>
				<li><a href="category.php">Snacks</a></li>
				<li><a href="category.php">Cooking Assentials</a></li>
				<li><a href="category.php">Milk & Dairy Products</a></li>
			</ul>
		</div>
		<div class="loginbutton">	
	    <center>
            <h1><span style="color:white;font-size:40px;">Complaint Form</span></h1>
        </center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left"style="font-size: 34px;"><span style="color:white;">Name:</span></td>
                        <td align="left"><input type="text" value="<?php echo $fname;?>" name="fname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 34px;"><span style="color:white;">User Name:</span></td>
                        <td align="left"><input type="text" value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_uname;?></span></td>
                    </tr>
                    
                    <tr>
                        <td align="left"style="font-size: 34px;"><span style="color:white;">E-mail :</span></td>
                        <td align="left"><input type="text" value="<?php echo $email;?>" name="email"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_email;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 34px;"><span style="color:white;">Contact No.:</span></td>
                        <td align="left"><input type="number" value="<?php echo $phone;?>" name="phone"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_phone;?></span></td>
                    </tr>
					<tr>
                        <td align="left"style="font-size: 34px;"><span style="color:white;">Complaint:</span></td>
                        <td><textarea name="complaint"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <input type="submit" name="ok" value="SUBMIT">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
		</div>
	</header>
</body>

</html>