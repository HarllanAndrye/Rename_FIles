<?php
/* 
* Rename multiple files
* Putting a sequence of numbers at the beginning of the file name
*/


	// Function to rename all the files in a directory
	function renameFiles($path) {

		if (!is_dir($path)) {
			echo "'" . $path . "' is not a directory!" . "\r\n";
			exit;
		}
		
		$files = scandir($path);
		
		$num = 1;

		echo 'Renaming files...' . "\r\n \r\n";

		foreach ($files as $file) {
			

			if ($file != '.' && $file != '..') {
				$newname = $num . ' - ' . $file;
				
				echo $newname . "\r\n";

				if ( $file != $newname ) {
					rename($path . $file, $path . $newname);  
				}
	
				$num++;
			}
		}
		
		echo "\r\n" . 'Done!' . "\r\n";
	}


	// Path where are the files that it will renames
	$path = "./my-files/";
	renameFiles($path);




