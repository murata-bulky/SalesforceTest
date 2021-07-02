<?php
	print("確認2");
	foreach (getallheaders() as $name => $value) {
    	echo "$name: $value\n";
    	print("ケースID：".$_POST["Id"]);
	}
?>