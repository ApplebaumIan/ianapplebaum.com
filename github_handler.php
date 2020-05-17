<?php
/*
 * capture the Posted data
 */
 if (isset($_POST))
 {
//
	 echo "running";
 	 exec("
 		git checkout .
 		git pull
 	"
 	);
 }





?>
