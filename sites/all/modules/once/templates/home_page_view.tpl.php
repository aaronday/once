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
                        <p class="flow-text grey-text darken-3 regular-font">有没有那么一首歌会让你心里记着我</p>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">READ</a>
                    </div>
                    <div class="col m4 text-center">
                        <i class="mdi-av-my-library-music medium grey-text darken-1"></i>
                        <h5 class="grey-text darken-1">歌声</h5>
                        <p class="flow-text grey-text darken-3 regular-font">有没有那么一首歌会让你心里记着我</p>
                        <a id="music_btn" class="waves-effect waves-light btn" onclick="handleAudio();">LISTEN</a>
                    </div>
                    <div class="col m4 text-center">
                        <i class="mdi-action-perm-media medium grey-text darken-1"></i>
                        <h5 class="grey-text darken-1">图片</h5>
                        <p class="flow-text grey-text darken-3 regular-font">有没有那么一首歌会让你心里记着我</p>
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal3">OPEN</a>
                    </div>

                    <div id="modal1" class="modal">
                        <div style="padding: 10px;"> 
                            <div class="row">
                                过年机器人
                                <br>
                                作者/荞麦
                                <br>
                                每年春节，我都会封存大部分的自己，只留下小小一部分，来度过这个奇怪的节日。这个节日人人不知为何均喜气洋洋，所有一切也都告诉你应该喜气洋洋，除了那些一成不变的祝福，人们似乎说不出其他真诚的句子。但我并没觉得有什么特别值得高兴的事情发生，也谈不上有太多喜悦之情。这样难得的假期，整整七天，如果可以不这样度过就好了，但每次都只能这样想想而已，最终还是要这样度过呀！尤其年龄越大，反而觉得更加不能逃避。
                                <br>
                                这几天，是冬天的尾声，也是所有传统价值观集中开火的几天。不管你平时怎么逍遥自在，这时候都不得不接受从头到尾的考验：赚钱多少？结婚与否？何时生小孩？小孩怎么样？……我剩下的这小小一部分的自己，沉默寡言，最擅长装聋作哑，她封闭自己的感官，甚至不得不关闭了一部分的大脑，来度过这难熬的数天：她不与人进行任何有意义有内容的对话，只是寒暄或者沉默或者微笑。她随便穿衣蓬头垢面只带一瓶面霜，她埋头苦吃不让嘴巴停下仿佛这几天吃饭和睡觉就是人生唯一的内容。
                                <br>
                                “我儿子今年拿了好多年终奖，换了辆新车。”……微笑。
                                <br>
                                “工作当然重要，但生小孩也好重要啊。”……微笑。
                                <br>
                                “你肯定要给爸妈包个大红包吧？”……微笑。
                                <br>
                                “写书能不能赚一百万？一百万都赚不到？”……微笑。
                                <br>
                                “xx家拆迁拆到两套房，抵你们工作十几年吧？”……微笑。
                                <br>
                                “你看隔壁邻居的小孩都会跑了啊！”……微笑。
                                <br>
                                这部分的自己，大脑变成了空空且漏水的容器，这些话从这只耳朵进去，很快就从另一只耳朵出来了。这部分的自己消灭了各种情绪，不再有胜负之心，也无所谓好恶。大年三十跟着磕头烧香，正月初一听话早起吃红枣和汤圆，别人放鞭炮时站在一边鼓掌看热闹，家族聚餐时努力准确喊出每一个亲戚的称呼，甚至还能亲切逗弄每家的婴儿，给予合适的称赞……真像一台合格的“过年机器人”。
                                <br>
                                有时候我想，如果是在夏天过年可能就不是这样了？寒冷让人失去斗志。我不爱任何节日，因为我特别喜欢平时的自己。平时的每一天，我都感觉自我完整，目标清晰，价值观坚定，然而在过年这样力量强大的节日里，我只能派出那部分最温和无知没有诉求的自己，把其他充满反抗的部分统统封存起来，伺机再聚。
                                <br>
                                每当这个时候，我才能清晰地知道自己的人生，喜欢的是什么，不喜欢的是什么。过年总是把我最不喜欢的人生展示给我看，让我清清楚楚，让我再次划出一条界限。如果说我平时还有点糊里糊涂，这个时候却恍然大悟：原来他们津津乐道的那些，我一样也不羡慕；而我在意的东西，他们也完全不理解。只是我们不必互相说服，只需和平度过。
                                <br>
                                熬完最难熬的几天，我们返程回到自己的城市。我打扫卫生，清洗衣物，煮好咖啡，长舒一口气……耐心等待被封存的那部分，前来重逢，再次变成平时那个完整的自己。山高水长，明年再见。
                                <br>
                                <br>
                                荞麦，「一个」常驻作家。@荞麦chen
                            </div>
                        </div>
                    </div>

                    <div id="modal3" class="modal">
                        <div class="container">
                            <div class="row">
                                <div class="col s6">
                                    <img src="<?php echo $theme_path; ?>/images/pic.jpg" class="responsive-img" width="400">
                                </div>
                                <div class="col s6">
                                    那年的冬天特别寒冷， 
                                    <br>
                                    整个城市笼罩在阴湿的雨里。
                                    <br>
                                    灰蒙蒙的天空，迟迟见不着阳光，
                                    <br>
                                    让人感到莫名的沮丧，
                                    <br>
                                    常常走在街上就有一种落泪的冲动……
                                </div>
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
                                        <p>就像公主病高发于工薪阶级家庭子女人群中，“我们家族枝繁叶茂差不多是皇家分支”这样的想法，也更多地出现在三十五线小城市年夜饭饭桌上。</p>
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

