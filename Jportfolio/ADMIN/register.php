<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Admin Registration</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="bdate">Birth Date:</label>
                            <input type="date" class="form-control" id="bdate" name="bdate" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <p>Already have an account? <a href="login.php" data-toggle="collapse">Login here</a></p>
        </div>
    </div>

  
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the MySQL connection code here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "javierportfoliodb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, photo, bdate, age) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $username, $email, $password, $photo, $bdate, $age);

    // Set parameters and execute
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $photo = $_FILES["photo"]["name"]; // Get the name of the uploaded file
    $photo_tmp = $_FILES["photo"]["tmp_name"]; // Get the temporary location of the uploaded file
    move_uploaded_file($photo_tmp, "uploads/" . $photo); // Move the uploaded file to the desired location
    $bdate = $_POST["bdate"];
    $age = $_POST["age"];
    $stmt->execute();

    echo "<div class='container mt-3'><div class='alert alert-success' role='alert'>User registered successfully!</div></div>";

    $stmt->close();
    $conn->close();
}

?>

</body>
</html>
