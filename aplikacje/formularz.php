<html>

<head>
    <link rel="stylesheet" href="style-form.css">
</head>

<body>
    
<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test";
$servername="localhost";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Failed to connect to the database: " . $conn->connect_error);
}

$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];

$sql = "INSERT INTO newsletter (email,imie,nazwisko) VALUES ('$email','$imie','$nazwisko')";

if ($conn->query($sql) === TRUE) { 
    echo "Successfully Subscribed!";
} else {
    echo "An error occurred while saving data: " . $conn->error;
}

$conn->close();
?>

<br> <a href="index.html"> <div id="return">home page </div></a>
<a href="figures.html"><div id="return">figures page </div></a>
<a href="replicas.html"><div id="return">  replicas page </div></a>
<a href="books.html"><div id="return">  books page </div></a>

</body>
</html>