<?php
session_start();

// If user confirms logout
if (isset($_POST['confirm_logout'])) {
    $_SESSION = [];
    session_destroy();

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
    header("Pragma: no-cache");

    header("Location: index.php");
    exit;
}

// If user cancels logout
if (isset($_POST['cancel'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Logout</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            color: #0d47a1;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }

        .yes {
            background-color: #1976d2;
            color: white;
        }

        .yes:hover {
            background-color: #1565c0;
        }

        .no {
            background-color: #d32f2f;
            color: white;
        }

        .no:hover {
            background-color: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Are you sure you want to logout?</h2>
        <form method="post">
            <button type="submit" name="confirm_logout" class="yes">Yes, Logout</button>
            <button type="submit" name="cancel" class="no">Cancel</button>
        </form>
    </div>
</body>
</html>

