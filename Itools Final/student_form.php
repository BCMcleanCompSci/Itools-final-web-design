    <?php include 'header.php';?>
    <main>
        <h2>Tell us about yourself</h2>
        <p>Here you can register as many students as you like.<br>
        But please provide a different password for each student.</p>    
        <div>
            <form action="add_student.php" method="post" class = "center">
            <label>First Name:</label>
            <input type="text" name="first_name" value=""><br>

            <label>Last Name:</label>
            <input type="text" name="last_name" value=""><br>

			
			<label>Phone:</label>
            <input type="text" name="phone" value=""><br>
			
			<label>Password:</label>
            <input type="text" name="pass" value=""><br>

            <label>&nbsp;</label>
			<input type="submit" value="Add Student"><br>
            </form>
        </div>
    <h2><a href="index.php">Home</a>
    </main>
    <?php include 'footer.php'?>

