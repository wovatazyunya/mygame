<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamePlayO.J</title>
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

<body class="gamePlayO.J">

    <h1>レッツダンシング</h1>
    <div class="timer"></div>

    <div id="area">
        <ul>
            <li><img id="o.j" src="../images/oj.png" alt="オージェイバード"></li>
            <li><img id="o.jMesu" src="../images/mary.png" alt="オージェイバードメス"></li>
        </ul>
    </div>
    <p id="mesuOrder">aaa</p>
    <button id="hidarite-btn">左手上げる</button>
    <button id="migite-btn">右手上げる</button>
    <button id="hidariasi-btn">左足上げる</button>
    <button id="migiasi-btn">右足上げる</button>
    <button id="nigeru-btn">逃げる</button>
    <button id="gomiasaru-btn">ゴミあさる</button>
    <button id="talk-btn">はなしかける</button>
    <p>クリアポイント 10ポイント</p>
    <p id="point">現在0ポイント"</p>
    <div id="mes"></div>
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
            Math.random() * 7) + 1;
        console.log(order);
        if (order === 1) {
            output = "左手上げて";
        } else if (order === 2) {
            output = "右手上げて";
        } else if (order === 3) {
            output = "左足上げて";
        } else if (order === 4) {
            output = "右足上げて";
        } else if (order === 5) {
            output = "どっか行って";
        } else if (order === 6) {
            output = "何か持ってきて";
        } else if (order === 7) {
            output = "黙って";
        }
        lastOrder = order;
        console.log('最初' + lastOrder);
        document.getElementById('mesuOrder').textContent = output;

        function threeSec() {
            setTimeout(function() {
                do {
                    order = Math.floor(
                        Math.random() * 7) + 1;
                } while (lastOrder == order);
                lastOrder = order;

                if (order === 1) {
                    output = "左手上げて";
                } else if (order === 2) {
                    output = "右手上げて";
                } else if (order === 3) {
                    output = "左足上げて";
                } else if (order === 4) {
                    output = "右足上げて";
                } else if (order === 5) {
                    output = "どっか行って";
                } else if (order === 6) {
                    output = "何か持ってきて";
                } else if (order === 7) {
                    output = "黙って";
                }
                console.log('3秒後' + lastOrder);
                document.getElementById('mesuOrder').textContent = output;
            }, 3000);
        }
        threeSec();

        function sixSec() {
            setTimeout(function() {
                do {
                    order = Math.floor(
                        Math.random() * 7) + 1;
                } while (lastOrder === order);
                lastOrder = order;

                if (order === 1) {
                    output = "左手上げて";
                } else if (order === 2) {
                    output = "右手上げて";
                } else if (order === 3) {
                    output = "左足上げて";
                } else if (order === 4) {
                    output = "右足上げて";
                } else if (order === 5) {
                    output = "どっか行って";
                } else if (order === 6) {
                    output = "何か持ってきて";
                } else if (order === 7) {
                    output = "黙って";
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
                        Math.random() * 7) + 1;
                } while (lastOrder == order);
                lastOrder = order;

                if (order === 1) {
                    output = "左手上げて";
                } else if (order === 2) {
                    output = "右手上げて";
                } else if (order === 3) {
                    output = "左足上げて";
                } else if (order === 4) {
                    output = "右足上げて";
                } else if (order === 5) {
                    output = "どっか行って";
                } else if (order === 6) {
                    output = "何か持ってきて";
                } else if (order === 7) {
                    output = "黙って";
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
                        Math.random() * 7) + 1;
                } while (lastOrder === order);
                lastOrder = order;

                if (order === 1) {
                    output = "左手上げて";
                } else if (order === 2) {
                    output = "右手上げて";
                } else if (order === 3) {
                    output = "左足上げて";
                } else if (order === 4) {
                    output = "右足上げて";
                } else if (order === 5) {
                    output = "どっか行って";
                } else if (order === 6) {
                    output = "何か持ってきて";
                } else if (order === 7) {
                    output = "黙って";
                }

                console.log('12秒後:' + lastOrder);
                document.getElementById('mesuOrder').textContent = output;
            }, 12000);
        }
        twelveSec();

        window.setTimeout(function() {
            sessionStorage.setItem('point', count);
            alert('結果を見ますか?');
            if (count < 10) {
                location.href = "{{url('game/loseKarasu')}}"
            } else {
                location.href = "{{url('game/winKarasu')}}"
            }
        }, 15020)

        const mes = document.getElementById('mes');
        const oJImg = document.getElementById('o.j');

        const oJ = {
            name: 'obata',
            leftHand: function() {
                oJImg.src = '../images/ojLeft.gif';
            },
            rightHand: function() {
                oJImg.src = '../images/ojRight.gif';
            },
            leftLeg: function() {
                oJImg.src = '../images/ojLeftLeg.gif';
            },
            rightLeg: function() {
                oJImg.src = '../images/ojRightLeg.gif';
            },
            escape: function() {
                oJImg.src = '../images/ojEscape.gif';
            },
            gomi: function() {
                oJImg.src = '../images/ojGomi.gif';
            },
            talk: function() {
                mes.textContent = "絵を買ってください";
                setTimeout(function() {
                    mes.textContent = '';
                }, 3000);
            },
        };

        let count = 0;
        document.getElementById('hidarite-btn').
        onclick = function() {
            oJ.leftHand();
            if (order === 1) {
                count += 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('migite-btn').
        onclick = function() {
            oJ.rightHand();
            if (order === 2) {
                count += 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('hidariasi-btn').
        onclick = function() {
            oJ.leftLeg();
            if (order === 3) {
                count += 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('migiasi-btn').
        onclick = function() {
            oJ.rightLeg();
            if (order === 4) {
                count += 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('nigeru-btn').
        onclick = function() {
            oJ.escape();
            if (order === 5) {
                count += 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('gomiasaru-btn').
        onclick = function() {
            oJ.gomi();
            if (order === 6) {
                count -= 1;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }

        document.getElementById('talk-btn').
        onclick = function() {
            oJ.talk();
            if (order === 7) {
                count -= 100;
                console.log(count);
                document.getElementById('point').textContent = `現在${count}ポイント`;
            }
        }
    </script>

</body>

</html>
