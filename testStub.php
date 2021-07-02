<?php
	print("確認2");
	print("ケースID：".$_GET["Id"]);
	foreach (getallheaders() as $name => $value) {
    	echo "$name: $value\n";
    	
	}
?>