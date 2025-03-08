<?php
// Database connection
$servername = "sql111.infinityfree.com"; 
$username = "if0_37224457";
$password = "qsSHTStG1Z"; 
$dbname = "if0_37224457_test"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $noticeTitle = $conn->real_escape_string($_POST['noticeTitle']);
    $noticeContent = $conn->real_escape_string($_POST['noticeContent']);

    // Insert notice into the database
    $sql = "INSERT INTO notices (notice_title, notice_content) VALUES ('$noticeTitle', '$noticeContent')";

    if ($conn->query($sql) === TRUE) {
        echo "New notice posted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
