
@php
$talkPosition = $val->type == 1 ? 'talk-me' : 'talk-other';
@endphp

<div class="talk {{$talkPosition}}">
<div class="name">{{$val->username}}</div>
    <div class="message">
        <p>{!! nl2br(e($val->message)) !!}</p>
    </div>
<div class="time">{{$val->created_at}}</div>
</div>