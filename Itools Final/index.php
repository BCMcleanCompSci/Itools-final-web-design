<?php include 'header.php'; 
require 'courses.php';
$courses = get_courses();
if (!isset($courses)) echo "all good";?>

	<main>
		<br>
		<section>
			<img src ="./images/icons8-question-mark-48.png" alt = "question icon" class = "icons" height = 30>
			<h2> Who are we</h2>
			<p>It goes without saying that math can be tough especially at the university level. If you are in need of some help then you have come to the right place. Our group of tutors are experts in mathematics and they each specialinze in certain courses so you know that you are getting the best help possible.</p>
			<p>

			<p> The list of courses to the side are currently what we have avalable. Hover over each course name to see a description of the course.</p> 
			<h2>Hire Us</h2>
			<p>Each of our tutors can be hired for $20/h for 10 hours<br>
			We recomend 1-hour sessions at a time so that you don't get too brain drained.<br>
			If you haven't done so yet, please register yourself as a student with the link below.<br>
			After you have registered you can then select a course.</p>
			<h2><a href = "student_form.php">Register a student</a></h2>
			<h2><a href = "register_form.php">Register a course</a></h2>
		</section> 
		
		<aside>
			<h2><a href = "tutor_form.php">See Tutors</a></h2>
			<ul>
				<?php foreach($courses as $course):
					?>
					<li title = "<?php echo $course['courseInfo'];?>">
					<?php echo $course['courseName'];?></li>
				<?php
				endforeach;?>
			</ul>
		</aside>
    </main>
	<?php include 'footer.php';?>
