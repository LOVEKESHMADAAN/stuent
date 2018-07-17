<?php
    session_start();

      if(isset($_SESSION['uid']))
      {  
        echo"";   
      }
      else
      {
          header('location:../login.php');
      }
 ?><html>
<!--    
<head>
  
 
  <link href="../css/updatestuform.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
 
   <link href="../css/bootstrap.min.css" rel="stylesheet"> 
   <link href="../css/style.css" rel="stylesheet"> 
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="D:\Office 2007\Desktop\copy\bootstrap-3-carousel-finish\index.html" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
    

           
-->    
    <head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/updatestuu.css" rel="stylesheet">
    
</head>
       
<body >
    
        
 
         <div class="jumbotron" style="margin-top:10px;">
    <h1 align="center"> WELCOME TO ADMIN</h1>
    <h5 align="right">Lovekesh madaan </h5>        
             <h3 align="center"> UPDATE DETAILS </h3>
             
             
   <a href="logout.php" class="btn btn-success btn-lg center-block" style="width:20%;"> LOGOUT</a>
   <a href="admindash.php" class="btn btn-primary btn-lg center-block" style="width:18%;">GO TO ADMIN</a>
        </div>
<?php
  include('../dbcon.php');
  $sid=$_GET['sid'];
  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
?>
        <div id="update">
             <form method="post"  action="updatedata.php" enctype="multipart/form-data">
             <table align="center" border="1"style="width:30%" class="bg-bold text-center">
            <tr class="text-center  " >
                 <th class="text-center  bg-warning" >
                  ENTER  DETAILS 
                 </th>
                 </tr>
                
             <tr >
             <td class="bg-primary">  Enter Name <td>
             <td ><input type="text" name="name" value=<?php echo $data['name'];?>  required></td>
             </tr>
             <tr>
             <td class="bg-success"> Enter Email <td>
             <td><input type="email" name="email" value=<?php echo $data['email'];?>  required></td>
             </tr>
             <tr>
             <td class="bg-primary">  Enter Roll No. <td>
             <td><input type="number" name="rollno" value=<?php echo $data['roll no'];?> required></td>
             </tr>
             <tr>
             <td class="bg-warning">   Enter City <td>
             <td><input type="text" name="city"  value=<?php echo $data['city'];?> required></td>
             </tr>
            <tr>
            <td class="bg-success">  Enter Parent No. <td>
            <td><input type="text" name="pcont"  value=<?php echo $data['pcont'];?> required></td>
            </tr>
             <tr>
            <td class="bg-primary">   Enter Standard <td>
            <td><input type="text" name="standard"  value=<?php echo $data['std'];?> required></td>
             </tr>
    <td  align="center" colspan="2"><input type="file" name="simg" > </td>
    <tr>
        <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
        <td colspan="2" align="center"><a href="updatedata.php"><button> submit </button></a></td>
    </tr>
    </table>
    </form>
        </div>