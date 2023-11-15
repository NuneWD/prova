<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aggiungi Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container my-4">
        
        <div class="row d-flex align-items-center flex-column">
            <div class="col-md-6">
            <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger">Aggiungi Task
                            <a href="elenco attività.php" class="btn btn-danger float-end">Torna List Task</a>
                        </h3>
                    </div>
                </div>   
                <div class="body my-5">
                    <form action="codice.php" method="POST">
                        <div class="my-2">
                            <label class="my-1">Titolo</label>
                            <input type="text" class="form-control" placeholder="Aggiungi titolo" name="titolo">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Progetto_id</label>
                            <input type="text" class="form-control" placeholder="Aggiungi progetto_id" name="progetto_id">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Data Creazione</label>
                            <input type="text" class="form-control" placeholder="Aggiungi data creazione" name="data_creazione">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Data Consegna</label>
                            <input type="text" class="form-control" placeholder="Aggiungi data consegna" name="data_consegna">
                        </div>
                        <div class="my-2">
                            <label class="my-1">Descrizione</label>
                            <input type="text" class="form-control" placeholder="Aggiungi descrizione" name="descrizione">
                        </div>
                        <div class="my-2">
                            <button type="submit" name="submit" class="btn btn-danger my-2">Submit</button>
                        </div>   
                    </form>
                </div>
                
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
