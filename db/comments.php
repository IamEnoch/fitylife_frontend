<?php 

include 'conn.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (email, comment)
			VALUES ('$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully :)')</script>";
        echo '<script> window.location.href ="../php/review.php";</script>';
	} else {
		echo "<script>alert('Comment does not add :(')</script>";
        echo '<script> window.location.href ="../php/review.php";</script>';
	}
}

// if (isset($_GET['name'])) {
//  $id=$row['id'];

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// sql to delete a record
$sql = "DELETE FROM comments WHERE id='". $_GET['deleteid'] . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  echo "<script>window.location.href = './index.php'</script>;";
} else {
  echo "Error deleting record: " . $conn->error;
}

// }
?>