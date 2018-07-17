<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link href="../css/adstu.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>foxBOX</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/bootstrap.min.css" rel="stylesheet"> 
   <link href="../css/style.css" rel="stylesheet"> 
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="D:\Office 2007\Desktop\copy\bootstrap-3-carousel-finish\index.html" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/code.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
       
    
           
    </head>
    <body >
    
        
 
         <div class="jumbotron" style="margin-top:10px;">
    <h1 align="center"> WELCOME TO ADMIN</h1>
    <h5 align="right">Lovekesh madaan </h5>        
     
            
   <a href="admin/admindash.php" class="btn btn-primary btn-lg center-block" style="width:18%;">GO TO ADMIN</a>

 <h3 style="text-align:center;">INSERT YOUR DETAILS </h3>
        </div>
       
        
<div class="container bg-primary">
     <h3 style="text-align:center;">INSERT YOUR DETAILS </h3>
    <form method="post" action="signup.php">
        <table align="center" border="5px solid"style="width:30%">
             <tr>
            <td style="text-align:center"> ENTER NAME <td>
            <td><input type="text" name="username" placeholder="enter your username " required></td>
              </tr>
              <tr>
            <td  style="text-align:center"> ENTER PHONE NO.  <td>
            <td><input type="number" name="cont" placeholder="enter your contact no. " required></td>
              </tr>
            <tr>
            <td  style="text-align:center"> ENTER PASSWORD<td>
            <td><input type="number" name="pass" placeholder="enter your password " required></td>
              </tr>
             <tr>
            <td  style="text-align:center"> CONFIRM PASSWORD<td>
            <td><input type="number" name="cpass" placeholder="confirm your password " required></td>
              </tr>

                  <tr>

                <td colspan="2" align="center"><input type="submit" name="submit" value="submit "> </td>
             </tr>
    </table>
    

</form>
    </div>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
     $con=mysqli_connect('localhost','root','','sms');
    if($con)
        echo " CONNECTION FORMED ";
     
    $Name=$_POST['username'];
    $cont=$_POST['cont']; 
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
   $query= "INSERT INTO `signin1`(`username`, `phone no`, `password`, `confirm password`) VALUES (`$Name`,`$cont`,`$pass`,`$cpass`)";
   $run=mysqli_query($con,$query);
   if($run==TRUE)
    {  
       echo " yes";
     ?>
      <script>
       alert(' you signed in successfully !!');
      </script>

<?php
 }
else
    echo "error";
}
?>