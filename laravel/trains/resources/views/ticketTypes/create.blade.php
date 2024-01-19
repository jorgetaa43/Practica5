<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Ticket Type</title>
</head>
<body>
    <form action="{{ route("ticketTypes.store") }}" method="post">
        @csrf
        <label>Type: </label>
        <input type="text" name="type">

        <br><br>

        <input type="submit" value="Create">
    </form>
    <br>
    <form action="{{route("ticketTypes.index")}}" method="get">
        <input type="submit" value="Back"/>
    </form>
</body>
</html>