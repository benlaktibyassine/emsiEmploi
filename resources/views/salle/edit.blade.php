@include('component.head')
@include('component.header')
@include('component.navbar')

 

    <div class="container">
        <h2>Modifier la salle</h2>
        <form action="{{ route('salle.update', $salle->code_salle) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="code_salle" class="form-label">Code de la salle</label>
                <input type="text" class="form-control" id="code_salle" name="code_salle" value="{{ $salle->code_salle }}" required>
            </div>

            <div class="mb-3">
                <label for="id_etage" class="form-label">Étage</label>
                <select name="id_etage" class="form-control" required>
                    @foreach ($etages as $etage)
                        <option value="{{ $etage->id_etage }}" {{ $etage->id_etage == $salle->id_etage ? 'selected' : '' }}>
                            {{ $etage->nom_etage }} ({{ $etage->local->nom_local }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_type" class="form-label">Type</label>
                <select name="id_type" class="form-control" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $salle->id_type ? 'selected' : '' }}>
                            {{ $type->nom_type }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier la salle</button>
        </form>
    </div>



