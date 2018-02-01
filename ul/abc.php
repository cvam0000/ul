<?php

   include 'conn.php';


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $_username = mysqli_real_escape_string($conn,$_POST['user']);
      $_password = mysqli_real_escape_string($conn,$_POST['pass']);
      $username = stripslashes($username);//to protect from sql injection
      $password = stripslashes($password);//to protect from sql injection

      $sql = "SELECT id FROM users WHERE username = '$_username' and password = '$_password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        //if(($row['username']==$_username) && ($row['password']==$_password))
        //{
      //   session_register("myusername");
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;

         header("location: admin.php");
       //}
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
