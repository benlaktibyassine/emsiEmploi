
    @include('component.head')
    @include('component.header')
    @include('component.navbar')

    <div class="container">
        <h2>Liste des Semestres</h2>
        <a href="{{ route('semestres.create') }}" class="btn btn-primary">Ajouter un semestre</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom du Semestre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semestres as $semestre)
                    <tr>
                        <td>{{ $semestre->id_sem }}</td>
                        <td>{{ $semestre->sem }}</td>
                        <td>
                            <a href="{{ route('semestres.show', $semestre->id_sem) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('semestres.edit', $semestre->id_sem) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('semestres.destroy', $semestre->id_sem) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce semestre ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

