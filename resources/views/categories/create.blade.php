<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Creation Categorie</title>
</head>
<body>
    <h2>Page de Creation de categorie</h2>
    <form action="{{route('categories.store')}}" method="POST">
        @method('POST')
        @csrf
        
        <div class="container-fluid mb-3" >

            <label for="categorie" class="form-label">Categorie</label>
            <input type="text" class="form-control" name="categorie" id="categorie">
            <input type="file" name="image" id="image">
            <button type="submit" class ="form-control btn btn-success mt-3">Enregistrer</button>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    

</body>
</html>