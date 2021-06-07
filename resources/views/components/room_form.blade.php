<form method="POST" action="/room/action">
    {{ csrf_field() }}
    <div class="data">
        <div class="item">
            @if ($errors->has('email'))
            <input type="text" name="name" id="name" class="formControl error" value="{{old('name')}}" placeholder="ルーム名">
            @foreach ($errors->get('name') as $val)
            <div class="errorCopy">{{$val}}</div>
            @endforeach
            @else
            <input type="text" name="name" id="name" class="formControl" value="{{old('name')}}" placeholder="ルーム名">
            @endif
        </div>
        <div class="item">
            <input type="text" name="search" id="search" class="formControl" value="" placeholder="ルームに追加するユーザーを入力">
        </div>
    </div>
    <div class="btnArea">
        <button class="btn submitBtn" type="submit">作成</button>
    <div>
</form>