<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Font Press Start 2P (Google fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Cho Han</title>
</head>
<body>
    <div>
        <audio loop id="audio">
            <source src="/assets/media/audio/cancion-cho-han.mp3" type="audio/mpeg">
        </audio>
        <div class="container">
            <div class="container-pop-ups" id="container-pop-up">
                <div class="pop-ups">

                    <div class="get-permission" id="get-permission">
                        <div class="btn-x btn-no">
                            <div class="icon-x btn-no"></div>
                        </div>
                        <div class="button-pop-up btn-allow">
                            <div class="text-allow btn-allow"></div>
                        </div>
                    </div>

                    <div class="get-username" id="get-username">
                        <input type="text" class="input-name" id="input-name">
                        <div class="message" id="message"></div>
                        <div class="button-pop-up" id="btn-accept-username">
                            <div class="text-accept"></div>
                        </div>
                    </div>

                    <div class="get-profile-picture" id="profile-picture">
                        <div class="container-profile-picture" id="container-imgs">
                            <div class="img img-1"></div>
                            <div class="img img-2"></div>
                            <div class="img img-3"></div>
                            <div class="img img-4"></div>
                            <div class="img img-5"></div>
                            <div class="img img-6"></div>
                            <div class="img img-7"></div>
                            <div class="img img-8"></div>
                        </div>
                        <div class="button-pop-up" id="btn-accept-pp">
                            <div class="text-accept"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="start-menu" id="start-menu">
                <div class="container-title-logo">
                    <div class="logo"></div>
                </div>
                <div class="container-btn-play">
                    <div class="btn-play" id="btn-play">
                        <div class="text-play"></div>
                    </div>
                </div>
            </div>

            <div class="game none" id="game">
                <div class="header">
                    <div class="player-data">
                        <div class="container-data">
                            <div class="avatar" id="avatar"></div>
                            <div>        
                                <div class="name" id="name"></div>
                                <div class="games-won">
                                    <div class="games-won-img"></div>
                                    <div class="games-won-text" id="games-won">0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="player-options">
                        <div class="diamond">
                            <div class="diamond-img"></div>
                            <div class="diamond-text" id="diamonds">0</div>
                        </div>
                        <div class="sound" id="btn-sound">
                            <div class="icon-sound muted" id="icon-sound"></div>
                        </div>
                        <div class="btn-rank" id="btn-rank">
                            <div class="rank-img"></div>
                        </div>
                    </div>
                </div>

                <div class="main">
                    <div class="get-bet" id="get-bet">
                        <div class="bet-title"></div>

                        <div class="container-input">
                            <div class="input-to-get-amount">
                                <div class="container-diamond-icon">
                                    <div class="diamond-icon"></div>
                                </div>
                                <input type="text" class="input-amount-diamonds" value="10" id="input-diamonds" onkeypress="return event.charCode>=48 && event.charCode<=57">
                            </div>
                            <div class="minus-button" id="btn-minus">
                                <div class="icon-minus"></div>
                            </div>
                            <div class="plus-button" id="btn-plus">
                                <div class="icon-plus"></div>
                            </div>
                        </div>

                        <div id="message-diamonds"></div>

                        <div class="button-bet" id="btn-bet">
                            <div class="text-bet"></div>
                        </div>
                    </div>

                    <div class="cho-han" id="cho-han">
                        <div class="animation-glass"></div>

                        <div class="container-buttons" id="container-buttons">
                            <div class="btn-par button-cho">
                                <div class="text-par button-cho"></div>
                            </div>
                            <div class="btn-impar button-han">
                                <div class="text-impar button-han"></div>
                            </div>
                        </div>
                    </div>

                    <div class="show-results" id="show-results">
                        <div class="container-dice" id="container-dice">
                            <div class="dice-1"></div>
                            <div class="dice-2"></div>
                        </div>

                        <div class="message-results" id="message-results">
                            <div class="title-results" id="title-results"></div>
                            <div class="container-show-diamonds">
                                <div class="show-diamonds">
                                    <div class="diamond-icon"></div>
                                </div>
                                <div class="diamonds-results" id="diamonds-results"></div>
                            </div>
                        </div>

                        <div class="buttons-results" id="buttons-results">
                            <div class="btn-try-again" id="btn-try-again">
                                <div class="text-try-again button-try-again"></div>
                            </div>
                            <div class="btn-back-to-menu" id="btn-back-to-menu">
                                <div class="text-back-to-menu button-back-to-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/app.js" type="module"></script>

</body>
</html>