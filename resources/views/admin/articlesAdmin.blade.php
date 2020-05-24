<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="/css/ArticleList.css" rel="stylesheet" type="text/css">
    <title>Admin Page</title>
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
                        <a href="#" id="user">Welcome, <span class="user"> {{$data->username}}</span></a>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="profile" id="profile">
                        <a href="/profile">Edit Profile</a>
                        <a href="{{url('/logout')}}">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

    <div class="container">
        <div class="create_container">
            <div class="new_button" onmouseover="hoverNewArticle(this)" onmouseout="outHoverNewArticle(this)">
                <a href="/create">
                    <h2>Create New Article</h2>
                    <img src="/image/plus_article.png" width="30px" height="30px" alt="">
                </a>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <span class="list-title">Articles</span>

        <div class="article-list">
            <table id="myTableData" class="article-data" border="1" cellpadding="2">
                <tr class="table-header">
                    <td>&nbsp;</td>
                    <td>Title</td>
                    <td>Date Created</td>
                </tr>
                <?php $i=1; ?>
                @foreach( $articles as $article )
                <tr class="tables">
                    <td>
                        <div class="nomor"><?php echo $i; ?></div>
                        <?php $i++; ?>
                    </td>
                    <td>{{$article->title}}</td>
                    <td>
                        <div class="list">
                            {{$article->created_at->format('D, d M Y')}}

                            @if($article->username === "Nathan" || $article->username === "Andre")
                                @if($article->username !== $data->username)
                                <div class="list_action">
                                    <form class="form" id="delete-form" action="{{ route('article.delete', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @method('delete')
                                        @csrf
                                        <button class="delete" type="submit">
                                            <img src="/image/delete.png" alt="" class="delete" onmouseover="hoverDelete(this)"
                                                onmouseout="outHoverDelete(this)">
                                        </button>
                                    </form>
                                </div>
                                @else
                                <div class="list_action">
                                    <a href="{{ route('article.edit', $article->id)}}">
                                        <img src="/image/edit.png" alt="" class="edit" onmouseover="hoverEdit(this)"
                                            onmouseout="outHoverEdit(this)">
                                    </a>
                                    <form class="form" id="delete-form" action="{{ route('article.delete', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @method('delete')
                                        @csrf
                                        <button class="delete" type="submit">
                                            <img src="/image/delete.png" alt="" class="delete" onmouseover="hoverDelete(this)"
                                                onmouseout="outHoverDelete(this)">
                                        </button>
                                    </form>
                                </div>
                                @endif
                            @else
                            <div class="list_action">
                                <a href="{{ route('article.edit', $article->id)}}">
                                    <img src="/image/edit.png" alt="" class="edit" onmouseover="hoverEdit(this)"
                                        onmouseout="outHoverEdit(this)">
                                </a>
                                <form class="form" id="delete-form" action="{{ route('article.delete', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @method('delete')
                                    @csrf
                                    <button class="delete" type="submit">
                                        <img src="/image/delete.png" alt="" class="delete" onmouseover="hoverDelete(this)"
                                            onmouseout="outHoverDelete(this)">
                                    </button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>
            &nbsp;
        </div>
    </div>
    <script src="/js/dropdown.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>