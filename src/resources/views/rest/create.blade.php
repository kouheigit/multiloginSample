<form method="POST"  action="{{ route('rest1.store') }}">
    @csrf
    <p>URL Title</p>
    <input type="text" name="message" value="{{old('message')}}">
    <br>
    <p>URL</p>
    <input type="text" name="url" value="{{old('url')}}">
    <br>
    <input type="submit" value="send">
    <br>
</form>
