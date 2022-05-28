<?php

$dbhost = "bobkpnfofnmkpj1bgrqw-mysql.services.clever-cloud.com";
$dbuser = "ut6gqwvg9rypeg5s";
$dbpass = "orOxO703She5rian9CCi";
$dbname = "bobkpnfofnmkpj1bgrqw";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}
