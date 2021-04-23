<!-- selecting, grabbing and displaying the table data 

<?php
  $sql = "SELECT * FROM library_stock";
  $result = mysqli_query($connect ,$sql);
  $tbody='';
  if(mysqli_num_rows($result)  > 0) {    
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){    
        $tbody .= "<tr>

            <td><img class='img-thumbnail' src='pictures/" .$row['img']."'</td>
            <td>" .$row['mediaType']."</td>
              <td>" .$row['title']."</td>
            <td><a href='update.php?id=" .$row['itemID']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['itemID']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
              </tr>";
    };
  } else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
  }

  $connect->close();
?> 