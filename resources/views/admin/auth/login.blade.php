<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PT POTENSI INTI PERSADA</title>
    <!-- Favicon -->
    <link rel="icon" href="/backend/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/backend/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet"
        href="/backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/backend/assets/css/argon.css?v=1.1.0" type="text/css">

</head>

<body class="bg-default">

    <!-- Main content -->
    <div class="main-content ">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">

            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                               <h4>Bank Sampah</h4>
                            </div>
                            <form action="admin-login" role="form" method="POST">
                                @csrf

                                @if (session('error_message'))
                                <div class="alert alert-danger">
                                    {{ session('error_message') }}
                                </div> @endif
                                <div class="form-group
        mb-3">
    <div class="input-group input-group-merge input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
        </div>
        <input class="form-control is-invalid @error('email')  @enderror" placeholder="Email" name="email"
            type="email" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"
                type="password" value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="custom-control
                custom-control-alternative custom-checkbox">
        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
        <label class="custom-control-label" for=" customCheckLogin">
            <span class="text-muted">Remember me</span>
        </label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary my-4">Sign in</button>
    </div>
    </form>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2023 <a href="/" class="font-weight-bold ml-1" target="_blank">Bank Sampah</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/backend/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="/backend/assets/js/argon.js?v=1.1.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="/backend/assets/js/demo.min.js"></script>

    </body>

</html>
