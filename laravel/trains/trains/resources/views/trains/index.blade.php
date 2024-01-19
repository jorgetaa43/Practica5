<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Passengers</th>
            <th>Year</th>
            <th>Train Types Id</th>
        </thead>
        <tbody>
            @foreach($trains as $train)
                <tr>
                    <td>{{ $train ->  name }}</td>
                    <td>{{ $train ->  passengers }}</td>
                    <td>{{ $train ->  year }}</td>
                    <td>{{ $train ->  train_types -> type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>