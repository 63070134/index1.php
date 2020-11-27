<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13.mysql.database.azure.com', 'panupong@lab13', 'Bb24012545', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM ITFlab');
?>
<table class="table table-dark">
  <thead class="thead-dark">
    <tr>
            <th> <div align="center">ชื่อ</div></th>
            <th> <div align="center">น้ำหนัก</div></th>
            <th> <div align="center">ส่วนสูง</div></th>
            <th> <div align="center">bmi</div></th>
        </tr>
        </tr>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr id="<?php echo $Result['id'];?>">
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['bmi'];?></td>
    <td align="center">
      <a href="delete.php?ID=<?php echo $Result['ID'];?>" class="btn btn-outline-primary">DEL</a>
    </td>
  </tr>
<?php
}
?>
</table>
  <center>
    <a href="form.html">
      <button type="submit" class="btn btn-outline-primary" align="center">ADD</button>
    </a>
  </center>
<?php
mysqli_close($conn);
?>
</body>
</html>