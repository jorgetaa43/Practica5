<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Ticket</title>
</head>
<body>
    <p>Date: {{ $ticket ->date }}</p>
    <p>Price: {{ $ticket ->price }}</p>
    <p>Train Name: {{ $ticket ->train ->name }}</p>
    <p>Ticket Type: {{ $ticket ->ticket_types ->type}}</p>

    <a href="{{route("tickets.index")}}"><button>Back</button></a>
</body>
</html>