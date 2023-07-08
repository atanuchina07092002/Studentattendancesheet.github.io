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

// Fetch data from the first table
$sub = isset($_POST['Sub']) ? $_POST['Sub'] : '';
$date = isset($_POST['Date']) ? $_POST['Date'] : '';
if(empty($date))
{
    echo "<div style='text-align: center; margin-top: 20px;'><p style='color: red; font-weight: bold;'>Date is required</p></div>";
    exit;
}
$query = "SELECT Roll_No,Status FROM studentdetails where Sub1='$sub' OR Sub2='$sub' OR Sub3='$sub' ";
$result = mysqli_query($conn, $query);

// Display the fetched data
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
       <td><?php echo $row['Roll_No']; ?></td>
       <td><?php echo $sub; ?></td>
       <td><?php echo $date; ?></td>
       <td>
          <input type="checkbox" name="selection[]">
       </td>
       <!-- Hidden inputs to store Roll_No and Name -->
       <input type="hidden" name="roll[]" value="<?php echo $row['Roll_No']; ?>">
       <input type="hidden" name="sub[]" value="<?php echo $sub; ?>">
       <input type="hidden" name="Date[]" value="<?php echo $date; ?>">
    </tr>
    <?php
}

// Close the database connection
mysqli_free_result($result);
mysqli_close($conn);
?>
