@include('component.head')
@include('component.header')
@include('component.navbar')

<div class="container">
    <h2>Create New Locale</h2>

    <form action="{{ route('locale.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_locale">Locale Nom:</label>
            <input type="text" name="nom_local" class="form-control" required>
        </div>



        <button type="submit" class="btn btn-primary">Create Locale</button>
    </form>
</div>
