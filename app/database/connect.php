<?php
//这个Articles是database的名字，后期改掉就行
/* $conn = new mysqli('localhost', 'root', '','Blog');
if(!$conn){
    die(mysqli_error($conn));
}
 */

$host = 'localhost';
$user = 'root';
$pass = ''; //这里没有设置密码，以后有密码以后再换成root
$db_name = 'blog';
$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn -> connect_error){
    die('Database connection errors: '. $conn->connect_error);
} 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

