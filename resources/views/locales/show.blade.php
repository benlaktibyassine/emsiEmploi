@include('component.head')
@include('component.header')
@include('component.navbar')

@section('content')
    <div class="container">
        <h2>Locale Details</h2>

        <div>
            <strong>ID:</strong> {{ $local->id }}<br>
            <strong>Name:</strong> {{ $local->nom_locale }}<br>

            

            <a href="{{ route('locales.edit', $local->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('locales.destroy', $local->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Sur de supprimer ce locale ?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
