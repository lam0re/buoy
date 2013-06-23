<?php

	require( './templates/header.php' );

?>
<div id="stylized">
 <h1>Messages</h1>
 <p>Private channel established. Getting messages.</p>
 <pre id="messages">
<?php

	echo $message;

?>
 </pre>
</div>
<?php

	require( './templates/footer.php' );

?>

