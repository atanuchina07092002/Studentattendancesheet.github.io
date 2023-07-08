
<!DOCTYPE html>
<html>
<head>
    <title>Attendance Display Sheet</title>
    <link rel="stylesheet" type="text/css" href="style_d.css">
</head>
<body>
    <h1>All Attendances</h1>
    
    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentdatabase";
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $student_id = isset($_POST["student_id"]) ? $_POST["student_id"]:'';
    $sub = isset($_POST['Sub']) ? $_POST['Sub'] : '';
    // Retrieve and display attendance information
    $sql = "SELECT * FROM attendancesheet where RollNo='$student_id' AND Sub='$sub'";
    $result = mysqli_query($conn, $sql);
    ?>
    
    <div class="attendance-table">
        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Date</th>
                    <th>Attendance Status</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["RollNo"]; ?></td>
                        <td><?php echo $row["Sub"] ;  ?></td> 
                        <td><?php echo $row["Date"];  ?></td>
                        <td><?php echo $row["Status"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p>No attendance records found.</p>
        <?php } ?>
    </div>
    
    <?php
    // Close the connection
    mysqli_close($conn);
    ?>
    
</body>
</html>
