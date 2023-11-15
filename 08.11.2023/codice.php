<?php

session_start();
require 'connect.php';

if(isset($_POST['submit'])){
    $titolo = mysqli_real_escape_string($con,$_POST['titolo']);
    /*$progetto_id = mysqli_real_escape_string($con,$_POST['progetto_id']);*/
    $data_creazione = mysqli_real_escape_string($con,$_POST['data_creazione']);   
    $data_consegna = mysqli_real_escape_string($con,$_POST['data_consegna']);   
    $descrizione = mysqli_real_escape_string($con,$_POST['descrizione']);   
    
    $query = "INSERT INTO task (titolo,data_creazione,data_consegna,descrizione) VALUES('$titolo','$data_creazione','$data_consegna','$descrizione')";
    
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['message'] = "Aggiunta l'attività con successo";
        header("Location: aggiungi task.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Aggiunta l'attività fallito";
        header("Location: aggiungi task.php");
        exit(0);
    }
}

?>