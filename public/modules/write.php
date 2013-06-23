<?php

if( !isset( $_SESSION['logged_in'] ) || !$_SESSION['logged_in'] )
{
	exit();
}

function save_message( $message, $file )
{
	$handle = @fopen( './messages/' . $file, 'a' );

	if( !$handle )
	{
		return false;
	}

	fwrite( $handle, $message . "\n" );
	fclose( $handle );

	return true;
}

if( isset( $_POST['message'] ) && isset( $_POST['channel'] ) )
{
	if( save_message( $_POST['message'], md5( $_POST['channel'] ) ) )
	{
		header( 'Location: index.php?m=read&channel=' . urlencode( $_POST['channel'] ) );
	}
}
else
{
	require( './templates/write.php' );
}

?>
