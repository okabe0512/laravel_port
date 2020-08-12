<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $category }}の一覧</title>
  </head>

  <body>
    <p>{{ $category }}の一覧</p>

    @if ($category == 'news')
      <p>本日のニュースをお伝えします。</p>
    @endif
  </body>

</html>
