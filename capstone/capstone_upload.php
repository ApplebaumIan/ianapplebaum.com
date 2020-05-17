<?php
/*
 * capture the Posted data
 */
 if (isset($_POST))
 {
//
	 echo "running";
 	 exec("
	  	rm ~/public_html/capstone/model.tflite.zip	
		cd ~/public_html/capstone/iASL-Backend/output/p1_train
 		git checkout .
 		git pull
 		cat model.* > model.tflite
		mv model.tflite ~/public_html/capstone
		cp labels.txt ~/public_html/capstone
		cd ~/public_html/capstone
 	        zip model.tflite.zip model.tflite labels.txt
		rm model.tflite
		rm labels.txt
 	"
 	);
 }





?>
