@foreach($datas as $data)
    <h1>日時:{{$data['dt_txt']}}</h1>
    <h1>最高気温は{{$data['main']['temp']}}度</h1>
    @if($data['weather'][0]['main']=='Clouds')
        <h1>只今の天気は曇り</h1>
    @elseif($data['weather'][0]['main']=='Rain')
        <h1>只今の天気は雨</h1>
    @endif
    <br>
@endforeach



