<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link href="/css/articleView.css" rel="stylesheet" type="text/css">
    <title>Our Article</title>
</head>
<body>
    <nav class="menuBar" id="navbarScroll">
        <div class="logo">
            <h1>Ramot's</h1>
        </div>
        <div class="menuLink">
            <a href="/" id="active">Home</a>
            <a href="/articles">Articles</a>
            <a href="/">Member List</a>
            <div class="lambang">
                ||
            </div>
            <div class="dropdown">
                <div class="drop" onclick="clickDropDown(this)">
                    <a id="user">Welcome, <span class="user">{{$data->username}}</span></a>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="profile" id="profile">
                    <a href="/profile">Edit Profile</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="backIcon">
        <a href="/"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="coba2">
        <div class="ArticleKonten">
            <h1>{{$artics->title}}</h1>
            <div class="author">
                <p>{{$artics->created_at->format('D, d M Y')}}</p>
                <p class="pembuat">By {{$artics->username}}</p>
            </div>
            <img src="{{url('/data_file/' . $artics->picture)}}"  alt="image" width="150px">
            <div class="tulisan">
            <p>
                {{$artics->content}}
            </p>
            <br>
                
            </div>
        </div>
    </div>
    <section class="footerPage">
        <div class="footerContent">
            <h1>Ramot's</h1>
            <div class="footerTitle">
                <h3>Create by: <br> Kelompok 6</h3>
                <h2>FAVE x RnD</h2>
            </div>
            <div class="footerContact">
                <a>Jl. Pelangi Indah No. 24</a>
                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i> 0822-456-1292</a>
                <a href="https://mail.google.com/"><i class="fas fa-envelope"></i> online_learn@gmail.com</a>
            </div>
        </div>
        <div class="footerLine"></div>
        <h3>© Copyright All Right reserved</h3>
    <script src="/js/dropdown.js"></script>
    <script src="/js/navbar.js"></script>
    </section>
</body>
</html>