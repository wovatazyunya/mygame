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
  <!-- <div class="bottun"><a href="{{url ('/game/shop')}}" alt="課金する">ショップに行く</a></div> -->
  <!-- <div class="bottun"><a href="{{url ('/game/top')}}" alt="topに戻る">topに戻る</a></div> -->
  <form action="{{action('User\GameController@addpoint')}}" method="POST" name="addpoint">
    {{csrf_field()}}
    <input type="hidden" name="point" id="point" value="0" />
    <input type="button" value="ボタン" onclick="clickBtn5()" />
  </form>
  <script>
    function clickBtn5() {
      document.getElementById("point").value =
        sessionStorage.getItem('point');
      document.addpoint.submit();
    }
  </script>
</body>

</html>
