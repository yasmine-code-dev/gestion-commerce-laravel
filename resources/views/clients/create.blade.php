<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Creation Client</title>
</head>
<body>
    <h2>Page de Creation de client</h2>
    <form action="{{route('clients.store')}}" method="POST">
        @method('POST')
        @csrf
        
        <div class="container-fluid mb-3" >

            <label >nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
            <label >prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
            <label >adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse">
            <label >ville</label>
            <input type="text" class="form-control" name="ville" id="ville
">            <label >tel</label>
            <input type="text" class="form-control" name="tel" id="tel">
            <label >email</label>
            <input type="text" class="form-control" name="email" id="email">
            <label >ice</label>
            <input type="text" class="form-control" name="ice" id="ice">
            <label >password</label>
            <input type="password" class="form-control" name="password" id="password">
            <button type="submit" class ="form-control btn btn-success mt-3">Enregistrer</button>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    

</body>
</html>