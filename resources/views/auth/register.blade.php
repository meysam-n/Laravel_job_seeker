<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Job Seeker Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .form-signin{
          background-color: whitesmoke;
      }
      .login-error{
        margin-bottom: 15px;
      }
      .form-floating{
          margin-bottom: 10px;
      }
      .register{
          margin-top: 10px;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet"> 
    
  </head>
  <body class="text-center bg-dark">
    
    <main class="form-signin">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 container justify-content-center">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                <div class="form-floating">
                    <label for="name">Full name</label>
                    <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" aria-describedby="usernameHelp" placeholder="Enter username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-floating">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-floating">
                    <label for="password_confirmation">Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repeat your password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <div class="register">
                    <span>Alrady has an account? <a href="{{ route('login') }}">Login</a></span>
                </div>
                <p class="mt-5 mb-3 text-muted">Job Seeker &copy; 2021</p>
            </form>
        </div>
        
    </body>
</html>
