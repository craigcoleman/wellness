<?php
   $host = "localhost";
   $database = "dbname";
   $user = "dbuser";
   $pass = "passcode";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
