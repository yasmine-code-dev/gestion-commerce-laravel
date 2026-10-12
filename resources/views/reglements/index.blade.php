<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h1>List of Articles</h1>

<a href="{{ route('reglements.create') }}" class="btn btn-primary mb-3">
    Ajouter article
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>date</th>
        <th>montant</th>
        <th>nom</th>
        
    </tr>

    @foreach($reglements as $reglement)
    <tr>
        <td>{{ $reglement->id }}</td>
        <td>{{ $reglement->date}}</td>
        <td>{{ $reglement->montant}}</td>
        
        <td>{{ $reglement->client->client}}</td>
        <td>
            <a href="{{ route('reglementes.edit', $reglement->id) }}" class="btn btn-warning btn-sm">
                Edit </a>
            <form action="{{ route('reglementes.destroy', $reglement->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Supprimer cette reglement?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
