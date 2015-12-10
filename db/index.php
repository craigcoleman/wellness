<?php
//seesion_start();
echo "ip ";
	// $str1 = getenv('REMOTE_ADDR');
$str1 = $_SERVER['REMOTE_ADDR'];
echo "$str1";
//echo "<hr />";
//echo gethostname(); // may output e.g,: sandie
//echo " - ";
// Or, an option that also works before PHP 5.3
//echo php_uname('n'); // may output e.g,: sandie
echo "<hr />";

//include 'usage.php';

?>
<hr />
<a href = "usage.php" target = "_blank"> Total Page Hits. </a>
<hr />
<a href = "wellnessdata.php"  target = "_blank"> Wellness Data. </a>
<hr />
