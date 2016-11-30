<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>jQuery Ajax Comment System - Demo</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="wrap">
		<h1>jQuery Ajax Comment System</h1>
	<?php
		// retrive post
		include('config/config.php');
		include ('function.php');
		dbConnect();
		
		$query = mysqli_query(
			'SELECT *
			FROM post
			WHERE post_id = 1');
		$row = mysqli_fetch_array($query);
	?>
		<div class="post">
			<h2><?php echo $row['post_title']?></h2>
			<p><?php echo $row['post_body']?></p>
		</div>

	<?php
		// retrive comments with post id
		$comment_query = mysqli_query(
			"SELECT *
			FROM comment
			WHERE post_id = {$row['post_id']}
			ORDER BY comment_id DESC
			LIMIT 15");
	?>

		<h2>Comments.....</h2>
		<div class="comment-block">
		<?php while($comment = mysqli_fetch_array($comment_query)): ?>
			<div class="comment-item">
				<div class="comment-avatar">
					<img src="<?php echo avatar($comment['mail']) ?>" alt="avatar">
				</div>
				<div class="comment-post">
					<h3><?php echo $comment['name'] ?> <span>said....</span></h3>
					<p><?php echo $comment['comment']?></p>
				</div>
			</div>
		<?php endwhile?>
		</div>

		<h2>Submit new comment</h2>
		<!--comment form -->
		<form id="form" method="post">
			<!-- need to supply post id with hidden fild -->
			<input type="hidden" name="postid" value="<?php echo $row['post_id']?>">
			<label>
				<span>Name *</span>
				<input type="text" name="name" id="comment-name" placeholder="Your name here...." required>
			</label>
			<label>
				<span>Email *</span>
				<input type="email" name="mail" id="comment-mail" placeholder="Your mail here...." required>
			</label>
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here...." required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Comment">
		</form>
	</div>
</body>
</html>