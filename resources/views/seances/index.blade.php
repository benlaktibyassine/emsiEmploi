@include("component.head")
<body>
@include("component.header")
    <div class="container">
        <h1 class="mt-5">Seances</h1>

        <div class="list-group mt-4">
            @foreach ($seances as $seance)
                <a href="{{ route('seances.show', ['seance' => $seance->id_seance]) }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $seance->titre_seance }}</h5>
                    {{-- <p class="mb-1">Groupe: {{ $seance->groupe->nom_groupe }}</p> --}}
                    {{-- <p class="mb-1">Matiere: {{ $seance->matiere->nom_matiere  }}</p> --}}
                    {{-- <p class="mb-1">Type Seance: {{ $seance->type->nom_type }}</p> --}}
                    {{-- <p class="mb-1">Jour: {{ $seance->jour->nom_jour }}</p> --}}
                    <p class="mb-1">Debut: {{ $seance->debut }}</p>
                    <p class="mb-1">Fin: {{ $seance->fin }}</p>
                    {{-- <p class="mb-1">Semestre: {{ $seance->sem->sem }}</p> --}}
                    {{-- <p class="mb-1">Prof: {{ $seance->prof->nom }}{{ $seance->prof->prenom }}</p> --}}
                    {{-- <p class="mb-1">Salle: {{ $seance->salle->code_salle }}</p> --}}
                    {{-- <p class="mb-1">Etage: {{ $seance->salle->etage->nom_etage }}</p> --}}
                    {{-- <p class="mb-1">Local: {{ $seance->salle->etage->local->nom_local }}</p> --}}



                </a>
            @endforeach
        </div>
    </div>


    </body>
