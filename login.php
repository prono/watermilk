<?php
    include("mydb.php")



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body class="oo">
    <form action="" method="post">
<div class="hp">
        <img  class="img" src="https://th.bing.com/th/id/OIP.XGquqPvkTuE3NozPthlJtQAAAA?pid=ImgDet&rs=1">
        
        <p><input  class="pp" type="emali"name="email" placeholder="Enter userid"></p>
        
        <p><input  class="pp"type="password"name="password"placeholder="password"></p>
        <p><input  class="l" type="submit"name="login"value="login"></p>
    </div>
</form>
<?php
        if(isset($_POST['login']))
        {
           
            $res= adminlogin($_POST);
            if(mysqli_num_rows($res) > 0)
            {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                header('location: Home.php');
            }
            else{
                echo"not ok";
                
            }

        }
    ?>
    watermilk

</body>
</html>