<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my-portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$first_name =  $_REQUEST['fullName'];
        $last_name = $_REQUEST['email'];
        $gender =  $_REQUEST['messages'];
$sql = "INSERT INTO `client`(`fullname`, `email`, `message`) VALUES ('$first_name',
'$last_name','$gender')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>back to page</h1>
<a href="index.html">Click</a>
    </center>
</body>
</html>