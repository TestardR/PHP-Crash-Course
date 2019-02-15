<?php
    $path = '/dir1/myfile.php';
    $file = 'file.txt';

    // Return filename
    // echo basename($path);

    // Return filename without ext
    // echo basename($path, '.php');

    // Return the dirname from path
    // echo dirname($path);

    // Check if file exists, returns 1 if true
    // echo file_exists($file);

    // Get abs path
    // echo realpath($file)

    // Checks to see if file
    // echo is_file($file);
    // echo file_exists('test')

    // Check if writeable
    // echo is_writable($file);

    // Check if readable
    // echo is_readable($file);

    // Get file size
    // echo filesize($file)

    // Create a directory
    // mkdir('testing');

    // Delete a directory if empty
    // rmdir('testing')

    // Copy file
    // echo copy('file.txt', 'file1.txt')

    // Rename file
    // rename('file1.txt', 'myfile.txt');

    // Delete File
    // unlink('myfile.txt')

    // Write from file to string
    // echo file_get_contents($file);
 
    // Write string to file 
    // echo file_put_contents($file, 'Goodbye World');

    // $current = file_get_contents($file);

    // $current .= ' Goobye World';

    // file_put_contents($file, $current);

    // Open a file for reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // // echo $data;
    // fclose($handle);

    // Open a file for writing
    $handle = fopen($file, 'w');
    $txt = 'Romain Testard';
    fwrite($handle, $txt);
    fclose($handle);
?>