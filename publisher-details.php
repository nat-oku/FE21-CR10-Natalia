<?php
 require_once 'actions/db_connection.php';

  if ($_GET['publisherId']) {
    $publisherId = $_GET['publisherId'];
    $sql = "SELECT * FROM library_stock WHERE publisherId = {$publisherId} group by publisherName";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
      foreach($result as $value)
      {
        var_dump($value);
      }
      
      var_dump($result);
      // echo gettype($result);
      $mediaType = $data['mediaType'];
      $id = $data['id'];

      $title = $data['title'];
      $authorFirstName = $data['authorFirstName'];
      $authorLastName = $data['authorLastName'];
      $picture = $data['img'];
      $shortDesrc = $data['shortDesrc'];
      $publisherName = $data['publisherName'];
      $publisherAddress = $data['publisherAddress'];
      $publisherSize = $data['publisherSize'];

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
    <div class="mb-3">
      <h4>Publisher House: <?php echo $publisherName ;?></h4>
      <table class='table table-striped table-hover'>
        <thead class='table bgColor-4 textColor-1' >
          <tr>
            <th>Address</th>
            <th>Publishing House Size</th>
          </tr>
        </thead>
        <tbody class="w-100">
              <td class="card-text"><?php echo $publisherAddress ;?></td> 
              <td class="card-text"><?php echo $publisherSize ;?></td> 
        </tbody>
    </table>
    </div>

    <h5 class="mt-3 mb-1">List of products</h5>
      <table class='table table-striped table-hover'>
          <thead class='table bgColor-4 textColor-1' >
            <tr>
              <th>Img</th>
              <th>Title</th>
              <th>Media Type</th>
              <th>Author</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="w-100">
            <td><img style="height: 100px;" src="img/<?php echo $picture ;?>" alt="<?php echo $title ;?>"></td>
            <td class="card-text"><?php echo $title ;?></td> 
            <td class="card-text"><?php echo $mediaType ;?></td>
            <td class="card-text"><?php echo $authorFirstName ;?> <?php echo $authorLastName ;?></td>
            <td><a href="details.php?id=<?php echo $id ;?>"><button class='mt-3 btn btn-danger btn-sm' type='button'>Product details</button></a></td>
          </tbody>
      </table>


  </div>


  



</body>
</html>
