<?php
#openfile
//$myfile=fopen("myfile.txt","rw");

#read file
//echo fgets($myfile);

#add content
$myfile=fopen("myfile.txt","w");
$add="hello user...!";
fwrite($myfile,$add);
echo fgets($myfile);
/*
#append content
$add="i append my content";
file_put_contents("myfile.txt",$add,FILE_APPEND);
*/
#file exist
if(file_exists("myfile.txt"))
{
	echo "this file is exist";
}
else
{
	echo "this file is not exist";
}

#

#to close file
fclose($myfile);


?>