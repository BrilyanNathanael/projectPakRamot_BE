<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="/css/verify.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>{{ __('Verify Your Email Address') }}</h1>
            <div class="form-list">
                @if (session('resent'))
                    <div class="alert" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                <br>
                <div class="receive">
                    {{ __('If you did not receive the email') }},
                    <form class="request" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

