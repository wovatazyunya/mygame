<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loseKujaku</title>
  <style>
    .kujakuFalse {
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

<body class="kujakuFalse">
  <h1>ユールース</h1>
  <div class="image"><img id="kujakukuMesu" src="../images/kujakuMesu.png" alt="クジャクメス"></div>
  <p>課金して出直しなさい</p>
  <div class="bottun"><a href="{{url ('/game/shop')}}" alt="課金する">ショップに行く</a></div>
  <div class="bottun"><a href="{{url ('/game/top')}}" alt="topに戻る">topに戻る</a></div>
</body>

</html>
