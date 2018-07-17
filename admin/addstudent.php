<?php
include('header.php');
?>

<html>
  
    <head>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
          
              <link href="../css/addstu.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet"> 
             
        <script>
        function validate()
            { 
              var val=document.getElementById('user').value;
                var check=/^[A-Za-z .]{3,20}$/;
                if(check.test(val))
                    {
                        document.getElementById('user').style.backgroundColor="green";
                        
                    }
            else
                 {
                    document.getElementById('user').style.backgroundColor="red";
                     alert('number and special character. not allowed and minimum 3 characters');
                 }
                 
            }
        
        </script>
    </head>
    <body >
<div class="my">        
     <div class="jumbotron" style="margin-top:10px;">
    <h1 align="center"> WELCOME TO ADMIN</h1>
    <h5 align="right">Lovekesh madaan </h5>        
     <a href="logout.php" class="btn btn-success btn-lg center-block" style="width:20%;"> LOGOUT</a>
     <a href="admindash.php" class="btn btn-primary btn-lg center-block" style="width:18%;">GO TO ADMIN</a>
    
        </div>
        </div>
     <div class="container bg-primary">
     <h3 style="text-align:center;">INSERT STUDENT DETAILS </h3>
    <form method="post" enctype="multipart/form-data">
        <table align="center" border="5px solid"style="width:30%">
             <tr>
            <td style="text-align:center"> ENTER NAME <td>
            <td><input type="text" name="name" placeholder="enter your name " id="user" onkeyup="validate()"  required></td>
              </tr>
         <tr>
            <td  style="text-align:center">ENTER EMAIL <td>
            <td><input type="email" name="email"  placeholder="enter your email"  required></td>
              </tr>
    <tr>
            <td style="text-align:center"> ENTER ROLL NO. <td>
            <td><input type="number" name="rollno" placeholder="enter your rollno " required></td>
              </tr>
    <tr>
            <td  style="text-align:center"> ENTER CITY <td>
            <td><input type="text" name="city" placeholder="enter your city " required></td>
              </tr>
                <tr>
            <td  style="text-align:center"> ENTER PARENT CONTACT  <td>
            <td><input type="text" name="pcont" placeholder="enter your parent no. " required></td>
              </tr>
    <tr>
            <td  style="text-align:center"> ENTER STANDARD<td>
            <td><input type="text" name="standard" placeholder="enter your standard " required></td>
              </tr>


                <td  align="center" colspan="2"><input type="file" name="simg" > </td>
    
    
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
        echo "";
 
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $roll=$_POST['rollno'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont']; 
    $std=$_POST['standard'];
    $imagename=$_FILES['simg']['name'];
    $tempimagename=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempimagename,"../dataimg/$imagename");     
    $query="INSERT INTO `student`(`name`, `email`, `roll no`, `city`, `pcont`, `std`,`image`) VALUES('$Name','$Email','$roll','$city','$pcont','$std','$imagename')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{ 
     ?>
      <script>
       alert(' Data Insertd Successfully !!');
      </script>
<?php
}
else
    echo "error";
}
?>