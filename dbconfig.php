<?php
$connection = mysqli_connect('localhost', 'destiny', 'D795201sta');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pokebuild');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}