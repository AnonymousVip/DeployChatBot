<?php
error_reporting(0);
$mid = $_GET['mid'];
$uid = $_GET['uid'];
$file=fopen("messages.txt",'a');
fwrite($file,"$mid=$uid\n");
fclose($file); 
echo "Done!";