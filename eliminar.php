<?php
include('includes/db.php');

$id=$_REQUEST['id'];


 $sql="delete from personas  where id='$id' ";
 
 $result= DB::query($sql);

 header('Location: index.php');
   

?>