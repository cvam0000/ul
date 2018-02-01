<?
$newpage_title=$image_title;
$newpage_title .=".php"; //concat of the new page name
$new_page_generation="<?php

             include 'new_blog_page.php';
               ?>";

$myfile = fopen($newpage_title, "w") or die("Unable to open file!");
fwrite($myfile, $new_page_generation);
?>
