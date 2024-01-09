@include('component.head')

<body>
    @include('component.slidebar')


    <div class="container mt-5">
        <h1>Edit Matiere</h1>

        <form action="{{ route('jour.update', ['jour' => $jour->id]) }}" method="POST" style="display: inline">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nom" class="form-label">Nom jour</label>
                <input type="text" class="form-control" id="nom" name="nom_jour" value="{{ $jour->nom_jour }}">
            </div>


            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('component.jslinks')
