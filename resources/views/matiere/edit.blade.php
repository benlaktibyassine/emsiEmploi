@include("component.head")

@include("component.slidebar")

    <div class="container mt-5">
        <h1>Edit Matiere</h1>

        <form action="{{ route('matiere.update', ['matiere' => $matiere->id_matiere] ) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nom" class="form-label">Nom Matiere</label>
                <input type="text" class="form-control" id="nom" name="nom_matiere" value="{{ $matiere->nom_matiere }}">
            </div>


            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('component.jslinks')
