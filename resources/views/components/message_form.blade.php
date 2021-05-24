<form method="POST" action="/post">
    <div id="form">
        {{ csrf_field() }}
        <textarea class="message" name="message" rows="2" cols="100"></textarea>
        <button class="submitBtn" type="submit">送信</button>
    </div>
</form>