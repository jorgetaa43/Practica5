<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Train</title>
</head>
<body>
    <p>Name: {{ $train ->name }}</p>
    <p>Passengers: {{ $train ->passengers }}</p>
    <p>Year: {{ $train ->year }}</p>
    <p>Train Type: {{ $train ->train_types ->type}}</p>

    <a href="{{route("trains.index")}}"><button>Back</button></a>
</body>
</html>