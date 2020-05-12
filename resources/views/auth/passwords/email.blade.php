<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="/css/forgotPassword.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>{{ __('Reset Password') }}</h1>
            <div class="form-list">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                        <div class="form-group">
                            @if (session('status'))
                                <div class="alert" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="label">
                                <label for="email">{{ __('Email') }}</label>
                            </div>
            
                            <div class="list">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <p>*We will send you a reset password link to your email,<br>
                                please enter correct email.</p>
            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                        <div class="send">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send') }}
                            </button>          
                        </div>
                        
                </form>
            </div>
        </div>

    </div>
</body>
</html>
