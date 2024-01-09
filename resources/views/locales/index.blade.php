@include('component.head')
@include("component.slidebar")

<div class="container">
    <h2>Locales</h2>
    <a href="{{ route('locale.create') }}" class="btn btn-primary">Create New Locale</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locales as $local)
                <tr>
                    <td>{{ $local->id_local }}</td>
                    <td>{{ $local->nom_local }}</td>
                    <td>

                        <a href="{{ route('locale.edit', ['locale' => $local->id_local]) }}"
                            class="btn btn-warning">Edit</a>
                        <form action="{{ route('locale.destroy', ['locale' => $local->id_local]) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('component.jslinks')

