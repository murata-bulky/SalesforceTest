<?php
	print("test");
	foreach (getallheaders() as $name => $value) {
    	echo "$name: $value\n";
    }
?>
