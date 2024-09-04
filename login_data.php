<?php
      include "connection.php";
      if(isset($_POST['username']))
      {
                 $username=$_POST['username'];
                 $password=$_POST['password'];
      }
      $sql="select * from cust_details where Name='$username' and Password='$password'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_num_rows($result);
      if($row==1)
      {
            session_start();
            $_SESSION['username']=$username;
            header("Location:user_z.php");
      }  
      else
      {
             echo '<script>';
               echo 'alert("Incorrect Credentials");';
               echo 'window.location="user_z.php";';
               echo '</script>';
      }
?>
