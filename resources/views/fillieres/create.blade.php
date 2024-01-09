@include('component.head')
@include("component.slidebar")

<div class="page-banner-area portfolio-page-area mt-1">
    <div class="container">
        <div class="single-page-banner-content">
            <h1>Register</h1>
            <ul>
                <li>
                    <a href="{{ route('fillieres.index') }}">Fillieres</a>
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
            <h2>Ajouter fillieres</h2>
            <form action="{{ route('fillieres.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="code_filliere" placeholder="Code filliere"
                                value="{{ old('code_filliere') }}">
                            @error('code_filliere')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"name="nom_filliere" placeholder="Nom filliere"
                                value="{{ old('nom_filliere') }}">
                            @error('nom_filliere')
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

