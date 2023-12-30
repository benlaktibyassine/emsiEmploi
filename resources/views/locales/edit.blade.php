@include('component.head')
@include('component.header')
@include('component.navbar')

@section('content')
    <div class="container">
        <h2>Edit Locale</h2>

        <form action="{{ route('locales.update', $local->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom_locale">Locale Name:</label>
                <input type="text" name="nom_locale" class="form-control" value="{{ $local->nom_locale }}" required>
            </div>

            

            <button type="submit" class="btn btn-primary">Update Locale</button>
        </form>
    </div>
@endsection
