@include('component.head')
@include('component.header')
@include('component.navbar')
@section('content')
    <div class="container">
        <h2>Create New Locale</h2>

        <form action="{{ route('locales.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom_locale">Locale Nom:</label>
                <input type="text" name="nom_locale" class="form-control" required>
            </div>

            

            <button type="submit" class="btn btn-primary">Create Locale</button>
        </form>
    </div>
@endsection
