<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->





  <!--google icons-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!----------------->


<style>
/*style for the text wrapping*/
.wrap {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-box-orient: vertical;
   -webkit-line-clamp: 5; /* number of lines to show */
   line-height: X;        /* fallback */
   max-height: X*N;       /* fallback */
}
/*style for the text wrapping*/
</style>


</head>
<body>
<?php
include 'conn.php';


$sql = mysqli_query($conn, "SELECT * FROM images ");





  /*echo "<p>".$row['title']."</p>";
  echo "<hr>";
  echo "<p>".$row['text']."</p>";
echo "</div>";

echo $_SESSION['username'];

*/
?>
<!--------------------------------------------------------------->

<?php




while($row=mysqli_fetch_array($sql))
{
$dir=$row['title'];
echo$dir;
echo "<a href='".$row['title'].".php'>
<div class='container'>
  <hr>
   <div class='row' >

       <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>  <h1>".$row['description']."</h1>".$row['date']."<br> <br>";



              echo " <div class='wrap' >" .$row['text']." </div>";

echo "
</div>
       <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'> <div id='img_div'>";
          echo "<img class='img-responsive' src='images/".$row['image']."' >";
        echo"</div></div>  </div>  </div>";



    //  <!--con_close-->


echo "

 <div class='container'>
   <div class='row'>
  <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'><i class='fa fa-heart' style='font-size:30px;color:red; float:right; margin-top:20%;'></i></div>
  <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'><i class='fa fa-comment' style='font-size:30px;color:black ; float:left; margin-top:20%;'></i></div>
  <div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'></div>
  <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'><i class='fa fa-share' style='font-size:30px;color:black ; margin-top:30%;'s></i></div>
</div>
<hr>
</div></a> ";
}//while close
?>

</body>
</html>
