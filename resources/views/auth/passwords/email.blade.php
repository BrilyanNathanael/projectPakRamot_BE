<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/forgotPassword.css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="box">
        <h1>{{ __('Reset Password') }}</h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="emails">
                <div class="form-group">
                    <div class="email-label">
                        <label for="email">{{ __('E-Mail') }}</label>
                    </div>
    
                    <div class="email_list">
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
            </div>

        </form>
    </div>
</body>
</html>
