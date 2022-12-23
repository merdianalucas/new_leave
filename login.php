

<?php
//error_reporting(E_ERROR | E_WARNING |E_PARSE);

if(isset($_POST['login']))
{


$conn = mysqli_connect("localhost","root","","zhra");

$Email = $_POST['username'];
$Password =md5($_POST['password']);


$select="SELECT * FROM `alltb` WHERE `username`='$Email' AND `password`='$Password'";
$query=mysqli_query($conn,$select);
$num = mysqli_num_rows($query);
if($num>0)
{
	if(isset($_POST['checkbox']))
	{
		setcookie('username',$Email, time()+60*60*7);
		setcookie('Password',$Password, time()+60*60*7);
	}
	
	session_start();
	$_SESSION['username']=$Email;
	//$system = "system administrator";

	$com = mysqli_fetch_assoc($query);
	 $value = $com['username'];
        $system = "admin";
        $human = "officer";
       
	if($value == $system)
	{
	 echo " <script> location.href='register.php'</script>";	
	}
	if ($value==$human) {
		echo " <script> location.href='Employen.php'</script>";
	}
   
	else
	{
	
    echo "<script> location.href='employee.php'</script> ";	
	}
}
else
{
echo "<script> alert ('Password or username incorrect')</script> ";
echo "<script> location.href='index.php'</script> ";
  

}
}
else
{
	echo "<script> location.href='index.php'</script> ";
}

?>