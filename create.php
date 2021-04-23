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

  <header>
    <?php
      require_once 'components/navbar.php'
    ?>
  </header>

  <div class="container pt-3 pb-3">
  <fieldset>
    <legend class='h2'>Add Media to library</legend>
    <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
      <table  class='table'>
        <tr>
          <th>Media Type</th>
          <td><input class ='form-control' type="text"  name="mediaType"  placeholder ="Insert type of media (i.e. book, ebook,DVD, CD)" /></td>
        </tr>
        <tr>
          <th>Title</th>
          <td><input class ='form-control' type="text"  name="title"  placeholder ='Insert the title (i.e. "The Lord of the Rings" )'/></td>
        </tr>
        <tr>
          <th>First Name</th>
          <td><input class ='form-control' type="text"  name="authorFirstName"  placeholder ='The first name of the author'/></td>
        </tr>
        <tr>
          <th>Last Name</th>
          <td><input class ='form-control' type="text"  name="authorLastName"  placeholder ='The last (family) name of the author'/></td>
        </tr>
        <tr>
          <th>Description</th>
          <td><input class ='form-control' type="text"  name="shortDesrc"  placeholder ='Insert a short description of the item'/></td>
        </tr>
        <tr>
          <th>ISBN</th>
          <td><input class ='form-control' type="text"  name="ISBN"  placeholder ='Place for ISBN (i.e. 123-4-567-8910-2)'/></td>
        </tr>
        <tr>
          <th>Picture</th>
          <td><input class ='form-control' type="file" name="img"/></td>
        </tr>
        <tr>
          <th>Date of Publishing</th>
          <td><input class ='form-control' type="date" name="publishDate"/></td>
        </tr>
        <tr>
          <th>Name of the publisher</th>
          <td><input class ='form-control' type="text" name="publisherName" placeholder ='i.e. Random House LCC US'/></td>
        </tr>
        <tr>
          <th>Address of the publisher</th>
          <td><input class ='form-control' type="text" name="publisherAddress" placeholder ='i.e. Kärntner Ring 1, 1010 Vienna, Austria'/></td>
        </tr>
        <tr>
          <th>Size of the publisher</th>
          <td><input class ='form-control' type="text" name="size" placeholder ='small/medium/big'/></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><input class ='form-control' type="text" name="status" placeholder ='active/inactive'/></td>
        </tr>

        <tr>
          <td></td>
          <td><button class ='btn bgColor-5 textColor-1' type= "submit">Insert media item</button></td>
        </tr>
      </table>
    </form>
  </fieldset>

  </div>
  
</body>
</html>