<!doctype html>
<html>
  <head><title>Login Failed</title>
  <link rel="stylesheet" type="text/css" href="style.css"></head>
  <body>
  	<h1>.</h1>
<div class="stand"><div class="outer-screen"><div class="inner-screen"><div class="form">
	<h1 id='log'>Login failed.</h1>
	<a href='.'>Go back</a>
</div></div></div></div>
<?php
	  session_start();
	  if($_SESSION['debug'] == 1) {
	    echo "<div class='query'><pre id='query'>";
	    echo '<b>username</b>: '.$_SESSION['user'], "\n";
	    echo '<b>password</b>: '.$_SESSION['pass'], "\n";
	    echo '<b>query</b>: '.$_SESSION['quer'], "\n";
	    echo "</pre></div>";
	  }
	?>
  </body>
</html>