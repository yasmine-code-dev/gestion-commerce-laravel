<form action="{{ route('categories.update', $categorie->id) }}" 
      method="POST" 
      enctype="multipart/form-data">
      
    @csrf
    @method('PUT')

    <div class="container-fluid mb-3">
        <label class="form-label">Categorie</label>
        <input type="text" 
               class="form-control" 
               name="categorie" 
               value="{{ $categorie->categorie }}">

        <label class="form-label mt-2">Image</label>
        <input type="file" 
               class="form-control" 
               name="image">

        <button type="submit" class="btn btn-success mt-3">
            Enregistrer
        </button>
    </div>
</form>
