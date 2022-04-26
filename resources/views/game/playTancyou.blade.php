<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gamePlayGokurakutyou</title>

  <style>
    body {
      background-color: lemonchiffon;
    }

    img {
      width: 200px;
    }

    #area li {
      list-style: none;
    }

    #area ul {
      display: flex;
      justify-content: space-between;
    }

    #mesuOrder {
      text-align: right;
    }

    .timer {
      text-align: center;
      font-size: x-large;
    }

    p {
      text-align: center;
      font-size: x-large;
    }
  </style>
</head>

<body class="gamePlayGokurakutyou">


  <h1>レッツダンシング</h1>
  <div class="timer"></div>

  <div id="area">
    <ul>
      <li><img id="tancyou" src="../images/tancyou.png" alt="タンチョウ"></li>
      <li><img id="tancyouMesu" src="../images/tancyouMesu.gif" alt="マイコドリメス"></li>
    </ul>
  </div>
  <p id="mesuOrder">ボタン連打して</p>
  <button id="walk-btn">共に歩く</button>
  <p>クリアポイント 50ポイント</p>
  <p id="point">現在0ポイント"</p>
  <script>
    'use strict';

    /**10秒のカウントダウン
     */
    //カウントダウン表示箇所を取得
    const timer = document.querySelector(".timer");
    //現在の時間に10秒足す
    const limit = new Date().getTime() + 15 * 1000;
    //countdown関数を実行する
    countdown();

    function countdown() {
      //現在の時間を取得する
      const currentTime = new Date().getTime();
      //10秒後の時間から現在の時間との差分を求める
      const leftTime = limit - currentTime;
      //差分を表示させる
      timer.innerText = "残り" + (leftTime / 1000).toFixed(2);
      //差分が0以下の時処理を終了させる
      if (leftTime <= 0) {
        return timer.innerText = 0;
      }
      //0秒以下になるまで繰り返す
      requestAnimationFrame(countdown);
    }

    window.setTimeout(function() {
      alert('結果を見ますか？');
      if (count < 50) {
        location.href = "{{url('game/loseTancyou')}}";
      } else {
        location.href = "{{url('game/winTancyou')}}";
      }
    }, 15010)
    const images = ['../images/tancyouMiddle.png',
      '../images/tancyouleft.png',
      '../images/tancyouMiddle.png',
      '../images/tancyouRight.png',
    ]
    console.log(images.length);
    let current = 0;
    const maikodoriImg = document.getElementById('tancyou');

    function changeImage(num) {
      if (images.length - 1 == current) {
        console.log(current);
        current = 0;
        console.log(num);
      } else {
        current += num;
      }

      document.getElementById('tancyou').src = images[current];
      console.log(images[current]);
    };

    let count = 0;
    document.getElementById('walk-btn').
    onclick = function() {
      //maikodori.moon();
      changeImage(1);
      count += 1;
      console.log(count);
      document.getElementById('point').textContent = `現在${count}ポイント`;
    };
  </script>
</body>

</html>
