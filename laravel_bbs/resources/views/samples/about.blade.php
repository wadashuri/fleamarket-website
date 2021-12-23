<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>{{$title}}</h1>
    <p>{{$title_coment}}</p>
    <h2>{{$appli}}</h2>
    <ul>
        @foreach($appli_coments as $appli_coment)
        <li>{{$appli_coment}}</li>
        @endforeach
    </ul>
 
</body>
</html>