@include('component.head')
@include("component.slidebar")


<div class="container">
    <h2>Ajouter un Type</h2>
    <a href="{{ route('types.index') }}" class="btn btn-secondary">Retour à la liste des types</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('types.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="nom_type" class="form-label">Nom du Type</label>
            <input type="text" class="form-control" id="nom_type" name="nom_type" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter le Type</button>
    </form>
</div>

@include('component.jslinks')
