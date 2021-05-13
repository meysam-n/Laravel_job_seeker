<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Job Seeker Register</title>

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
      .register{
          margin-top: 10px;
      }
      .form-floating{
          margin-bottom: 10px;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet"> 
    
  </head>
  <body class="text-center bg-dark">
    
<main class="form-signin">

    <form action="{{ route('login') }}" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        @if (session()->has('status'))
         <span class="login-error  w-100 btn btn-lg btn-danger">{{ session('status') }} </span>
        @endif

        <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" > Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <div class="register">
            <span>  <a href="{{ route('register') }}">Create an account</a></span>
        </div>
        <p class="mt-5 mb-3 text-muted">Job Seeker &copy; 2021</p>
        </form>
    </main>
  </body>
</html>
