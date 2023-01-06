<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HRMS</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Muli&display=swap");

        * {
            box-sizing: border-box;
        }

        body {
            background-color: steelblue;
            color: #fff;
            font-family: "Muli", sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 20px 40px;
            border-radius: 5px;
        }

        .btn {
            cursor: pointer;
            display: inline-block;
            width: 100%;
            background: lightblue;
            padding: 15px;
            font-family: inherit;
            font-size: 17px;
            margin-top: 30px;
            border: 0;
            border-radius: 3px;
        }

        .btn:focus {
            outline: 0;
        }

        .btn:active {
            transform: scale(1.036);
        }

        .text p {
            padding-top: 50px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .container a {
            text-decoration: none;
            color: lightblue;
        }

        .form-control {
            position: relative;
            margin: 20px 0 40px;
            width: 300px;
        }

        .form-control input {
            background-color: transparent;
            border: 0;
            border-bottom: 2px solid #fff;
            display: block;
            width: 100%;
            padding: 15px 0;
            font-size: 18px;
            color: #fff;
        }

        .form-control input:focus,
        .form-control input:valid {
            outline: 0;
            border-bottom: lightblue;
        }

        .form-control label {
            position: absolute;
            top: 15px;
            left: 0;
        }

        .form-control label span {
            display: inline-block;
            font-size: 18px;
            min-width: 5px;
            transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-control input:focus+label span,
        .form-control input:valid+label span {
            color: lightblue;
            transform: translateY(-30px);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Please {{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-control">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
               
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               
            </div>
            <div class="form-control">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label><br>
                

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                {{-- <button class="btn">Login </button> --}}
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color:black" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <p class="text">
                    Don't have an account <a href="">Register</a>
                </p>

            </div>
            {{-- <div class="row mb-3">
                

                <div class="col-md-6">
                    

                    
                </div>
            </div>

            <div class="row mb-3">
                

                <div class="col-md-6">
                    
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                   
                </div>
            </div> --}}
        </form>
        {{-- <form action="{{ url('validateLogin') }}" method="post">
            @csrf
            <div class="form-control">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <label>password</label><br>

                <button class="btn">Login </button>

                <p class="text">
                    Don't have an account <a href="">Register</a>
                </p>

            </div>
        </form> --}}
    </div>
    <script>
        const labels = document.querySelectorAll(".form-control label");

        labels.forEach((label) => {
            label.innerHTML = label.innerText
                .split("")
                .map(
                    (letter, idx) =>
                    `<span style="transition-delay:${idx * 65}ms">${letter}</span>`
                )
                .join("");
        });
    </script>

    <script src="javascript.js"></script>
</body>

</html>

