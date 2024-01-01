<!-- resources/views/semestre/edit.blade.php -->


    @include('component.head')
    @include('component.header')
    @include('component.navbar')

    <div class="container">
        <h2>Modifier le Semestre</h2>
        <a href="{{ route('semestres.index') }}" class="btn btn-secondary">Retour à la liste des semestres</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('semestres.update', $semestre->id_sem) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="sem" class="form-label">Nom du Semestre</label>
                <input type="text" class="form-control" id="sem" name="sem" value="{{ $semestre->sem }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Modifier le Semestre</button>
        </form>
    </div>

