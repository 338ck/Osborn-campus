<?php
include("header.php");
include "db.php";
$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST["nic"];
    $stmt = $conn->prepare("SELECT * FROM students WHERE nic = ?");
    $stmt->bind_param("s", $nic);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
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
    <title>Search Student</title>
    <style>
       /* body {
            background: linear-gradient(to right, #e3f2fd, #90caf9);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }*/

        .form-box {
            background: white;
            padding: 30px;
            border-radius: 20px;
         
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            width: 400px;
             margin: 50px auto; /* Top margin + horizontal centering */
        }

        h2 {
            text-align: center;
            color: #0d47a1;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #1976d2;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1565c0;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Search Student</h2>
    <form method="post">
        <input type="text" name="nic" class="form-control "placeholder="Enter NIC" required>
        <input type="submit" value="Search">
    </form>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php $row = $result->fetch_assoc(); ?>
        <table>
            <tr><td>NIC:</td><td><?= $row['nic'] ?></td></tr>
            <tr><td>Name:</td><td><?= $row['name'] ?></td></tr>
            <tr><td>Address:</td><td><?= $row['address'] ?></td></tr>
            <tr><td>Telephone:</td><td><?= $row['tel'] ?></td></tr>
            <tr><td>Course:</td><td><?= $row['course'] ?></td></tr>
        </table>
    <?php elseif ($result): ?>
        <p>No student found.</p>
    <?php endif; ?>
</div>
</body>
</html>
<?php
include("footer.php");

?>