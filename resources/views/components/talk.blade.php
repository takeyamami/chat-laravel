
@php
$talkPosition = $val->type == 1 ? 'talk-me' : 'talk-other';
@endphp

<div class="talk">
<div class="name">{{$val->username}}</div>
    <div class="{{$talkPosition}}">
        <p>{{$val->message}}</p>
    </div>
<div class="time">{{$val->regist_dt}}</div>
</div>