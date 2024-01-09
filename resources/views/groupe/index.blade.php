@include('component.head')
@include("component.slidebar")

<div class="container">
    <h2>Locales</h2>
    <a href="{{ route('groupe.create') }}" class="btn btn-primary">Create New Groupe</a>

    <table class="table mt-3">
        <thead>
            <tr>

                <th>Name</th>
                <th>Filliere</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groupes as $groupe)
                <tr>
                    <td>{{ $groupe->nom_groupe }}</td>
                    <td>{{ $groupe->fillieres->nom_filliere }}</td>
                    <td>
                        <a href="{{ route('groupe.edit', ['groupe' => $groupe->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('groupe.destroy', ['groupe' => $groupe->id]) }}" method="POST"
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

