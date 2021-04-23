<!-- connecting the index file to the DataBase -->
<?php require_once 'actions/db_connection.php' ?>

<!-- connecting the index file to the table "	library_stock" -->
<?php require_once 'actions/table_connection.php' ?>

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

  <main class="container pt-3 pb-3">
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
          <th>Date of Publication</th>
          <th>Publisher</th>
          <th>status</th>
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