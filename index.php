<!DOCTYPE html>
<html>
<head>
    <title>Attendance Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
</head>
<body>
    <h1>University Of Engineering and Management</h1>
    <div class="container">
        <h2>Attendance Management System</h2>
        <p class="pdate">Current Date: <?php echo date("d-m-Y"); ?></p>
        <section id="sec">
        <form action="submit.php" method="post">
	    <section class="hori">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required>
	    </section>

	    <section class="hori">
            <label for="attendance">Attendance Status:</label>
            <select id="attendance" name="attendance">
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
	    </section>

            <button type="submit">Submit</button>
        </form>
	</section>
	<p>Are you a teacher? <a href="login.php">Login here</a> to access student attendance.</p>
    </div>
    <div class="group">
    <h5 class="team">TEAM MEMBER : </h5>
    <h5>Ashmit Jaiswal , Arundhuti Sarkar</h5> 
    <h5>Arnab Mondal ,Avik Brahmachari</h5>
    </div>
</body>
</html>
