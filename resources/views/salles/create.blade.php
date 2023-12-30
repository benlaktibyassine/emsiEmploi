@include('component.head')
<body>
    @include('component.header')
    @include('component.navbar')
    <div class="container">
        <h2>Ajouter une salle</h2>
        <form action="{{ route('salles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="code_salle" class="form-label">Code de la salle</label>
                <input type="text" class="form-control" id="code_salle" name="code_salle" required>
            </div>
            <div class="mb-3">
                <label for="id_etage" class="form-label">ID de l'étage</label>
                <select class="form-control" id="id_etage" name="id_etage" required>
                    @foreach ($etages as $etage)
                        <option value="{{ $etage->id_etage }}">{{ $etage->nom_etage }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_type" class="form-label">ID du type</label>
                <select class="form-control" id="id_type" name="id_type" required>
                    @foreach ($types as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter la salle</button>
        </form>
    </div>
@endsection
</body>
