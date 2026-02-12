<!DOCTYPE html>
<html lang="lv">
<head>
<meta charset="UTF-8">
<title>
{{ $tour->title }}
</title>
</head>
<body>
<p><a href="/tours">Atpakaļ uz katalogu</a></p>
<h1>{{ $tour->title }}</h1>
<div><b>Cena:</b>
{{ $tour->price }} {{ $tour->currency }}
</div>
<div><b>Datumi:</b> 
{{ $tour->start_date }} - {{ $tour->end_date }}
</div>
<p>{{ $tour->description }}</p>
<hr>
@if(session('ok'))
<p style="color:green;">{{ session('ok') }}></p>
@endif
<h2>Pieteikšanas</h2>
<form method="POST" action="/tours/{{ $tour->id }}/apply">
@csrf
<div>
<label>Vārds</label><br>
<input type="text" name="name"value="{{ old('name') }}">
@error('name') <div style="color:red;">{{ $message }}</div>@enderror
</div>
<div>
    <label>E-pasts</label><br>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email') <div style="color:red;">{{ $message }}</div>@enderror
</div>
<div>
    <label>Telefons</label><br>
    <input type="text" name="phone" value="{{ old('phone') }}">
</div>
<button type="submit">Pieteikties</button>
</form>
</body>
</html>