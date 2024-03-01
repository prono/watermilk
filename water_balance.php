
<?php
include("mydb.php");
?>
<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
include('navbar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <form  action="" method="post">
    <h2>water_balance</h2>
    <div>amant</div>
    <p><input type="text"name="amant"value=""></p>
    <div>due</div>
    <p><input type="text"name="due"value=""></p>
    <div>bdate</div>
    <p><input type="text"name="bdate"value=""></p>
    <p> <input type="submit"name="save"value="save"></p>
</form>
<?php
      if(isset($_POST['save']))
      {
        $res=addwater_balance($_POST);
        if($res==1)
         {
            echo"all ok";

        }else{
            echo"not ok";

        }
      }


?>
<table class="table">
    <thead>
        <tr>
            <th>amant</th>
            <th>due</th>
            <th>bdate</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
       <?php
          $res=getAllwater_balance();
          if(mysqli_num_rows($res)>=0)
          {
            while($data=mysqli_fetch_assoc($res))
            {
                echo'
                      <tr>
                        <th>'.$data["amant"].'</th>
                        <th>'.$data["due"].'</th>
                        <th>'.$data["bdate"].'</th>
                        <td><a href="edit4.php?id='.$data["id"].'"><i class="fas fa-edit"></i><a class="g" href="delete4.php?id='.$data["id"].'"><i class="fa fa-trash" aria-hidden="true"></i></td>
                      </tr>


                    ';
            }
          }


       ?>

    </tbody>

</table>

    
</body>
</html>