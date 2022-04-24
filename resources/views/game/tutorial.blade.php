<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tutorial</title>
  <style>
    body {
      background-color: lemonchiffon;
    }

    .slide {
      margin: 0 auto;
      border: 1px solid black;
      width: 720px;
      background-color: black;
    }

    img {
      max-width: 100%;
    }

    .toolbar {
      overflow: hidden;
      text-align: center;
    }

    .nav {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 16px 0;
    }

    #prev {
      margin-right: 0.5rem;
      width: 16px;
      height: 16px;
      background: url(../images/left.png) no-repeat;
    }

    #next {
      margin-left: 0.5rem;
      width: 16px;
      height: 16px;
      background: url(../images/right.png) no-repeat;
    }

    #page {
      color: white;
    }

    .bottun {
      border: 1px solid #999;
      width: 150px;
      padding: 10px;
      color: #666;
      background-color: #eee;
      cursor: pointer;
      border-radius: 10px;
      margin: 0 auto;
    }

    a {
      text-decoration: none;
    }

    .character {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>チュートリアル</h1>
  <div class="slide">
    <div class="image_box">
      <img id="main_image" src="../images/asobikata.png">
    </div>
    <div class="toolbar">
      <div class="nav">
        <div id="prev"></div>
        <div id="page"></div>
        <div id="next"></div>
      </div>
    </div>
  </div>
  <br>
  <div class="character">
    <div class="bottun"><a href="{{ url('game/playerSelect')}}">キャラクター選択へ</a></div>
  </div>
  <script>
    'use strict';

    const images = ['../images/asobikata.png', '../images/playerSelect.png', '../images/meirei.png', '../images/dance.png', '../images/judge.png'];
    let current = 0;

    function changeImage(num) {
      if (current + num >= 0 && current + num < images.length) {
        current += num;
        document.getElementById('main_image').src = images[current];
        pageNum();
      }
    };

    function pageNum() {
      document.getElementById('page').textContent = `${current + 1}/${images.length}`;
    }

    pageNum();

    document.getElementById('prev').onclick = function() {
      changeImage(-1);
    };
    document.getElementById('next').onclick = function() {
      changeImage(1);
    };
  </script>
</body>

</html>
