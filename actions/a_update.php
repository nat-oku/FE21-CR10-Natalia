<?php
require_once 'db_connection.php';
require_once  'file_upload.php';

if ($_POST) {
  $mediaType = $_POST['mediaType'];
  $title = $_POST['title'];
  $authorFirstName = $_POST['authorFirstName'];
  $authorLastName = $_POST['authorLastName'];
  $shortDesrc = $_POST['shortDesrc'];
  $ISBN = $_POST['ISBN'];
  $publishDate = $_POST['publishDate'];
  $publisherName = $_POST['publisherName'];
  $publisherAddress = $_POST['publisherAddress'];
  $publisherSize = $_POST['publisherSize'];
  $mediaStatus = $_POST['mediaStatus'];
  $id = $_POST['id'];

   //variable for upload pictures errors is initialized
   $uploadError = '';

   $img = file_upload($_FILES['img']);//file_upload() called

   if ($img->error===0){
       ($_POST["img"]=="image.png")?: unlink("../img/$_POST[img]");          
       $sql = "UPDATE library_stock SET
       mediaType = '$mediaType',
       title = '$title',
       authorFirstName = '$authorFirstName',
       authorLastName = '$authorLastName',
       shortDesrc = '$shortDesrc',
       ISBN = '$ISBN',
       publishDate = '$publishDate',
       publisherName = '$publisherName',
       publisherAddress = '$publisherAddress',
       publisherSize = '$publisherSize',
       mediaStatus = '$mediaStatus',
       img = '$img->fileName'
       WHERE id = {$id}";
   } else{
       $sql = "UPDATE library_stock SET
       mediaType = '$mediaType',
       title = '$title',
       authorFirstName = '$authorFirstName',
       authorLastName = '$authorLastName',
       shortDesrc = '$shortDesrc',
       ISBN = '$ISBN',
       publishDate = '$publishDate',
       publisherName = '$publisherName',
       publisherAddress = '$publisherAddress',
       publisherSize = '$publisherSize',
       mediaStatus = '$mediaStatus'
       WHERE id = {$id}";
   }
   if ($connect->query($sql) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($img->error !=0)? $img->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . $connect->error;
       $uploadError = ($img->error !=0)? $img->ErrorMessage :'';
   }
   $connect->close();    
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
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
               <h1>Update request response</h1>
           </div>
            <div class="alert bgColor-4 textColor-1" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>' ><button class="btn bgColor-1 textColor-4" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn bgColor-5 textColor-1"  type='button'>Home</button></a>
            </div>
       </div >
   </body>
</html>