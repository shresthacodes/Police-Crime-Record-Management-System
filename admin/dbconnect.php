<?php  
$dbcon = mysqli_connect("localhost", "root", "", "ghpolice");
mysqli_set_charset($dbcon, 'utf8'); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghpolice";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    date_default_timezone_set("Asia/Kolkata"); // Change the timezone to Indian Standard Time (IST)
} catch(PDOException $e) {
    // Output any connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
