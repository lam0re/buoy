<?php

if( !isset( $_SESSION['logged_in'] ) || !$_SESSION['logged_in'] )
{
	exit();
}

function replace_code( $message )
{
	$message = preg_replace( '/\[b\](.*?)\[\/b\]/i', '<b>$1</b>', $message );
	$message = preg_replace( '/\[i\](.*?)\[\/i\]/i', '<i>$1</i>', $message );
	$message = preg_replace( '/\[uc\](.*?)\[\/uc\]/ie', 'strtoupper("$1")', $message );
	$message = preg_replace( '/\[lc\](.*?)\[\/lc\]/ie', 'strtolower("$1")', $message );

	return $message;
}

function load_message( $file )
{
	$file = './messages/' . $file;

	if( file_exists( $file ) )
	{
		return file_get_contents( $file );
	}
	else
	{
		return '';
	}
}

if( isset( $_GET['channel'] ) )
{
	$message =
		replace_code
		(
			htmlspecialchars
			(
				load_message( md5( $_GET['channel'] ) )
			)
		);

	require( './templates/read.php' );
}

?>
