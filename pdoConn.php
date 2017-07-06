<?php
$host = 'localhost/phpmyadmin';		
$user = 'root'; //username and password of database being used follows here
$password = '';
$db = 'csci567';

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);	//connection is made in this statement.
try																	
{
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e) //catch method to display the error encountered.
{
echo 'ERROR: '. $e->getMessage();	
}
?>