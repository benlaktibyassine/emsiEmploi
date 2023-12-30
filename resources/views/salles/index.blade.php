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
                    <th>Code de la salle</th>
                    <th>ID de l'étage</th>
                    <th>ID du type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salles as $salle)
                    <tr>
                        <td>{{ $salle->code_salle }}</td>
                        <td>{{ $salle->id_etage }}</td>
                        <td>{{ $salle->id_type }}</td>
                        <td>
                            <a href="{{ route('salles.show', $salle->code_salle) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('salles.edit', $salle->code_salle) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('salles.destroy', $salle->code_salle) }}" method="POST" style="display:inline;">
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
