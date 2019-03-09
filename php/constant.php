<?php
define("MAX", 255);
define("GREETING", "Hello world!");

$global = "Greeting";

function call() {
	global $global;
	
	echo GREETING;
	echo "<br>";
	echo MAX;
	echo "<br>";
	echo $global;
}

call();

?>