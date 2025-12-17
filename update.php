<?php
include("header.php");
include("db.php");
$student = null;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['search'])) {
        $nic = $_POST['nic'];
        $query = "SELECT * FROM students WHERE nic='$nic'";
        $result = mysqli_query($conn, $query);
        $student = mysqli_fetch_assoc($result);
        if (!$student) {
            $message = "No student found with NIC: $nic";
        }
    }

    if (isset($_POST['update'])) {
        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $course = $_POST['course'];

        $query = "UPDATE students SET name='$name', address='$address', tel='$tel', course='$course' WHERE nic='$nic'";
        if (mysqli_query($conn, $query)) {
            $message = "Student details updated successfully!";
        } else {
            $message = "Error updating student details.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head><!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--font ausom cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Update Student - Skyline Campus</title>
    <style>
        /*body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #a8c0ff, #3f2b96);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }*/
        .box {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 400px;
             margin: 50px auto; /* Top margin + horizontal centering */
        }
        .box h2 {
            text-align: center;
            color: #3f2b96;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #3f2b96;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .message {
            text-align: center;
            margin-bottom: 15px;
            color: green;
        }
    </style>
</head>
<body>
    
  
    <div class="box">
        <h2>Update Student</h2>

        <?php if (!isset($student)) { ?>
            <form method="post">
                
                <input type="text" name="nic"class="form-control " placeholder="Enter NIC"required>
                <button type="submit" name="search">Search</button>
            </form>
        <?php } else { ?>
            <form method="post">
                <input type="hidden" name="nic" value="<?php echo $student['nic']; ?>">
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $student['name']; ?>" required>

                <label>Address:</label>
                <input type="text" name="address" value="<?php echo $student['address']; ?>" required>

                <label>Tel:</label>
                <input type="text" name="tel" value="<?php echo $student['tel']; ?>" required>

                <label>Course:</label>
                <input type="text" name="course" value="<?php echo $student['course']; ?>" required>

                <button type="submit" name="update">Update</button>
            </form>
        <?php } ?>

        <?php if ($message): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>

<?php
include("footer.php");

?>
    
</body>
</html>
