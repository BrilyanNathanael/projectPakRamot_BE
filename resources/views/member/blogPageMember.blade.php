<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article_Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/blogPageUser.css">
</head>

<body>
        <nav class="menuBar" id="navbarScroll">
            <div class="logo">
                <h1>Ramot's</h1>
            </div>
            <div class="menuLink">
                <a href="/home" id="active">Home</a>
                <a href="/articles">My Articles</a>
                <div class="lambang">
                    ||
                </div>
                <div class="dropdown">
                    <div class="drop" onclick="clickDropDown(this)">
                        <a href="#" id="user">Welcome, <span class="user">{{$data->username}}</span></a>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="profile" id="profile">
                        <a href="/profile">Edit Profile</a>
                        <a href="{{url('/logout')}}">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

    <section class="articlePage">
        <h1>Our Articles</h1>
        <div class="article">
            <div class="slider">
                <div class="slides">
                    <div id="slide-1">
                        <div class="page">
                            <div class="line"></div>
                            @foreach( $article as $arts)
                            <a href="/articles/{{$arts->id}}">
                                <div class="content">
                                    <div class="text">
                                        <h1>{{$arts->title}}</h1>
                                        <?php $content = substr($arts->content,0,100); ?>
                                        <p>{{$content}} ...</p>
                                        <h3 class="creator">{{$arts->username}}</h3>
                                        <h3 class="time">{{$arts->created_at->format('d M Y')}}</h3>
                                    </div>
                                    <img src="{{ url('/data_file/' . $arts->picture) }}" alt="" width="80px" height="80px">
                                </div>
                            </a>
                            <div class="line"></div>
                            @endforeach
                            @if($article->hasPages())
                                <div class="pagination">
                                    {{ $article->onEachSide(1)->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    </section>
    <script src="js/blogPage.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>