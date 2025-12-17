


<?php
include("header.php");
include 'db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST["nic"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $course = $_POST["course"];

    $sql = "INSERT INTO students (nic, name, address, tel, course)
            VALUES ('$nic', '$name', '$address', '$tel', '$course')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Student registered successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
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
    <title>Register Student - Skyline Campus</title>
    <style>
        * {
            box-sizing: border-box;
        }

        /*body {
            margin: 0;
            padding:0;
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }*/
            body{
                background: #485548;
            }

        .form-box {
            background: white;
            : 20;
            padding: 25px 30px;
           
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
             margin: 50px auto; /* Top margin + horizontal centering */
        }

        h2 {
            text-align: center;
            color: #1565c0;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: 500;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        input[type="submit"] {
            background-color: #1976d2;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #1565c0;
        }

        .message {
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>

  
<div class="form-box">
    <h2>Register Student</h2>
    <form method="post">
        <label>NIC</label>
        <input type="text"class="form-control "placeholder="Enter Student Nic" name="nic" required>

        <label>Name</label>
        <input type="text"class="form-control "placeholder="Enter Student Name" name="name" required>

        <label>Address</label>
        <textarea name="address"class="form-control " placeholder="Enter Student Address"rows="2" required></textarea>

        <label>Telephone</label>
        <input type="text"class="form-control " placeholder="Enter Student phone number"name="tel" required>

        <label>Course</label>
        <input type="text"class="form-control " placeholder="Enter Student course"name="course" required>

        <label>E mail</label>
        <input type="text"class="form-control " placeholder="Enter e mail"name="course" required>
        

        <input type="submit" value="Register">
    </form>

    <?php if ($message): ?>
        <div class="message"><?= $message ?></div>
    <?php endif; ?>
    <?php include("footer.php");?>
</div>



</body>
</html>
