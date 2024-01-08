@include('component.head')
@include('component.header')

<div class="container">
    <h2>Ajouter un étage</h2>
    <form action="{{ route('etage.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom_etage" class="form-label">Nom de l'étage</label>
            <input type="text" class="form-control" id="nom_etage" name="nom_etage" required>
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
@include('component.jslinks')
