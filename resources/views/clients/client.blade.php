<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Кол-во клиентов: {{$num_client}}
    </div>
    @foreach ($clients as $item)
        <div>
            
            {{$item->id}}
            {{$item->name}}
        </div>
    @endforeach
</body>
</html>