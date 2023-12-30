@include('component.head')
@include('component.header')
@include('component.navbar')
    <div class="container">
        <h2>Locales</h2>
        <a href="{{ route('locales.create') }}" class="btn btn-primary">Create New Locale</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locales as $locale)
                    <tr>
                        <td>{{ $locale->id }}</td>
                        <td>{{ $locale->nom_locale }}</td>
                        <td>
                            <a href="{{ route('locales.show', $locale->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('locales.edit', $locale->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('locales.destroy', $locale->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('supprimer ce local ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
