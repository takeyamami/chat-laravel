
@php
$talkPosition = $val->type == 1 ? 'talk-me' : 'talk-other';
@endphp

<div class="talk {{$talkPosition}}">
<div class="name">{{$val->username}}</div>
    <div class="message">
        <p>{{$val->message}}</p>
    </div>
<div class="time">{{$val->regist_dt}}</div>
</div>