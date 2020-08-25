<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/sass/app.scss">
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{{$msg}}</p>
  <table border="1">
  @foreach($data as $item)
  <tr>
    <th>{{$item->id}}</th>
    <th>{{$item->name}}</th>
    <th>{{$item->mail}}</th>
    <th>{{$item->age}}</th>
    <th>{{$item->name_and_age}}</th>
  </tr>
  @endforeach
  </table>
</body>
</html>