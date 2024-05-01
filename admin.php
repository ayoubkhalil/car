<!-- admin_interface.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="admin-form">
        <h2 style="text-align: center;">Admin Dashboard</h2>

        <?php
// Include the database configuration file
include 'config.php';

// Check the database connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Example query
$query = "SELECT * FROM your_table";
$result = $mysqli->query($query);

// Check if the query was successful
if ($result) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
        // Process each row of data
        // Example: echo $row['column_name'];
    }

    // Free the result set
    $result->free();
} else {
    // Display an error message if the query fails
    echo "Error: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>


        <form action="update_content.php" method="post">
            <div class="form-group">
                <label for="dynamicTitre">Dynamic Titre:</label>
                <input type="text" id="dynamicTitre" name="dynamicTitre" value="<?php echo $dynamicTitre; ?>">
            </div>
            
            <button type="submit">Update Content</button>
        </form>
    </div>
</body>
</html>

