<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <table>
        <thead>
            <th>Date</th>
            <th>Price</th>
            <th>Train Id</th>
            <th>Tickets Types Id</th>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket ->  date}}</td>
                    <td>{{ $ticket ->  price}}</td>
                    <td>{{ $ticket ->  train_id}}</td>
                    <td>{{ $ticket ->  ticket_types -> type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>