<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "villababas_funeral_homes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve recent clients from the database
$sql = "SELECT * FROM clients ORDER BY id DESC LIMIT 5"; // Assuming 'clients' is your table name
$result = $conn->query($sql);

// Store recent clients in an array
$recentClients = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recentClients[] = $row;
    }
}

// Close connection
$conn->close();
?>