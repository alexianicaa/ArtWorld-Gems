<?php
$servername = "localhost";
$username = "YOUR_DB_USERNAME"; // Replace with your MySQL username
$password = "YOUR_DB_PASSWORD"; // Replace with your MySQL password
$dbname = "YOUR_DB_NAME"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the submitted email from the form
$email = $_POST['email'];

// Prepare the SQL statement
$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
<br>
<style>
  .round-button {
    background-color: hotpink;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    text-align: center;
    display: inline-block;
    transition: background-color 0.3s ease;
    text-decoration: none;
    font-family: 'VT323', monospace;
  }

  .round-button:hover {
    background-color: deeppink;
  }
</style>

<a href="../index.html" class="round-button">Back Home</a>

