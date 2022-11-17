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
			$username=$_POST['username'];
			$password=$_POST['password'];
			$boolusername=validateusername($username);
			$boolpassword=validatepassword($password);
			if($boolusername==true && $boolpassword==true)
		    {
				$adminselect=selectquery("admin","*","username='$username'");
				if($adminselect!=false)
				{
					
					echo "sorry invaild username or password"."<br>";
				    	include_once'login.html';
				    }
				    else
				    {
				    	$data=mysqli_fetch_array($adminselect);
						$adminid = $data['id'];
						$_SESSION['adminlogin'] = $adminid;
					    if($password==$data['password'])
					    {
					    	echo "vali";
					    	//header("location:../admin.php");
					    	echo    mysqli_error();
					    }		
				    }
				}
		    }
		}
	}
}