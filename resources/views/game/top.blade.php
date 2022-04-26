<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>topPage</title>
  <style>
    .topPage {
      text-align: center;
      background-color: lemonchiffon;
    }

    #torizukiToHitozuki {
      width: 300px;
    }

    .bottun {
      border: 1px solid #999;
      width: 150px;
      text-align: center;
      padding: 10px;
      color: #666;
      background-color: #eee;
      cursor: pointer;
      border-radius: 10px;
      margin: 0 auto;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body class="topPage">
  <h1>シャルウィーダンス</h1>
  <h2>恋愛リズムアクションバトルゲーム</h2>
  <img id="torizukiToHitozuki" src="../images/torizukitohitozuki.jpeg" alt="鳥好きと人好き"><br>
  <br>
  <p>現在のトータルポイント:{{ Auth::user()->record->total_point }}
  </p>
  <p>現在の所有ポイント:{{ Auth::user()->record->current_point }}</p>
  <div class="bottun"><a href="{{ url('/game/tutorial') }}">スタート</a></div>
  <div class="bottun"><a href="{{ url('/game/shop')}}">ショップに行く</a></div>
</body>

</html>
