<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pofile</title>
    <link rel="stylesheet" href="/css/editProfile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="edit_page">
        <div class="edit">
            <div class="profile">
                <h1>Edit your Profile</h1>
                <div class="line"></div>
                <form action="" method="">
                    <div class="edit_row">
                        <div class="edit_list">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Your Email" value="{{$profile->email}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Your Password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" placeholder="Confirmation Password">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Your Username" value="{{$profile->username}}">
                            </div>
                            <div class="personal">
                                <div class="form-group">
                                    <label for="place_birth">Place of Birth</label>
                                    <input type="text" class="form-control" name="place_birth" id="place_birth"
                                        placeholder="Your Place of Birth" value="{{$profile->place_birth}}">
                                </div>
                                <div class="date_gender">
                                    <div class="form-group">
                                        <label for="date_birth">Date of Birth</label>
                                        <div class="date_birth">
                                            <input type="date" class="form-control" name="date_birth" id="date_birth"
                                                placeholder="Your date of Birth" value="{{$profile->date_birth}}">
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
                            <button type="submit">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>