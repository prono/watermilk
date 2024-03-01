
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
    <link rel="stylesheet" href="watermilk.css">
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
    <form  class="ggg"action="" method="post">
        <h2> water</h2>
        <div>quntity<div>
       <p> <input class="u" type="text"name="quntity"value=""></p>
       <div>given_date</div>
       <p><input type=""name="given_date"value=""></p>
      <p> <input type="submit"name="save"value="save"></p>
    </form>



    <?php
        if(isset($_POST['save']))
        {
            $res=addwater($_POST);
            if($res==1)
            {
                echo"all ok";
            }else
            {
                echo"not ok";
            }
        }

     ?>
 <table class="table lll" >
  <thead>
    <tr>
        
      <th scope="col">quntety</th>
      <th scope="col">date_given</th>
      <th scope="col">action</th>
    
    </tr>
  </thead>
  <tbody>


  <?php
  $res=getALLwater();
  if(mysqli_num_rows($res) >=0 )
  {
     while($data = mysqli_fetch_assoc($res))
       {
                echo  '
           

                    <tr>
                    <th>'.$data["quntity"].'</th>
                    <td>'.$data["given_date"].'</td>
                    <td><a class="e"href="edit.php?id='.$data["id"].'"><a class="g" href="delete.php?id='.$data["id"].'"><i class="fa fa-trash" aria-hidden="true"></i></td>
                   </td><i class="fas fa-edit"></i>
                    </tr>
                ';
        }
    }
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
</body>
</html>
