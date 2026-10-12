@auth
@extends('layouts.app')
@section('content')

<body class="container mt-4">
<h1>List of Clients</h1>
<div class="text-end mb-3">
<a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm">
    Ajouter Client
</a>
</div>
<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>NOM</th>
    <th>PRENOM</th>
    <th>ADRESSE</th>
    <th>VILLE</th>
    <th>TEL</th>
    <th>EMAIL</th>
    <th>ICE</th>
    <th>PASSWORD</th>
    <th>Action</th>

</tr>

    @foreach($clients as $client)
<tr>
    <td>{{ $client->id }}</td>
    <td>{{ $client->nom }}</td>
    <td>{{ $client->prenom}}</td>
    <td>{{ $client->adresse}}</td>
    <td>{{ $client->ville}}</td>
    <td>{{ $client->tel}}</td>
    <td>{{ $client->email}}</td>
    <td>{{ $client->ice }}</td>
    <td>{{$client->password}}</td>
    
    <td>
            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm fe fe-edit btn btn-icon">
               
            </a>

            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm fe fe-trash-2"
                        onclick="return confirm('Supprimer cette client ?')">
                  
                </button>
            </form>
        </td>
    </tr>
    @endforeach
   
</table>
<div class="d-flex justify-content-center mt-3">
    {{ $clients->links() }}
    
</body>
@endsection
@endauth

