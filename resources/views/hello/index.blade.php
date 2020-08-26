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
  <form action="/hello" method="post">
    <table>
    @csrf
      <tr>
        <th>id<input type="text" name="id">
        <th>Name<input type="text" name="name">
        <th>Mail<input type="text" name="mail">
        <th>Age<input type="text" name="age">
      </tr>
    </table>
    <input type="submit">
  </form>
</body>
</html>