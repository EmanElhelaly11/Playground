<?php
session_start();
include_once'../db/query.php';
include '../validation/validation.php';
if(isset($_POST['register']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	if($_POST['username']==NULL)
	{
		echo "<h3>Sorry Enter Your Username</h3>";
		include_once'register.html';
	}
	elseif($_POST['password']==NULL)
	{
		echo "<h3>Sorry Enter Your password</h3>";
		include_once'register.html';
	}
	else
	{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$boolusername=validateusername($username);
			$boolpassword=validatepassword($password);
			if($boolusername==true && $boolpassword==true)
	        {
			    $clientselect=selectquery("client","*","username='$username'");
			    if($clientselect==false)
			    {
					$hashed_password = password_hash($password,PASSWORD_DEFAULT);

				    $clientinsert=insertquery("client","username , password","'$username','$hashed_password'");
				    if($clientinsert)
				    {
				    	echo "<h3> Your account Is created so login</h3>";
				    	include_once'login.html';
				    }
				    else

				    {
				    	echo "error in insertion"."<br>";
				    	include_once'register.html';
				    }
			    }
			    else
			    {
			    	echo "<h3>Sorry you  have an account so login</h3>"."<br>";
			    	include_once'login.html';
			    }
			}
	}
	
}
else
{
	include_once'register.html';
}