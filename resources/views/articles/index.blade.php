@extends('layouts.app')
@section('content')
<body class="container mt-4">

<h1>List of Articles</h1>

<div class="text-end mb-3">
    <a href="{{ route('articles.create') }}"
       class="btn btn-primary btn-sm">
        Ajouter article
    </a>
</div>


<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>designation</th>
        <th>prix_achat_ht</th>
        <th>prix_vente_ht</th>
        <th>tva</th>
        <th>stock</th>
        <th>sous_categorie_id</th>
        <th>image</th>
        <th>Action</th>
    </tr>

    @foreach($articles as $article)
    <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->designation}}</td>
        <td>{{ $article->prix_achat_ht}}</td>
        <td>{{ $article->prix_vente_ht}}</td>
        <td>{{ $article->tva}}</td>
        <td>{{ $article->stock}}</td>
        <td>{{ $article->sous_categorie->sous_categorie}}</td>
        <td><img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" width="50"></td>
        <td>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm fe fe-edit btn btn-icon">
    
            </a>

            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm fe fe-trash-2"
                        onclick="return confirm('Supprimer cette article ?')">
                    
                </button>
            </form>
        </td>
    </tr>
    @endforeach
   
</table>
<div class="d-flex justify-content-center mt-3">
    {{ $articles->links() }}
</div>
@endsection
