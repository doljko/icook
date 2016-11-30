<?php
/**
 * Connect to mysql server
 * @param bool
 * @use true to connect false to close
 */
function dbConnect($conn=true){

	if (!$conn) {
		mysqli_close($link);
		return true;
	}

	$link = mysqli_connect('localhost', 'root', '') or die('Could not connect to MySQL DB ') . mysqli_error();
}


/**
 * gravatar Image
 * @see http://en.gravatar.com/site/implement/images/
 */
function avatar($mail, $size = 60){
	$url = "http://www.gravatar.com/avatar/";
	$url .= md5( strtolower( trim( $mail ) ) );
	// $url .= "?d=" . urlencode( $default );
	$url .= "&s=" . $size;
	return $url;
}



?>