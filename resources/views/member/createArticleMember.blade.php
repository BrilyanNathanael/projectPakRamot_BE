<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link href="/css/createArticle.css" rel="stylesheet" type="text/css">
    <title>Create New Article</title>
</head>

<body>
    <nav class="menuBar" id="navbarScroll">
        <div class="logo">
            <h1>Ramot's</h1>
        </div>
        <div class="menuLink">
            <a href="/home">Home</a>
            <a href="/article" id="active">My Articles</a>
            <div class="lambang">
                ||
            </div>
            <div class="dropdown">
                <div class="drop" onclick="clickDropDown(this)">
                    <a id="user">Welcome, <span class="user">Member!</span></a>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="profile" id="profile">
                    <a href="/Member/editProfile.html">Edit Profile</a>
                    <a href="/blogPage.html">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="article-maker">
        <a href="/create"><i class="fas fa-arrow-left"></i></a>
        <span class="page-title">Create New Article</span>
        <div class=article-workspace>
            <form class="workspace" method="POST" action="/articles">
            @csrf
                <input type="text" id="article-title" placeholder="Input title" name="title">

                <input type="text" id="article-author" placeholder="Input writer name" name="">
                    <div class="addPicture">
                        <div class="addButton">
                            <a href="">Add Picture <i class="far fa-plus-square"></i></a>
                        </div>
                        <img src="/image/picture.png" alt="">
                    </div>

                <input name="content" id="article-content" cols="100" rows="50"
                    placeholder="Input content" name="content"></input><br><br>
                <button class="publish" type="submit">
                    Publish
                </button>
            </form>
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
                <a href=""><i class="fab fa-whatsapp"></i> 0822-456-1292</a>
                <a href=""><i class="fas fa-envelope"></i> online_learn@gmail.com</a>
            </div>
        </div>
        <div class="footerLine"></div>
        <h3>© Copyright All Right reserved</h3>
    </section>
    <script src="../js/navbar.js"></script>
    <script src="../js/dropdown.js"></script>
</body>

</html>