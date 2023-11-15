<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>prodotto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                    <h3 class="text-danger">Task Manager
                        <a href="aggiungi task.php" class="btn btn-danger float-end">Aggiungi Task</a>
                    </h3>
                    </div>
                </div>   
                <h1 class="text-danger my-4">Elenco attività</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-danger text-center" scope="col">ID</th>
                            <th class="text-danger text-center" scope="col">Titolo</th>
                            <th class="text-danger text-center" scope="col">Progetto_id</th>
                            <th class="text-danger text-center" scope="col">Data Creazione</th>
                            <th class="text-danger text-center" scope="col">Data Consegna</th>
                            <th class="text-danger text-center" scope="col">Descrizione</th>
                            <th class="text-danger text-center" scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project_db';

try{
    $conn = new PDO(sprintf("mysql:host=%s;dbname=%s", $servername, $dbname), $username, $password);

    $sql = "select * from task";

    $stat = $conn->prepare($sql);
    $stat->execute();

    $stat->setfetchMode(PDO:: FETCH_ASSOC);
    $results = $stat->fetchAll();
    foreach ($results as $result) {

?>
        <tr>
            <th class="text-center" scope="row"><?= $result['id'] ?></th>
            <td class="text-center"><?= $result['titolo'] ?></td>
            <td class="text-center"><?= $result['progetto_id'] ?></td>
            <td class="text-center"><?= $result['data_creazione'] ?></td>
            <td class="text-center"><?= $result['data_consegna'] ?></td>
            <td class="text-center"><?= $result['descrizione'] ?></td>
            <td>
                <a href="cancella attività.php" class="btn btn-danger btn-sm">Cancella</a>
                <a href="dettaglio attività.php" class="btn btn-info btn-sm">Dettaglio</a>
            </td>  
        </tr>

<?php
    }
} catch ( PDOCxcaption $e ) {
    echo $e->getMessage();
}
$conn = null;

?>

            </tbody>
        </table>

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
