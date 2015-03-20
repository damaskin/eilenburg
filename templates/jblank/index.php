<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';

?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />


    <link href="http://templates.cms-guide.com//43664/assets/css/reset.css" rel="stylesheet" type="text/css">

    <link href="http://templates.cms-guide.com//43664/assets/css/style.css?1.1.3" rel="stylesheet" type="text/css">


    <link href="//fonts.googleapis.com/css?family=Arvo:n,b,i,bi|Open+Sans:n,b,i,bi|Oswald:n,b|Play:n,b|Vidaloka:n&amp;subset=Latin,Cyrillic,Cyrillic-ext,Greek,Greek-ext,Latin-ext,Vietnamese"
          rel="stylesheet" type="text/css">

    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Andika|Ruslan+Display&subset=latin,cyrillic' rel='stylesheet' type='text/css'>


    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });

        $(function() {
            $( "#tabs2" ).tabs();
        });
    </script>

    <style>
        <!--
        #mjs-background-prev, #mjs-background-next {

            padding: 0px 10px 0px 10px;
        }

        #mjs-background-prev:hover, #mjs-background-next:hover {
            background: transparent;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 0px 10px 0px 10px;
        }

        #mjs-background-next {
            background-image: url(http://templates.cms-guide.com/43664/images/next_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #mjs-background-next:hover {
            background-image: url(http://templates.cms-guide.com/43664/images/next_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #mjs-background-prev {
            background-image: url(http://templates.cms-guide.com/43664/images/prev_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #mjs-background-prev:hover {
            background-image: url(http://templates.cms-guide.com/43664/images/prev_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #colorbox.system {
        }

        #colorbox.system #cboxPrevious, #colorbox.system #cboxNext {

            padding: 0px 10px 0px 10px;
        }

        #colorbox.system #cboxPrevious:hover, #colorbox.system #cboxNext:hover {

            padding: 0px 10px 0px 10px;
        }

        #colorbox.system #cboxNext {
            background-image: url(http://templates.cms-guide.com/43664/images/next_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #colorbox.system #cboxNext:hover {
            background-image: url(http://templates.cms-guide.com/43664/images/next_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #colorbox.system #cboxPrevious {
            background-image: url(http://templates.cms-guide.com/43664/images/prev_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #colorbox.system #cboxPrevious:hover {
            background-image: url(http://templates.cms-guide.com/43664/images/prev_arrow_big.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            min-width: 79px;
        }

        #cboxOverlay {
            background-color: #1B1B1B;
        }

        #mjs-browser {
            min-width: 980px;
            background: transparent;
            background-color: rgb(0, 0, 0);
        }

        #mjs-main {
            width: 980px;
            min-height: 900px;
        }

        -->
    </style>

</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>">

<div id="mjs-bg-popup"></div>

<div id="mjs-browser" style="">
    <!-- popup overlay -->
    <div id="mjs-main" class="mjs-holder" style="height: 900px; min-height: 900px;">

        <div id="mjs-website-bgContainer"></div>
        <div id="mjs-website" style="height: 900px; min-height: 900px; opacity: 1;">
            <div id="mjs-object_28"
                 class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
                 style="right: -461.5px; bottom: 0px; left: -461.5px; height: 46px; z-index: 51000;">
                <div class="mjs-object-content"></div>
            </div>



            <div id="mjs-object_23" class="mjs-object mjs-object-image"
                 style="width: 308px; height: 560px; top: 0px; left: 336px; z-index: 20001; overflow: hidden; text-align: center; line-height: 560px;">
                <div class="mjs-image-wrap"><img id="_mjs-object_23"
                                                 src="http://templates.cms-guide.com/43664/images/menu_bg.png"
                                                 class="" style="height: 560px;"></div>
            </div>
            <div id="mjs-object_24" class="mjs-object mjs-object-htmlText">
                <div class="mjs-object-content"><p class="text-center ">
                    <div class="pos1span size11"><jdoc:include type="modules" name="pos1"/> </div></p>
                </div>
            </div>

            <div id="mjs-object_251" class="mjs-object mjs-object-htmlText"
                 style="width: 231px; height: 190px; top: 45px; left: 374px; z-index: 20003;">
                <div class="mjs-object-content"><p style="text-align:center;"><span
                            style="font-family:'Vidaloka';font-size:48px;color:#ffffff;"><a href=""
                                                                                            class="mjs-link-bindable"
                                                                                            style="color:#ffffff;font-family:'Vidaloka';font-size:38px;"
                                                                                            data-url="splash"
                                                                                            data-action="switchPage">
                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" alt="">
                            </a></span>
                    </p></div>
            </div>

            <div id="mjs-object_25" class="mjs-object mjs-object-htmlText"
                 style="width: 231px; height: 58px; top: 225px; left: 374px; z-index: 20003;">
                <div class="mjs-object-content"><p style="text-align:center;"><span
                            style="font-family:'Vidaloka';font-size:48px;color:#ffffff;"><a href=""
                                                                                            class="mjs-link-bindable"
                                                                                            style="color:#ffffff;font-family:'Vidaloka';font-size:38px;"
                                                                                            data-url="splash"
                                                                                            data-action="switchPage">EILENBURG</a></span>
                    </p></div>
            </div>
            <div id="mjs-object_26" class="mjs-object mjs-object-htmlText"
                 style="width: 202px;  top: 276px; left: 388px; z-index: 20004;">
                <div class="mjs-object-content"><p style="text-align:center;"><div
                            class="pos2"><jdoc:include type="modules" name="pos2"/></div>
                    </p></div>
            </div>
            <div id="mjs-object_27" class="mjs-object mjs-object-image"
                 style="width: 1920px; height: 1200px; top: 0px; left: -470px; z-index: 20000; overflow: hidden;">
                <div class="mjs-rel-wrapper"
                     style="overflow: hidden; position: relative; width: 1920px; height: 1200px;">
                    <div class="mjs-image-wrap"
                         style="position: absolute; top: 0px; left: 0px; width: 1920px; height: 1200px;"><img
                            id="_mjs-object_27" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/bg5.jpg" class=""
                            style="width: 1920px; height: 1200px;"></div>
                </div>
            </div>
            <div id="mjs-widget_13" class="mjs-advancedMenu mjs-widget mjs-widget-verticalMenuModule"
                 style="width: 302px; height: 286px; top: 318px; left: 339px; z-index: 70005;">
                <div class="mjs-widget-content mjs-m-submenu-set-width" style="margin:0 auto;">
                    <ul class="mjs-menu mjs-menu-level-0">
                        <li class="mjs-sub mjs-item-first " style="height: 13.6863136863137%;">&nbsp;
					<span class="mjs-menu-stylevo" style="width: 302px; height: 39px;">
						<a class="mjs-link-bindable mjs-menu-styles" href="#wellcome" data-url="home"
                           data-action="switchPage" rel="" target="">
							<span class="mjs-menu-align" style="line-height: 18px;">
								<div class="mjs-menu-icon" style="display: none;"><img class="mjs-menu-icon-image">
                                </div>
								<div class="mjs-menu-text" style="width: 302px;">АЙЛЕНБУРГ</div>
							</span>
                        </a>

					</span>
                        </li>
                        <li class="mjs-menu-delimiter delimiter-position-first"></li>

                        <li class="mjs-sub mjs-item- " style="height: 13.6863136863137%;">&nbsp;
					<span class="mjs-menu-stylevo" style="width: 302px; height: 39px;">
						<a class="mjs-link-bindable mjs-menu-styles" href="#menu" data-url="our-beers"
                           data-action="switchPage" rel="" target=""
                           style="background-image: none; background-position: 50% 100%; background-repeat: no-repeat;">
							<span class="mjs-menu-align" style="line-height: 18px;">
								<div class="mjs-menu-icon" style="display: none;"><img class="mjs-menu-icon-image">
                                </div>
								<div class="mjs-menu-text" style="width: 302px;">МЕНЮ</div>
							</span>
                        </a>
					</span>
                        </li>
                        <li class="mjs-menu-delimiter delimiter-position-"></li>

                        <li class="mjs-sub mjs-item- " style="height: 13.6863136863137%;">&nbsp;
					<span class="mjs-menu-stylevo" style="width: 302px; height: 39px;">
						<a class="mjs-link-bindable mjs-menu-styles" href="#akcia" data-url="the-brewery"
                           data-action="switchPage" rel="" target="">
							<span class="mjs-menu-align" style="line-height: 18px;">
								<div class="mjs-menu-icon" style="display: none;"><img class="mjs-menu-icon-image">
                                </div>
								<div class="mjs-menu-text" style="width: 302px;">АКЦИИ</div>
							</span>
                        </a>

					</span>
                        </li>
                        <li class="mjs-menu-delimiter delimiter-position-"></li>

                        <li class="mjs-sub mjs-item- " style="height: 13.6863136863137%;">&nbsp;
					<span class="mjs-menu-stylevo" style="width: 302px; height: 40px;">
						<a class="mjs-link-bindable mjs-menu-styles" href="#contact" data-url="online-shop"
                           data-action="switchPage" rel="" target="">
							<span class="mjs-menu-align" style="line-height: 18px;">
								<div class="mjs-menu-icon" style="display: none;"><img class="mjs-menu-icon-image">
                                </div>
								<div class="mjs-menu-text" style="width: 302px;">КОНТАКТЫ</div>
							</span>
                        </a>

					</span>
                        </li>

                        <li class="mjs-menu-delimiter delimiter-position-last"></li>
                    </ul>
                </div>
                <style>
                    <!--

                    /* .mjs-menu-styles - hyperlink styles */

                    #mjs-widget_13 ul.mjs-menu-level-1 li a.mjs-menu-styles {
                        width: 302px;
                    }

                    /* .mjs-menu-align - vertical-align & text format styles */
                    #mjs-widget_13 ul.mjs-menu-level-0 > li > .mjs-menu-stylevo > a.mjs-menu-styles > .mjs-menu-align {
                        font-weight: normal;
                        font-style: normal;
                        text-decoration: none;
                        margin-top: -1px;
                        line-height: 1.2;
                        text-align: center;
                        font-family: 'Vidaloka';
                        font-size: 16px;
                        color: #c5a06a;
                        letter-spacing: 0px;;
                    }

                    #mjs-widget_13 ul.mjs-menu-level-0 > li.mjs-active > .mjs-menu-stylevo > a.mjs-menu-styles > .mjs-menu-align,
                    #mjs-widget_13 ul.mjs-menu-level-0 > li.mjs-sub:hover > .mjs-menu-stylevo > a.mjs-menu-styles > .mjs-menu-align {
                        font-weight: normal;
                        font-style: normal;
                        text-decoration: none;
                        margin-top: -1px;
                        line-height: 1.2;
                        text-align: center;
                        font-family: 'Vidaloka';
                        font-size: 16px;
                        color: #ffffff;
                        letter-spacing: 0px;;
                    }

                    /* .mjs-menu-delimiter - Delimiter styles */
                    #mjs-widget_13 ul.mjs-menu-level-0 li.mjs-menu-delimiter {
                        width: 302px;
                        height: 2px;
                        background: url(http://templates.cms-guide.com/43664/images/delimitr.png) center center no-repeat;
                    }

                    /* .mjs-menu-stylevo - styleVO & result width and height of the button (see adjustMenuHeight() function in js widget class) */
                    #mjs-widget_13 ul.mjs-menu-level-0 > li.mjs-sub > .mjs-menu-stylevo {

                    }

                    #mjs-widget_13 ul.mjs-menu-level-0 > li.mjs-sub:hover > .mjs-menu-stylevo,
                    #mjs-widget_13 ul.mjs-menu-level-0 > li.mjs-active > .mjs-menu-stylevo {
                        background: transparent;
                        background-color: rgba(0, 0, 0, 0.2);

                    }

                    #mjs-widget_13 ul.mjs-menu-level-1 li > .mjs-menu-stylevo, #mjs-widget_13 ul.mjs-menu-level-2 li > .mjs-menu-stylevo {

                    }

                    #mjs-widget_13 ul.mjs-menu-level-1 li.mjs-sub:hover > .mjs-menu-stylevo,
                    #mjs-widget_13 ul.mjs-menu-level-1 li.mjs-active > .mjs-menu-stylevo,
                    #mjs-widget_13 ul.mjs-menu-level-2 li.mjs-sub:hover > .mjs-menu-stylevo,
                    #mjs-widget_13 ul.mjs-menu-level-2 li.mjs-active > .mjs-menu-stylevo {

                    }

                    /* .mjs-menu-text - container for text label & submenu text format styles */
                    #mjs-widget_13 ul.mjs-menu-level-1 li > .mjs-menu-stylevo > a.mjs-menu-styles .mjs-menu-align .mjs-menu-text {
                        font-weight: normal;
                        font-style: normal;
                        text-decoration: none;
                        margin-top: -1px;
                        line-height: 1.2;
                        padding-left: 20px;
                        text-align: left;
                        font-family: 'Vidaloka';
                        font-size: 12px;
                        color: #7e6040;
                        letter-spacing: 0px;;
                    }

                    #mjs-widget_13 ul.mjs-menu-level-1 li.mjs-sub:hover > .mjs-menu-stylevo > a.mjs-menu-styles .mjs-menu-align .mjs-menu-text,
                    #mjs-widget_13 ul.mjs-menu-level-1 li.mjs-active > .mjs-menu-stylevo > a.mjs-menu-styles .mjs-menu-align .mjs-menu-text {
                        font-weight: normal;
                        font-style: normal;
                        text-decoration: none;
                        margin-top: -1px;
                        line-height: 1.2;
                        padding-left: 20px;
                        text-align: left;
                        font-family: 'Vidaloka';
                        font-size: 12px;
                        color: #ffffff;
                        letter-spacing: 0px;;
                    }

                    /* .mjs-menu-icon - icon container */
                    #mjs-widget_13 ul.mjs-menu-level-0 li .mjs-menu-icon {
                        float:;
                    }

                    /* other */
                    #mjs-widget_13 ul.mjs-menu-level-0 ul {
                        background: url('http://templates.cms-guide.com/43664/images/submenu_bg.png') repeat center center;
                        padding: 20px 0px 20px 0px;

                    }

                    #mjs-widget_13 ul.mjs-menu-level-0 ul li {
                        width: 302px;
                    }

                    #mjs-widget_13 > .mjs-m-submenu-set-width ul.mjs-menu-level-1 li a.mjs-menu-styles,
                    #mjs-widget_13 > .mjs-m-submenu-set-width ul.mjs-menu-level-2 li a.mjs-menu-styles {
                        width: 200px;
                    }

                    -->
                </style>
            </div>
        </div>

    </div>

