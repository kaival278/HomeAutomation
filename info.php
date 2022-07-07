<?php

$file_name=$_GET['file_name'];
$command="/usr/bin/python /python/code.py ";
echo $command.$file_name;
$result_last_line = system($command.$file_name);
echo "Result : ".$result_last_line;

?>
