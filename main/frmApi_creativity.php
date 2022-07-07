<?php
error_reporting(1);
session_start();

require_once ("../include/clsInclude.php");

$oApi_CDO = new clsApi_CDO();
$oApi_DA = new clsApi_DA_Creativity();

if ($_REQUEST['api'] == "")
{
    echo "Api not found";
}

// Turn Of Lights comman
else if ($_REQUEST['api'] == "command")
{
    echo shell_exec("/usr/local/bin/python3 kasa_commands.py");
}




?>
