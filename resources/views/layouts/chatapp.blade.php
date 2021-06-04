@yield('header')
<body>
<div id="wrapper">
    <div id="main">
        @section('list')
        <div id="menu">
        <ul class="sidebar-index">
            <li class="text userInfo"><span class="name">@yield('username')</span>さん</li>
            <li class="btnArea"><a href="/logout" class="btn lineBtn">ログアウト</a></li>
            <li>
                <ul class="roomList">
                @show
                </ul>
            </li>

        </ul>
        </div>
        <div id="contents">
            <h1>@yield('talkTitle')</h1>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>