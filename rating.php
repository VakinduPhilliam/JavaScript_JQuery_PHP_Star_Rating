<?php

/*
 *  Simple Rating System using CSS, JQuery, AJAX, PHP, MySQL
 *  From Devzone.co.in
 */

$ipaddress = md5($_SERVER['REMOTE_ADDR']); 
// here I am taking IP as UniqueID but you can have user_id from Database or SESSION


// Alter server details to your specification

$servername = "localhost"; 
$username = "root";
$password = "12345";
$dbname = "table";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Unable to connect Server: " . $conn->connect_error);
}

if (isset($_POST['rate']) && !empty($_POST['rate'])) {

    $rate = $conn->real_escape_string($_POST['rate']);
// check if user has already rated
    $sql = "SELECT `id` FROM `tbl_rating` WHERE `user_id`='" . $ipaddress . "'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo $row['id'];
    } else {

        $sql = "INSERT INTO `tbl_rating` ( `rate`, `user_id`) VALUES ('" . $rate . "', '" . $ipaddress . "'); ";
        if (mysqli_query($conn, $sql)) {
            echo "0";
        }
    }
}
$conn->close();
?>