<form method="POST" action="/login/action">
    {{ csrf_field() }}
    <div class="data">
        <div class="item">
            <input type="text" name="email" id="email" class="formControl" required="required" value="{{old('email')}}" placeholder="メールアドレス">
        </div>
        <div class="item">
            <input type="password" name="password" id="password" class="formControl" required="required" value="" placeholder="パスワード">
        </div>
    </div>
    <div class="btnArea">
        <button class="btn submitBtn" type="submit">ログイン</button>
    <div>
</form>