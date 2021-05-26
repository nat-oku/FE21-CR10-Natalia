<!-- connecting the index file to the DataBase -->
<?php require_once 'actions/db_connection.php' ?>

<?php

  $sql = "SELECT * FROM library_stock group by publisherName";
  $result = mysqli_query($connect ,$sql);
  $tbody=''; //this variable will hold the body for the table
  if(mysqli_num_rows($result)  > 0) {    
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
         $tbody .= "<tr>
         <td>" .$row['publisherName']."</td>
         <td><a href='details.php?publisherName=".$row['publisherName']."'><button class='mt-3 btn btn-danger btn-sm' type='button'>See details</button></a>
         </td>";
     };
  } else {
     $tbody =  "<tr><td colspan='8'><center>No Data Available </center></td></tr>";
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
  </style>
  
  <title>Publishers || N@at's Library</title>
</head>
<body>

  <!-- inserting navbar -->
  <header>
    <?php
      require_once 'components/navbar.php'
    ?>
  </header>

  <main class="p-3 p-3" id="media-list">
  <h2 class='textColor-4 text-center mt-3 mb-3'>List of media in the library</h2>

  <div class='mb-3'>
    <a href="create.php"><button class='btn bgColor-4 textColor-1'type = "button" >Add product</button></a>
  </div>
    <!-- inserting main section -->
    <table class='table table-striped table-hover'>
      <thead class='table bgColor-4 textColor-1' >
        <tr>
          <th>Publisher Name</th>
          <th>See Details</th>
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