<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola! {{ $msg['name'] }}, hemos creado un usuario para poder ver tus prouyectos.</h1>
    <h4>Por favor entra a <a href="">SinSis</a> y utiliza tu email y la siguiente contraseña para ver las actualizaciones de tu proyecto</h4>
    <span>Contraseña: </span><span>{{ $msg['pass'] }}</span>
    <p>Para dudas o aclaraciones estamos a tus ordenes en <a href="">www.sinsis.com/contacto</a></p>
</body>
</html>