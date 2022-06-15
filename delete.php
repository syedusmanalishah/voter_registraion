<?php
include_once 'common/connection.php';
$id = $_GET['id'];

$sQuery = "DELETE FROM `voters` WHERE id = $id";

$sRes = mysqli_query($con, $sQuery);


header("refresh:0.5; url=table.php");


?>