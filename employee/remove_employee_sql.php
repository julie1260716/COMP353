<?php
/**
 * Created by PhpStorm.
 * User: DONGZHANG
 * Date: 2018-11-23
 * Time: 9:16 PM
 */
$id = $_POST['id'];
//$id = 1;
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "353p";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}
$sql = "DELETE FROM EMPLOYEE WHERE employee_id='$id'";
$result = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    echo "The employee is deleted";
    header("Location: all_employees.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>