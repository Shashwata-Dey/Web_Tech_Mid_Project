<?php
    $fname="";
	$err_fname="";
	$uname="";
	$err_uname="";
	$pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $gender="";
    $err_gender="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $city="";
    $err_city="";
	$hasError=false;
	if(isset($_POST["ok"])){
        //FULL NAME VALIDATION
        if(empty($_POST["fname"])){
			$err_fname="Full Name Required";
			$hasError =true;	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
        }
        //USERNAME VALIDATION
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $hasError=true;
        }
		else{
			$uname = htmlspecialchars($_POST["uname"]);
        }
        //PASSWORD VALIDATION
		if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
            $hasError=true;
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="Password and Confirm Password must be same.";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        
        
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        else{
            $err_gender="Select a Gender!";
            $hasError=true;
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $hasError=true;
        }
        //PHONE VALIDATION
        if(empty($_POST["phone"])){
            $err_phone="Contact No. Required";
            $hasError=true;
        }
        else{
            $phone=$_POST["phone"];
        }
        //CITY VALIDATION
        if(isset($_POST["city"])){
            $city=$_POST["city"];
        }
        else{
            $err_city="Select a City!";
            $hasError=true;
        }
		
		if(!$hasError){
			$users = simplexml_load_file("xml_data/users.xml");
			
            $user = $users->addChild("user");
            $user->addChild("fname",$fname);
			$user->addChild("uname",$uname);
            $user->addChild("pass",$pass);
            $user->addChild("gender",$gender);
            $user->addChild("email",$email);
            $user->addChild("phone",$phone);
            $user->addChild("city",$city);
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			$file = fopen("xml_data/users.xml","w");
			fwrite($file,$xml->saveXML());
			header("Location: login.php");
		}
	}
	
?>