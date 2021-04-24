<?php 
require_once 'db_connection.php';

if  ($_POST) {
   $id = $_POST[ 'id'];
   $img = $_POST['img'];
   ($img =="image.png")?: unlink("../img/$img" );

   $sql = "DELETE FROM library_stock WHERE id = {$id}";
   if ($connect->query($sql) === TRUE) {
       $class = "success";
       $message = "Successfully Deleted!";
   } else {
       $class = "danger";
       $message = "The entry was not deleted due to: <br>" . $connect->error;
   }
   $connect->close();
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta  charset="UTF-8">
    <title>Delete</title>
    
    <!-- inserting fonts php file -->
    <?php require_once '../components/fonts.php'?>
    
    <!-- inserting Bootstrap -->
    <?php require_once '../components/boot_CSS.php'?>
    <!-- CSS only for this project -->
    <link rel="stylesheet" href="../css/style.css">  
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Delete request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?=$message;?></p >
               <a href ='../index.php'><button class= "btn btn-success" type='button'> Home</button></a>
            </div>
       </div >
   </body>
</html>
