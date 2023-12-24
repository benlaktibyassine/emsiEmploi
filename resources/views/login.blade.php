@include('component.head')

<body>

    @include('component.header')
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">
                <div class="my-account-form">
                    <h2>Log In To Your Account</h2>
                    <form method="POST" action="{{ route('proflogin') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" required
                                        placeholder="Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" required
                                        placeholder="Password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="my-account-btn">
                                    <button type="submit" class="default-btn">Log In</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-3 col-md-3"></div>

        </div>
    </div>
    @include('component.jslinks')

</body>
