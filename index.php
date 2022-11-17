<?php
require_once'db/db.php';
$select="SELECT * FROM playground";
$res=mysqli_query($mysqlLink,$select);
include_once'front/index.html';
