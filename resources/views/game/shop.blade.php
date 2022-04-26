<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>buy</title>
  <style>
    body {
      text-align: center;
      margin: auto;
    }

    #buy {
      background-color: lemonchiffon;
      text-align: center;
      margin: auto;
    }

    .flex {
      display: flex;
      text-align: center;
      margin: auto;
      justify-content: center;
    }
  </style>
</head>

<body id="buy">
  <h1 id="buyTitle">いらっしゃいませ</h1>
  <h2>{{$msg}}</h2>
  <div id="buyImage">
    <img src="../images/torizukitohitozuki.jpeg" alt="ありがとうございます" width="200px">
    <p>現在の所有ポイント:{{Auth::user()->record->current_point }}ポイント</p>
    <form action="{{action('User\GameController@buyMaiko')}}" method="POST" name="buyMaiko">
      {{csrf_field()}}
      <input type="hidden" name="current" id="current" value={{Auth::User()->record->current_point}} />
      <!-- <input type="hidden" name="point" id="point" value=30 /> -->
      <div class="flex">
        <p>追加キャラ:マイコドリ:30ポイント</p>
        <input type="submit" value="買う" name="maikodori" />
      </div>
      <div class="flex">
        <p>追加キャラ:タンチョウ:30ポイント</p>
        <input type="submit" value="買う" name="tancyou" />
      </div>
    </form>
    <!-- <div class="flex">
      <p>必殺技ポイント</p>
      <button type="button">買う</button>
    </div> -->

  </div>
</body>


</html>
