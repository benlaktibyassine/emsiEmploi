@include('component.head')
@include('component.header')
@include('component.navbar')
    <div class="container">
        <h2>Modifiere l'étage</h2>
        <form action="{{ route('etages.update', $etage->id_etage) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom_etage" class="form-label">Nom de l'étage</label>
                <input type="text" class="form-control" id="nom_etage" name="nom_etage" value="{{ $etage->nom_etage }}" required>
            </div>
            <div class="mb-3">
                <label for="id_local" class="form-label">ID du local</label>
                <input type="text" class="form-control" id="id_local" name="id_local" value="{{ $etage->id_local }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier l'étage</button>
        </form>
    </div>
@endsection
