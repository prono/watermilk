<?php
include("mydb.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $id=$_GET['id'];
       $res=getwater_balanceByID($id);
       $data=mysqli_fetch_assoc($res);

    ?>




    <form  action="" method="post">
    <h2>water_balance</h2>
    <div>amant</div>
    <p><input type="text"name="amant"value=""></p>
    <div>due</div>
    <p><input type="text"name="due"value=""></p>
    <div>bdate</div>
    <p><input type="text"name="bdate"value=""></p>
    <p> <input type="submit"name="updatawater_balance"value="updatawater_balance"></p>
</form>
<?php
if(isset($_POST['updatawater_balance']))
{
    $res=updatewater_balance($_POST);
    if($res==1)
    {
      echo"data updata";
      header('location:water_balance.php');

    }
    else{
        echo"not data updata";

    }
}


?>
    
</body>
</html>