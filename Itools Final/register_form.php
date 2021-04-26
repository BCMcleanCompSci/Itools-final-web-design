<?php include 'header.php';
require('courses.php');?>
<?php 
    $courses = get_courses();?>
                
    <main>
        <h2>How can we help?</h2>
        <p>To register a course enter your ID number and password which you used to register.<br>
        Then select a course you need help with.</p>    
        <div>
        <form action="register_course.php" method="post" class = 'center'>
            <label>Your ID:</label>
            <input type="text" name="id" value=""><br>

            <label>Password:</label>
            <input type="text" name="passW" value=""><br>
            
            
            <label> Choose a course:</label>
            <select name="course">
                <?php 
                foreach($courses as $course):
                ?>
                    <option value="<?php echo $course['courseName'];?>">
                    <?php echo $course['courseName'];?></option>
                   
                <?php endforeach;?>
            </select><br>

            <label>&nbsp;</label>
			<input type="submit" value="Register Course"><br>
         </form>
        </div>
    <h2><a href="index.php">Home</a></h2>
    </main>
    <?php include 'footer.php'?>