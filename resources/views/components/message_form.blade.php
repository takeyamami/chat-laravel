<form method="POST" action="/chat/post">
    <div id="form">
        {{ csrf_field() }}
        <textarea class="message" name="message" rows="2" cols="100" maxlength="1000"></textarea>
        <input type="hidden" name="rid" value="{{$rid}}">
        <button class="btn submitBtn" type="submit">送信</button>
    </div>
</form>