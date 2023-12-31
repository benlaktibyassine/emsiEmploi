@include('component.head')

@include("component.slidebar")
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h1>List of Professors</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profs as $prof)
                    <tr>
                        @if(session('user_id') && $prof->id_prof == session('user_id'))
                        @continue
                    @endif
                        <td>{{ $prof->nom }} {{ $prof->prenom }}</td>
                        <td><a href="{{ route('profshow', ['prof' => $prof->id_prof]) }}">{{ $prof->email }}</a></td>
                        <td>{{ $prof->tel }}</td>
                        <td>
                            <a href="{{ route('profedit', ['prof' => $prof->id_prof]) }}"
                                class="btn btn-warning">Edit</a>
                            <!-- You can replace the '#' with the delete route -->
                            <form action="{{ route('profdestroy', ['prof' => $prof->id_prof]) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            @if (!$prof->responsables)
                                <a href="{{ route('makeResponsable', ['prof' => $prof->id_prof]) }}" class="btn btn-success">Make Responsable
                                </a>
                            @else
                                <a href="{{ route('unmakeResponsable', ['prof' => $prof->id_prof]) }}"  class="btn btn-info">Unmake
                                    Responsable</a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('component.jslinks')

