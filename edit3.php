<?php
    include("mydb.php")



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
 $res=getprovidorByID($id);
 $data=mysqli_fetch_assoc($res);

?>

<form  action="" method="post" >
        <p><input type="hidden" name="id" value="<?php echo $data["id"]?>"></p>
        <div>name</div>
        <p><input type="texe"name="name"value="<?php echo $data['name']?>"></p>
        <div>mobilc</div>
        <p><input type="texe"name="mobilc"value="<?php echo $data ['mobilc'] ?> "></p>
        <div>address</div>
        <p><input type="texe"name="address"value="<?php echo $data['address'] ?>"></p>
        <div>type</div>
        <p><select name="type">
        <option value="<?php echo $data['type']?>">type</opton>
            <option value="milke">milke</option> 
            <option value="water">water</option>

        </select></p>
        <p> <input type="submit"name="update"value="update"></p>
</form> 
<?php
if(isset($_POST['update']))
{
    $res=updateprovidor($_POST);
    if($res==1)
    {
        echo"data updata";
        header('location:providor.php');

    }else{
        echo"not data updata";
    }
}


?>
</body>
</html>