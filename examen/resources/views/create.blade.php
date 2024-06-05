<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    
</head>
<body>
    <form action="{{route('accidente.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <h1 style="color: red;">REGISTRO DE ACCIDENTES</h1>
        <label>
            <br>
            hora:
            <br>
            <input type="text" name="hora">
        </label>
        
        <label>
            <br>
            codigo:
            <br>
            <input type="text" name="codigo">
        </label>
        <br>
        fecha:
        <br>
        <input type="text" name="fecha">
    </label>
    <br>
    lugar:
    <br>
    <input type="text" name="lugar">
    </label>
    <br>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>