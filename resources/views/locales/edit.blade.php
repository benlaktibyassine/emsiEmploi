@include('component.head')
@include("component.slidebar")


    <div class="container">
        <h2>Edit Locale</h2>
        <form action="{{ route('locale.update', $locale->id_local) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom_locale">Locale Name:</label>
                <input type="text" name="nom_local" class="form-control" value="{{ $locale->nom_local }}" required>
            </div>



            <button type="submit" class="btn btn-primary">Update Locale</button>
        </form>
    </div>
    @include('component.jslinks')
