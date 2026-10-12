<form action="{{ route('souscategories.update', $souscategorie->id) }}" method="POST">
    @csrf
    @method('PUT')
<label>souscategorie</label>
    <input type="text" name="sous_categorie"
           value="{{ $souscategorie->sous_categorie }}">
           <label>Image</label>
           <input type='file' name='image' value="{{ $souscategorie->image }}">
           <label>Catégorie</label>
    <select name="categorie_id">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}"
                {{ $categorie->id == $souscategorie->categorie_id ? 'selected' : '' }}>
                {{ $categorie->categorie }}
            </option>
        @endforeach
    </select>

    <button type="submit">Modifier</button>
</form>
