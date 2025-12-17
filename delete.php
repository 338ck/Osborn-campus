<?php
include("header.php");

include 'db.php';

$student = null;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['search'])) {
        $nic = $_POST["nic"];
        $result = $conn->query("SELECT * FROM students WHERE nic='$nic'");
        if ($result->num_rows > 0) {
            $student = $result->fetch_assoc();
        } else {
            $message = "❌ Student not found.";
        }
    }

    if (isset($_POST['delete'])) {
        $nic = $_POST["nic"];
        $conn->query("DELETE FROM students WHERE nic='$nic'");
        $message = "✅ Student deleted successfully!";
        $student = null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--font ausom cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <title>Delete Student - Skyline Campus</title>
    <style>
        /*body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e3f2fd, #90caf9, #42a5f5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }*/
            body{
                background:#456;
            }

        .box {
            background: rgba(255, 255, 255, 0.96);
            padding: 30px;
            border-radius: 20px;
           
            width: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
             margin: 50px auto; /* Top margin + horizontal centering */
        }

        h2 {
            text-align: center;
            color: #0d47a1;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #d32f2f;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #b71c1c;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }

        .student-info {
            margin: 20px 0;
            padding: 15px;
            background-color: #f1f8e9;
            border-left: 4px solid #388e3c;
        }

        .student-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="box">
    <h2>Delete Student</h2>
    <form method="post">
       
        <input type="text" name="nic"placeholder="Enter Student NIC"class="form-control" required value="<?= isset($_POST['nic']) ? htmlspecialchars($_POST['nic']) : '' ?>">

        <?php if ($student): ?>
            <div class="student-info">

                <p><strong>Name:</strong> <?= htmlspecialchars($student['name']) ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($student['address']) ?></p>
                <p><strong>Tel:</strong> <?= htmlspecialchars($student['tel']) ?></p>
                <p><strong>Course:</strong> <?= htmlspecialchars($student['course']) ?></p>
            </div>
            <input type="submit" name="delete" value="Confirm Delete">
        <?php else: ?>
            <input type="submit" name="search" value="Search Student">
        <?php endif; ?>
    </form>

    <?php if ($message): ?>
        <div class="message"><?= $message ?></div>
    <?php endif; ?>
</div>


</body>
</html>
<?php
include("footer.php");

?>