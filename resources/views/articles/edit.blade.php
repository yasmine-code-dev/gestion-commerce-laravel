<form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="designation" value="{{ $article->designation }}">
    <input type="number" name="prix_achat_ht" value="{{ $article->prix_achat_ht }}">
    <input type="number" name="prix_vente_ht" value="{{ $article->prix_vente_ht }}">
    <input type="number" name="tva" value="{{ $article->tva }}">
    <input type="number" name="stock" value="{{ $article->stock }}">

    <select name="sous_categorie_id">
        @foreach($souscategories as $souscategorie)
            <option value="{{ $souscategorie->id }}" 
                {{ $article->sous_categorie_id == $souscategorie->id ? 'selected' : '' }}>
                {{ $souscategorie->sous_categorie }}
            </option>
        @endforeach
    </select>

    <input type="file" name="image">

    <button type="submit">Modifier</button>
</form>
