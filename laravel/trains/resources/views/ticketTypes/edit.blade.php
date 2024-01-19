<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Ticket Type</title>
</head>
<body>
    <form action="{{ route("ticketTypes.update", ["ticketType" => $ticketType->id]) }}" method="post">
        @csrf 
        {{ method_field("PUT") }}
        <label>Type: </label>
        <input type="text" name="type" value="{{ $ticketType ->type }}">

        <br><br>

        <input type="submit" value="Edit">
        <a href="{{route("ticketTypes.index")}}"><button>Back</button></a>
    </form>
</body>
</html>