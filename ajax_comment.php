<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	include('config/config.php');
	include('function.php');
	dbConnect();
	
	if (!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['comment']) AND !empty($_POST['postid'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$mail = mysql_real_escape_string($_POST['mail']);
		$comment = mysql_real_escape_string($_POST['comment']);
		$postId = mysql_real_escape_string($_POST['postid']);

		mysql_query("
			INSERT INTO comment
			(name, mail, comment, post_id)
			VALUES('{$name}', '{$mail}', '{$comment}', '{$postId}')");			
	}
?>

<div class="comment-item">
	<div class="comment-avatar">
		<img src="<?php echo avatar($mail) ?>" alt="avatar">
	</div>
	<div class="comment-post">
		<h3><?php echo $name ?> <span>said....</span></h3>
		<p><?php echo $comment?></p>
	</div>
</div>

<?php
	dbConnect(0);
endif?>