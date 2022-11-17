<?php
function selectquery($table,$col,$cond)
{
	$mysqlLink=mysqli_connect("localhost","root","");
    mysqli_select_db($mysqlLink,"playground");
	$strquery="SELECT $col FROM $table WHERE $cond";
	$queryres=mysqli_query($mysqlLink,$strquery);
	if(mysqli_num_rows($queryres) > 0)
	{
		return $queryres;
	}
	else
	{
		return false;
	}
}

function insertquery($table,$col,$val)
{
	$mysqlLink=mysqli_connect("localhost","root","");
    mysqli_select_db($mysqlLink,"playground");
	$strquery="INSERT INTO $table ($col) VALUES ($val)";
	$queryres=mysqli_query($mysqlLink,$strquery);
	return $queryres;
}

function updatequery($table, $colAndVals, $cond)
{
	$mysqlLink=mysqli_connect("localhost","root","");
    mysqli_select_db($mysqlLink,"playground");
    $strQuery = "UPDATE $table SET $colAndVals WHERE $cond";
    $queryRes = mysqli_query($mysqlLink,$strQuery);
    if(mysqli_affected_rows($mysqlLink) > 0)
    {
        return true;
    }
    else
    {
        return mysqli_error($mysqlLink);
    }
}

function deletequery($table,$cond)
{
	$mysqlLink=mysqli_connect("localhost","root","");
    mysqli_select_db($mysqlLink,"playground");
    $strQuery = "DELETE FROM $table WHERE $cond";
    $queryRes = mysqli_query($mysqlLink,$strQuery);
    if(mysqli_affected_rows($mysqlLink) > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>