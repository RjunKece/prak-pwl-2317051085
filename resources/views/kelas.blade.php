<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
</head>
<body>
    <h1>Daftar Kelas</h1>
    <ul>
        @foreach ($kelas as $k)
            <li>{{ $k }}</li>
        @endforeach
    </ul>
</body>
</html>