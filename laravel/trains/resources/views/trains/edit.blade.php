<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Train</title>
</head>
<body>
    <form action="{{ route("trains.update", ["train" => $train->id]) }}" method="post">
        @csrf 
        {{ method_field("PUT") }}
        <label>Name: </label>
        <input type="text" name="name" value="{{ $train ->name }}">

        <br><br>

        <label>Passengers: </label>
        <input type="text" name="passengers" value="{{ $train ->passengers }}">

        <br><br>

        <label>Year: </label>
        <input type="number" name="year" value="{{ $train ->year }}">

        <br><br>

        <label>Train Type: </label>
        <select name="train_types_id">
            @foreach ($trainType as $trainTypes)
                @if ($train->train_types_id == $trainTypes->id)
                    <option value="{{ $trainTypes ->id }}" selected>{{ $trainTypes ->type }}</option>
                @else
                    <option value="{{ $trainTypes ->id }}">{{ $trainTypes ->type }}</option>
                @endif
            @endforeach
        </select>
        
        <br><br>
        <input type="submit" value="Edit">
        <a href="{{route("trains.index")}}"><button>Back</button></a>
    </form>
</body>
</html>