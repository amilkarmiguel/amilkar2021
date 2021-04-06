<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotulo</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                    <td colspan="3" style="text-align: left"><img alt="" src="{{ asset('img/fiscalia1.png') }}" /></td>
            </tr>
            <tr>
                <td colspan="2" style="height:10; text-align: left; font-size:20px">Señor(a):</td>
            </tr>
            <tr>
                <td colspan="2" style="height:10; text-align: left; font-size:20px">{{$rotulo->destinatario }}</td>
            </tr>
            <tr>
                <td colspan="2" style="height:10; text-align: left; font-size:20px">{{$rotulo->cargo }}</td>
            </tr>
            <tr>
                <td colspan="2" style="height:50; text-align: left; font-size:20px">{{$rotulo->municipio }}</td>
            </tr>
        </thead>
        <br>
        <br>
        <br>
        <tbody>
            <br>
            <br>
            <tr>
                <td colspan="3" style="height:10; text-align: center; font-size:20px">Remitente:</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: center; font-size:20px">{{ $rotulo->user->person->name }} {{ $rotulo->user->person->app }} {{ $rotulo->user->person->apm }}</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: center; font-size:20px">{{ $rotulo->user->rol[0]->name}}</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: center; font-size:20px">Referencia:</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: center; font-size:20px">{{ $rotulo->referencia }}</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center"><img alt="" src="{{ asset('img/fiscalia2.png') }}" /></td>
        </tr>
        </tbody>
    </table>
</body>
</html>
