<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gamePlayKujaku</title>
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

<body class="gamePlaykatagakehuutyou">

  <h1>レッツダンシング</h1>
  <div class="timer"></div>

  <div id="area">
    <ul>
      <li><img id="katakake" src="../images/katakakehuutyou.png" alt="カタカケフウチョウ"></li>
      <li><img id="katakakeMesu" src="../images/katakakehuutyouMesu.png" alt="カタカケフウチョウメス"></li>
    </ul>
  </div>
  <p id="mesuOrder">aaa</p>
  <button id="haneru-btn">はねる</button>
  <button id="step-btn">ステップふむ</button>
  <button id="mawaru-btn">まわる</button>
  <button id="hanasu-btn">はなす</button>
  <div id="mes"></div>
  <p>クリアポイント 4ポイント</p>
  <p id="point">現在0ポイント"</p>
  <script>
    'use strict';

    const timer = document.querySelector(".timer");
    const limit = new Date().getTime() + 15 * 1000;

    countdown();

    function countdown() {
      const currentTime = new Date().getTime();
      const leftTime = limit - currentTime;
      timer.innerText = '残り' + (leftTime / 1000).toFixed(2);
      if (leftTime <= 0) {
        return timer.innerText = 0;
      }
      requestAnimationFrame(countdown);
    }

    let output = 0;
    let lastOrder = 0;
    let order = Math.floor(
      Math.random() * 4) + 1;
    console.log(order);
    if (order === 1) {
      output = "はねて";
    } else if (order === 2) {
      output = "ステップきざんで";
    } else if (order === 3) {
      output = "まわって";
    } else if (order === 4) {
      output = "話して";
    }
    lastOrder = order;
    console.log('最初' + lastOrder);
    document.getElementById('mesuOrder').textContent = output;

    function threeSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 4) + 1;
        } while (lastOrder == order);
        lastOrder = order;

        if (order === 1) {
          output = "はねて";
        } else if (order === 2) {
          output = "ステップきざんで";
        } else if (order === 3) {
          output = "まわって";
        } else if (order === 4) {
          output = "話して";
        }
        console.log('3秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 3000);
    }
    threeSec();

    function sixSec() {
      setTimeout(function() {
        do {
          order = Math.floor(
            Math.random() * 4) + 1;
        } while (lastOrder === order);
        lastOrder = order;

        if (order === 1) {
          output = "はねて";
        } else if (order === 2) {
          output = "ステップきざんで";
        } else if (order === 3) {
          output = "まわって";
        } else if (order === 4) {
          output = "話して";
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
            Math.random() * 4) + 1;
        } while (lastOrder == order);
        lastOrder = order;

        if (order === 1) {
          output = "はねて";
        } else if (order === 2) {
          output = "ステップきざんで";
        } else if (order === 3) {
          output = "まわって";
        } else if (order === 4) {
          output = "話して";
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
            Math.random() * 4) + 1;
        } while (lastOrder === order);
        lastOrder = order;

        if (order === 1) {
          output = "はねて";
        } else if (order === 2) {
          output = "ステップきざんで";
        } else if (order === 3) {
          output = "まわって";
        } else if (order === 4) {
          output = "話して";
        }

        console.log('12秒後:' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;
      }, 12000);
    }
    twelveSec();

    window.setTimeout(function() {
      alert('結果を見ますか？');
      if (count < 4) {
        location.href = "{{url('game/loseKatakake')}}"
      } else {
        location.href = "{{url('game/winKatakake')}}"
      }
    }, 15010)

    const mes = document.getElementById('mes');
    const katakakeImg = document.getElementById('katakake');
    /**オブジェクト「カタカケ」
     * プロパティ
     * hanaru()
     * step()
     * mawaru()
     * talk()
     */

    const katakakehuutyou = {
      name: 'katakake',
      haneru: function() {
        katakakeImg.src = '../images/katakakehuutyouBound.gif';
      },
      step: function() {
        katakakeImg.src = '../images/katakakehuutyouStep.gif';
      },
      mawaru: function() {
        katakakeImg.src = '../images/katakaehuutyouTurn.gif';
      },
      talk: function() {
        mes.textContent = "たけがけにたてかけたか";
        setTimeout(function() {
          mes.textContent = '';
        }, 3000);
      },
    };
    let count = 0;
    document.getElementById('haneru-btn').
    onclick = function() {
      katakakehuutyou.haneru();
      if (order === 1) {
        count += 1;
        document.getElementById('point').textContent = '現在' + count + 'ポイント';
      }
    }

    document.getElementById('step-btn').
    onclick = function() {
      katakakehuutyou.step();
      if (order === 2) {
        count += 1;
        document.getElementById('point').textContent = '現在' + count + 'ポイント';
      }
    }

    document.getElementById('mawaru-btn').
    onclick = function() {
      katakakehuutyou.mawaru();
      if (order === 3) {
        count += 1;
        document.getElementById('point').textContent = '現在' + count + 'ポイント';
      }
    }

    document.getElementById('hanasu-btn').
    onclick = function() {
      katakakehuutyou.talk();
      if (order === 4) {
        count += 1;
        document.getElementById('point').textContent = '現在' + count + 'ポイント';
      }
    }
  </script>
</body>

</html>
