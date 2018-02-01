<?php
include("conn.php");


//get the value from login.php file
$username = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);
/*also prevent from sql injections*/



//query
$sql ="select * from users where username ='$username' and password ='$password'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if ($row['username']==$username && $row['password'] ==$password)
   {echo"welcome"." ".$row['username'];
    $_session["login"]=0;

//image upload code if user is login

$db = mysqli_connect("localhost", "root", "", "login");
//echo "database_connected";
// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
   $image_text=$_POST['text'];
  // image file directory
  $target = "images/".basename($image);

  $sql = "INSERT INTO images (image,text) VALUES ('$image', '$image_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result = mysqli_query($db, "SELECT * FROM images");



//here end the the file upload program

  }
else{
    echo "failed to login";
    }

$count = mysqli_num_rows($result);


//check user
if((mysqli_num_rows($result))>0)
{
//create a session
session_start();

//store the username in SESSION global variable
$_SESSION['user_name']=$username;

$session=$_SESSION['user_name'];

//redirect to HOME page
//header('Location:log.php');
}
else
echo "wrong username or password";




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
          <li><a href="#"><span class="glyphicon glyphicon-sign-up"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="log.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea

      	cols="40"
      	rows="4"
      	name="text"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
