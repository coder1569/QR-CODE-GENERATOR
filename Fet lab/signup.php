<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        #details-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="details-container">
        <h2>Sign Up Details</h2>
        <?php
        // Retrieve form data
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        ?>
        <p><label>Full Name:</label> <?php echo $fullname; ?></p>
        <p><label>Email:</label> <?php echo $email; ?></p>
        <p><label>Username:</label> <?php echo $username; ?></p>
        <p><label>Password:</label> <?php echo $password; ?></p>
    </div>
    
    <script>
        setTimeout(function(){
            window.location.href = "Loginpage.html";
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
</body>
</html>
