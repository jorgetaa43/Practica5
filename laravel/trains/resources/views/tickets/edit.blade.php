<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Ticket</title>
</head>
<body>
    <form action="{{ route("tickets.update", ["ticket" => $ticket->id]) }}" method="post">
        @csrf 
        {{ method_field("PUT") }}
        <label>Date: </label>
        <input type="text" name="date" value="{{ $ticket ->date }}">

        <br><br>

        <label>Price: </label>
        <input type="number" name="price" value="{{ $ticket ->price }}">

        <br><br>

        <label>Train Name: </label>
        <select name="train_id">
            @foreach ($trains as $train)
                @if ($ticket->train_id == $train->id)
                    <option value="{{ $train->id }}" selected>{{ $train ->name }}</option>
                @else
                    <option value="{{ $train->id }}" selected>{{ $train ->name }}</option>
                    @endif
            @endforeach
        </select>

        <br><br>

        <label>Ticket Type: </label>
        <select name="ticket_types_id">
            @foreach ($ticketType as $ticketTypes)
                @if ($ticketTypes->id == $ticket->ticket_types_id)
                    <option value="{{ $ticketTypes ->id }}" selected>{{ $ticketTypes ->type }}</option>
                @else
                    <option value="{{ $ticketTypes ->id }}">{{ $ticketTypes ->type }}</option>
                @endif
            @endforeach
        </select>
        
        <br><br>
        <input type="submit" value="Edit">
        <a href="{{ route("tickets.index") }}"><button>Back</button></a>
    </form>
</body>
</html>