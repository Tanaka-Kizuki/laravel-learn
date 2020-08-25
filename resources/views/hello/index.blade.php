<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{{$msg}}</p>
  @foreach($data as $item)
  <li>{{$item}}</li>
  @endforeach

  <form action="/hello/other" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="file">
  <input type="submit">
  </form>

  <p><a href="/hello/other">Download</a></p>
</body>
</html>