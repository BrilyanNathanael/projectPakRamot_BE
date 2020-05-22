<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link href="/css/articleViewGuest.css" rel="stylesheet" type="text/css">
    <title>Our Article</title>
</head>
<body>
    <nav class="menuBar" id="navbarScroll">
        <div class="logo">
            <h1>Ramot's</h1>
        </div>
        <div class="menuLink">
            <a href="/">Home</a>
            <a href="/" id="active">Article</a>
            <a href="/">Contact</a>
            <a href="{{route('login')}}" id="login">Login</a>
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
            <img src="{{url('/data_file/' . $artics->picture)}}"  alt="image">
            <div class="tulisan">
            <p>
                {{$artics->content}}
            </p>
            <br>
                Proin enim eros, consequat vel sapien id, mollis consequat elit. Pellentesque ligula purus, aliquam non fringilla sit amet, placerat a justo. Nullam pharetra eros non ultrices hendrerit. Maecenas diam nisi, pretium a magna quis, tincidunt suscipit ipsum. Vestibulum neque turpis, placerat quis porttitor in, lobortis in dolor. Aliquam mi massa, bibendum in condimentum et, feugiat a nisl. Integer nec ornare lorem. Sed non libero ipsum. Aenean id condimentum urna. Morbi faucibus ipsum non posuere vehicula. Duis aliquam tortor at nulla malesuada mollis. Sed vestibulum blandit diam a sagittis. Suspendisse sit amet consectetur risus, et lacinia sem. Proin at est eget sapien facilisis tempor et ut lorem.
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