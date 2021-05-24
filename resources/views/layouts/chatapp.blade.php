<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/common/css/chat.css">
</head>
<body>
<div id="wrapper">
    <div id="main">
        @section('list')
        <div id="menu">
        <ul>
        @show
        </ul>
        </div>
        <div id="contents">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>