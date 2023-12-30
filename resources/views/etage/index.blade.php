@include('component.head')
@include('component.header')
@include('component.navbar')
    <div class="container">
        <h2>Liste des étages</h2>
        <a href="{{ route('etages.create') }}" class="btn btn-primary">Ajouter un étage</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de l'étage</th>
                    <th>ID du local</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etages as $etage)
                    <tr>
                        <td>{{ $etage->id_etage }}</td>
                        <td>{{ $etage->nom_etage }}</td>
                        <td>{{ $etage->id_local }}</td>
                        <td>
                            <a href="{{ route('etages.show', $etage->id_etage) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('etages.edit', $etage->id_etage) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('etages.destroy', $etage->id_etage) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étage ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
