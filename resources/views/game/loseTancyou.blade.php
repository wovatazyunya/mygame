<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>maikodoriLose</title>
  <meta name=”robots” content=”noindex , nofollow”>
  <meta name="description" content="これはjs課題作品です">
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
      text-decoration: none;
      margin: 0 auto;
    }
  </style>
</head>

<body class="maikodoeilose">
  <h1>ユールース</h1>
  <div class="image"><img id="tanchouMesu" src="../images/tancyouMesu.gif" alt="マイコドリメス"></div>
  <p>置いてくぜ</p>
  <form action="{{action('User\GameController@addpoint')}}" method="POST" name="addpoint">
    {{csrf_field()}}
    <input type="hidden" name="point" id="point" value="0" />
    <input type="button" value="ボタン" onclick="clickBtn5()" />
  </form>
  <script>
    function clickBtn5() {
      document.getElementById("point").value = sessionStorage.getItem('point');
      document.addpoint.submit();
      alert("ポイント加算します");
    }
  </script>
</body>

</html>
