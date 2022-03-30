<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>User Reviews</title>
</head>

<body>
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
                <a href="<?php ?>"><?php echo $row['email']; ?></a>
                <p><?php echo nl2br($row['comment']); ?></p>
                <div class="input-group">
                    <button class="btn"><a href="index.php?deleteid=<?php echo $row['id']; ?>"> Delete
                            Comment</a></button>
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