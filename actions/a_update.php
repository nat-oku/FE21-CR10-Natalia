<?php
require_once 'db_connection.php';
require_once  'file_upload.php';

if ($_POST) {
  $itemID = $_POST['itemID'];
  $mediaType = $_POST['mediaType'];
  $title = $_POST['title'];
  $authorFirstName = $_POST['authorFirstName'];
  $authorLastName = $_POST['authorLastName'];
  $shortDesrc = $_POST['shortDesrc'];
  $ISBN = $_POST['ISBN'];
  $publishDate = $_POST['publishDate'];
  $publisherName = $_POST['publisherName'];
  $publisherSize = $_POST['publisherSize'];
  $mediaStatus = $_POST['mediaStatus'];
  $publisherAddress = $_POST['publisherAddress'];

   //variable for upload pictures errors is initialized
   $uploadError = '';

   $img = file_upload($_FILES['img']);//file_upload() called  
   if ($img->error===0){
       ($_POST["img"]=="image.png")?: unlink("../img/$_POST[img]");          
       $sql = "UPDATE library_stock SET name = '$mediaType', '$title', '$authorFirstName', '$authorLastName', '$shortDesrc', '$ISBN', '$img->fileName', '$publishDate'', '$publisherName', '$publisherAddress', '$publisherSize', '$mediaStatus' WHERE itemID = {$itemID}";
   } else{
       $sql = "UPDATE library_stock SET name = '$mediaType', '$title', '$authorFirstName', '$authorLastName', '$shortDesrc', '$ISBN', '$publishDate'', '$publisherName', '$publisherAddress', '$publisherSize', '$mediaStatus' WHERE itemID = {$itemID}";
   }  /*  
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
   header("location: ../error.php");*/
}
?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot_CSS.php' ?> 
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Update request response</h1>
           </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$itemID;?>' ><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success"  type='button'>Home</button></a>
            </div>
       </div >
   </body>
</html>