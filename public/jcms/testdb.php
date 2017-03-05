<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 3/4/2017
 * Time: 4:36 PM
 */

$hostname = '127.0.0.1';
$username = 'root';
$password = '';

$databaseName = 'alphacrm';

$dbConnected = mysqli_connect($hostname, $username, $password, $databaseName);

$dbSelected = mysqli_select_db($dbConnected, $databaseName);

if ($dbConnected) {
    echo "Julius connected to MySQL <br><br>";

    if($dbSelected) {
        echo "db selected ok<br><br>";
    } else {
        echo "db connection failed<br><br>";
    }
} else {
    echo "mysql connection failed :(";
}

