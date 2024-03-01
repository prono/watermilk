<?php
include("mydb.php");
$id=$_GET['id'];
$res= deleteprovidor($id);
if($res==1)
{
    header("location:providor.php");

}



?>