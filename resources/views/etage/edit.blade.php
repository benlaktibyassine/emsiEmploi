@include('component.head')
@include('component.header')
@include('component.navbar')
<div class="container">
    <h2>Modifier l'étage</h2>
    <form action="{{ route('etage.update', $etage->id_etage) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom_etage" class="form-label">Nom de l'étage</label>
            <input type="text" class="form-control" id="nom_etage" name="nom_etage" value="{{ $etage->nom_etage }}" required>
        </div>

        <div class="mb-3">
            <label for="id_local" class="form-label">Local</label>
            <select name="id_local" class="form-control" required>
                @foreach ($locales as $locale)
                    <option value="{{ $locale->id_local }}" {{ $locale->id_local == $etage->id_local ? 'selected' : '' }}>
                        {{ $locale->nom_local }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Modifier l'étage</button>
    </form>
</div>
@include('component.jslinks')


