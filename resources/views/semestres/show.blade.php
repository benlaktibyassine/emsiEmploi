
    @include('component.head')
    @include('component.header')
    @include('component.navbar')

    <div class="container">
        <h2>Détails du Semestre</h2>
        <a href="{{ route('semestres.index') }}" class="btn btn-secondary">Retour à la liste des semestres</a>

        <div class="mt-3">
            <strong>ID du Semestre:</strong> {{ $semestre->id_sem }}<br>
            <strong>Nom du Semestre:</strong> {{ $semestre->sem }}
        </div>
    </div>

