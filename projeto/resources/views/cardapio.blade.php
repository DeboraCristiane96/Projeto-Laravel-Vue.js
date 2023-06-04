<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($cardapio as $tipo => $pratos) {?>
    <div>
        <h1>{{$tipo}}</h1>

        <table>
            <tr>
                <td>ID</td>
                <td>Prato</td>
                <td>Preço</td>
            </tr>
            <?php foreach($pratos as $nome => $prato) {?>
                <tr>
                    <td>{{$prato['id']}}</td>
                    <td>{{$nome}}</td>
                    <td>{{$prato['preco']}}</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php }?>

</body>
</html>