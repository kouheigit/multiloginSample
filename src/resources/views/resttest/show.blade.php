<h1>{{$id}}</h1>
@foreach($show_json as $value)
<p>{{$value}}</p>
@endforeach

　　<form method="get" action="{{ route('resttest.edit', $id) }}">
      @csrf
      <button type="submit" class="btn btn-danger">編集する</button>
  </form>
    <form method="post" action="{{ route('resttest.destroy', $id) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">削除する</button>
    </form>


