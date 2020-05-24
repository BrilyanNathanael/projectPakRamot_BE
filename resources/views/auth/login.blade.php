<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/RegisLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
<div class="login_page">
    <div class="nav_account">
        <div class="log">
            <h5>Doesn't have an account?</h5>
        </div>
        <a href="/register">Sign Up</a>
    </div>
    <div class="login">
        <img src="/image/Untitled-1.png" alt="" width="400px">
            <div class="login-list">

                @if (session('error'))
                    <div class="alert alert-danger" style="width: 22em;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session('error')}}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Username or Password do not match
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input">
                            <div class="icon_input">
                                <img src="/image/person.png" alt="" width="15px" height="15px">
                            </div>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input">
                            <div class="icon_input">
                                <img src="/image/lock.png" alt="" width="15px" height="15px">
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="remember_forgot_login">
                            <div class="remember_forgot">
                                <div class="remember">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>      
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="button_login">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
