<form action="{{ route('articles.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="container-fluid mb-3">
        

        <label class="form-label">Designation</label>
        <input type="text" class="form-control" name="designation" required>

        <label class="form-label">Prix achat HT</label>
        <input type="number" step="0.01" class="form-control" name="prix_achat_ht" required>

        <label class="form-label">Prix vente HT</label>
        <input type="number" step="0.01" class="form-control" name="prix_vente_ht" required>

        <label class="form-label">TVA</label>
        <input type="number" step="0.01" class="form-control" name="tva" required>

        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" required>

        <label class="form-label">Sous catégorie</label>
        <select name="sous_categorie_id" class="form-control" required>
            <option value="">-- Choisir --</option>
            @foreach($souscategories as $souscat)
                <option value="{{ $souscat->id }}">
                    {{ $souscat->sous_categorie }}
                </option>
            @endforeach
        </select>

        <label class="form-label mt-2" >Image</label>
        <input type="file" class="form-control" name="image">

        <button type="submit" class="btn btn-success mt-3">
            Enregistrer
        </button>

    </div>
</form>
