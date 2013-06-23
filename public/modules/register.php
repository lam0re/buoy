<?php

function register( $username, $password )
{
	$handle = @fopen( '/tmp/users.db', 'a' );

	if( !$handle )
	{
		return false;
	}

	fwrite( $handle, $username . ';' . md5( $password ) . ';' . ( $auto_enable_accounts ? '1' : '0' ) . ';' . "\n" );
	fclose( $handle );

	return true;
}

if( isset( $_REQUEST['username'] ) && isset( $_REQUEST['password'] ) )
{
	if( ( strlen( $_REQUEST['username'] ) > 50 ) || ( strlen( $_REQUEST['password'] ) > 50 ) )
	{
		exit();
	}

	if( register( $_REQUEST['username'], $_REQUEST['password'] ) )
	{
		header( 'Location: index.php' );
	}
}
else
{
	require( './templates/register.php' );
}

?>
