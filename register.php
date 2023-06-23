<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    echo "You are not logged in.";
    exit; // Stop further execution if the user is not logged in
}

if (isset($_POST['regis'])) {
    // Get the selected event ID and user ID
    $eventId = $_POST['eventId'];
    $userId = getUserIdByUsername($username); // Implement this function to fetch the user ID based on the username

    // Insert the registration record into the "regis" table
    include "connection.php";
    $sql = "INSERT INTO regis (Id_Event, Id_Pengguna) VALUES ('$eventId', '$userId')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

function getUserIdByUsername($username)
{
    // Implement this function to fetch the user ID based on the username
    // Query the "pengguna" table and retrieve the corresponding user ID
    // Return the user ID
}
