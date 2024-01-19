<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets Type</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        background-color: #c9e9fc;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        th {
            background-color: rgb(131, 172, 235);
            color: black;
        }

        tr:nth-child(even) {
        background-color: rgb(245,245,245);
        color: black;
        }

        tr {
            background-color: rgb(7,87,152);
            color: white;
        }

        ul {
            list-style: none;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
            border: 1px solid black;
            background-color: bisque;
        }
    </style>
</head>
<body>
    <h1>Menú de navegación</h1>
    <ul>
        <li><a href="{{ route("ticketTypes.index") }}">TicketType</a></li>
        <li><a href="{{ route("tickets.index") }}">Ticket</a></li>
        <li><a href="{{ route("trainTypes.index") }}">TrainType</a></li>
        <li><a href="{{ route("trains.index") }}">Train</a></li>
    </ul>
    <table>
        <thead>
            <th>Type</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($ticketTypes as $ticketType)
                <tr>
                    <td>{{ $ticketType ->type }}</td>
                    <td>
                        <form action="{{ route("ticketTypes.show", ["ticketType" => $ticketType ->id]) }}" method="get">
                            <input type="submit" value="Show">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route("ticketTypes.edit", ["ticketType" => $ticketType ->id]) }}" method="get">
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route("ticketTypes.destroy", ["ticketType" => $ticketType ->id]) }}" method="post">
                            @csrf
                            {{ method_field("DELETE") }}
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route("ticketTypes.create") }}" method="get">
        <input type="submit" value="Create">
    </form>
</body>
</html>