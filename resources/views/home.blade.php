<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Homepage</h1>
    <div class="container">
        @foreach ($trains as $train)
        <div class="card">
            <h3>{{ date('g:i', strtotime($train->departure_time)) }} - {{ date('g:i', strtotime($train->arrival_time)) }}</h3>
            <h4>{{ $train->departure_station }} ---> {{ $train->arrival_station }}</h4>
            <h5>{{ $train->train_code }} - {{ $train->company }}</h5>
        </div>
        @endforeach
    </div>
</body>
</html>
