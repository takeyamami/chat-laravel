<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>chat</title>
</head>
<style>
* {
   margin: 0;
   padding: 0; /* 全てのプロパティの余白とパディングをリセットしています。*/
}
#wrapper {
   width: 70%;
   margin: 0 auto;/*ページ幅 70％ でセンタリングしています。*/
}
#main {
   width: 100%;/*ページ幅 70％をメニューとコンテンツ幅にしています。同上*/
   overflow: hidden;/* 親ボックスでフロート解除します。*/
}
#menu {
    float: left;
    min-height:100%;
    width: 150px;  /* floatの width 指定は必須です。*/
    padding-top: 60px;
    border-right: 0.1em solid gray;
}
#contents {
   margin-left: 170px; 
   padding-top: 20px;
   min-height: 100%;
}
#footer {
   clear: both;   /* IE6 以前の float 解除対応です。 */
   width: 100%;
   height: 50px;
}
#menu ul {
   list-style: none;
}
#contents .talk {
    padding: 10 0 10 0;
}
#contents .talk .talk-left {
    position: relative;
    margin-left: 100px;
    margin-right: 100px;
    padding: 1.2em;
    border: 3px solid #eee;
    background-color: #fff;
    border-radius: 5px;
}
#contents .talk .talk-left:before {
    position: absolute;
    content: '';
    border: 10px solid transparent;
    border-left: 10px solid #eee;
    top: 21px;
    right: -23px;
}
#contents .talk .talk-left:after {
    position: absolute;
    content: '';
    border: 10px solid transparent;
    border-left: 10px solid #fff;
    top: 21px;
    right: -19px;
}
#contents .talk .talk-right {
    color: #444;
    position: relative;
    margin-left: 100px;
    margin-right: 100px;
    padding: 1.2em;
    border: 3px solid #eee;
    background-color: #fff;
    border-radius: 5px;
}
#contents .talk .talk-right:before {
    position: absolute;
    content: '';
    border: 10px solid transparent;
    border-right: 10px solid #eee;
    top: 21px;
    left: -23px;
}
#contents .talk .talk-right:after {
    position: absolute;
    content: '';
    border: 10px solid transparent;
    border-right: 10px solid #fff;
    top: 21px;
    left: -19px;
}
#contents #form  {
	position: fixed;
	bottom: 0;
    padding: 10 0 10 0;
    display: flex;
}
#contents #form .message {
    padding: 10px;
    line-height: 1.2em;
}
#contents #form .submitBtn {
    margin-top: 15px;
    margin-left: 10px;
    padding-left: 10px;
    width: 70px;
    height: 25px;
    text-align: center;
}
#contents #form .submitBtn:before {
	content:"";
    margin-left: -15px;
    margin-right: 5px;
	display:inline-block;
	width:1em;
	height:1em;
	background:url(/imageFile/chat/icon_send.svg) no-repeat;
	background-size:contain;
}
</style>
<body>
<div id="wrapper">
    <div id="main">
        <div id="menu">
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        　hogehoge<br>
        </div>
        <div id="contents">
            <h1>話し合い（blade）</h1>
            @foreach ($talk as $val)
            @php
            $talkPosition = $userID == $val['userID'] ? 'talk-left' : 'talk-right';
            @endphp
            <div class="talk">
                <div class="{{$talkPosition}}">
                    <p>{{$val['msg']}}</p>
                </div>
            </div>
            @endforeach
            <form method="POST" action="/post">
                <div id="form">
                    {{ csrf_field() }}
                    <textarea class="message" name="message" rows="2" cols="100"></textarea>
                    <button class="submitBtn" type="submit">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>