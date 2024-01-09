@include('component.head')

<body>
@include("component.slidebar")


    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>List des Jours</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Jours</th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jours as $jour)
                    <tr>
                        <td>{{ $jour->nom_jour }} </td>

                        <td>
                            <a href="{{ route('jour.edit', ['jour' => $jour->id]) }}"
                                class="btn btn-warning">Edit</a>
                            <!-- You can replace the '#' with the delete route -->
                            <form action="{{ route('jour.destroy', ['jour' => $jour->id]) }}"
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

