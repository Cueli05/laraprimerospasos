<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom</title>
</head>
<body>

    {{-- Imprimiendo directamente desde PHP --}}
   <h1><?php echo $mensaje ?></h1>

   {{-- Forma moderna para imprimir en PHP --}}
   <h1><?= $mensaje ?></h1>

   {{-- Utilizando Blade --}}
    <h1>{{$mensaje}} {{$edad}}</h1>

</body>
</html>