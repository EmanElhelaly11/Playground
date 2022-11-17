<?php
function validateusername($username)
{
    if(strlen($username) >= 6)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validatepassword($password)
{
    if(strlen($password) >= 6)
    {
        return true;
    }
    else{
        return false;
    }
}

function validateemail($email)
{
	$boolemail=filter_var($email,FILTER_VALIDATE_EMAIL);
	if($boolemail)
	{
		return true;
	}
	else
	{
		return false;
	}
}