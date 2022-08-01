<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name') }} - Login</title>

        <!-- base;jquery -->
    <script type="text/javascript" src="{{ asset('dist/js/jquery-3.3.1.slim.min.js') }}"></script>

    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/css/vendor.bundle.base.css') }}">

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/mdi/css/materialdesignicons.min.css') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dist/css/vertical-layout-light/style.css') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h2 class="text-center">SI<span class="font-weight-bold">PRES</span></h2 class="text-center">
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-md  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control form-control-md @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-info btn-md font-weight-medium auth-form-btn" style="background-color: #2d55ff;">{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('dist/vendors/js/vendor.bundle.base.js') }}"></script>

    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('dist/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dist/js/template.js') }}"></script>
    <script src="{{ asset('dist/js/settings.js') }}"></script>
    <script src="{{ asset('dist/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>