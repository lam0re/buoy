<?php

function login( $username, $password )
{
	$handle = @fopen( '/tmp/users.db', 'r' );

	if( $handle )
	{
		while( ( $buffer = fgets( $handle, 4096 ) ) !== false )
		{
			if( preg_match( '/(.*);(.*);(.*);/', $buffer, $parsed ) )
			{
				if( $parsed[1] === $username )
				{
					if( ( $parsed[2] === md5( $password ) ) && ( $parsed[3] === '1' ) )
					{ // Correct password and activated
						return true;
					}
					else
					{ // Wrong password or not activated
						return false;
					}
				}
			}
		}

		fclose( $handle );
	}

	// Not logged in
	return false;
}

if( isset( $_REQUEST['username'] ) && isset( $_REQUEST['password'] ) )
{
	$_SESSION['logged_in'] = login( $_REQUEST['username'], $_REQUEST['password'] );

	if( $_SESSION['logged_in'] )
	{
		header( 'Location: index.php' );
	}
	else
	{
		header( 'Location: index.php?m=login' );
	}
}
else
{
	require( './templates/login.php' );
}

?>
