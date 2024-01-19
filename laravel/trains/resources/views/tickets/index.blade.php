<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
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
            <th>Date</th>
            <th>Price</th>
            <th>Train Id</th>
            <th>Tickets Types</th>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket ->  date}}</td>
                    <td>{{ $ticket ->  price}}</td>
                    <td>{{ $ticket ->  train -> name}}</td>
                    <td>{{ $ticket ->  ticket_types -> type}}</td>
                    <td>
                        <form action="{{ route("tickets.show", ["ticket" => $ticket ->id]) }}" method="get">
                            <input type="submit" value="Show">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route("tickets.edit", ["ticket" => $ticket ->id]) }}" method="get">
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route("tickets.destroy", ["ticket" => $ticket ->id]) }}" method="post">
                            @csrf
                            {{ method_field("DELETE") }}
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route("tickets.create") }}" method="get">
        <input type="submit" value="Create">
    </form>
</body>
</html>