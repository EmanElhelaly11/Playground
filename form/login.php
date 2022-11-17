<?php
session_start();
include_once'../db/query.php';
include '../validation/validation.php';
if(isset($_POST['login']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	if($_POST['username']==NULL)
	{
		echo "sorry enter your username";
		include_once'login.html';
	}
	elseif($_POST['password']==NULL)
	{
		echo "sorry enter your password";
		include_once'login.html';
	}
	else
	{
		if($_POST['choose']=="admin")
		{
			if(isset($_SESSION['adminlogin']))
			{
				header("location:../admin/playground/playground.php");
				exit;
			}
			else
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$boolusername=validateusername($username);
				$boolpassword=validatepassword($password);
				if($boolusername==true && $boolpassword==true)
		        {
				    $adminselect=selectquery("admin","*","username='$username'");
				    if($adminselect == false)
				    {
					    echo "sorry invalid data";
					    include_once'login.html';
				    }
				    else
				    {
				    	$data=mysqli_fetch_array($adminselect);
					    $adminid = $data['id'];
					    $_SESSION['adminlogin'] = $adminid;
				    	if($password==$data['password'])
				    	{
				    	    header("location:../admin/playground/playground.php");
				    	    
				    	}
				    	else
				    	{
				    		echo "sorry invaild username or password"."<br>";
				    		include_once'login.html';		
				        }
				    	
				    }
				}
				else
				{
					echo "rehj";
				}
			}	
		}
		elseif($_POST['choose']=="client")
		{
			if(isset($_SESSION['clientlogin']))
			{
				header("location:../play.php");
				exit;
			}
			$username=$_POST['username'];
			$password=$_POST['password'];
			$boolusername=validateusername($username);
			$boolpassword=validatepassword($password);
			if($boolusername==true && $boolpassword==true)
	        {
			    $adminselect=selectquery("client","*","username='$username'");
			    if($adminselect!=false)
			    {
				    $data=mysqli_fetch_array($adminselect);
				    $clientid = $data['id'];
				    $_SESSION['clientlogin'] = $clientid;
			    	if($password==$data['password'])
			    	{
			    	    header("location:../play.php");
			    	}
			    	else
			    	{
			    		echo "sorry invaild username or password"."<br>";
			    		include_once'login.html';		
			        }
			    }
			    else
			    {
			    	echo "sorry you dont have an account so register"."<br>";
			    	include_once'register.html';
			    }
			}
		}
		else
		{
			echo "sorry enter your permission"."<br>";
			include_once'login.html';
		}
	}
	
}
else
{
	include_once'login.html';
}