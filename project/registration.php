<?php include_once "php_code/registration_validation.php" ;?>
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
				<li><a href="h">Top Selling</a></li>
				<li><a href="h">Contact Us</a></li>
				<li><a href="h">About Us</a></li>
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
				<li><a href="h">Category</a></li>
				<li><a href="h">Drinks</a></li>
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
		<div class="loginbutton">	
	    <center>
            <h1><span style="color:white;">Welcome to Registration</span></h1>
        </center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Full Name:</span></td>
                        <td align="left"><input type="text" placeholder="Full name...." value="<?php echo $fname;?>" name="fname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 30px;"><span style="color:white;">User Name:</span></td>
                        <td align="left"><input type="text" placeholder="User name..." value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Password:</span></td>
                        <td align="left"><input type="password" placeholder="Password..." value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Confirm Password:</span></td>
                        <td align="left"><input type="password" placeholder="Password must be same.." value="<?php echo $cpass;?>" name="cpass"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Gender:</span></td>
                        <td>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </td>
                        <td align="left"><span style="color:white;">*<?php echo $err_gender;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">E-mail :</span></td>
                        <td align="left"><input type="text" placeholder="Email must contain @" value="<?php echo $email;?>" name="email"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_email;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">Contact No.:</span></td>
                        <td align="left"><input type="number" placeholder="Contact No. Required..." value="<?php echo $phone;?>" name="phone"></td>
                        <td align="left"><span style="color:white;">*<?php echo $err_phone;?></span></td>
                    </tr>
                    <tr>
                        <td align="left"style="font-size: 30px;"><span style="color:white;">City:<span></td>
                        <td align="left">
                            <select name="city">
                                <option disabled selected>Select a City</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Sylhet</option>
                            </select>
                        </td>
                        <td align="left"><span style="color:white;">*<?php echo $err_city;?></span></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <input type="submit" name="ok" value="REGISTER">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
		</div>
	</header>
</body>

</html>