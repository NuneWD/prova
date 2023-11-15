<?php

$con = mysqli_connect('localhost','root','','project_db');

if(!$con){
    die('Connessione non riuscita'. mysqli_connect_error());
}

/*
if($con){
    echo "Connessione riuscita";
} else {
    die(mysqli_error($con));
}
*/

?>