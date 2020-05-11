<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/RegisLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="regis_page">
        <div class="nav_account">
            <div class="log">
                <h5>Have an account?</h5>
            </div>
            <a href="/login">Login</a>
        </div>
        <div class="res">
            <div class="register">
                <h1>Let we know you!</h1>
                <div class="garis"></div>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="regis_row">
                        <div class="regis_list">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your Password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password"  class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirmation Password">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Your Username" value="{{old('username')}}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="personal">
                                <div class="form-group">
                                    <label for="place_birth">Place of Birth</label>
                                    <input type="text" class="form-control @error('place_birth') is-invalid @enderror" name="place_birth" id="place_birth" placeholder="Your Place of Birth" value="{{old('place_birth')}}">
                                    @error('place_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="date_gender">
                                    <div class="form-group">
                                        <label for="date_birth">Date of Birth</label>
                                        <div class="date_birth">
                                            <input type="date" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth" id="date_birth" placeholder="Your date of Birth" value="{{old('date_birth')}}">
                                            @error('date_birth')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="genders">
                                            <input type="radio" id="male" name="gender" value="male" checked="checked">
                                            <label for="male">Male</label>
                                            <input type="radio" id="female" name="gender" value="female">
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
