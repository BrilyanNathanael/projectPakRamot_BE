<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article_Blog</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/blogPage.css">
</head>

<body>
    @guest
    <section class="landing">
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
        <div class="home">
            <div class="title">
                <h1>Enjoy Learning!</h1>
                <div class="box"></div>
                <p>Explore knowledge through high quality articles from great people</p>
                <a href="{{route('register')}}">Create your own article!</a>
            </div>
            <img src="image/Untitled-1.png" alt="image">
        </div>
    </section>

    <section class="articlePage">
        <h1>Our Articles</h1>
        <div class="article">
            <div class="slider">
                <div class="slides">
                    <div id="slide-1">
                        <div class="page">
                            <div class="line"></div>
                            @foreach( $dataArticle as $arts)
                            <div class="content">
                                <div class="text">
                                    <h1>{{$arts->title}}</h1>
                                    <?php $content = substr($arts->content,0,60); ?>
                                    <p>{{$content}} ...</p>
                                    <h3 class="creator">{{$arts->username}}</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="{{ url('/data_file/' . $arts->picture) }}" alt="" width="80px" height="80px">
                            </div>
                            <div class="line"></div>
                            @endforeach
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="buttonSlide">
                                <a href="#slide-3" id="slide-1"><i class="fas fa-angle-double-left"></i></a>
                                <div class="current">
                                    <a href="#slide-1" id="curr">1</a>
                                    <a href="#slide-2">2</a>
                                    <a href="#slide-3">3</a>
                                </div>
                                <a href="#slide-2" id="slide-1"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="slide-2">
                        <div class="page">
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="buttonSlide">
                                <a href="#slide-1" id="slide-2"><i class="fas fa-angle-double-left"></i></a>
                                <div class="current">
                                    <a href="#slide-1">1</a>
                                    <a href="#slide-2" id="curr">2</a>
                                    <a href="#slide-3">3</a>
                                </div>
                                <a href="#slide-3" id="slide-2"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="slide-3">
                        <div class="page">
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="content">
                                <div class="text">
                                    <h1>Top 10 Programming Language in 2020</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic quasi,
                                        quidem reprehenderit ...</p>
                                    <h3 class="creator">Severian Fathich W.</h3>
                                    <h3 class="time">28 Jan 2020</h3>
                                </div>
                                <img src="image/1.jpg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="buttonSlide">
                                <a href="#slide-2" id="slide-3"><i class="fas fa-angle-double-left"></i></a>
                                <div class="current">
                                    <a href="#slide-1">1</a>
                                    <a href="#slide-2">2</a>
                                    <a href="#slide-3" id="curr">3</a>
                                </div>
                                <a href="#slide-1" id="slide-3"><i class="fas fa-angle-double-right"></i></a>
                            </div>
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
    @endguest
</body>

</html>