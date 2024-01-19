<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Ticket</title>
</head>
<body>
    <form action="{{ route("tickets.store") }}" method="post">
        @csrf
        <label>Date: </label>
        <input type="text" name="date">

        <br><br>

        <label>Price: </label>
        <input type="number" name="price">
        
        <br><br>

        <label>Train Type: </label>
        <select name="ticket_types_id">
            @foreach($ticketType as $ticketTypes) 
                <option value="{{ $ticketTypes ->id }}">{{ $ticketTypes ->type }}</option>
            @endforeach
        </select>

        <br><br>

        <label>Train Name: </label>
        <select name="train_id">
            @foreach ($trains as $train)
                <option value="{{ $train ->id }}">{{ $train ->name }}</option>
            @endforeach
        </select>

        <br><br>
        <input type="submit" value="Create">
    </form>
    <br>
    <form action="{{route("tickets.index")}}" method="get">
        <input type="submit" value="Back"/>
    </form>
</body>
</html>