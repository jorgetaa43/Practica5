<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Train</title>
</head>
<body>
    <form action="{{ route("trains.store") }}" method="post">
        @csrf
        <label>Name: </label>
        <input type="text" name="name">

        <br><br>

        <label>Passengers: </label>
        <input type="text" name="passengers">

        <br><br>

        <label>Year: </label>
        <input type="number" name="year">
        
        <br><br>

        <label>Train Type: </label>
        <select name="train_types_id">
            @foreach ($trainType as $trainTypes)
                <option value="{{ $trainTypes ->id }}">{{ $trainTypes ->type }}</option>
            @endforeach
        </select>

        <br><br>
        <input type="submit" value="Create">
    </form>
    <br>
    <form action="{{route("trains.index")}}" method="get">
        <input type="submit" value="Back"/>
    </form>
</body>
</html>