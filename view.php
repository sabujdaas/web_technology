<?php
    $connect = mysqli_connect("localhost", "root", "", "try");

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch all users from database
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    
    // Check if query was successful
    if ($result === false) {
        die("Query failed: " . mysqli_error($connect));
    }
?>

<!DOCTYPE html>
<!-- Rest of your HTML code remains the same -->

<!DOCTYPE html>
<html>
    <head>
        <title>View Users</title>
        <!-- CSS file -->
        <link rel="stylesheet" href="style.css">
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            
            th, td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }
            
            th {
                background-color: #ff5e70;
                color: white;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            
            .back-btn {
                background-color: #4ac07f;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                text-decoration: none;
                display: inline-block;
                margin-top: 20px;
            }
            
            .table-container {
                width: 80%;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                box-shadow: 0px 0px 10px 0px #aaa;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="table-container">
            <h2>User List</h2>
            
            <?php if(mysqli_num_rows($result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No users found in database.</p>
            <?php endif; ?>
            
            <a href="form.html" class="back-btn">Back to Form</a>
        </div>
        
        <p> &#169; All rights reserved by CITI.</p>
    </body>
</html>
