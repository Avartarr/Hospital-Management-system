

    <!doctype html>
    <html lang="en">



    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Required meta tags -->

        <title>MEDIX|Login</title>

        <!-- Favicon -->
        <link rel="icon" href="img/logo.png">

        <!-- Master Stylesheet CSS -->
        <link rel="stylesheet" href="style.css">

    </head>

    <body class="login-area">

        <!-- Preloader -->
        <div id="preloader-area">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader -->

        <!-- ======================================
        ******* Page Wrapper Area Start **********
        ======================================= -->
        <div class="main-content- h-100vh">
            <div class="container h-100">

                <div class="row h-100 align-items-center justify-content-center">
                    <div class="hero">
                        <div class="cube"></div>
                        <div class="cube"></div>
                        <div class="cube"></div>
                        <div class="cube"></div>
                        <div class="cube"></div>
                        <div class="cube"></div>

                    </div>
                    <div class="col-sm-10 col-md-8 col-lg-5">
                        <!-- Middle Box -->
                        <div class="middle-box">
                            <div class="card">
                                <div class="card-body p-4">

                                    <!-- Logo -->
                                    <h4 class="font-24 mb-30 text-center">
                                        <img src="images/logo.png"  alt="logo" style="height: 50px; width: 210px">
                                    </h4>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}


                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}


                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                            <div class="checkbox d-inline mb-0">
                                                <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                                <label for="checkbox-8" class="cr mb-0 font-13">Remember me</label>
                                            </div>
                                            <span>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </span>
                                        @endif

                                        </div>

                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block"
                                                type="submit">{{ __('Login') }}</button>
                                        </div>


                                        <div class="text-center mt-15"><span class="mr-2 font-12">Don't have an
                                                account?</span><a class="font-12" href="{{ route("register") }}">Sign up</a></div>

                                    </form>

                                    <!-- end card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================================
        ********* Page Wrapper Area End ***********
        ======================================= -->

        <!-- Plugins Js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bundle.js"></script>

        <!-- Active JS -->
        <script src="js/default-assets/active.js"></script>

    </body>




    </html>

