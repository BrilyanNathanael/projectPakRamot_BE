<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="/css/createArticle.css" rel="stylesheet" type="text/css">
    <title>Create New Article</title>
</head>

<body>
    <nav class="menuBar" id="navbarScroll">
        <div class="logo">
            <h1>Ramot's</h1>
        </div>
        <div class="menuLink">
            <a href="/">Home</a>
            <a href="/articles" id="active">Articles</a>
            <a href="/memberList">Member List</a>
            <div class="lambang">
                ||
            </div>
            <div class="dropdown">
                <div class="drop" onclick="clickDropDown(this)">
                    <a id="user">Welcome, <span class="user">Member!</span></a>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="profile" id="profile">
                    <a href="/profile">Edit Profile</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="article-maker">
        <a href="/"><i class="fas fa-arrow-left"></i></a>
        <span class="page-title">Create New Article</span>
        <div class=article-workspace>
            <form class="workspace" method="POST" action="/articles" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" id="article-title" placeholder="Input title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="addPicture">
                        <div class="addButton">
                            <a href="#" id="addPicture">Add Picture <i class="far fa-plus-square"></i></a>
                            <input type="file" name="picture" id="picture" style="display:none;">
                        </div>
                        <div id="text">
                            No file chosen, yet.
                        </div>
                    </div>

                    <textarea name="content" id="article-content" cols="100" rows="50"
                        placeholder="Input content" class="form-control @error('content') is-invalid @enderror">{{old('content')}}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <br><br>
                    <button class="publish" type="submit">
                        Publish
                    </button>
                </div>
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

    <script src="/js/file.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/dropdown.js"></script>
</body>

</html>