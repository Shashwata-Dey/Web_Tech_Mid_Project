<?php include_once "php_code/login_validation.php" ;?>
<html>
<head>
    <title>KENAKATA SUPERSHOP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header id="id2">
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
		
		<div class="left" >
		    <ul>
				<li><a href="home.php">Category</a></li>
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
	    <center><h1><span style="color:white;">Login</span></h1></center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">User Name:</span></td>
                        <td align="left"><input type="text" placeholder="User Name..." value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_uname;echo $err_msg;?></span></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">Password:</span></td>
                        <td align="left"><input type="password" placeholder="Password..." value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
					    <td style="font-size: 22px;"><a href="registration.php"><span style="color:white;"><u>Create an account?</u></span></a></td>
                        <td colspan="2" align="right" >
                            <input type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
		</div>
	</header>
</body>

</html>