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
<?php
include('header.php');

?>
<html>
     <head>
        <link href="../css/logindash.css" rel="stylesheet">
    <title>
          admin dash
    </title>
    </head>
     <body>
       <div id="logindash" align ="center">
       <h1 >WELCOME TO ADMIN DASHBOARD</h1>
         <h4><a href="logout.php">  LOGOUT</a></h4>
            
        <table border="2px" style="width=50%" align="center">
        
            
           <h1>1.<a href="addstudent.php" > INSERT STUDENT</a></h1>
            <h1>1.<a href="updatestudent.php"> UPDATE STUDENT</a></h1>
            <h1>1.<a href="delete.php"> DELETE STUDENT</a></h1>
           </table>
            </div>
       </body>
</html>