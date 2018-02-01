<?php


session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{//if user is login


 //echo $_SESSION['username'];
 // Create database connection
 include 'conn.php';
//echo "database_connected";
 // Initialize message variable


 // If upload button is clicked ...
 if (isset($_POST['upload'])) {
   // Get image name
   $image = $_FILES['image']['name'];
   // Get text
   //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $image_text=$_POST['text'];
    $img_title=$_POST['title'];
    $image_title_description=$_POST['itd'];
    $post_time= date(DATE_RFC822);//for post date and time
   // image file directory
   $target = "images/".basename($image);

   $sql = "INSERT INTO images (image,text,title,date,description) VALUES ('$image', '$image_text','$img_title','$post_time','$image_title_description')";
   // execute query
   mysqli_query($conn, $sql);

   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
     $msg = "Image uploaded successfully";

     //new page generation
     //new page generation

       $newpage_title=$img_title;
       $newpage_title .=".php"; //concat of the new page name
       $new_page_generation="<?php

                    include 'new_blog_page.php';
                      ?>";

       $myfile = fopen($newpage_title, "w") or die("Unable to open file!");
       fwrite($myfile, $new_page_generation);


     //new page generation
     //new page generation





   }else{
     $msg = "Failed to upload image";
   }
 }
 $result = mysqli_query($conn, "SELECT * FROM images");





}//loing check if condition close


else {
 echo "smthng wrong ";
 session_destroy();
 header('Location:login.php');
}


 ?>
<!DOCTYPE html>
<html>
<head>
<title>untoldlogics.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->





<!--google icons-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!----------------->
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Untoldlogics</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Topics <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ethical Hacking</a></li>
              <li><a href="#">Networking</a></li>
              <li><a href="#">Malwares</a></li>
            </ul>
          </li>
          <li><a href="news.php">News</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>






  <form method="POST" action="admin.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>

    <div>
      <input type="text" name="title" placeholder="title">
        <input type="text" name="itd" placeholder="description">
    </div>
    <div>
      <textarea
        cols="40"
      	rows="4"
      	name="text"
      	placeholder="Write blog here..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>

<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";

        echo "<p> Title  :  ".$row['title']."</p>";echo "<p> Date : ".$row['date']."</p>";
        echo "<hr>";
        echo "<p> Blog : ".$row['text']."</p>";
      echo "</div>";
    }
  ?>









</body>
</html>
