<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';

// Return Filename
// echo basename($path);

// Return filename without ext
// echo basename($path, '.php');


// Return the dir name from the path
// echo dirname($path);

// Check if file exists & Can be used for a folder 
// echo file_exists($file);


//  Get the absolute path
// echo realpath($file);


// Checks to see if file & cant be used for a folder
// echo is_file($file);


//  Check if a file writeable
// echo is_writable($file);

// Get the file size
// echo filesize($file);


// Create a dir
// mkdir('testing');
// Remove directory if empty
// rmdir('testing');


// Copy file
// echo copy('file1.txt', 'file2.txt');


// Rename a file
// rename('file1.txt', 'myfile.txt');


// Delete file
// unlink('file1.txt');


// Write from file to string
// echo file_get_contents($file);


//  Write string to file
// echo file_put_contents($file, 'Goodbye world');

// $current = file_get_contents($file);
// $current .= ' Goodbye world';

// file_put_contents($file, $current);


// Open file for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;


// Open file for writing
// $handle = fopen($file, 'w');
// $txt = 'John Doe';
// fwrite($handle, $txt);
// $txt = 'Steve Smith';
// fwrite($handle, $txt);
// fclose($handle);
