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
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <div class="label">
                                <label for="email">{{ __('Email') }}</label>
                            </div>
            
                            <div class="list">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="label">
                                <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="list">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="label">
                                <label for="password">{{ __('Confirm Password') }}</label>
                            </div>

                            <div class="list">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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