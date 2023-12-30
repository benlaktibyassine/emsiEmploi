@include('component.head')
<body>
    @include('component.header')
    @include('component.navbar')
    <div class="container">
        <h2>Détails de la salle</h2>
        <p><strong>Code de la salle:</strong> {{ $salle->code_salle }}</p>
        <p><strong>ID de l'étage:</strong> {{ $salle->id_etage }}</p>
        <p><strong>ID du type:</strong> {{ $salle->id_type }}</p>
        <a href="{{ route('salles.index') }}" class="btn btn-secondary">Retour à la liste des salles</a>
    </div>
@endsection
</body>
