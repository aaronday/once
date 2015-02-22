<?php $theme_path = base_path() . drupal_get_path('theme', 'once'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>片刻</title>

        <!-- Seo -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        <meta name="author" content="Aaron Day">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="google-site-verification" content="u9SETHoDwb6AsYw_o6zT4l4EamOGcktVW8q8tnAxwBs">

        <!-- CSS  -->
        <link href="<?php echo $theme_path; ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo $theme_path; ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo $theme_path; ?>/css/animate.css" type="text/css" rel="stylesheet" media="screen,projection">
    </head>
    <body>
        <nav class="grey lighten-5">
            <div class="container">
                <div class="nav-wrapper"><a id="logo-container" href="index.html" class="brand-logo"><img src="<?php echo $theme_path; ?>/images/logo.png" id="logo" alt="Jakub Sobotka logo"></a>
                    <!--
                    <ul id="nav-mobile" class="right side-nav">
                        <li><a href="" class="grey-text darken-2"><i class="left"></i>文字</a></li>
                        <li><a href="" class="grey-text darken-2"><i class="left"></i>歌声</a></li>
                        <li><a href="" class="grey-text darken-2"><i class="left"></i>电台</a></li>
                        <li><a href="" class="grey-text darken-2"><i class="left"></i>图片</a></li>
                    </ul><a href="#" data-activates="nav-mobile" class="button-collapse grey-text darken-2"><i class="mdi-navigation-menu"></i></a>
                    -->
                </div>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax">
                <img class="right" src="<?php echo $theme_path; ?>/images/bg1.jpg" alt="">
            </div>
        </div>

        <div class="section white padding-top3 z-depth-1">
            <div class="row container">
                <div class="row">
                    <div class="col s12">
                        <br/>
                        <h5 class="grey-text darken-1 light"><?php print $date; ?></h5>
                        <hr class="hr">
                    </div>
                    <div class="col s12">
                        <p class="flow-text grey-text darken-3">
                            在我生命中曾有过那么一个时刻，那时我多年轻啊，早上睁开眼睛，会想，这是一个开始，未来的一切都会更好，这是所有幸福的开始。现在我才明白，其实那就是幸福了。 -- from 《时时刻刻》
                        </p>
                    </div>
                    <div class="col m4 text-center">
                        <i class="mdi-av-my-library-books medium grey-text darken-1"></i>
                        <h5 class="grey-text darken-1">文字</h5>
                        <p class="flow-text grey-text darken-3 regular-font">那一行行的文字啊，揉碎了生活的点点滴滴。</p>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">READ</a>
                    </div>
                    <div class="col m4 text-center">
                        <i class="mdi-av-my-library-music medium grey-text darken-1"></i>
                        <h5 class="grey-text darken-1">歌声</h5>
                        <p class="flow-text grey-text darken-3 regular-font">给我一首歌的时间，让我把故事讲给你听。</p>
                        <a id="music_btn" class="waves-effect waves-light btn" onclick="handleAudio();">LISTEN</a>
                    </div>
                    <div class="col m4 text-center">
                        <i class="mdi-action-perm-media medium grey-text darken-1"></i>
                        <h5 class="grey-text darken-1">图片</h5>
                        <p class="flow-text grey-text darken-3 regular-font">很多时候，一副简单的画作，往往述说地更多。</p>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal3">OPEN</a>
                    </div>

                    <div id="modal1" class="modal">
                        <div style="padding: 10px;"> 
                            <div class="row">
                                <?php print $note; ?>
                            </div>
                        </div>
                    </div>

                    <div id="modal3" class="modal">
                            <div class="row">
                                <div class="col s6">
                                    <img src="<?php echo $theme_path; ?>/images/pic.jpg" class="responsive-img" width="600">
                                </div>
                                <div class="col s6">
                                    <?php print $pic; ?>
                                </div>
                            </div>
                    </div>
                </div>          
            </div>
        </div>

        <!--
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo $theme_path; ?>/images/bg2.jpg" alt="header img 2"></div>
        </div>

        <div class="section white padding-top3 z-depth-1">
            <div class="row container">
                <div class="row">
                    <div class="col s6 offset-s3 center padding-bottom3">
                        <p class="flow-text grey-text darken-3">
                            切记不要与自身的平凡为敌
                        </p>
                        <p class="flow-text grey-text darken-3">
                            也没有必要把自己变得不像自己
                        </p>
                    </div>
                    <div class="padding-top3" id="reference">
                        <div class="col m4">
                            <img class="materialboxed responsive-img" width="350" src="<?php echo $theme_path; ?>/images/one1.jpg" alt="">
                        </div>

                        <div class="col m4">
                            <img class="materialboxed responsive-img" width="350" src="<?php echo $theme_path; ?>/images/one2.jpg" alt="">
                        </div>

                        <div class="col m4">
                            <img class="materialboxed responsive-img" width="350" src="<?php echo $theme_path; ?>/images/one3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div class="parallax-container2">
            <div class="section no-pad-bot" style="margin-top: 30px;">
                <div class="row container">

                    <div class="col s12 m8 offset-m2 l6 offset-l3">
                        <div class="card-panel grey lighten-5 z-depth-1">
                            <div class="row" style="margin-bottom: 0">
                                <div class="col s2 foto">
                                    <img src="<?php echo $theme_path; ?>/images/person.jpg" alt="" class="circle responsive-img foto"> <!-- notice the "circle" class -->
                                </div>
                                <div class="col s10">
                                    <div class="black-text">
                                        <span>戴小枫给你讲段子</span>
                                        <p><?php print $tip; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="<?php echo $theme_path; ?>/images/bg3.jpg" alt="header img 3"></div>
        </div>
    </div>

    <div class="section white padding-top3">
        <div class="row container">
            <div class="row">
                <div class="col s6 offset-s3 center padding-bottom3">
                    <p class="flow-text grey-text darken-3">
                        每当这个时候，
                    </p>
                    <p class="flow-text grey-text darken-3">
                        我才能清晰地知道自己的人生，
                    </p>
                    <p class="flow-text grey-text darken-3">
                        喜欢的是什么，不喜欢的是什么。
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">戴小枫蛋疼系列第二发</h5>
                    <p class="grey-text text-lighten-4">纯属个人学习娱乐</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">关于我的</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://weibo.com/1685388925/" target="_blank">新浪微博</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://aaronday.pp.163.com/" target="_blank">网易摄影</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://aaron-foto.lofter.com/" target="_blank">LOFTER</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2015 ALENS
            </div>
        </div>
    </footer>
    
    <audio id="myAudio" src="<?php echo $theme_path; ?>/res/audios/music.mp3"></audio>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo $theme_path; ?>/js/materialize.js"></script>
    <script src="<?php echo $theme_path; ?>/js/init.js"></script>
    <script src="<?php echo $theme_path; ?>/js/app.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-51404409-2', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        function handleAudio(){
            var audio = document.getElementById('myAudio');
            if(audio.paused){
                audio.play();
                $('#music_btn').text('PAUSE');
                return;
            }
                audio.pause();
                $('#music_btn').text('LISTEN');
            }
    </script>
</body>
</html>

