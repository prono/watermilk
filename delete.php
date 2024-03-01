<?php
include("mydb.php");
$id=$_GET['id'];
$res=deletewater($id);

if($res==1)
{
    header("location:water.php");
    
 
}

?>