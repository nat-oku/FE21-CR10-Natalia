<?php
 require_once 'actions/db_connection.php';

  if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library_stock WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
      $mediaType = $data['mediaType'];
      $title = $data['title'];
      $authorFirstName = $data['authorFirstName'];
      $authorLastName = $data['authorLastName'];
      $picture = $data['img'];
      $shortDesrc = $data['shortDesrc'];
      $publisherName = $data['publisherName'];
    } else {
        header("location: error.php");
    }
    $connect->close();
  }  

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


  <title>Details for <?php echo $locationName ;?></title>
</head>
<body>
  <header>
    <?php
      require_once 'components/navbar.php'
    ?>
  </header>

  <div class="container w-100 mt-3 mb-5">
    <div class="card alignCenter shadow" >
      <div class="row alignCenter p-3">
        <div class="col-md-4">
          <img style="height: 300px;" src="img/<?php echo $picture ;?>" alt="<?php echo $title ;?>">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title ;?></h5>
            <p class="card-text"><?php echo $mediaType ;?></p>
            <p class="card-text">
              <small class="text-muted">Written by <?php echo $authorFirstName ;?> <?php echo $authorLastName ;?></small>
            </p>
            <p class="card-text"><?php echo $shortDesrc ;?></p>
            <p class="card-text">Publisher House: <br><?php echo $publisherName ;?></p>
          </div>
        </div>

      </div>
    </div>

  </div>


  



</body>
</html>
