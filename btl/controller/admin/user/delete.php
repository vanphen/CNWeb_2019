<?php 
include "../../connect.php";   
$querry2 = "DELETE FROM `users` WHERE `users`.`userid` =?";

if(isset($_GET['id'])){


  $id=$_GET['id'];
  if($stmt = $connect->prepare($querry2)){

    $stmt -> bind_param('i',$id);
  //ecute
    $stmt->execute();
  //get result
    $result = $stmt->get_result();
  // get number of rows
 
            
    echo "<script>location.href='/CNWeb_2019/btl/controller/admin/user.php'</script>";
    



  }
}


 ?>