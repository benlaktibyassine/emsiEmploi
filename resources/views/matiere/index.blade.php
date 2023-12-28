@include('component.head')

<body>
    @include('component.header')
    @include('component.navbar')

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>List of Professors</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Matiere</th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matieres as $matiere)
                    <tr>
                        <td>{{ $matiere->nom_matiere }} </td>

                        <td>
                            <a href="{{ route('matiere.edit', ['matiere' => $matiere->id_matiere]) }}"
                                class="btn btn-warning">Edit</a>
                            <!-- You can replace the '#' with the delete route -->
                            <form action="{{ route('matiere.destroy', ['matiere' => $matiere->id_matiere]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
