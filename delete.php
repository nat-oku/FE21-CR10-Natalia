<?php 
require_once 'actions/db_connection.php';

if  ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM library_stock WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();
   if ($result->num_rows == 1) {
       $mediaType = $data['mediaType'];
       $title = $data['title'];
       $authorFirstName = $data['authorFirstName'];
       $authorLastName = $data['authorLastName'];
       $shortDesrc = $data['shortDesrc'];
       $ISBN = $data['ISBN'];
       $publishDate = $data['publishDate'];
       $publisherName =  $data['publisherName'];
       $publisherAddress = $data['publisherAddress'];
       $publisherSize = $data['publisherSize'];
       $mediaStatus = $data['mediaStatus'];
       $img = $data['img'];
   } else {
       header("location: error.php");
   }
   $connect->close();
} else {
   header( "location: error.php");
}  
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
     <meta  charset="UTF-8">
     <meta name="viewport"  content="width=device-width, initial-scale=1.0">
     
     <!-- inserting fonts php file -->
     <?php require_once 'components/fonts.php'?>
     
     <!-- inserting Bootstrap -->
     <?php require_once 'components/boot_CSS.php'?>
     <!-- CSS only for this project -->
     <link rel="stylesheet" href="css/style.css"> 
     
     <title>N@t's Lib || Delete Product</title>

   </head>
   <body>
     <div class="container">
       <h2 class='textColor-4 text-center mt-3 mb-3'>Delete request</h2>
       <div class="d-lg-flex justify-content-around">
         <img class='img-thumbnail'  src='img/<?php echo $img ?>' alt="<?php echo $img ?>">
         
         <fieldset>
           <h5 >You have selected the item below: </h5>
           <table class="table w-75 mt-3" >
             <tr>
               <td><?php echo "$title by $authorFirstName $authorLastName" ?></td>
           </table>
           <h3  class="mb-4">Do you really want to delete this item?</h3>
           <form action ="actions/a_delete.php"  method="post">
            <input type="hidden"  name="id" value ="<?php echo $id ?>" />
            <input type="hidden"  name="img"  value="<?php echo $img ?>" />
            <button class="btn bgColor-5 textColor-1"  type="submit"> Yes, delete it! </button>
            <a href="index.php"><button class="btn bgColor-4 textColor-1"  type="button">No, go back!</button></a>
           </form>
       </fieldset>
     </div>

     
     </div>

      
   </body>
</html>