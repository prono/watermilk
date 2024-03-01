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
        $id= $_GET['id'];
        $res=getwaterbyid($id);
        $data=mysqli_fetch_assoc($res);
    ?>
<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $data["id"]?>">
        <h2> water</h2>
        <div>quntity<div>
           <p> <input type="text"name="quntity"value="<?php echo $data['quntity']?>"></p>
           <div>given_date</div>
           <p><input type="datetime-local"name="given_date"value="<?php echo $data['given_date']?>"></p>
           <p> <input type="submit"name="updatawater"value="updatawater"></p>
    </form>
    <?php
    if(isset($_POST['updatawater']))
    {
        $res=updatewater($_POST);
        if($res==1)
        {
            echo"dataupdata";
            header('location:water.php');

        }
        else{
            echo"your data not updata";

        }
    }

    
    
    
    ?>
    
</body>
</html>