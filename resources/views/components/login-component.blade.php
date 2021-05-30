<form method="POST" action="/login/action">
    {{ csrf_field() }}
    <div class="data">
        <div class="item">
            @if ($errors->has('email'))
            <input type="text" name="email" id="email" class="formControl error" value="{{old('email')}}" placeholder="メールアドレス">
            @foreach ($errors->get('email') as $val)
            <div class="errorCopy">{{$val}}</div>
            @endforeach
            @else
            <input type="text" name="email" id="email" class="formControl" value="{{old('email')}}" placeholder="メールアドレス">
            @endif
        </div>
        <div class="item">
            @if ($errors->has('password'))
            <input type="password" name="password" id="password" class="formControl error" value="" placeholder="パスワード">
            @foreach ($errors->get('password') as $val)
            <div class="errorCopy">{{$val}}</div>
            @endforeach
            @else
            <input type="password" name="password" id="password" class="formControl" value="" placeholder="パスワード">
            @endif
        </div>
    </div>
    <div class="btnArea">
        <button class="btn submitBtn" type="submit">ログイン</button>
    <div>
</form>