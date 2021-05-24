
@php
$talkPosition = $val['type'] == 1 ? 'talk-right' : 'talk-left';
@endphp

<div class="talk">
    <div class="{{$talkPosition}}">
        <p>{{$val['msg']}}</p>
    </div>
</div>