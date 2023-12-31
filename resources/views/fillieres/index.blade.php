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
                    <th scope="col">Code filliere</th>
                    <th scope="col">Nom filliere</th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fillieres as $filliere)
                    <tr>
                        <td>{{ $filliere->code_filliere }} </td>
                        <td>{{ $filliere->nom_filliere }} </td>

                        <td>
                            <a href="{{ route('fillieres.edit', ['filliere' => $filliere->code_filliere]) }}"
                                class="btn btn-warning">Edit</a>
                            <!-- You can replace the '#' with the delete route -->
                            <form action="{{ route('fillieres.destroy', ['filliere' => $filliere->code_filliere]) }}"
                                method="POST" style="display: inline">
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
