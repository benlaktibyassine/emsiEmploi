@include('component.head')
@include('component.header')
@include('component.navbar')
<div class="page-banner-area portfolio-page-area mt-1">
    <div class="container">
        <div class="single-page-banner-content">
            <h1>Register</h1>
            <ul>
                <li>
                    <a href="{{ route('profindex') }}">Professors</a>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start My Account Area -->
<div class="my-account-area pt-100 pb-100">
    <div class="container">
        <div class="my-account-form login-form">
            <h2>Ajouter Groupe</h2>
            <form action="{{ route('groupe.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="nom_groupe" placeholder="Nom Groupe"
                                value="{{ old('nom_groupe') }}">
                            @error('nom_groupe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="code_filliere" id="code_filliere" class="form-select form-control" style="height: 45px" required>
                                @foreach ($fillieres as $filliere)
                                    <option value="{{ $filliere->code_filliere }}">{{ $filliere->nom_filliere }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="my-account-btn">
                            <button type="submit" class="default-btn">Ajouter Groupe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End My Account Area -->

</body>

</html>
