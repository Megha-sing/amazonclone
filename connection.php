<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="amazon1";
$conn="";
//error handling
try{
    $conn= mysqli_connect($db_server,$db_user,$db_pass,$db_name); // 4 arguments
}
catch(mysqli_sql_exception){
    echo "could not connect.<br>";
}

?>