<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gokurakutyouResult</title>
  <style>
    body {
      background-color: lemonchiffon;
    }

    .image {
      text-align: center;
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
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <h1>ユーウィン</h1>
  <div class="image"><img id="mary" src="../images/mary.png" alt="メアリー"></div>
  <p>オーマイガー!!!</p>
  <div class="bottun"><a href="{{url('game/ending')}}" alt="エンディング">エンディングへ</a></div>
  <div class="bottun"><a href="{{url('game/top')}}" alt="topに戻る">topに戻る</a></div>
</body>

</html>
