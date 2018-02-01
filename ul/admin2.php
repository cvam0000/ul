<?php//take input from page admin.php
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
