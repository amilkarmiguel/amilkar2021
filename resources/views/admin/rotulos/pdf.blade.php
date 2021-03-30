<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotulo</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>
                    Señor(a):
                </td>
            </tr>
            <tr>
                <td>{{ $rotulo->destinatario }}</td>
            </tr>
            <tr>
                <td>{{ $rotulo->cargo }}</td>
            </tr>
            <tr>
                <td>
                    {{ $rotulo->municipio }}
                </td>
            </tr>
        </thead>
        <br>
        <br>
        <br>
        <tbody>
            <br>
            <br>
            <tr>
                <td>Remitente:</td>
            </tr>
            <tr>
                <td>{{ $rotulo->user->person->name }} {{ $rotulo->user->person->app }} {{ $rotulo->user->person->apm }}</td>
            </tr>
            <tr>
                <td>{{ $rotulo->user->rol[0]->name}}</td>
            </tr>
            <tr>
                <td>{{ $rotulo->referencia }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
