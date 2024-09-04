<?php
// Check if the user is logged in as an admin
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'zomato_db');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Get the list of restaurants
$query = "SELECT * FROM restaurants";
$result = mysqli_query($conn, $query);

// Get the list of cuisines
$query = "SELECT * FROM cuisines";
$cuisine_result = mysqli_query($conn, $query);

// Get the list of cities
$query = "SELECT * FROM cities";
$city_result = mysqli_query($conn, $query);

?>

