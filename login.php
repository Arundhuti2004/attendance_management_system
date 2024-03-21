<!DOCTYPE html>
<html>
<head>
    <title>Teacher Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
</head>
<body>
	<h1>University Of Engineering and Management</h1>

    <div class="container">
        <h2>Teacher Login</h2>
<section id="sec2">
	<p class="pdate">Current Date: <?php echo date("d-m-Y"); ?></p>


        <form action="login_check.php" id="form1" method="post">
</section>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
<section class="hori">

<section class="hori">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
</section>

            <button type="submit">Login</button>
        </form>

</section>
	 <a href="teacher_signup.php">Teacher Registration</a>
	 <p>Are you a Student? <a href="index.php">Click here</a> to give attendance.</p>
    </div>
    </div>
    <div class="group">
    <h5 class="team">TEAM MEMBER :         </h5>
    <h5>Ashmit Jaiswal , Arundhuti Sarkar</h5> 
    <h5>Arnab Mondal ,Avik Brahmachari</h5>
    </div>

</body>
</html>