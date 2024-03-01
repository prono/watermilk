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
            $res= getmilkbyid($id);
            $data=mysqli_fetch_assoc($res);
        ?>

       <form action="" method="post">
       <p><input type="hidden" name="id" value="<?php echo $data["id"]?>"></p>
        <h2>milke</h2>
        <div>quntity</div>
        <p><input type="text"name="quntity"value="<?php echo $data['quntity']?>"></p>
        <div>given_date</div>
        <p><input type="datetime-local"name="given_date"value="<?php echo $data['given_date']?>"></p>
       
       <p> <input type="submit"name="updatamilk"value="updata"></p>
        </form>
        <?php
                if(isset($_POST['updatamilk']))
                {
                    $res=updatemilk($_POST);
                    if($res==1){
                        echo" data updata " ;
                        header('location:milke.php');

                    }
                    else{
                        echo"not updata";

                    }
                }

          ?>
</body>
</html>