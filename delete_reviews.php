<?php
$id= $_GET["id"];
include("connection.php"); 
$query="DELETE from `reviews` where `id`='$id'";
$res=mysqli_query($db,$query);
if($res>0){
    echo "<script>window.location.assign('manage_reviews.php?msg=Deleted successfully')</script>";
}else{
    echo "<script>window.location.assign('manage_reviews.php?msg=Error while deleting')</script>";
}
?>