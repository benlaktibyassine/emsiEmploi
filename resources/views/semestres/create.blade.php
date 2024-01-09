@include('component.head')
@include('component.slidebar')


<div class="container">
    <h2>Ajouter un Semestre</h2>
    <a href="{{ route('semestres.index') }}" class="btn btn-secondary">Retour à la liste des semestres</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('semestres.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="sem" class="form-label">Nom du Semestre</label>
            <input type="text" class="form-control" id="sem" name="sem" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter le Semestre</button>
    </form>
</div>

@include('component.jslinks')
