@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1>Liste des SousCatégories</h1>

    <a href="{{ route('souscategories.create') }}"
       class="btn btn-primary btn-sm mb-3">
        Ajouter
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>SousCatégorie</th>
                <th>Image</th>
                <th>Catégorie</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($souscategories as $souscategorie)
            <tr>
                <td>{{ $souscategorie->id }}</td>
                <td>{{ $souscategorie->sous_categorie }}</td>
                <td>{{ $souscategorie->image }}</td>
                <td>{{ $souscategorie->categorie->categorie }}</td>
                <td>
                    <a href="{{ route('souscategories.edit', $souscategorie->id) }}"
                       class="btn btn-warning btn-sm fe fe-edit btn-icon">
                    </a>

                    <form action="{{ route('souscategories.destroy', $souscategorie->id) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm fe fe-trash-2"
                                onclick="return confirm('Supprimer cette souscatégorie ?')">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
    <div class="d-flex justify-content-center mt-3">
        {{ $souscategories->links() }}
    </div>

</div>
@endsection
