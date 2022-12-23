
<?php
error_reporting(0);
$mysqli = mysqli_connect('localhost', 'root','','zhra');

session_start();

$id = $_GET['del_d'];
$_SESSION['id'] = $id;

$id2 = $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="css.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
			body{
        padding: 5% 12% 0% 12%;

	}
	
	ul {
		list-style-type: none;
		 padding: 0px;
		background-color: #f1f1f1;
		 
		}
		li a{
			display:block;
         color: #000;
         padding: 20px 0px 7px 20px;
          text-decoration: none;
		}
	li a #hover {
   background-color: #555;
    color: white;
}
.active {
    background-color: #4CAF50;
   color: white;
}
header{
		background-color: #7588;
		
  
     width: 100%;
           padding: 10px;

			}
	.button{
    width: 20%;
    height: 50px;
    
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

  }
  .button:hover {
 background-color: #555;
    color: white;
  }</style>
</head>
<body>
<center>
<button style="width: 100%;">
   <fieldset >
     <legend> <img  style="width: 100%; height: 0%"> </legend>
     <table class="table table-striping" >
      <form class="form-control" action="action.php" method="post">
      	<tr><td colspan="4"> <center><h2>CEO PERMISSION FORM</h2></center> </td></tr>
      <tr> 
        <th> COMMENT  </th> <td><textarea name="comment" class="form-control"> </textarea></td>
      </tr>
      <tr> 
        <th> ACTION </th><td><select name = "active" class="form-control">
        	                 <option selected disabled>Select action</option>
        	 				 <option value="accepted">accept</option>
        					 <option value="rejected">reject</option>
                                                 </select> </td>
      </tr>
      <tr>
       
        <td colspan="3"><center><button  class="button" name="login"> <span class="glyphicon glyphicon-send"> SEND </span></button></center> </td>
      </tr>

          

     </table>

   </fieldset> 


</button>

</center>
</body>
</html>