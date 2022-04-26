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
      <li><img id="gokurakutyou" src="../images/gokuraku.png" alt="ゴクラクチョウ"></li>
      <li><img id="gokurakuMesu" src="../images/gokurakuMesu.png" alt="ゴクラクチョウメス"></li>
    </ul>
  </div>
  <p id="mesuOrder">aaa</p>
  <button id="neck-btn">首をふる</button>
  <button id="move-btn">揺れる</button>
  <button id="out-btn">実をはく</button>
  <p>クリアポイント 3ポイント</p>
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

    let output = 0;
    let lastOrder = 0; //前回のメスドリの指示
    let order = Math.floor(
      Math.random() * 3) + 1;
    console.log(order);
    if (order === 1) {
      output = "首をふって";
    } else if (order === 2) {
      output = "体ゆらして";
    } else if (order === 3) {
      output = "実がほしい";
    }
    lastOrder = order;
    console.log('最初:' + lastOrder);
    document.getElementById('mesuOrder').textContent = output;

    function threeSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 3) + 1;
        } while (lastOrder == order);
        lastOrder = order;

        if (order === 1) {
          output = "首をふって";
        } else if (order === 2) {
          output = "体ゆらして";
        } else if (order === 3) {
          output = "実がほしい";
        }
        console.log('3秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 3000);
      // return order;
    }
    // lastOrder = threeSec();
    threeSec();

    function sixSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 3) + 1;
        } while (lastOrder === order);
        lastOrder = order;

        if (order === 1) {
          output = "首をふって";
        } else if (order === 2) {
          output = "体ゆらして";
        } else if (order === 3) {
          output = "実がほしい";
        }
        console.log('6秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 6000);

    }
    sixSec();

    function nineSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 3) + 1;
        } while (lastOrder === order);
        lastOrder = order;

        if (order === 1) {
          output = "首をふって";
        } else if (order === 2) {
          output = "体ゆらして";
        } else if (order === 3) {
          output = "実がほしい";
        }
        console.log('9秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 9000);
    }
    nineSec();

    function twelveSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 3) + 1;
        } while (lastOrder === order);
        lastOrder = order;

        if (order === 1) {
          output = "首をふって";
        } else if (order === 2) {
          output = "体ゆらして";
        } else if (order === 3) {
          output = "実がほしい";
        }

        console.log('12秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 12000);
    }
    twelveSec();

    window.setTimeout(function() {
      sessionStorage.setItem('point', count);
      alert('結果を見ますか？');
      if (count < 3) {
        location.href = "{{url('game/loseGokurakutyou')}}"
      } else {
        location.href = "{{url('game/winGokurakutyou')}}"
      }
    }, 15010)

    const gokurakutyouImg = document.getElementById('gokurakutyou');
    /*＊オブジェクト「ゴクラクチョウ」
    ＊プロパティ
    *neckShake()
    *bodyShake()
    *spitOut()
    */
    const gokurakutyou = {
      name: 'goku',
      neckShake: function() {
        gokurakutyouImg.src = '../images/gokurakuNeck.gif';
      },
      bodyShake: function() {
        gokurakutyouImg.src = '../images/gokurakuBody.gif';
      },
      spitOut: function() {
        gokurakutyouImg.src = '../images/gokurakuSpitOut.gif';
      },
    };

    let count = 0;
    document.getElementById('neck-btn').
    onclick = function() {
      gokurakutyou.neckShake();
      if (order === 1) {
        count += 1;
        console.log(count);
        document.getElementById('point').textContent = `現在${count}ポイント`;
      }
    }

    document.getElementById('move-btn').
    onclick = function() {
      gokurakutyou.bodyShake();
      if (order === 2) {
        count += 1;
        console.log(count);
        document.getElementById('point').textContent = `現在${count}ポイント`;
      }
    }

    document.getElementById('out-btn').
    onclick = function() {
      gokurakutyou.spitOut();
      if (order === 3) {
        count += 1;
        console.log(count);
        document.getElementById('point').textContent = `現在${count}ポイント`;
      }
    }
  </script>
</body>

</html>
