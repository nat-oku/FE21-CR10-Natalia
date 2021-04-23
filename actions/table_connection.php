<!-- selecting, grabbing and displaying the table data 

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
            <td>" .$row['size']."</td>
            <td>" .$row['status']."</td>
            <td><a href='update.php?id=" .$row['itemID']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['itemID']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
        </tr>";
    };
  } else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
  }

  $connect->close();
?> 