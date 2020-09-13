<html>
    <head>
    <meta charset="utf-8">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$pass = "";

$name=$_POST["name"];
$age=$_POST["age"];
$city=$_POST["city"];

$conn = mysqli_connect($servername, $username, $pass,"bloodbankdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO bloodbank
VALUES ('$name','$age','$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</body>
</html>