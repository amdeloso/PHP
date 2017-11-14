<?php 

/*
	File System Functions
	References:
	1. https://youtu.be/sLLZU38Okgo

*/

	$path = '/dir1/myfile.php';
	$file = 'file1.php';

	/*
	//return filename
	echo basename($path);

	//return filename without extension .php
	echo basename($path, '.php');

	//dirname, return directory name from path
	echo dirname($path);

	//file_exists(variable)
	echo file_exists($file);

	
	//Get absolute/real path
	echo realpath($file);
	

	//Checks to see if file
	echo is_file($file);

	//check if file is writeable
	echo is_writeable($file);
	
	//check if file is readable
	echo is_readable($file);
	
	//get filesize
	echo filesize($file);
	
	//Create Directory 
	mkdir('testing');

	//Delete directory if empty
	rmdir('testing');

	//Duplicate a file
	echo copy('file1.php', 'file2.php');
	
	//Rename a file
	rename('file2.php', 'my.php');

	//Delete file
	unlink('my.php');
	
	//Write from file to string, show the contents
	echo file_get_contents($file);
	
	//Write/overwrite string to a file, the output shows the filesize
	echo file_put_contents($file, 'Goodbye World!')
	
	//Appending existing file contents
	$current = file_get_contents($file);
	$current .= "Goodby World!";
	file_put_contents($file, $current);
	
	//Open file for reading - open a file and show(read) the contents in the browser 
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	
	//Open file writing/overwrite existing text
	$handle = fopen($file, 'w');
	$txt = "John Doe";
	fwrite($handle, $txt);
	fclose($handle);
	*/
 ?>