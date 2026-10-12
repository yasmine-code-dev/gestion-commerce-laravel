<form action="{{ route('clients.update', $client->id) }}" 
      method="POST" 
      enctype="multipart/form-data">
      
    @csrf
    @method('PUT')

    <div class="container-fluid mb-3">
        <label class="form-label">Client</label>
        <input type="text" 
               class="form-control" 
               name="nom" 
               value="{{ $client->nom}}">

        <label class="form-label">Prenom</label>
        <input type="text" 
               class="form-control" 
               name="prenom" 
               value="{{ $client->prenom}}">
        <label class="form-label">Adresse</label>
        <input type="text"
                class="form-control" 
                name="adresse" 
                value="{{ $client->adresse}}">
        <label class="form-label">Ville</label>
        <input type="text"
                class="form-control" 
                name="ville" 
                value="{{ $client->ville}}">
        <label class="form-label">Tel</label>
        <input type="text"
                class="form-control" 
                name="tel" 
                value="{{ $client->tel}}">
        <label class="form-label">Email</label>
        <input type="text"
                class="form-control" 
                name="email" 
                value="{{ $client->email}}">

        <label class="form-label">ICE</label>
        <input type="text"
                class="form-control" 
                name="ice" 
                value="{{ $client->ice}}">
        <label class="form-label">Password</label>
        <input type="password"
                class="form-control" 
                name="password" 
                value="{{ $client->password}}">
                

        <button type="submit" class="btn btn-success mt-3">
            Enregistrer
        </button>
    </div>
</form>
