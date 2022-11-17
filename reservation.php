<?php
session_start();
include_once'db/query.php';
include_once'validation/validation.php';
include_once'db/db.php';
if($_POST['datereserve']!=NULL && $_POST['fromtime']!=NULL && $_POST
       ['totime']!=NULL && $_POST['hour']!=NULL)
{
	if(isset($_POST['reserve']))
	{
		$_SESSION['datereserve']=$_POST['datereserve'];
	    $_SESSION['fromtime']=$_POST['fromtime'];
	    $_SESSION['totime']=$_POST['totime'];
	    $_SESSION['hour']=$_POST['hour'];
		$datereserve=$_POST['datereserve'];
		$fromtime=$_POST['fromtime'];
		$totime=$_POST['totime'];
		$hour=$_POST['hour'];
		$playid=$_SESSION['playid'];
		$clientid=$_SESSION['clientlogin'];
		$struser = "SELECT* FROM reservation WHERE datereserve='$datereserve' AND fromtime='$fromtime' AND totime='$totime'";
	    $res = mysqli_query($mysqlLink,$struser);
	    $data = mysqli_fetch_array($res);
	    if($data==NULL)
		{
			
				$insert="INSERT INTO reservation (datereserve,fromtime,totime,hour,playgroundid,clientid) VALUES ('$datereserve','$fromtime','$totime','$hour',$playid,$clientid)";
		        $boolAdd = mysqli_query($mysqlLink,$insert);
		        if($boolAdd)
		        {
		           echo "<h2>Your reservation is done </h2>"."<br>";
		            echo "<a href='out.php'>log out</a>";   
		        }
		        else
		        {
		            echo "<h2>Please Log In First</h2>";
					echo "<a href='form/login.html'>log In</a>";
					

		        }

			
	    }
		else
		{
			echo "<h2>Sorry invalid reservation enter anther one</h2>"."<br>";
			
			echo "<a href='out.php'>log out</a>";
		}
	}
}
else
{
	echo "Sorry fill all fields"."<br>";
	include_once'booked.php';
}
