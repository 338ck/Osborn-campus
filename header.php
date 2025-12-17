
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Horizontal Navigation Bar</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 10 auto;
    padding: 10 20px;
    overflow: hidden;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1px 0;
}

#logo {
    float: left;
    font-size: 1.5em;
}

nav {
    float: right;
}

.nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav-links li {
    display: inline-block;
    margin-left: 20px;
}

.nav-links li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: inline-block;
    transition: background-color 0.3s;
}

.nav-links li a:hover {
    background-color: #555;
}

.content {
    padding: 50px 0;
    text-align: center;
}
    </style>
</head>

<body>

    <header>
        <div class="container">
            
            <nav>
                <ul class="nav-links">
                    <li><a href="register.php">Register Student</a></li>
                    <li><a href="search.php">Search Student</a></li>
                    <li><a href="update.php">Update Student</a></li>
                    <li><a href="delete.php">Delete Studentt</a></li>
                    <li><a href="#">Live lecture</a></li>
                    <li><a href="#">free Lesson</a></li>
                    <li><a href="#">Result</a></li>
                    <li><a href="#">Assignments</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    

</body>

</html>