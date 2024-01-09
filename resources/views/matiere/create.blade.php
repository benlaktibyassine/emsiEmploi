@include('component.head')
@include("component.slidebar")

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
<div class="my-account-area pt-100 pb-100">
    <div class="container">
        <div class="my-account-form login-form">
            <h2>Ajouter Matier</h2>
            <form action="{{ route('matiere.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="nom_matiere" placeholder="Nom Matiere"
                                value="{{ old('nom_matiere') }}">
                            @error('nom_matiere')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="my-account-btn">
                            <button type="submit" class="default-btn">Ajouter Matiere</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('component.jslinks')

