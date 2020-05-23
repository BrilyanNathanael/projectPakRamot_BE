<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="/css/admin_memberStyle.css" rel="stylesheet" type="text/css">
    <title>Admin-Member List</title>
</head>

<body>
    <nav class="menuBar">
        <div class="logo">
            <h1>Ramot's</h1>
        </div>
        <div class="menuLink">
            <a href="/">Home</a>
            <a href="/articles">Articles</a>
            <a href="/memberList" id="active">Member List</a>
            <div class="lambang">
                ||
            </div>
            <div class="dropdown">
                <div class="drop" onclick="clickDropDown(this)">
                    <a href="#" id="user">Welcome, <span class="user">{{$account->username}}</span></a>
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
        <span class="list-title">Member List</span>
        <div class="member-list">
            <table id="myTableData" class="member-data" border="1" cellpadding="2">
                <tr class="table-header">
                    <td>&nbsp;</td>
                    <td>Name</td>
                    <td>Status</td>
                </tr>
                <?php $i=1; ?>
                @foreach($users as $user)
                <tr class="tables">
                    <td>
                        <div class="nomor"><?php echo $i; ?></div>
                        <?php $i++; ?>
                    </td>
                    <td>{{$user->username}}</td>
                    @if($user->blocked_at == null)
                    <td>
                        <div class="list">
                            Normal
                            <div class="list_action">
                                <a href="/memberList/{{$user->id}}">
                                    <img src="/image/padlock-unban.png" alt="" class="edit" onmouseover="hoverBan(this)"
                                        onmouseout="outHoverUnban(this)">
                                </a>
                            </div>
                        </div>
                    </td>
                    @else
                    <td>
                        <div class="list">
                            Banned
                            <div class="list_action">
                                <a href="/memberList/{{$user->id}}">
                                    <img src="/image/padlock-ban.png" alt="" class="edit" onmouseover="hoverUnban(this)"
                                        onmouseout="outHoverUnban(this)">
                                </a>
                            </div>
                        </div>
                    </td>
                    @endif
                </tr>
                @endforeach

            </table>
            &nbsp;
        </div>
    </div>
    <script src="/js/admin-memberBE.js"></script>
    <script src="/js/dropdown.js"></script>
</body>

</html>