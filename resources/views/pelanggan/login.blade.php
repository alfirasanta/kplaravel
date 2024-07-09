<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('loginpel.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">

                    <!-------------      image     ------------->
                    {{-- <div class="text">
                        <p>Join the community of developers <i>- ludiflex</i></p>
                    </div> --}}

                </div>

                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>Log In to Your Account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required="" autocomplete="off">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="pass" required="">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">

                            <input type="submit" class="submit" value="Log In">
                        </div>
                        <div class="signin">
                            <span>Don't have an account? <a href="{{ url('/registerpelanggan') }}">sign up
                                    here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>