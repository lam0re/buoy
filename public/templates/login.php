<?php

	require( './templates/header.php' );

?>
<div id="stylized">
 <form id="form" method="post">
  <h1>Authenticate</h1>
  <p>Unauthorized use or attempted unauthorized use of this system is not permitted and may constitute a federal or state crime.</p>
  <label>Username
   <span class="small">Enter your name</span>
  </label>
  <input type="text" name="username" id="username" />
  <label>Password
   <span class="small">Enter your password</span>
  </label>
  <input type="password" name="password" id="password" />
  <button type="submit">Login</button>
  <div class="spacer"></div>
 </form>
</div>
<?php

	require( './templates/footer.php' );

?>

