<?php

	require( './templates/header.php' );

?>
<div id="stylized">
 <form id="form" method="post">
  <h1>Register</h1>
  <p>This is the basic look of my form without table</p>
  <label>Username
   <span class="small">Enter your name</span>
  </label>
  <input type="text" name="username" id="username" />
  <label>Password
   <span class="small">Enter your password</span>
  </label>
  <input type="password" name="password" id="password" />
  <button type="submit">Sign-up</button>
  <div class="spacer"></div>
 </form>
</div>
<?php

	require( './templates/footer.php' );

?>
