<?php
session_start();
$Email= $_SESSION['username'];

$database = mysqli_connect('localhost','root','','zhra');


  $select  = "SELECT * FROM `leavm` WHERE `username`='$Email'";
  $query = mysqli_query($database,$select);



?>

<html>
<head>
   <link href="css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"  ></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">'

  body{
        padding: 30px;

  }
  nav{
    padding: 20px 1px 10px 1px;


  }
  ul {
    list-style-type: none;
     padding: 0px;
    background-color: #00FF7F;
    border-spacing: 5px;
     
    }
    li a{
      display:block;
         color: #000;
         padding: 20px 0px 7px 20px;
          text-decoration: none;
           box-shadow: 0 8px 16px 0 rgba(7,0,4,3.2), 0 0px 20px 0 rgba(6,5,4,2.19); border-radius: 60px;    }
  li a #hover {
   background-color: #555;
    color: white;
}
.active {
    background-color: #8470FF;
   color: white;
}
header{
    background-color: #7588;
    height: : 30px;

           padding: 10px;

      }
  p{
    text-align: left;
    font-family: 20px;
  }
.button{
    width: 20%;
    height: 50px;
    
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

  }
  .button:hover {
 background-color: white;
    color: white;
  }
  
  tr{
    padding: 10px 10px 10px 10px;
  }

</style>
<tittle></tittle>
<style type="text/css">
  body{

    background-image: url(image/image8.jpg);
      }
  
</style>
<script type="text/javascript">
 
 $(document).ready( function() {
      var minDate = new Date();
    $( "#datepicker" ).datepicker({
            
            "dateFormat":"yy-m-d",
            minDate:0,
            
          });
     
    $("#datepicker2" ).datepicker({
      "dateFormat":"yy-m-d",
        
  });
  });

</script>
</head>
<body >
  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-10">
      <table class="table table-spried" style="background-color: #fffd; width: 100%; border-radius: 20px;">
      <tr>
        
        <td colspan="10">
         <img src="leave2.jpg" style="width: 100%;">
         <nav class="nav nav-navbar">
        <ul class="nav nav-pill nav-justified">
 
          <li class="active">
            <a data toggle="pill"  href="Employee.php">APPLY</a>
            </li>
          <li class="active">
            <a data toggle="pill" href="log.php">LOG OUT</a>
            </li>
            

            

</ul>

      </nav>
          
            <br></td>
            <tr><td colspan="10"><center><h2> LATEST LEAVE APPLICATION </h2></center></td></tr>
            <TR><th>No</th><th>Employee id</th><th>Leave type</th><th>Description</th><th> From date</th><th>To date</th><th>derpartment</th><th>Application Date</th><th>Result</th><th>Status</th></TR>
            <?php
            while ( $row=$query->fetch_array(MYSQLI_BOTH)) {
             
            

            ?>
            <tr><td><?php echo $row['id'] ?></td><td><?php echo $row['username'] ?></td><td><?php echo   $row['type'] ?></td><td><?php echo $row['leav'] ?></td><td><?php echo $row['fdate'] ?></td><td><?php echo $row['tdate'] ?></td><td><?php echo $row['department'] ?></td><td><?php echo $row['appcation'] ?></td><td><?php echo $row['coment'] ?></td><td><button class="btn btn-warning"><?php echo $row['status'] ?></button></td></tr>
             <?php } ?>     

</table></center>
      