<?php
if(isset($_post['upload'])){
  echo"yes";
}


?>
<!DOCTYPE html>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<input type="file" name="image">
<textarea name="text" cols="60" rows="10" placeholder="about"></textarea>
<input type="submit" name="upload"value="submit">
</form>

</body>
</html>
