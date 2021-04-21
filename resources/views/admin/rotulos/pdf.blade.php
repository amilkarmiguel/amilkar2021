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
                    <td colspan="3" style="text-align: left"><img alt="" src="{{ asset('img/fiscaliaa.png') }}" /></td>
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
            </tr><br>
        </thead>
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br>
        <tbody>
            <br>
            <br>
            <br>
            <br><br>
            <tr>
                <td colspan="3" style="height:10; text-align: left; font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remitente:</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: left; font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $rotulo->user->person->name }} {{ $rotulo->user->person->app }} {{ $rotulo->user->person->apm }}</td>
            </tr>
            <tr>
                <td colspan="2" style="height:10; text-align: left; font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $rotulo->user->rol[0]->name}}</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: left; font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Referencia:</td>
            </tr>
            <tr>
                <td colspan="3" style="height:10; text-align: left; font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $rotulo->referencia }}</td>
            </tr><br><br>
            <tr>
                <td colspan="3" style="text-align: center"><img alt="" src="{{ asset('img/fiscalia3.png') }}" /></td>
        </tr>
        </tbody>
    </table>
</body>
</html>
