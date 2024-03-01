<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['email']))
        {
            header('location: login.php');
        }

        include('navbar.php');
    ?>
    <div class="milk">
        <h2 class="jj">Milk</h2>                                  
        <p class="jj"><b>Total :</b> 20kg</p>
        <p class="jj">august</p>
    </div>
    
    <div class="water">
    <h2 class="hh">water</h2>
    <p class="jj"><b>Total :</b> 20 Jar</p>
    <p class="hh">august</p>
   </div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>