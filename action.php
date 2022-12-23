<?php
error_reporting(0);
session_start();
$id2 = $_SESSION['id'];
$database 	= mysqli_connect('localhost','root','','zhra');
if (isset($_POST['login'])) {

	$comment = $_POST['comment'];
	$action  = $_POST['active'];


 $update = "UPDATE `leavm` SET `coment`='$comment',`status`='$action' WHERE `id`='$id2'";
 $up = mysqli_query($database,$update);
 if ($up==true) {
 	 echo "<script> alert ('confrimation successifly')</script> ";
     echo "<script> location.href='Employen.php'</script> ";
  
    }  
    else 
    {
     echo "<script> alert ('confrimation fail try again')</script> ";
     echo "<script> location.href='confrim.php'</script> ";	
     } 


}

?>