<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявочки</title>
</head>
<body>
   

    @foreach($requests as $item)
    {{$item->team}}
    @endforeach
    <div>
    <input type="text" placeholder="Пригласите участников!" autocomplete="off" name="username">
    <form method="POST" enctype="multipart/form-data">
		<input type="text" name="id_user" placeholder="id капитана сначала"><br>
		<input type="text" name="team" placeholder="Название команды"><br>
		<input type="text" name="dance" placeholder="Название танца"><br>
		<input type="text" name="descr" placeholder="О танце"><br>
		<input type="text" name="duration" placeholder="Продолжительность"><br>
		<input type="text" name="wishes" placeholder="Пожелания"><br>
		Аудио <input type="file" name="audio" accept=".mp3"><br>
		<input type="submit" name="addreq">
	</form>
    </div>
</body>
</html>