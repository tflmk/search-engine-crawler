<?php 

     $hostname = 'sdb-52.hosting.stackcp.net';
     $username = 'submit-353030340588';
     $password = 'ssi9mz7imr';
     $db_name = 'submit-353030340588';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>