<?php
    $conn = mysqli_connect('lab13.mysql.database.azure.com', 'panupong@lab13', 'Bb24012545', 'lab', 3306);
    $sql = 'DELETE FROM lab WHERE ID = '.$_GET['ID'].'';
    if(mysqli_query($conn, $sql)) {
        echo "delete COMPLETED";
    }
    else {
        echo "FAILED TO DELETE";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><a href="show.php" class="btn btn-outline-primary">BACK</a>
</body>
</html>