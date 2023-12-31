@include('component.head')
@include('component.slidebar')

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
            <h2>Create A Profesor Account</h2>
            <form action="{{ route('profstore') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="nom" placeholder="First Name"
                                value="{{ old('nom') }}">
                            @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="prenom" placeholder="Last Name"
                                value="{{ old('prenom') }}">
                            @error('prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control"name="tel" placeholder="Phone Number"
                                value="{{ old('tel') }}">
                            @error('tel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my-account-btn">
                            <button type="submit" class="default-btn">Register Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('component.jslinks')
