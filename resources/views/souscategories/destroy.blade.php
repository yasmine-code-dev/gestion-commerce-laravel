<form action="{{ route('souscategories.destroy', $souscategorie->id) }}" method="POST" style="display:inline;"
      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette souscatégorie ?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
</form>
