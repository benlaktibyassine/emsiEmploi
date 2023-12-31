@include('component.head')

<body>
    @include('component.header')
    <div class="container">
        <p>Bonjour monsier: {{ session('nom') }}</p>
        <center>
            <button id="toggleFormBtn" onclick="toggleForm()" class="btn btn-success">Update account information</button>
        </center>

    </div>
    <div class="container mt-5" id="editFormContainer" style="display: none;">
        <h1>Edit Professor</h1>

        <form action="{{ route('profupdate', ['prof' => $prof->id_prof]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $prof->nom }}">
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $prof->prenom }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $prof->email }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">tel</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="{{ $prof->tel }}">
            </div>

            <!-- Add other fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('component.foot')
    <script>
        function toggleForm() {
            var formContainer = document.getElementById('editFormContainer');
            formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') ? 'block' : 'none';
        }
        </script>

</body>

</html>
