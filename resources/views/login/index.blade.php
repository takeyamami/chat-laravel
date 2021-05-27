<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <link rel="stylesheet" href="/common/css/global.css">
    <link rel="stylesheet" href="/common/css/login.css">
</head>

<body>
    <div id="contents">
        <h1>ログイン</h1>
        <form method="POST" action="/action">
            {{ csrf_field() }}
            <div class="data">
                <div class="item">
                    <input type="text" name="email" id="email" class="formControl" required="required" val="" placeholder="メールアドレス">
                </div>
                <div class="item">
                    <input type="password" name="password" id="password" class="formControl" required="required" val="" placeholder="パスワード">
                </div>
            </div>
            <div class="btnArea">
                <button class="btn submitBtn" type="submit">ログイン</button>
            <div>
        </form>
    </div>
</div>
</body>
</html>