<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Index</title>
</head>
<body style="padding:10px;">
  <h1>Hello/Index</h1>
  <p>{{$msg}}</p>

  <div id="app">
    <example-component></example-component>
  </div>
  <script src="{{ mix('js/app.js') }}" ></script>
</body>
</html>