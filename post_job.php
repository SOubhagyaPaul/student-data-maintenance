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
    $jobTitle = $conn->real_escape_string($_POST['jobTitle']);
    $jobDescription = $conn->real_escape_string($_POST['jobDescription']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $deadline = $conn->real_escape_string($_POST['deadline']);

    // Insert job into the database
    $sql = "INSERT INTO jobs (job_title, job_description, company_name, deadline) VALUES ('$jobTitle', '$jobDescription', '$companyName', '$deadline')";

    if ($conn->query($sql) === TRUE) {
        echo "New job posted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