</div>


<div
    class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
    style="min-width: 980px; height: 1400px; z-index: 1001; background: url(http://templates.cms-guide.com/47657/images/bg.jpg) 0% 0% repeat; display: block; position: static;">


    <!-- ********************************************************************** -->

    <div class="hr_bg" id="wellcome"></div>

    <div class="cont_block">
        <div class="cont_bg"></div>
        <div class="pirates bg" id="page" data-page="pirates-main">
            <div class="wrapper pirates bg-footer">

                <div class="bg-wood">
                    <section class="pl-page">
                        <div class="pl-paper begin">
                        </div>
                        <div class="pl-content">
                            <div class="row-fluid">
                                <div class="content">
                                    <jdoc:include type="modules" name="pos3"/>

                                    <jdoc:include type="modules" name="pos4"/>



                                    <div id="tabs" class="tabs">
                                        <jdoc:include type="modules" name="pos5"/>
                                        <div id="tabs-1" class="item">
                                            <jdoc:include type="modules" name="pos6"/>
                                        </div>
                                        <div id="tabs-2" class="item">
                                            <jdoc:include type="modules" name="pos7"/>
                                        </div>
                                        <div id="tabs-3" class="item">
                                            <div id="tabs2" class="tabs">
                                                <jdoc:include type="modules" name="pos8"/>
                                            </div>
                                        </div>
                                        <div id="tabs-4" class="item">
                                            <jdoc:include type="modules" name="pos9"/>
                                        </div>
                                        <div id="tabs-5" class="item">
                                            <jdoc:include type="modules" name="pos10"/>
                                        </div>
                                        <div id="tabs-6" class="item">
                                            <jdoc:include type="modules" name="pos11"/>
                                        </div>
                                        <div id="tabs-7" class="item">
                                            <jdoc:include type="modules" name="pos12"/>
                                        </div>
                                        <div id="tabs-8" class="item">
                                            <jdoc:include type="modules" name="pos13"/>
                                        </div>
                                        <div id="tabs-9" class="item">
                                            <jdoc:include type="modules" name="pos14"/>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pl-paper end">
                        </div>
                    </section>
                </div>
                <div class="bg-wood-end">
                </div>
            </div>
        </div>
    </div>

    <!-- ********************************************************************** -->

