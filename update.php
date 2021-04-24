<?php
require_once 'actions/db_connection.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM library_stock WHERE id = {$id}";
   $result = $connect->query($sql);
   if ($result->num_rows == 1) { 
       $data = $result->fetch_assoc();
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
       header( "location: error.php");
   }
   $connect->close();
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- inserting fonts php file -->
    <?php require_once 'components/fonts.php'?>
    
    <!-- inserting Bootstrap -->
    <?php require_once 'components/boot_CSS.php'?>
    
    <!-- CSS only for this project -->
    <link rel="stylesheet" href="css/style.css">
    <title>N@t's Lib || Edit Item </title>
  </head>

   <body>
   <div class="container pt-3 pb-3">
   <h2 class='textColor-4 text-center'>Update request</h2>
    <fieldset class="bg-warning d-flex flex-row  justify-content-around">
      <legend>
        <img class='bg-primary img-thumbnail' src='img/<?php echo $img ?>'>
      </legend>
      <form class="bg-success" action ="actions/a_update.php" method="post"  enctype="multipart/form-data">
        <table class="table">
          <tr>
            <th><h6>Media Type</h6></th>
            <td><input class ="form-control" type="text" name="mediaType" placeholder="Insert type of media (i.e. book, ebook, DVD, CD)" value="<?php echo $mediaType ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Title</h6></th>
            <td><input class ="form-control" type="text" name="title" placeholder='Insert the title (i.e. "The Lord of the Rings" )' value="<?php echo $title ?>"   /></td>
          </tr>
          <tr>
            <th><h6>First Name</h6></th>
            <td><input class ="form-control" type="text" name="authorFirstName" placeholder='The first name of the author' value="<?php echo $authorFirstName ?>"   /></td>
          </tr>
          <tr>
          <th><h6>First Name</h6></th>
            <td><input class ="form-control" type="text" name="authorFirstName" placeholder='The first name of the author' value="<?php echo $authorFirstName ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Last Name</h6></th>
            <td><input class ="form-control" type="text" name="authorLastName" placeholder='The last (family) name of the author' value="<?php echo $authorLastName ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Description</h6></th>
            <td><input class ="form-control" type="text" name="shortDesrc" placeholder='Insert a short description of the item' value="<?php echo $shortDesrc ?>"   /></td>
          </tr>
          <tr>
            <th><h6>ISBN</h6></th>
            <td><input class ="form-control" type="text" name="ISBN" placeholder='Insert the ISBN number (i.e. 123-4-567-8910-2)' value=" <?php echo $ISBN ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Picture</h6></th>
            <td><input class= "form-control" type="file" name= "img" /></td>
          </tr>
          <tr>
            <th><h6>Date of Publishing</h6></th>
            <td><input class ="form-control" type="text" name="publishDate" value="<?php echo $publishDate ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Name of the publisher</h6></th>
            <td><input class ="form-control" type="text" name="publisherName" placeholder ='i.e. Random House LCC US' value="<?php echo $publisherName ?>"   /></td>
          </tr>
          <tr>
            <th><h6>Size of the publisher</h6></th>
            <td><input class ="form-control" type="text" name="publisherSize" placeholder ='small/medium/big' value="<?php echo $publisherSize ?>"   /></td>
          </tr>
          <tr>
            <th><h6>mediaStatus</h6></th>
            <td><input class ="form-control" type="text" name="mediaStatus" placeholder ='active/inactive' value="<?php echo $mediaStatus ?>" /></td>
          </tr>
          <tr>
            <th><h6>Address of the publisher</h6></th>
            <td><input class ="form-control" type="text" name="publisherAddress" placeholder ='i.e. Kärntner Ring 1, 1010 Vienna, Austria' value="<?php echo $publisherAddress ?>" /></td>
          </tr>
          <tr>
            <input type= "hidden" name="id"  value="<?php echo $data['id'] ?>" />
            <input type= "hidden" name="img"  value="<?php echo $data['img'] ?>" />
            <td><button class ="btn btn-success" type ="submit">Save Changes</button></td>
            <td><a href="index.php" ><button class ="btn btn-warning" type="button">Back </button></a></td>
          </tr>
        </table>
      </form>

    </fieldset>

   </div>


   </body>
</html>