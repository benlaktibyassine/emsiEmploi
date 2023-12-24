@include('component.head')

<body>

    @include('component.header')
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">
                <div class="my-account-form">
                    <h2>Log In To Your Account</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Keep me logged in
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="account-text">
                                    <p><a href="forgot-password.html">Forgot your password?</a></p>
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
    @include("component.jslinks")

</body>
