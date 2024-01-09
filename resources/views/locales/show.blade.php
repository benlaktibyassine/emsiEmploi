@include('component.head')
@include("component.slidebar")



    <div class="container">
        <h2>Locale Details</h2>

        <div>
            <strong>ID:</strong> {{ $locale->id }}<br>
            <strong>Name:</strong> {{ $locale->nom_locale }}<br>



            <a href="{{ route('locale.edit', $locale->id_local) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('locale.destroy', $locale->id_local) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Sur de supprimer ce locale ?')">Delete</button>
            </form>
        </div>
    </div>

    @include('component.jslinks')
