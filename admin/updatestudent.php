
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
?>
<h1 align ="center"> WELCOME TO ADMIN </h1> 
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/updatestuu.css" rel="stylesheet">
    
</head>
       
    
 <div class="container bg-primary">
     <h3 style="text-align:center;">INSERT STUDENT DETAILS </h3>
   <form action="updatestudent.php" method="post">
        <table align="center" border="5px solid"style="width:30%">
             <tr>
            <td style="text-align:center"> ENTER NAME <td>
            <td><input type="text" name="stuname" placeholder="enter your name "  required></td>
              </tr>
         <tr>
            <td  style="text-align:center">ENTER EMAIL <td>
            <td><input type="number" name="standard" placeholder="enter your standard" required></td>
              </tr>
          <tr>

                <td colspan="5" align="center"><input type="submit" name="submit" value="search"> </td>
    </tr> 
       </table>
     </form>
</div>
   <div class="container bg-primary"> 
<div class="jumbotron" style="margin-top:10px;">
    <h5 align="right">Lovekesh madaan </h5>        
     <a href="logout.php" class="btn btn-success btn-lg center-block" style="width:20%;"> LOGOUT</a>
     <a href="admindash.php" class="btn btn-primary btn-lg center-block" style="width:18%;">GO TO ADMIN</a>
     </div>
 <div class="container bg-default"> 
     <h1  align=center> DETAILS ARE </h1>
       <table align ="center" width="80%" border="1">
    <tr>
        <th class="text-center"> No.</th>
        <th class="text-center"> image</th>
        <th  class="text-center"> name</th>
        <th class="text-center"> roll No</th>        
        <th class="text-center"> edit</th>
    </tr>
    <?php
 if(isset($_POST['submit']))
  { 
     include('../dbcon.php');  
     $standard=$_POST['standard'];
     $name=$_POST['stuname'];
     $sql="SELECT * FROM `student` WHERE `std`='$standard' AND `name` LIKE '%$name%'";
     $run=mysqli_query($con,$sql);
     if(mysqli_num_rows($run)<1)
     {
         echo "<tr><td colspan='5'> no record found </td></tr>";
     }
    else
      {  
        $count=0;
        while($data=mysqli_fetch_assoc($run))
         {   
            $count++;
          ?>
        <tr>
        <td> <?php echo $count; ?></td>
        <td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/> </td>
        <td> <?php echo $data['name'];?></td>
        <td> <?php echo $data['roll no'];?></td>
        <td><a href="updateform.php? sid=<?php echo $data['id'];?>" class="d-block bg-warning">EDIT </a></td>
        </tr>
           <?php
        }
      }
     }
  ?>
</table>
       </div>