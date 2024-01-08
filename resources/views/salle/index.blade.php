@include('component.head')
<body>

    @include('component.header')
    @include('component.navbar')
<div class="container">
    <h2>Liste des salles</h2>
    <a href="{{ route('salle.create') }}" class="btn btn-primary">Ajouter une salle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Code Salle</th>
                <th>Étage</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salles as $salle)
                <tr>
                    <td>{{ $salle->code_salle }}</td>
                    <td>{{ $salle->etage->nom_etage }} ({{ $salle->etage->local->nom_local }})</td>
                    <td>{{ $salle->type->nom_type }}</td>
                    <td>
                        <a href="{{ route('salle.edit', $salle->code_salle) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('salle.destroy', $salle->code_salle) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette salle ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



</body>
