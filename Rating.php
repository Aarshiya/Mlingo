<?php
include("conn.php");

$movie_id=$_POST['Mid'];
$post_rating=$_post['Rating'];
$find_current_rating=mysqli_query("Select * from Rating where Mid='$movie_id'");
while($row=mysqli_fetch_assoc($find_current_rating))
 {

   $Mid=$row['Mid'];
   $current_rating=$row['Rating'];
   $current_user=$row['uid'];
   
 }
$new_user=$current_hits+1;
$update_hits=mysqli_query("Update rates sets uid='$new_hits' where id='$Mid'");

$pre_rating=$current_rating+ $post_rating;
$new_rating=$pre_rating/$new_user;

$update_rating=mysqli_query("Update Rating set Rating='$new_rating' where id='$Mid'");
?>
