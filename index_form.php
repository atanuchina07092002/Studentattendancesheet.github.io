<!DOCTYPE html>
<html>
<head>
   <title>Database Example</title>
   <link rel="stylesheet" href="style_a.css">
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f2f2f2;
         margin: 0;
         padding: 20px;
      }

      table {
         border-collapse: collapse;
         width: 100%;
      }

      th, td {
         border: 1px solid #ddd;
         padding: 8px;
      }

      th {
         background-color: blue;
      }

      input[type="date"], input[type="checkbox"] {
         margin-top: 5px;
      }

      input[type="submit"] {
         margin-top: 10px;
      }

      .btn {
         background-color: gray;
      }

      form {
         max-width: 50%;
         margin: 0 auto;
      }
   </style>
</head>
<body>
   <form method="POST" action="process_data.php">
      <table>
         <tr>
            <th>RollNo</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Status</th>
         </tr>
         <?php include 'fetch_data.php'; ?>
      </table>
      <input type="submit" value="Submit" class="btn">
   </form>
</body>
</html>
