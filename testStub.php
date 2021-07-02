<?php
	print("確認");
	foreach (getallheaders() as $name => $value) {
    	echo "$name: $value\n";
	}
?>