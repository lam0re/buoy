<?php

	require( './templates/header.php' );

?>
<div id="stylized">
 <form id="form" method="post">
  <h1>Write</h1>
  <p>Your messages are private as long as the channel is unknown.</p>
  <label>Channel
   <span class="small">Secret channel</span>
  </label>
  <input type="text" name="channel" id="channel" />
  <label>Message
   <span class="small">Your message</span>
  </label>
  <textarea name="message" id="message"></textarea> 
  <button type="submit">Post</button>
  <div class="spacer"></div>
 </form>
</div>
<?php

	require( './templates/footer.php' );

?>


