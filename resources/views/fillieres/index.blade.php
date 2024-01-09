@include('component.head')

<body>
    @include("component.slidebar")


    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <h1>Liste de fillieres</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="h6">Code filliere</th>
                    <th scope="col"class="h6">Nom filliere</th>

                    <th scope="col"class="h6">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fillieres as $filliere)
                    <tr>
                        <td class="h6">{{ $filliere->code_filliere }} </td>
                        <td class="h6">{{ $filliere->nom_filliere }} </td>

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

    @include('component.jslinks')

