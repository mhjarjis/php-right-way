<?php
/*$dir = scandir(__DIR__);
var_dump(is_file($dir[10])); //check file
var_dump(is_dir($dir[10])); //check directory

//mkdir('demo/check',755,true); //create directory with permission
//rmdir('demo/check'); //remove directory
//rmdir('demo');
if(file_exists('foo.txt')){
    echo filesize('foo.txt');
    file_put_contents('foo.txt','Hello world');
    clearstatcache();
    echo filesize('foo.txt');
}else{
    echo 'file not found';
}
*/

if(!file_exists('foo.txt')){
    echo 'file not found';
}
$file = fopen('foo.txt','r');
while (($line = fgets($file))!==false){
    echo $line.'<br>';
}

fclose($file);

//copy('foo.txt','bar.txt');
//rename('bar.txt','check.txt');
unlink('check.txt');