<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skyline Campus Login</title>
    <style>
        /* Body with gradient background */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:#455355;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Login box style */
        .login-box {
            background: rgba(255, 255, 255, 0.9); /* White with slight transparency */
            border-radius: 20px;
            padding: 40px;
            width: 320px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); /* Shadow for a floating effect */
            text-align: center;
        }

        /* Heading style */
        h2 {
            color: #0d47a1;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
        }

        /* Input field styles */
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #1976d2;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        /* Submit button hover effect */
        input[type="submit"]:hover {
            background-color: #1565c0;
            transform: scale(1.05); /* Slightly increase the size on hover */
        }

        /* Input field focus effect */
        input[type="text"]:focus {
            outline: none;
            border-color: #1976d2;
            box-shadow: 0 0 5px rgba(25, 118, 210, 0.6); /* Blue glow effect */
        }

        /* Footer text styling */
        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }



/*osborn */

.box {
	display: flex;
}

.box .inner {
	width: 400px;
	height: 200px;
	line-height: 200px;
	font-size: 2em;
	font-family: sans-serif;
	font-weight: bold;
	white-space: nowrap;
	overflow: hidden;
}

.box .inner:first-child {
	background-color: indianred;
	color: darkred;
	transform-origin: right;
	transform: perspective(100px) rotateY(-15deg);
}

.box .inner:last-child {
	background-color: lightcoral;
	color: antiquewhite;
	transform-origin: left;
	transform: perspective(100px) rotateY(15deg);
}

.box .inner span {
	position: absolute;
	animation: marquee 5s linear infinite;
}

.box .inner:first-child span {
	animation-delay: 2.5s;
	left: -100%;
}

@keyframes marquee {
	from {
		left: 100%;
	}

	to {
		left: -100%;
	}
}

    </style>
</head>
<body>

    


   
<div class="login-box">
    <h2>WELLCOME</h2>
   
    <div class="box">
  <div class="inner">
    <span>OSBORN CAMPUS</span>
  </div>
  <div class="inner">
    <span><img src="2.jpg" alt="A picture of me" width="350" height="350"></span>
  </div>
</div>


    <form method="post">
        <input type="text" name="username" placeholder="Enter your id number" required>
        <input type="submit" value="Login">
    </form>
    <div class="footer">© 2025 Osborn Campus</div>
</div>
</body>
</html>

