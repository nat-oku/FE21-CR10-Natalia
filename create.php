<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- inserting fonts php file -->
  <?php require_once 'components/fonts.php'?>

  <!-- inserting Bootstrap -->
  <?php require_once 'components/boot_CSS.php'?>

  <!-- CSS only for this project -->
  <link rel="stylesheet" href="css/style.css">

  <title>N@t's Lib || Add media</title>
</head>
<body>
<!-- 
  <header>
    
      require_once 'components/navbar.php'
    
  </header>-->

  <div class="container pt-3 pb-3">
  <fieldset class="">
    <legend><h2 class='textColor-4 text-center'>Add media to library</h2></legend>
    <a href ='index.php'><button class ='btn bgColor-4 textColor-1'>Cancel & go back</button>

    <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
      <table class='table text-end'>
        <tr class="">
          <th><h6>Media Type</h6></th>
          <td><input class='form-control' type="text"  name="mediaType"  placeholder ="Insert type of media (i.e. book, ebook, DVD, CD)" /></td>
        </tr>
        <tr>
          <th><h6>Title</h6></th>
          <td><input class='form-control' type="text"  name="title"  placeholder ='Insert the title (i.e. "The Lord of the Rings" )'/></td>
        </tr>
        <tr>
          <th><h6>First Name</h6></th>
          <td><input class='form-control' type="text"  name="authorFirstName"  placeholder ='The first name of the author'/></td>
        </tr>
        <tr>
          <th><h6>Last Name</h6></th>
          <td><input class='form-control' type="text"  name="authorLastName"  placeholder ='The last (family) name of the author'/></td>
        </tr>
        <tr>
          <th><h6>Description</h6></th>
          <td><input class='form-control' type="text"  name="shortDesrc"  placeholder ='Insert a short description of the item'/></td>
        </tr>
        <tr>
          <th><h6>ISBN</h6></th>
          <td><input class='form-control' type="text"  name="ISBN"  placeholder ='Insert the ISBN number (i.e. 123-4-567-8910-2)'/></td>
        </tr>
        <tr>
          <th><h6>Picture</h6></th>
          <td><input class='form-control' type="file" name="img"/></td>
        </tr>
        <tr>
          <th><h6>Date of Publishing</h6></th>
          <td><input class='form-control' type="text" name="publishDate"/></td>
        </tr>
        <tr>
          <th><h6>Name of the publisher</h6></th>
          <td><input class='form-control' type="text" name="publisherName" placeholder ='i.e. Random House LCC US'/></td>
        </tr>
        <tr>
          <th><h6>Size of the publisher</h6></th>
          <td><input class ='form-control' type="text" name="publisherSize" placeholder ='small/medium/big'/></td>
        </tr>
        <tr>
          <th><h6>mediaStatus</h6></th>
          <td><input class ='form-control' type="text" name="mediaStatus" placeholder ='active/inactive'/></td>
        </tr>
        <tr>
          <th><h6>Address of the publisher</h6></th>
          <td><input class ='form-control' type="text" name="publisherAddress" placeholder ='i.e. Kärntner Ring 1, 1010 Vienna, Austria'/></td>
        </tr>
        
        <tr>
          <td><button class ='btn bgColor-5 textColor-1' type= "submit">Insert media item</button></td>
        </tr>
      </table>
    </form>
  </fieldset>

  </div>
  
</body>
</html>