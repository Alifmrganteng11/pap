<?php


/*Menghubungkan database*/
define ('DB_SERVER', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'pap');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false)
{
    die ("ERROR : Couldn't connect to database" . mysqli_connect_error());
}
?>