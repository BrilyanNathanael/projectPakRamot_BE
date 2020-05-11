@extends('layouts.app')

@section('content')
<div class="member_page">
    <div class="member">
        <div class="create">
            <div class="new_article">
                <h4>Create New Article</h4>
                <img src="/img/plus_article.png" width="40px" alt="">
            </div>
        </div>
        <div class="member_action">
            <h5>Articles</h5>
            <div class="actions">
                <
            <table border="1" width="500px" cellpadding="10">
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Date Created</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>testing</td>
                        <td>
                            testing
                            <img src="/img/edit.png" width="20px" alt="">
                            <img src="/img/delete.png" width="20px"alt="">
                        </td>
                        
                    </tr>
                </>
            </div>
        </div>
    </div>

</div>

@endsection
