@include('component.head')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('profstore') }}" method="POST" class="form">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Tel</label>
                    <input type="text" name="tel" class="form-control" id="tel">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>
