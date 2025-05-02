<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<table class="table table-dark table-striped-columns">
    <thead><tr>
        <th>ID</th>
        <th>STAFF-NAME</th>       
        <th>MAIL-ID</th>
        <th>PASSWORD</th>
        <th>DEPARTMENT</th>
        <th>CONTACT</th>
        <th>REQUIRED</th>
        </tr>
    </thead>
    <tbody>
        @foreach($show as $check)
        <tr>
            <td>{{ $check->id }}</td>
            <td>
            {{$check->name }}
            </td>
            <td>
            {{ $check->mail}}
            </td>
            <td>
            {{ $check->password }}
            </td>
            <td>
            {{ $check->department }}
            </td>
            <td>
            {{ $check->contact }}
            </td>
            
            <td>
             <a href="/delete/{{$check->id}}">
             <i class="bi bi-trash"></i>
             </a>
             &nbsp;
             <a href="/edit/{{$check->id}}">
             <i class="bi bi-pen"></i>
             </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
<style>
    table
    {
        border-radius:2px;
        border-color: black;
    }
</style>