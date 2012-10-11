<?php
    include_once('mobileredirect.inc');
    redirectMobileUser("http://m.netbiscuits.com", true, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Desktop Site</title>
    </head>
    <body>
       <p>This is the Desktop Site.</p>
		You were not redirect because you are browsing this page on a non-mobile device with this user agent: <b><?php 
		echo $_SERVER['HTTP_USER_AGENT'];
		?> </b>
    </body>
</html>
