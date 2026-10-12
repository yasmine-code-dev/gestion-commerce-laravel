<h1>Ajouter Sous-Catégorie</h1>

<form action="{{ route('souscategories.store') }}" method="POST">
    @csrf
<label>souscategorie</label>
    <input type="text" name="sous_categorie" placeholder="sous_categorie"><br><br>
<label>image</label><input type='file' name='image'><br><br>
<label>Catégorie</label>
    <select name="categorie_id">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->categorie }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Ajouter</button>
</form>
