@include('component.head')
@include('component.slidebar')


<div class="container">
    <h2>Détails du Type</h2>
    <a href="{{ route('types.index') }}" class="btn btn-secondary">Retour à la liste des types</a>

    <div class="mt-3">
        <strong>ID du Type:</strong> {{ $type->id }}<br>
        <strong>Nom du Type:</strong> {{ $type->nom_type }}
    </div>
</div>
@include('component.jslinks')
