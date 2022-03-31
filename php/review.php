<?php 

include '../db/conn.php';

// error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments(email, comment)
			VALUES ('$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully :)')</script>";
		echo "<script>window.location.href = './review.php'</script>;";

	} else {
		echo "Error deleting record: " . $conn->error;

	}
}

// if (isset($_GET['name'])) {
//  $id=$row['id'];

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// sql to delete a record
if(isset($_GET['deleteid']
)){
$sqldelete = "DELETE FROM comments WHERE  id='". $_GET['deleteid'] . "'";

$result = mysqli_query($conn, $sqldelete);
	if ($result) {
		echo "<script>alert('Comment deleted successfully :)')</script>";
			// sleep(3);
		echo "<script>window.location.href = './review.php'</script>;";


} else {
	echo "Error deleting record: " . $conn->error;
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/review.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">	
	<title>User Reviews</title>
</head>
<body>
<ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bmi.php">BMI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="routine.php">Routine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="review.php">Reviews</a>
        </li>
    </ul>


	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Leave a Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
			
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			
			<div class="single-item">
				Email:   <a href="<?php ?>"><?php echo $row['email']; ?></a>
				<p>Comment:   <?php echo nl2br($row['comment']); ?></p>
				<div class="input-group">
				<button style="background-color: red;" class="btn"><a href="review.php?deleteid=<?php echo $row['id']; ?>"> Delete Comment</a></button>
				</div>			
		</div>
				<?php

					}
				}
				
				?>
		</div>
	</div>
</body>
</html>	