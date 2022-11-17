<?php
session_start();
if(isset($_POST['login']))
{
	if($_POST['user']==NULL)
	{
	    echo "enter your username"."<br>";
	    include_once'../front/forms/login.html';
	}
	elseif($_POST['password']==NULL)
	{
		echo "enter your password"."<br>";
		include_once'../front/forms/login.html';
	}
	elseif($_POST['choose']==NULL)
	{
		echo "sorry enter your permission"."<br>";
		include_once'../front/forms/login.html';
	}
}
