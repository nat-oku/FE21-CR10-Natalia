<!-- connecting the index file to the DataBase -->
<?php require_once 'actions/db_connection.php' ?>

<!-- connecting the index file to the table "	library_stock" -->
<?php
  $sql = "SELECT * FROM library_stock";
  $result = mysqli_query($connect ,$sql);
  $tbody='';
  if(mysqli_num_rows($result)  > 0) {    
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){    
        $tbody .= "
        <tr>

            <td><img class='img-thumbnail' src='img/" .$row['img']."'</td>
            <td>" .$row['mediaType']."</td>
            <td>" .$row['title']."</td>
            <td>" .$row['authorFirstName']." ".$row['authorLastName']."</td>
            <td>" .$row['shortDesrc']."</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['publishDate']."</td>
            <td>" .$row['publisherName']."</td>
            <td>" .$row['publisherAddress']."</td>
            <td>" .$row['publisherSize']."</td>
            <td>" .$row['mediaStatus']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
        </tr>";
    };
  } else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
  }

  $connect->close();
?> 
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

  <title>N@at's Library</title>
</head>
<body>

  <!-- inserting navbar -->
  <header>
    <?php
      require_once 'components/navbar.php'
    ?>
  </header>

  <main class="p-3 p-3">
  <div class='mb-3'>
    <a href="create.php"><button class='btn bgColor-4 textColor-1'type = "button" >Add product</button></a>
  </div>
    <!-- inserting main section -->
    <table class='table table-striped table-dark table-hover'>
      <thead class='table bgColor-4 textColor-1' >
        <tr>
          <th>Picture</th>
          <th>Media Type</th>
          <th>Title</th>
          <th>Author</th>
          <th>Description</th>
          <th>ISBN</th>
          <th>Date of Publication</th>
          <th>Publisher Name</th>
          <th>Publisher Address</th>
          <th>Publisher Size</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="w-100">
        <?= $tbody;?>
      </tbody>
    </table>
  </main>

  <!-- inserting footer -->
  <footer>
    <?php
      require_once 'components/footer.php'
    ?>
  </footer>


  <!-- Bootstrap JS -->
  <?php require_once 'components/boot_JS.php'?>

</body>
</html>