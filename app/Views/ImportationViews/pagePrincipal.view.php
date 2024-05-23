<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partage des Annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container-lg bg-primary my-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-light my-5">
                    <div class="card-body">
                        <div class="card-title text-center mb-3">Espace d'importation des étudiants</div>
                        <form method="POST" enctype="multipart/form-data">
                            
                            
                            <label class="form-label">Choisir un fichier Excel</label>
                            <input type="file" name="Excel" class="form-control" accept=".xlsx, .xls" required>
                            <button class="btn btn-primary my-3">Partager</button>
                       </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
