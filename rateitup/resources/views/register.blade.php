<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register - Rate It Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('css/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <h3 class="app-logo">Rate It Up</h3>
                            <h4>
                                <div>Welcome,</div>
                                <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
                            </h4>
                            <div>
                                <form method="POST" action="{{ route('register') }}" onsubmit="return validateForm()">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" placeholder="Email here..." type="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input name="name" id="name" placeholder="Name here..." type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input name="password" id="password" placeholder="Password here..." type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Repeat Password <span class="text-danger">*</span></label>
                                                <input name="password_confirmation" id="passwordRep" placeholder="Repeat Password here..." type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-control" required>
                                                    <option value="" disabled selected>-- Select Gender --</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-3 position-relative form-check">
                                        <input name="check" id="exampleCheck" type="checkbox" class="form-check-input" required>
                                        <label class="form-check-label">Accept our <a href="#">Terms and Conditions</a>.</label>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <h5 class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a></h5>
                                        <div class="ml-auto">
                                            <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-xs-none col-lg-5">
                        <div class="slider-light">
                            <div class="slick-slider slick-initialized">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Jelajahi, Review dan Temukan Duniamu!</h3>
                                            <p>Mulailah petualanganmu menjelajahi tempat baru, bagikan pengalaman lewat review, dan temukan sisi dunia yang paling cocok untukmu.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="{{ asset('js/main.d810cf0ae7f39f28f336.js') }}"></script>

    <!-- Toastr & jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let pass = document.getElementById("password").value;
            let passRep = document.getElementById("passwordRep").value;

            if (name.length < 3) {
                toastr.error("Name harus minimal 3 karakter");
                return false;
            }

            if (pass !== passRep) {
                toastr.error("Password harus sama");
                return false;
            }

            return true;
        }

        // Menampilkan pesan sukses atau error dari backend
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
        toastr.error("{{ session('error') }}");
        @endif
        @if($errors->any())
        toastr.error("{{ $errors->first() }}");
        @endif

    </script>
</body>
</html>
