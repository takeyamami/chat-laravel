
@php
$talkPosition = $val->type == 1 ? 'talk-me' : 'talk-other';
@endphp

<div class="talk">
    <div class="{{$talkPosition}}">
        <p>{{$val->message}}</p>
    </div>
</div>