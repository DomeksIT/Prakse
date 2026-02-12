<!DOCTYPE html>
<html>
<head>
    <title>Ceļojumi</title>
</head>
<body>
<h1>Ceļojumu katalogs</h1>
@if(count($tours) === 0)
    <p>Ceļojumu nav</p>
@endif
@foreach($tours as $tour)
    <div>
        <h2>{{ $tour->title }}</h2>
       <a href="/tours/{{$tour->id}}">Skatīt tūri</a>
    </div>
@endforeach
</body>
</html>
