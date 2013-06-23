<?php

/* ###                                        
    ###                                       
     ##                                       
     ##                                       
     ##       Mozilla CTF 2011  Buoy v0.2
     ##      /###   ### /### /###     /###    
     ##     / ###  / ##/ ###/ /##  / / ###  / 
     ##    /   ###/   ##  ###/ ###/ /   ###/  
     ##   ##    ##    ##   ##   ## ##    ##   
     ##   ##    ##    ##   ##   ## ##    ##   
     ##   ##    ##    ##   ##   ## ##    ##   
     ##   ##    ##    ##   ##   ## ##    ##   
     ##   ##    /#    ##   ##   ## ##    /#   
     ### / ####/ ##   ###  ###  ### ####/ ##  
      ##/   ###   ##   ###  ###  ### ###   ##

Requirements:
	- httpd: apache
	- register_globals: off
	- magic_quotes_gpc: off

Sources:
	- http://www.noaanews.noaa.gov/stories2005/images/dart_buoy-wave.jpg
*/

require( './config.php' );

// Default
$module = 'login';

if( isset( $_SESSION['logged_in'] ) && $_SESSION['logged_in'] )
{ // Authenticated
	if( isset( $_GET['m'] ) && is_string( $_GET['m'] ) )
	{
		$module = $_GET['m'];
	}
	else
	{
		$module = 'write';
	}
}
elseif( !$registration_deactivated )
{ // Not authenticated, but registration is possible
	if( isset( $_GET['m'] ) && ( $_GET['m'] === 'register' ) )
	{
		$module = 'register';
	}
}

if( preg_match( '/^([a-z]*)$/', $module ) )
{
	$module = './modules/' . $module . '.php';

	if( file_exists( $module ) )
	{
		require( $module );
	}
}

?>
