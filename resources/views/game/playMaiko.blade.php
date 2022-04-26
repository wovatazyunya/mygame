<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gamePlayGokurakutyou</title>
  <meta name=”robots” content=”noindex , nofollow”>
  <meta name="description" content="これはjs課題作品です">
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
      <li><img id="maikodori" src="../images/maikodori.png" alt="マイコドリ"></li>
      <li><img id="maikodoriMesu" src="../images/maikodoriMesu.png" alt="マイコドリメス"></li>
    </ul>
  </div>
  <p id="mesuOrder">ボタン連打して</p>
  <button id="moon-btn">ムーンウォークする</button>
  <p>クリアポイント 30ポイント</p>
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
      if (count < 30) {
        location.href = "{{url('game/loseMaiko')}}";
      } else {
        location.href = "{{url('game/winMaiko')}}";
      }
    }, 15010)
    const images = ['../images/maikodori1.png',
      '../images/maikodori2.png',
      '../images/maikodori3.png',
      '../images/maikodori4.png',
      '../images/maikodori5.png',
      '../images/maikodori6.png',
      '../images/maikodori7.png',
      '../images/maikodori8.png',
      '../images/maikodori9.png',
      '../images/maikodori10.png',
      '../images/maikodori11.png',
      '../images/maikodori12.png',
      '../images/maikodori13.png',
      '../images/maikodori14.png',
      '../images/maikodori15.png',
      '../images/maikodori16.png',
      '../images/maikodori17.png',
      '../images/maikodori18.png',
      '../images/maikodori19.png',
      '../images/maikodori20.png'
    ];
    console.log(images.length);
    let current = 0;
    const maikodoriImg = document.getElementById('maikodori');

    function changeImage(num) {
      if (images.length - 1 == current) {
        console.log(current);
        current = 0;
        console.log(num);
      } else {
        current += num;
      }

      document.getElementById('maikodori').src = images[current];
      console.log(images[current]);
    };

    let count = 0;
    document.getElementById('moon-btn').
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
