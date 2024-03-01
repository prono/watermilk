<?php
function addwater($data){
    $quntity=$data['quntity'];
    $given_date=$data['given_date'];
    $con=mysqli_connect("localhost","root","","watermilk");
    $sql="INSERT INTO water(quntity,given_date) value('$quntity','$given_date')";
    $res=mysqli_query($con,$sql);
    return $res;
   }
function updatewater($data){
    $id=$data['id'];
    $quntity=$data['quntity'];
    $given_date=$data['given_date'];
    $con=mysqli_connect("localhost","root","","watermilk");
    $sql="UPDATE water set quntity='$quntity',given_date='$given_date' where id='$id'";
    $res=mysqli_query($con,$sql);
    return $res;

   }
   function deletewater($id){

      $sql="DELETE FROM water WHERE id='$id'";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;


   }
 function getALLwater(){
    $sql="select * from water";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;

   }
 function getwaterByid($id){
    $sql="select * from water WHERE id='$id'";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;


   }
 function addmilk($data){
    $quntity=$data['quntity'];
    $given_date=$data['given_date'];
    $con=mysqli_connect("localhost","root","","watermilk");
    $sql="INSERT INTO milk(quntity,given_date) value('$quntity','$given_date')";
    $res=mysqli_query($con,$sql);
    return $res;
 }
 function updatemilk($data){
    $id=$data['id'];
    $quntity=$data['quntity'];
    $given_date=$data['given_date'];
    $con=mysqli_connect("localhost","root","","watermilk");
    $sql="UPDATE milk set quntity='$quntity',given_date='$given_date' where  id='$id'";
    $res=mysqli_query($con,$sql);
    return $res;
 }
 function deletemilk($id){
   
    $sql="DELETE FROM milk WHERE id='$id'";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;
 }
 function getALLmilk(){
    $sql="select * from milk";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;
 }
 function getmilkbyid($id){
    $sql="select * from milk WHERE id='$id'";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;
 }
function addwater_balance ($data){
   $amant=$data['amant'];
   $due=$data['due'];
   $bdate=$data['bdate'];
   $con=mysqli_connect("localhost","root","","watermilk");
   $sql="INSERT INTO water_balance(amant,due,bdate) value('$amant','$due','$bdate')";
   $res=mysqli_query($con,$sql);
   return $res;
}
   function updatewater_balance($data){
   $id=$data['id'];
   $amant=$data['amant'];
   $due=$data['due'];
   $bdate=$data['bdate'];
   $con=mysqli_connect("localhost","root","","watermilk");
   $sql="UPDATE water_balance set amant='$amant',due='$due',bdate='$bdate' where id='$id'";
   $res=mysqli_query($con,$sql);
   return $res;

}
function deletewater_balance($id){
   
   $sql="DELETE FROM water_balance WHERE id='$id'";
   $con=mysqli_connect("localhost","root","","watermilk");
   $res=mysqli_query($con,$sql);
   return $res;
}
function getALLwater_balance(){
      $sql="select * from water_balance";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;
   }
   function getwater_balanceByID($id){
      $sql="select * from water_balance WHERE id='$id'";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;
   }
   function addmilk_balance ($data){
      $amant=$data['amant'];
      $due=$data['due'];
      $bdate=$data['bdate'];
      $con=mysqli_connect("localhost","root","","watermilk");
      $sql="INSERT INTO milk_balance(amant,due,bdate) value('$amant','$due','$bdate')";
      $res=mysqli_query($con,$sql);
      return $res;
   }
      function updatemilk_balance($data){
      $id=$data['id'];
      $amant=$data['amant'];
      $due=$data['due'];
      $bdate=$data['bdate'];
      $con=mysqli_connect("localhost","root","","watermilk");
      $sql="UPDATE milk_balance set amant='$amant',due='$due',bdate='$bdate' where id='$id'";
      $res=mysqli_query($con,$sql);
      return $res;
   
   }
   function deletemilk_balance($id){
   
      $sql="DELETE FROM milk_balance WHERE id='$id'";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;
   }
   function getALLmilk_balance(){
      $sql="select * from milk_balance";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;
   }
   function getmilk_balanceByID($id){
      $sql="select * from milk_balance WHERE id='$id'";
    $con=mysqli_connect("localhost","root","","watermilk");
    $res=mysqli_query($con,$sql);
    return $res;
   }
   function addprovidor($data){
      $name=$data['name'];
      $mobilc=$data['mobilc'];
      $address=$data['address'];
      $type=$data['type'];
      $sql="INSERT INTO providor(name,mobilc,address,type) value('$name','$mobilc','$address','$type')";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;

   }
   function updateprovidor($data){
      $id=$data['id'];
      $name=$data['name'];
      $mobilc=$data['mobilc'];
      $address=$data['address'];
      $type=$data['type'];
      $con=mysqli_connect("localhost","root","","watermilk");
      $sql="UPDATE providor set name='$name',mobilc='$mobilc',address='$address',type='$type'where id='$id'";
      $res=mysqli_query($con,$sql);
      return $res;
   }
    function deleteprovidor($id){
   
     $sql="DELETE FROM providor where id='$id'";
     $con=mysqli_connect("localhost","root","","watermilk");
     $res=mysqli_query($con,$sql);
     return $res;
   }
   function getALLprovidor(){
      $sql="select * from providor";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;
   }
   function getprovidorByID($id){

      $sql="select * from providor where id='$id'";
      $con=mysqli_connect("localhost","root","","watermilk");
      $res=mysqli_query($con,$sql);
      return $res;

   }
   function adminlogin($data){
      $email= $data['email'];
      $password = $data['password'];
       $sql="select * from admin where email='$email' and password='$password'";
       $con=mysqli_connect("localhost","root","","watermilk");
       $res=mysqli_query($con,$sql);
       return $res;


   }
?>