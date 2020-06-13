<?php
include_once './dbconfig.php';

$adid=$_GET['q'];
$result2 = mysqli_query($link, " DELETE FROM `buycrop` WHERE cropid= '$adid' ");
if($result2)
echo 'Ad Deleted Successfully';
else echo "not done";

?>

