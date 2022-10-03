<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="create" method="post">
        @csrf
        <input type="text" name="nom">
        <input type="text" name="type">
        <input type="number" name="niveau">
        <input type="submit" value="envoyer">
    </form>
    @foreach ($poke as $item)
     <p>{{$item -> nom}}, {{$item -> type}}, {{$item -> niveau}}</p>
    @endforeach
</body>
</html>
