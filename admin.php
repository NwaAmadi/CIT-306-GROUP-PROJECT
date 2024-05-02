
<?php
// My Database connection
require_once 'C:\wamp64\www\CIT-306-GROUP-PROJECT\config\db.php';
require_once 'C:\wamp64\www\CIT-306-GROUP-PROJECT\config\function.php';
$result=display_data();

if(isset($_GET['download'])){


$query = "SELECT * FROM your_table";


$filename = 'Admin.csv';


$file = fopen('php://temp', 'w');


$headers = array('ID', 'First Name', 'Last Name', 'Email', 'Country', 'City', 'Phone', 'Gender', 'Date Registered');
fputcsv($file, $headers);


while ($row = mysqli_fetch_assoc($result)) {
   fputcsv($file, $row);
}


rewind($file);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

fpassthru($file);

fclose($file);

mysqli_close($con);
}

else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6">Admin Panel</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr class="table-headers">
                                <td>ID</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Country</td>
                                <td>City</td>
                                <td>Phone</td>
                                <td>Gender</td>
                                <td>Date Registered</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo ($row['Id']); ?></td>
                                <td><?php echo ($row['First Name']); ?></td>
                                <td><?php echo ($row['Last Name']); ?></td>
                                <td><?php echo ($row['Email']); ?></td>
                                <td><?php echo ($row['Country']); ?></td>
                                <td><?php echo ($row['City']); ?></td>
                                <td><?php echo ($row['Phone']); ?></td>
                                <td><?php echo ($row['Gender']); ?></td>
                                <td><?php echo ($row['registration_date']); ?></td>
                                <td><a href="edit.php?id=<?php echo $row['Id']; ?>" class="btn-1">Edit</a></td>
                                <td><a href="?delete_id=<?php echo $row['Id']; ?>" class="btn-2" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <form method='get' action='admin.php?download'>
                            <input type="submit" id="Download" name='download' value='Download Spreadsheet' 
                            style="background-color: #007bff; color: white; margin: 10px; margin-left: 42%; 
                            margin-top: 30px; padding: 10px 20px; 
                            border: none; border-radius: 5px; cursor: pointer;" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
 }
?>