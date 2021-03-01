<?php
// This File contains database configuration
// assuming omysql using "root" and password

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//Try connecting to Database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//Check the Connection
if($conn==false){
    dir('Error: cannot Connect'); 
}
?>