
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
 background-color: #654;
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
    <div class="col-sm-2"></div>
  <div class="col-sm-8">
      <table class="table table-spried" style="background-color: #D3D3D3; width: 100%; border-radius: 20px;">
      <tr>
        
        <td colspan="5">
         <img src="leave2.jpg" style="width: 100%;">
         <nav class="nav nav-navbar">
        <ul class="nav nav-pill nav-justified">
 <!-- 
          <li class="active">
            <a data toggle="pill"  href="Employen.php">LEAVE APPLYED</a>
            </li> -->
          <li class="active">
            <a data toggle="pill"  href=" employ.php">EMPLOYEE</a>
            </li>
            <li class="active">
            <a data toggle="pill" href="register.php">REGISTER</a>
            </li>
            <li class="active">
            <a data toggle="pill" href="log.php">LOG OUT</a>
            </li>
            

</ul>

      </nav>
          <form action="registerphp.php" method="POST" >
            <br></td>
            <tr><td colspan="5"><center><h2> NEW  EMPLOYEE REGISTRATION </h2></center></td></tr>
                  


<tr>
  <td colspan="2">
    <center><h3><?php global $error; echo $error; ?></h3></center>
  </td>
</tr>

                  <tr> <td> <label>
           
                      Employee id
                     </label></td><td>
                     <input type="text" name="username" placeholder="Employee id " class="form-control" required>
                     </td></tr><tr><td><label>
                              First name  
                                </label></td><td>
                             
           <input type="text" name="firstname" placeholder="Enter first name " class="form-control" required></td>
         <td><label>
                              Last name  
                                </label></td><td>
                             
           <input type="text" name="lastname" placeholder="Enter last name " class="form-control" required></td></tr>
            <tr><td><label>
                Email                  
                                </label></td><td>
                               </br>
           <input type="email" name="email" placeholder=" Enter Email address" class="form-control" required></td><td><label>
                Phone number                  
                                </label></td><td>
                               </br>
           <input type="phone" name="phone" placeholder="Enter phone number" class="form-control" maxlength="10" required></td></tr>
            <tr><td><label>
               Date of joining                   
                                </label></td><td>
                               </br>
           <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                          <input type="date" name="datej"  class="form-control"></td><td><label>
               Date of birth                  
                                </label></td><td>
                               </br> <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                                          <input type="date" name="dateb" class="form-control">
           </td></tr>
           <tr><td>
            <label>

                     Department
                                </label></td><td>
                               </br>
          <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-Hourse"></i> </span>
                         <select name="department" class="form-control" style="width: 70%;"><option selected disabled="disabled" >Select department</option>
<option value="SOB">SOB</option>
<option value="FST">FST</option>
<option value="LAW">LAW</option>
<option value="SOPAM">SOPAM</option>
<option value="FSS">FSS</option></td>
<td><label>
               Designation                  
                                </label></td><td>
                               </br><div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-Hourse"></i> </span>
                         <select name="work" class="form-control" style="width: 70%;"><option selected disabled="disabled" >Work type</option>
<option value="LECTURER">LECTURER</option>
<option value="COORDINATOR">COORDINATOR</option>
<option value="SEQURITY">SEQURITY</option>
<option value="ICT TECHNICIAN">ICT TECHNICIAN</option>
<option value="ADVOCATE">ADVOCATE</option>
<option value="SECRETARY">SECRETARY</option>
<option value="HUMAN RESOURCE">HUMAN RESOURCE</option> 
<option value="RECORDS MANAGEMENT">RECORDS MANAGEMENT</option>
           </td></tr>
           <tr>

            <td>
            <label>

                      Employee type
                     </label></td><td><div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-Hourse"></i> </span>
                         <select name="type" class="form-control" style="width: 70%;"><option selected disabled="disabled" >Employee type</option>
<option value="Temporary">Temporary</option>
<option value="Permanent">Permanent </option>
</td></tr>
<tr><td><label>
                             Password  
                                </label></td><td>
                             
           <input type="Password" name="password" placeholder="Password " class="form-control" required></td>
         <td><label>Confirm password  
                                </label></td><td>
                             
           <input type="Password" name="password1" placeholder="Confirmation password " class="form-control" required></td></tr>
                         
                         
                          </label>
                    
 
                         </div>
                     </br>
                <tr><td></td><td>        <button type="reset" class="btn btn-success" style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">RESET</button></td><td> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <button class="btn btn-success" name="send" style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">SUBMIT</button>
                        
          </form>

        </td>
      </tr>

</table></center>
      