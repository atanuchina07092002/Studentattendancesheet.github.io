<?php
// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'studentdatabase';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process external input when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Date']) && isset($_POST['selection'])) {
        $dates = $_POST['Date'];
        $selections = $_POST['selection'];

        // Insert data into the table
        foreach ($dates as $key => $date) {
            $date = $dates[$key];
            $selectionValue = isset($selections[$key]) ? 'Present' : 'Absent';

            // Insert data into the table
            $insertQuery = "INSERT INTO `attendancesheet` (`RollNo`, `Sub`, `Date`, `Status`) VALUES ('".$_POST['roll'][$key]."', '".$_POST['sub'][$key]."', '".$date."', '".$selectionValue."')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "<div style='text-align: center; margin-top: 20px;'><p style='color: blue; font-weight: bold;'>Attendance recorded successfully.</p></div>";
            } else {
                echo "<div style='text-align: center; margin-top: 20px;'><p style='color: red; font-weight: bold;'>Error: " . mysqli_error($conn) . "</p></div>";
            }
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
