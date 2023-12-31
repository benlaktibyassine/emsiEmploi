


    <div class="container">
        <h2>Ajouter un étage</h2>

        <form action="{{ route('etage.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom_etage">Nom de l'étage</label>
                <input type="text" name="nom_etage" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_local">Local</label>
                <select name="id_local" class="form-control" required>
                    @foreach ($locales as $locale)
                        <option value="{{ $locale->id_local }}">{{ $locale->nom_local }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>


