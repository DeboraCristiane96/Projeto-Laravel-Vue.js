<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <form action="/teste" method="get">
            <input type="text" name="nome">
            <input type="submit" value="Enviar">
        </form>

        <h1>Boas vindas, {{ $nome }}</h1>
    </div>


</body>
</html>