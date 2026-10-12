@extends('layouts.app')
@section('content')

<h1>List of Categories</h1>

<div class="text-end mb-3">
<a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">
    Ajouter Categorie
</a>
</div>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Categorie</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $categorie)
    <tr>
        <td>{{ $categorie->id }}</td>
        <td>{{ $categorie->categorie }}</td>
        <td>
        {{$categorie->image}}</td>
        <td>
            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning btn-sm  fe fe-edit btn btn-icon ">
              
            </a>

            <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm fe fe-trash-2"
                        onclick="return confirm('Supprimer cette catégorie ?')">
                    
                </button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>
<div class="d-flex justify-content-center mt-3">
    {{ $categories->links() }}
</div>
@endsection
