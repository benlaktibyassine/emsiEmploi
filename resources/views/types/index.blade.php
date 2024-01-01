@include('component.head')
@include('component.header')
@include('component.navbar')
<div class="container">
    <h2>Liste des Types</h2>
    <a href="{{ route('types.create') }}" class="btn btn-primary">Ajouter un type</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->nom_type }}</td>
                    <td>
                        <a href="{{ route('types.show', $type->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('types.destroy', $type->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce type ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>