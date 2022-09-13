<?php
include 'connection.php';
$query= "SELECT * FROM users";
$result=mysqli_query($conn,$query);
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <h2>Users list</h2>
    <table style="width:100%">
    <tr>
    <th>S.N</th>   
    <th>Full name</th>
    <th>Email</th>
    <th>Status</th>
    <th>Action</th>
</tr>
<?php
    while ($row=mysqli_fetch_array($result)) {
    ?>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $row['full_name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['status'];?></td>
<td>
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
    <a href="delet.php?id=<?php echo $row['id'];?>">Delete</a>
</td>
<?php } ?>
</table>
</body>
</html>