<!-- connecting the index file to the DataBase -->
<?php require_once 'actions/db_connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- inserting footer -->
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

    <!-- inserting main section -->
    <main>
      <?php
        require_once 'components/main.php'
      ?>
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