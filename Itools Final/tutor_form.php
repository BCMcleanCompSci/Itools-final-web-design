
<?php include 'header.php';
require_once('database.php');

/*$query= 'SELECT tutors.tutorFirstName AS firstN, tutors.tutorLastName AS lastN, courses.courseName AS CName
FROM tutors INNER JOIN roster ON tutors.tutorID = roster.tutorID
			INNER JOIN courses ON roster.courseID = courses.courseID';*/

$query = 'SELECT * FROM tutors';

$statement = $db->prepare($query);
$statement->execute();
$tutors = $statement->fetchAll();
$statement->closeCursor();

?>

	<main>
		<h2>Tutor List</h2>
        <table class = 'center'>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Courses Available</th>

				</tr>
				
				<?php foreach ($tutors as $tutor) : ?>
					<tr>

                    <td><?php echo $tutor['tutorFirstName']; ?></td>
					<td><?php echo $tutor['tutorLastName']; ?></td>
					
					
					<?php 
					$query = 'SELECT courses.courseName AS CName
							FROM courses INNER JOIN roster
							ON courses.courseID = roster.courseID
							WHERE roster.tutorID = :tutorID' ;
					$statement = $db->prepare($query);
					$statement->bindValue(':tutorID' ,$tutor['tutorID']);
					$statement->execute();
					$tutorCourses = $statement->fetchAll();
					$statement->closeCursor();
					$count = 1;
					foreach ($tutorCourses as $course): 
						if ($count==1){ ?>
							<td><?php echo $course['CName']?></td></tr>
							<?php $count += 1;
						}else{ ?>
							<tr> <td></td>
								<td></td>
								<td><?php echo $course['CName']?></td></tr>
						<?php		
						}					
				 endforeach; 
			 endforeach; ?>
			</table> 
			<h2><a href="index.php">Home</a></h2> 
    </main>
<?php include 'footer.php';?>