<form action="{{Route('reglements.store')}}" method="post">
    <div class="container-fluid mb-3">
        <label>date</label>
        <input type="date" class="form-control" name="date" required>
        <label>montant</label>
        <input type="number" step="0.01" class="form-control" name="montant" required>
        <label class="form-label">Sous catégorie</label>
        <select name="client_id" class="form-control" required>
            <option value="">-- Choisir --</option>
            @foreach($clients as $cli)
                <option value="{{ $cli->id }}">
                    {{ $cli->nom }}
                </option>
            @endforeach
        </select>
        
</form>