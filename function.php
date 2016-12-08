?php

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