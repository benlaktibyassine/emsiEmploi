@include("component.head")

@include("component.slidebar")


    <div class="container">
        <h1>Create Seance</h1>

        <form action="{{ route('seances.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="titre_seance" class="form-label">Title:</label>
                <input type="text" name="titre_seance" class="form-control" value="{{ old('titre_seance') }}" required>
            </div>

            <div class="mb-3">
                <label for="id_jour" class="form-label">Jour:</label>
                <select name="id_jour" class="form-select" required>
                    <option value="" disabled selected>Select Jour</option>
                    @foreach($jours as $jour)
                        <option value="{{ $jour->id }}">{{ $jour->nom_jour }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_groupe" class="form-label">Groupe:</label>
                <select name="id_groupe" class="form-select" required>
                    <option value="" disabled selected>Select Groupe</option>
                    @foreach($groupes as $groupe)
                        <option value="{{ $groupe->id }}">{{ $groupe->nom_groupe }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_prof" class="form-label">Prof:</label>
                <select name="id_prof" class="form-select" required>
                    <option value="" disabled selected>Select Prof</option>
                    @foreach($profs as $prof)
                        <option value="{{ $prof->id_prof }}">{{ $prof->nom }} {{ $prof->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_matiere" class="form-label">Matiere:</label>
                <select name="id_matiere" class="form-select" required>
                    <option value="" disabled selected>Select Matiere</option>
                    @foreach($matieres as $matiere)
                        <option value="{{ $matiere->id_matiere }}">{{ $matiere->nom_matiere }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="code_salle" class="form-label">Salle:</label>
                <select name="code_salle" class="form-select" required>
                    <option value="" disabled selected>Select Salle</option>
                    @foreach($salles as $salle)
                        <option value="{{ $salle->code_salle }}">{{ $salle->code_salle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_sem" class="form-label">Semestre:</label>
                <select name="id_sem" class="form-select" required>
                    <option value="" disabled selected>Select Semestre</option>
                    @foreach($sems as $sem)
                        <option value="{{ $sem->id_sem }}">{{ $sem->sem }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_type" class="form-label">Type:</label>
                <select name="id_type" class="form-select" required>
                    <option value="" disabled selected>Select Type</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->nom_type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="debut" class="form-label">Debut:</label>
                <input type="time" name="debut" class="form-control" value="{{ old('debut') }}" required>
            </div>

            <div class="mb-3">
                <label for="fin" class="form-label">Fin:</label>
                <input type="time" name="fin" class="form-control" value="{{ old('fin') }}" required>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Create Seance</button>
        </form>
    </div>
    @include('component.jslinks')

