<form method="POST"  action="{{ route('rest1.update') }}">
    @csrf
    <p>URL ID</p>
    <input type="text" name="id" value="{{old('id')}}">
    <p>URL Title</p>
    <input type="text" name="message" value="{{old('message')}}">
    <br>
    <p>URL</p>
    <input type="text" name="url" value="{{old('url')}}">
    <br>
    <input type="submit" value="send">
    <br>
</form>