</div>

<div id="akcia"
     class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
     style="min-width: 980px; height: 600px; z-index: 1001; background: url(http://templates.cms-guide.com/47657/images/bg.jpg) 0% 0% repeat; display: block; position: static;">
    <div
        class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
        style=" height: 600px; z-index: 1001; background: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/akcia.png) top center no-repeat; display: block; position: static;;">

        <div class="akcia">
            <jdoc:include type="modules" name="pos15"/>
        </div>


    </div>
</div>


<div id="contact"
     class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
     style="min-width: 980px; height: 700px; z-index: 1001; background: url(http://templates.cms-guide.com/47657/images/bg.jpg) 0% 0% repeat; display: block; position: static;">

    <div class="contact">
        <div class="title">
            КОНТАКТЫ
        </div>


        <jdoc:include type="modules" name="pos16"/>

    </div>

    <div
        class="mjs-object mjs-object-shape mjs-auto-right-window mjs-auto-left-window mjs-auto-bottom-window mjs-object-shape-rectangle"
        style=" height: 600px; z-index: 1001; background: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/map_bg.png) top center no-repeat; display: block; position: static;;">

        <div class="map">
            <iframe width="760px" height="280" style="margin-top: 30px; margin: 0 auto;" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="http://www.openstreetmap.org/export/embed.html?bbox=29.609404206275936%2C46.83402384771282%2C29.61648523807526%2C46.83741470433296&amp;layer=mapnik&amp;marker=46.83571930276861%2C29.612944722175598"
                    style="border: 1px solid black"></iframe>

        </div>

        <jdoc:include type="modules" name="pos17"/>



        <div style="width: 120px; margin: 0 auto; text-align: center; margin-top: 20px;">
            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=28541546&amp;from=informer"
               target="_blank" rel="nofollow"><img
                    src="//bs.yandex.ru/informer/28541546/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                    style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                    title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                    onclick="try{Ya.Metrika.informer({i:this,id:28541546,lang:'ru'});return false}catch(e){}"/></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function () {
                        try {
                            w.yaCounter28541546 = new Ya.Metrika({
                                id: 28541546,
                                webvisor: true,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true
                            });
                        } catch (e) {
                        }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else {
                        f();
                    }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript>
                <div><img src="//mc.yandex.ru/watch/28541546" style="position:absolute; left:-9999px;" alt=""/></div>
            </noscript>
            <!-- /Yandex.Metrika counter -->
        </div>

    </div>


</div>

</body></html>
