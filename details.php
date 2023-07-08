<?php
// Establishing a connection to the MySQL database
$host = 'localhost'; // Change this if your database is hosted on a different server
$db = 'studentdatabase'; // Replace with your actual database name
$user = 'root'; // Replace with your actual MySQL username
$password = ''; // Replace with your actual MySQL password

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Fetching student details from the database
// $studentId = $_GET["id"]; // Assuming you pass the student ID through the URL parameter 'id'
$query = "SELECT * FROM studentdetails";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $students = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo"student not found";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color:greenyellow;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <table>
        <tr>
            <th>Roll_No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Sem</th>
            <th>Dept</th>
            <th>Sub1</th>
            <th>Sub2</th>
            <th>Sub3</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student['Roll_No']; ?></td>
                <td><?php echo $student['Name']; ?></td>
                <td><?php echo $student['Age']; ?></td>
                <td><?php echo $student['Sem']; ?></td>
                <td><?php echo $student['Dept']; ?></td>
                <td><?php echo $student['Sub1']; ?></td>
                <td><?php echo $student['Sub2']; ?></td>
                <td><?php echo $student['Sub3']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
// Closing the database connection
$conn->close();
?>
