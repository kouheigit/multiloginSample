@foreach($show_id as $value)
<form method="POST" action="{{route('resttest.update',$value)}}">
    <input type="text" name="apiname" value="{{old('apiname',$value)}}" required>
</form>
@endforeach
<input type="submit" type="send">
