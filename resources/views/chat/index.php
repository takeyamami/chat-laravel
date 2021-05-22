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
        <h1>話し合い</h1>
        <? foreach($talk as $val):?>
        <? $talkPosition = $userID == $val['userID'] ? 'talk-left' : 'talk-right';?>
        <div class="talk">
            <div class="<?= $talkPosition?>">
                <p><?= $val['msg'];?></p>
            </div>
        </div>
        <? endforeach;?>
    </div>
  </div>
</div>
</body>
</html>