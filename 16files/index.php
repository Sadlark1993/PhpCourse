<?php

//returns array with the content of the directory
$directory = scandir(__DIR__ . '/..');
print_r($directory);

//creates a directory:
//mkdir('foo');

//removes the directory
//rmdir('foo');

if (file_exists('example.txt')) {
  echo "\n" . filesize('example.txt');
  file_put_contents('example.txt', 'Hello World');

  //the return of filesize() function is cached. If we want to call it again, clear the cache
  clearstatcache();
  echo "\n" . filesize('example.txt');

  echo "\n" . file_get_contents('example.txt');
}

echo "\n\n";
