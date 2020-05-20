<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article_Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/blogPageMember.css">
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
    <script src="js/dropdown.js"></script>
</body>

</html>