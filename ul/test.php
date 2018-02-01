<?php
include 'conn.php';
$result = mysqli_query($conn, "SELECT * FROM images WHERE id='29'");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['text'];
echo "<hr>";
echo $row['title'];
echo "<hr>";
echo $row['description'];
echo "<hr>";
echo $row['date'];
echo "<div id='img_div'>";
echo"<img  src='images/".$row['image'].">";
echo"</div>";

?>
