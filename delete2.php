<?php
include("mydb.php");
$id=$_GET['id'];
$res=deletemilk($id);
if($res==1)
{
    header("location:milke.php");

}





?>