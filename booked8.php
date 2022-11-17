<?php
require_once'db/db.php';
$playground="SELECT * FROM playground";
$resplay=mysqli_query($mysqlLink,$playground);
include_once'front/booked8.html';