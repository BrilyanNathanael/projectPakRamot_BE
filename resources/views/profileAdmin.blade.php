<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pofile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/editProfile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="edit_page">
    <a href="/"><i class="fas fa-arrow-left"></i></a>
        <div class="edit">
            <div class="profile">
                <h1>Edit your Profile</h1>
                <div class="line"></div>
                <form action="/profile/{{ $profile->id }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="edit_row">
                        <div class="edit_list">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Your Email" value="{{$profile->email}}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                    placeholder="Your Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" placeholder="Confirmation Password">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
                                    placeholder="Your Username" value="{{$profile->username}}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="personal">
                                <div class="form-group">
                                    <label for="place_birth">Place of Birth</label>
                                    <input type="text" class="form-control @error('place_birth') is-invalid @enderror" name="place_birth" id="place_birth"
                                        placeholder="Your Place of Birth" value="{{$profile->place_birth}}">
                                    @error('place_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="date_gender">
                                    <div class="form-group">
                                        <label for="date_birth">Date of Birth</label>
                                        <div class="date_birth">
                                            <input type="date" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth" id="date_birth"
                                                placeholder="Your date of Birth" value="{{$profile->date_birth}}">
                                            @error('date_birth')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="genders">
                                            <input type="radio" id="male" name="gender" value="male" {{$profile->gender == 'male' ? 'checked' : ''}}>
                                            <label for="male">Male</label>
                                            <input type="radio" id="female" name="gender" value="female" {{$profile->gender == 'female' ? 'checked' : ''}}>
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>