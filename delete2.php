
<?php
error_reporting(0);
$mysqli = mysqli_connect('localhost', 'root','','zhra');

//$sql = "SELECT * FROM `adventure_agent_tb`";
///$test = mysqli_query($mysqli,$sql);
//while ($row=$test->fetch_assoc()){

// $dat=$row['ID'];
 	

//}

echo "<script type='text/javascript'> confirm('do you want to delete?')</script>";
$delet = "DELETE FROM `alltb` WHERE `id`='".$_GET['del_d']."'";

$query = mysqli_query($mysqli,$delet) or die($mysqli);
include('employ.php');




?>