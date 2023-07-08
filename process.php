<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentattendance";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $student_name=$_POST["student_name"];
    $date = $_POST["date"];
    $attendance_status = $_POST["attendance_status"];

    // Sanitize user input
    $student_id = mysqli_real_escape_string($conn, $student_id);
    $student_name=mysqli_real_escape_string($conn, $student_name);
    $date = mysqli_real_escape_string($conn, $date);
    $attendance_status = mysqli_real_escape_string($conn, $attendance_status);

    // Insert attendance data into the database
    $sql = "INSERT INTO sheet (student_id, student_name, date, attendance_status) VALUES ('$student_id', '$student_name', '$date', '$attendance_status')";
    if (mysqli_query($conn, $sql)) {
        echo "<div style='text-align: center; margin-top: 20px;'><p style='color: blue; font-weight: bold;'>Attendance recorded successfully.</p></div>";
    } else {
        echo "<div style='text-align: center; margin-top: 20px;'><p style='color: red; font-weight: bold;'>Error: " . mysqli_error($conn) . "</p></div>";
    }
}

// Close the connection
mysqli_close($conn);
?>
