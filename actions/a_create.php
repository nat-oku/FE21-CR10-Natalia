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

   $uploadError = '';
   //this function exists in the service file upload.
   $img = file_upload($_FILES['img']);  
 
   $sql = "INSERT INTO library_stock (mediaType, title, authorFirstName, authorLastName, shortDesrc, ISBN, publishDate, publisherName, publisherAddress, publisherSize, mediaStatus, img) VALUES ('$mediaType', '$title', '$authorFirstName', '$authorLastName', '$shortDesrc', '$ISBN', '$publishDate', '$publisherName', '$publisherAddress', '$publisherSize', '$mediaStatus', '$img->fileName')";

   if ($connect->query($sql) === true ) {
       $class = "success";
       $message = "
        <h5>
          The entry below was successfully created
          <br><br><i class='far fa-smile-beam fs-1'></i>
        </h5>
            <table class='table w-50'>
              <tr>
                <td> $mediaType</td>
                <td> $title </td>
                <td> $authorFirstName</td>
                <td> $authorLastName</td>
                <td> $shortDesrc</td>
                <td> $ISBN</td>
                <td> $publishDate</td>
                <td> $publisherName</td>
                <td> $publisherSize</td>
                <td> $mediaStatus</td>
                <td> $publisherAddress</td>
              </tr>
            </table>";
       $uploadError = ($img->error !=0)? $img->ErrorMessage :'';
   } else {
       $message = "Error while creating record. Try again: <br>" . $connect->error;
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
    <title>N@t's Lib || Update</title>
    <!-- inserting fonts php file -->
    <?php require_once '../components/fonts.php'?>
    
    <!-- inserting Bootstrap -->
    <?php require_once '../components/boot_CSS.php'?>
    
    <!-- CSS only for this project -->
    <link rel="stylesheet" href="../css/style.css">

   </head>
   <body>
     <div class="container">
       <div class="mt-3 mb-3">
        <h2 class="textColor-4">Request response</h2>
      </div>
       <div class="alert bgColor-4 textColor-1" role="alert">
        <p><?php echo ($message) ?? ''; ?></p>
        <p><?php echo ($uploadError) ?? ''; ?></p>
        <a href='../create.php'><button class="btn bgColor-5 textColor-1" type='button'>Go back to insert new item</button></a>
        <a href='../index.php'><button class="btn bgColor-1 textColor-4" type='button'>Home</button></a>

      </div >
     </div>
   </body>
</html>