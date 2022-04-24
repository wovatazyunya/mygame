<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>niwa</title>
  <style>
    body {
      background-color: lemonchiffon;
    }

    img {
      width: 30%;
    }

    .bottun {
      border: 1px solid #999;
      width: 150px;
      text-align: center;
      padding: 10px;
      color: #666;
      background-color: #eee;
      cursor: poiner;
      border-radius: 10px;
      margin: 0 auto;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="imgSample">
    <div class="bottun"><a href="{{ url('/game/top')}}">ゲームをはじめる</a></div>

  </div>
  <script type="text/javascript">
    $('<img src="">').prependTo('.imgSample');

    let png1 = "images/nowloading.png";
    let png2 = "images/niwa.png";
    let png3 = "images/niwaniwa.png";
    let png4 = "images/niwaniwaniwa.png";
    let png5 = "images/niwaniwaniwaniwatorigairu.png";

    let srcAry = [png1, png2, png3, png4, png5];

    let i = 0;
    setInterval(function() {
      if (i === srcAry.length) {
        i = 0;
      }

      $('.imgSample > img').attr('src', srcAry[i]);
      console.log(i++);
    }, 1000);
  </script>
</body>

</html>
