<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Train Type</title>
</head>
<body>
    <p>Type: {{ $trainType ->type }}</p>

    <a href="{{ route("trainTypes.index") }}"><button>Back</button></a>
</body>
</html>