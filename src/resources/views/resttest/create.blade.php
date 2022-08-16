<form method="POST" action="{{route('resttest.store')}}">
    @csrf
    <p>message</p>
    <input type="text" name="message" value="{{old('message')}}"></input>
    <br>
    <p>URL</p>
    <input type="text" name="url" value="{{old("url")}}"></input>
    <br>
    <input type="submit" type="send">
</form>


