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

<html>
   <head>
    <link href="../css/deletestu.css" rel="stylesheet">
       
     <link href="../css/bootstrap.min.css" rel="stylesheet">    
           
    </head>
    <body >
    
        
 
         <div class="jumbotron" style="margin-top:10px;">
    <h1 align="center"> WELCOME TO ADMIN</h1>
    <h5 align="right">Lovekesh madaan </h5>        
     
             
             
   <a href="logout.php" class="btn btn-success btn-lg center-block" style="width:20%;"> LOGOUT</a>
   <a href="admindash.php" class="btn btn-primary btn-lg center-block" style="width:18%;">GO TO ADMIN</a>

 <h3 style="text-align:center;">DELETE  STUDENT DETAILS </h3>
       <form method="post" action="delete.php">
        <table align="center" border="5px solid"style="width:30%">
             <tr>
            <td style="text-align:center"> ENTER NAME <td>
            <td><input type="text" name="stuname" placeholder="enter your name " required></td>
              </tr>
         <tr>
            <td  style="text-align:center">ENTER STANDARD <td>
            <td><input type="number" name="standard" placeholder="enter your standard" required></td>
              </tr>
            <tr>
              <td colspan="5" ><button type="submit" name="submit" value="search" style="align-center;" class="bg-primary d-block">
                 SUBMIT </button>
                  </td>
            </tr>
           </table>
             </form>
            
        </div>
<div id="update">
<table align ="center" width="80%" border="1" class="bg-primary">
    <tr class="text-center">
        <th class="text-center"> No.</th>
        <th class="text-center"> image</th>
        <th> name</th>
        <th> roll No</th>        
        <th> edit</th>
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
        <tr class="text-center">
        <td class="text-center"> <?php echo $count; ?></td>
        <td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/> </td>
        <td> <?php echo $data['name'];?></td>
        <td> <?php echo $data['roll no'];?></td>
        <td><a href="deleteform.php?sid=<?php echo $data['id'];?>" class="bg-warning"> DELETE </a></td>
        </tr>
      
         <?php
          }
      }
     }
  ?>

</table>

        </div>