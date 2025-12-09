<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main-container">
        <div class="success-card">
            <h1>✅ Success!</h1>
            <p>Your application has been received.</p>
            
            <div class="details-box">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $name   = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
                        $email  = isset($_POST['email']) ? trim($_POST['email']) : '';
                        $course = isset($_POST['course']) ? trim($_POST['course']) : '';
                        $phone  = isset($_POST['phone']) ? trim($_POST['phone']) : '';

                        if ($name === '' || $email === '' || $course === '' || $phone === '') {
                            echo "<p style='color:red'><strong>Error:</strong> All fields are required.</p>";
                        } else {
                            $name   = htmlspecialchars($name);
                            $email  = htmlspecialchars($email);
                            $course = htmlspecialchars($course);
                            $phone  = htmlspecialchars($phone);

                            echo "<p><strong>Name:</strong> $name</p>";
                            echo "<p><strong>Email:</strong> $email</p>";
                            echo "<p><strong>Course:</strong> $course</p>";
                            echo "<p><strong>Phone:</strong> $phone</p>";
                        }
                    } else {
                        echo "<p style='color:red'>No data received.</p>";
                    }
                ?>
            </div>

            <br>
            <a href="index.html" class="submit-btn" style="text-decoration:none; display:inline-block;">Back to Home</a>
        </div>
    </div>

</body>
</html>
