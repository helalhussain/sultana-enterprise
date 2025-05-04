<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-dark">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container mt-5">

                <div class="home-btn">
                    {{-- <a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a> --}}
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 10px 10px 10px 10px">
                            <div class="card-body ">
                                <div class="px-2 pt-3">
                                    <div class="text-center">
                                        <span>
                                            <img src="{{ uploaded_file($logoIcon->logo) }}"
                                                style="height: 60px;width:auto" alt="logo">
                                        </span>

                                        <h3 class="text-dark mb-2 mt-3 fw-bold">ADMIN LOGIN</h3>

                                    </div>

                                    <form class="form-horizontal" action="{{ route('admin.login') }}"
                                        method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="fw-bold">Email</label>
                                            <input type="text"
                                                class="form-control @error('email') is-invalid

                                            @enderror"
                                                name="email" value="{{ old('email') }}" id="username"
                                                placeholder="Enter email" required>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="userpassword" class="fw-bold">Password</label>
                                            <div class="input-group">
                                                <input type="password"
                                                    class="form-control login_password @error('password')
                                            is-invalid
                                        @enderror"
                                                    name="password" id="userpassword" placeholder="Enter password"
                                                    required>
                                                <a class="input-group-text logineye"
                                                    id="validationTooltipUsernamePrepend"><i
                                                        class="fas fa-eye fa-eye-slash  eyesee"></i></a>

                                            </div>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customControlInline">
                                                <label class="form-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-dark w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                                                Forgot your password?</a>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">

                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Developed
                                 {{-- <i class="mdi mdi-heart text-danger"></i> --}}
                                by <a href="https://helalhussain.pro" class="text-white"><strong >Helal Hussain</strong></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('admin') }}/assets/js/app.js"></script>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.logineye').click(function() {
            $('.eyesee').toggleClass('fa-eye-slash');
            var input = $('.login_password');
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password');
            }

        });

    });
</script>
