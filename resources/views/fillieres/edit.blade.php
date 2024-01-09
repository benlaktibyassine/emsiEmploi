@include("component.head")

@include("component.slidebar")

    <div class="container mt-5">
        <h1>Edit filliere</h1>

        <form action="{{ route('fillieres.update', ['filliere' => $filliere->code_filliere] ) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="code" class="form-label">code filliere</label>
                <input type="text" class="form-control" id="code" name="code_filliere" value="{{ $filliere->code_filliere }}">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom filliere</label>
                <input type="text" class="form-control" id="nom" name="nom_filliere" value="{{ $filliere->nom_filliere }}">
            </div>


            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('component.jslinks')

