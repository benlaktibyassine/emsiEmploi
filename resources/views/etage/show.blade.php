@include('component.head')
@include("component.slidebar")

    <div class="container">
        <h2>Détails de l'étage</h2>
        <p><strong>ID de l'étage:</strong> {{ $etage->id_etage }}</p>
        <p><strong>Nom de l'étage:</strong> {{ $etage->nom_etage }}</p>
        <p><strong>ID du local:</strong> {{ $etage->id_local }}</p>
        <a href="{{ route('etage.index') }}" class="btn btn-secondary">Retour à la liste des étages</a>
    </div>
    @include('component.jslinks')
