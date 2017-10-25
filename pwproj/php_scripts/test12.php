<?php
$localhost = 'localhost';
$user = 'root';
$pass = 'dbpasswd7';
$dbname = 'mydb';
$connect = mysqli_connect("$localhost","$user","$pass","$dbname");
$idp=12;
$field='Id_player';
$query = "select Name from players where $field=$idp";
$result = mysqli_query($connect, $query);

$row = mysqli_fetch_array($result);

if ($row)
    echo $row['Name'];
?>