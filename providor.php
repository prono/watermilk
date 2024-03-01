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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php


session_start();
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
include('navbar.php');
?>
<h2> providor</h2>
    <form  action="" method="post" >
        <div>name</div>
        <p><input type="texe"name="name"value=""></p>
        <div>mobilc</div>
        <p><input type="texe"name="mobilc"value=""></p>
        <div>address</div>
        <p><input type="texe"name="address"value=""></p>
        <div>type</div>
        <p><select name="type">
        <option value="">type</opton>
            <option value="milke">milke</option> 
            <option value="water">water</option>

        </select></p>
        <p> <input type="submit"name="save"value="save"></p>
</form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
    if(isset($_POST['save']))
    {
        $res=addprovidor($_POST);
        if($res==1){
            echo"all ok";

        }else{
            echo" not ok";
        }

    }


?>
<table class="table">
<thaed>
        <tr>
            <th>name</th>
            <th>mobilc</th>
            <th>address</th>
            <th>type </th>
            <th>action</th>
        </tr>

</thaed>
        <tbody>
            <?php
            $res=getAllprovidor();
            if(mysqli_num_rows($res)>=0)
            {
                while($data=mysqli_fetch_assoc($res))
                {

                  echo'
                  <tr>
                  <th>'.$data["name"].' </th>
                  <th>'.$data["mobilc"].'</th>
                  <th>'.$data["address"].'</th>
                  <th> '.$data["type"].'</th>
                  <th><a class="e"href="edit3.php?id='.$data["id"].'"><i class="fas fa-edit"></i><a class="g" href="delete3.php?id='.$data["id"].'"><i class="fa fa-trash" aria-hidden="true"></i></td>



                  </tr>
                        
                  
                  ';
                 }
            }



            
             ?>
</tbody>

</table>
</body>
</html>