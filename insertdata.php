<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tummanun.mysql.database.azure.com', 'tummanun@tummanun', 'Artzxc123', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
  header("Location: showdata.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>