@include('component.head')@include('component.slidebar')

<div class="my-account-area pt-100 pb-100">
    <div class="container">
        <div class="my-account-form login-form">
            <h2>Ajouter Jour</h2>
            <form action="{{ route('jour.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="nom_jour" placeholder="Nom jour"
                                value="{{ old('nom_jour') }}">
                            @error('nom_jour')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="my-account-btn">
                            <button type="submit" class="default-btn">Ajouter Jour</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('component.jslinks')
