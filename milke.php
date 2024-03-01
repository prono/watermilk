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

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Milk Data
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  class="kkk" action="" method="post">
            <h2 class="d">milke</h2>
            <div class="d">quntity</div>
            <p><input class="d" type="text"name="quntity"value=""></p>
            <div class="d">date</div>
            <p><input class="d" type="text"name="given_date"value=""></p>
        <p> <input class="d"type="submit"name="save"value="save"></p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <?php
       if(isset($_POST['save']))
       {
        $res=addmilk($_POST);
        if($res==1)
        {
            echo"all ok";
        }
        else{
            echo"not ok";
        }
       }



     ?>



     <table class="table">
  <thead>
    <tr>
        <th> sclet date</th>
        <td colspan="3">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #516BEB;">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                <form class="d-flex" role="search">
                    <input class="form-control me-2 ," type="datetime-local" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                </ul>
                
                </div>
            </div>
            </nav>
        </td>
    </tr>
    </tr>
      <th scope="col">quntety</th>
      <th scope="col">date_given</th>
      <th scope="col">action</th>
    
    </tr>
     </thead>
     <tbody>
       <?php
       $res=getALLmilk();
        if(mysqli_num_rows($res)>=0)
        {
            while($data=mysqli_fetch_assoc($res))
           {
               echo'
                    <tr>
                        <th>'.$data["quntity"].'</th>
                        <td>'.$data["given_date"].'</td>
                        <th><a  class="yy" href="edit2.php?id='.$data["id"].'"><i class="fas fa-edit"></i> <a class="yyy" href="delete2.php?id='.$data["id"].'"><i class="fa fa-trash" aria-hidden="true"></i></td>
                    
                    </tr>


                ';
            


            }


        }



       ?>
    </tbody>
    </table>




    </body>
</html>