<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>playerSelect</title>
  <style>
    #playerSelect {
      background-color: lemonchiffon;
    }

    .difficulty {
      text-align: right;
    }

    section img {
      max-width: 100%;
    }

    .center {
      margin: 0 auto 0 auto;
      max-width: 90%;
      width: 500px;
    }

    ul {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      margin: 0;
      padding: 0;
      list-style-type: none;
    }

    li {
      flex: 1 1 auto;
      margin-right: 8px;
    }

    .bottun {
      border: 1px solid #999;
      width: 150px;
      padding: 10px;
      color: #666;
      background-color: #eee;
      cursor: pointer;
      border-radius: 10px;
      text-decoration: none;
      margin: 0 auto;
    }

    #sample {
      text-align: center;
    }

    #bigimg {
      width: 50%;
    }
  </style>
</head>

<body id="playerSelect">
  <h1>プレイヤーセレクト</h1>
  <p class="difficulty">難易度</p>
  <p class="difficulty">ゴクラクチョウ ---> やさしい</p>
  <p class="difficulty">クジャク ---> ふつう</p>
  <p class="difficulty">カタカケフウチョウ ---> ふつう</p>
  <p class="difficulty">隠しキャラO.Jカラス ---> むずかしい</p>
  <main>
    <div class="container">
      <section>
        <div class="center">
          <div>
            <img src="../images/startSelect.png" id="bigimg">
          </div>
          <ul>
            <li><img src="../images/gokuraku.png" class="thumb" data-image="../images/gokuraku.png"></li>
            <li><img src="../images/kujaku.png" class="thumb" data-image="../images/kujaku.png"></li>
            <li><img src="../images/katakakehuutyou.png" class="thumb" data-image="../images/katakakehuutyou.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
            <li><img src="../images/joCursor.png" class="thumb" data-image="../images/oj.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
            <li><img src="../images/non.png" class="thumb" data-image="../images/nouse.png"></li>
          </ul>
        </div>

      </section>
    </div>
  </main>
  <br>
  <div id="choice">
    <p id="sample" class="bottun">プレイヤーを決定する</p>
  </div>
  <script>
    'use strict';

    const gazo = ['../images/gokuraku.png', '../images/kujaku.png', '../images/katakakehuutyou.png', '../images/nouse.png', '../images/nouse.png', '../images/nouse.png', '../images/nouse.png', '../images/oj.png', '../images/nouse.png', '../images/nouse.png'];
    const thumbs = document.querySelectorAll('.thumb');

    for (let i = 0; i < thumbs.length; i += 1) {
      thumbs[i].onclick = function() {
        if (i === 0) {
          i = 0;
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokurakuCorsor.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById("sample").addEventListener("click", function() {
            location.href = "{{url('game/playGokurakutyou')}}"
          }, false)
        } else if (i === 1) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujakuCorsor.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          console.log(i);
          document.getElementById('sample').addEventListener("click", function() {
            location.href = "{{url('game/playKujaku')}}"
          }, false)
        } else if (i === 2) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyouCousor.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "{{url('game/playKatakake')}}";
            })
        } else if (i === 3) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/nonCursor.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";
            })
        } else if (i === 4) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/nonCursor.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";
            })
        } else if (i === 5) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/nonCursor.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";
            })
        } else if (i === 6) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/nonCursor.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";
            })
        } else if (i === 7) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joRedCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "{{url('game/playKarasu')}}"
            }, false)
        } else if (i === 8) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/nonCursor.png`;
          thumbs[9].src = `../images/non.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";

            })
        } else if (i === 9) {
          document.getElementById('bigimg').src = gazo[i];
          thumbs[0].src = `../images/gokuraku.png`;
          thumbs[1].src = `../images/kujaku.png`;
          thumbs[2].src = `../images/katakakehuutyou.png`;
          thumbs[3].src = `../images/non.png`;
          thumbs[4].src = `../images/non.png`;
          thumbs[5].src = `../images/non.png`;
          thumbs[6].src = `../images/non.png`;
          thumbs[7].src = `../images/joCursor.png`;
          thumbs[8].src = `../images/non.png`;
          thumbs[9].src = `../images/nonCursor.png`;
          document.getElementById('sample').addEventListener("click",
            function() {
              location.href = "noUse.html";

            })
        }
      };
    }
  </script>
</body>

</html>
