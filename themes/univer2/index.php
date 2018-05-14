<?php get_header(); ?>
    </div>
    <style>
        .btn-danger:hover {
            background-color: #1674b7 !important;
        }
        .add_comment {
            display: block;
            width: 35px;
            height: 147px;
            position: fixed;
            right: -10px;
            z-index: 99999;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
        }


        .answ1{
            background: url(<?php bloginfo('template_url'); ?>/img/anw-quest.png);
            top: 202px;
            height: 200px;

        }
        .answ5{
            background: url(<?php bloginfo('template_url'); ?>/img/anw6.png);
            top: 349px;
            height: 205px !important;
        }
        .answ3{
            background: url(<?php bloginfo('template_url'); ?>/img/anw-obr.png);
            /*top: 509px;*/
            top: 349px;
            height: 196px !important;
        }
        .answ1:hover, .answ2:hover, .answ3:hover, .answ4:hover, .answ5:hover {
            transform: translateX(-10px);
        }

        }

    </style>

    <a href="/zadat-vopros/"> <div class="add_comment answ1 hidden-xs"></div></a>
    <!--a href="http://www.bti.secna.ru/spravka-ob-obuchenii/" target="_blank"><div class="add_comment answ5 hidden-xs"></div></a-->
    <a href="http://www.bti.secna.ru/obrashhenie-grazhdan/"> <div class="add_comment answ3 hidden-xs"></div></a>
    <div class="bg-sl">
        <div class="container-fluid block-content">
            <div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
                <!--a href="http://www.bti.secna.ru/vib2018/">  <div class="item">
                     <img src="<?php bloginfo('template_url'); ?>/img/slider/vybory.jpg" alt="">
                    <div class="container-fluid">

                    </div>
                </div></a-->
                <!--a href="http://www.bti.secna.ru/pozdravleniya-s-dnem-velikoj-pobedy/">
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/psd/9may/2018.jpg" alt="slider">

                </div>
                </a-->
                <a href="http://www.bti.secna.ru/events/trinadtsataya-vserossijskaya-nauchno-tehnicheskaya-konferentsiya-studentov-aspirantov-i-molodyh-uchenyh-s-mezhdunarodnym-uchastiem-izmereniya-avtomatizatsiya-i-modelirovanie-v-promyshlennosti-i-nauchn/">
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/slider/iamp2018.jpg" alt="slider">

                    </div>
                </a>

                <a href="http://eios.bti.secna.ru/">
                    <div class="item">
                        <!--img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/3_variant-min.jpg" alt="slider"-->
                        <img src="<?php bloginfo('template_url'); ?>/img/slider/eiosdd2.png" alt="slider">
                        <!--div class="container-fluid">
                            <div class="slider-content col-md-6 col-lg-6 bg-slide">
                                <div style="display:table;">
                                    <div style="display:table-cell; width:100px; vertical-align:top;">
                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div style="display:table-cell;">
                                        <h1>ЭИОС БТИ АлтГТУ</h1>
                                    </div>
                                </div>
                                <p> Единый доступ к профессиональным базам данных, информационным справочным и поисковым системам
                                    <a class="btn btn-success" href="http://old.bti.secna.ru/eios/">Подробнее</a></p>
                            </div>
                        </div-->
                    </div>
                </a>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/slider/1.jpg" alt="slider">
                    <div class="container-fluid">
                        <div class="slider-content col-md-6 col-lg-6 bg-slide">
                            <div style="display:table;">
                                <div style="display:table-cell; width:100px; vertical-align:top;">
                                    <a class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <div style="display:table-cell;">
                                    <h1>подготовительные курсы</h1>
                                </div>
                            </div>
                            <p> Приглашаем всех желающих!
                                <br><a class="btn btn-success" href="/podgotovitelnye-kursy/">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/slider/prkom.jpg" alt="slider">
                    <div class="container-fluid">
                        <div class="slider-content col-md-6 col-lg-6 bg-slide">
                            <div style="display:table;">
                                <div style="display:table-cell; width:100px; vertical-align:top;">
                                    <a class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <div style="display:table-cell;">
                                    <h1>Приемная кампания</h1>
                                </div>
                            </div>
                            <p>Информация для поступающих<br><a class="btn btn-success" href="http://bti.secna.ru/abitur/">Подробнее</a></p>
                        </div>
                    </div>
                </div>

                <a  href="http://portal.bti.secna.ru/"> <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/slider/portal2.png" alt="slider">
                        <!--div class="container-fluid">
                            <div class="slider-content col-md-6 col-lg-6 bg-slide">
                                <div style="display:table;">
                                    <div style="display:table-cell; width:100px; vertical-align:top;">
                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div style="display:table-cell;">
                                        <h1>Внутренний портал</h1>
                                    </div>
                                </div>
                                <p>Для сотрудников Бийского технологического института<br><a class="btn btn-success" href="http://portal.bti.secna.ru/">Перейти</a></p>
                            </div>
                        </div-->
                    </div></a>

                <a  href="<?php bloginfo('template_url'); ?>/raketomodelnyj-klub/"> <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/slider/raketa.jpg" alt="slider">
                        <!--div class="container-fluid">
                            <div class="slider-content col-md-6 col-lg-6 bg-slide">
                                <div style="display:table;">
                                    <div style="display:table-cell; width:100px; vertical-align:top;">
                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div style="display:table-cell;">
                                        <h1>Внутренний портал</h1>
                                    </div>
                                </div>
                                <p>Для сотрудников Бийского технологического института<br><a class="btn btn-success" href="http://portal.bti.secna.ru/">Перейти</a></p>
                            </div>
                        </div-->
                    </div></a>

            </div>
        </div>
    </div>
    </div>
    <div class="bg-image page-title slider-bottom hidden-visible-eye" >
        <div class="container-fluid text-center">

            <a href="/abitur/"><div class="col-md-2 col-md-offset-1 bottom-slider">
                    <i class="fa fa-user"></i> Поступающим
                </div>
            </a>
            <a href="/students/"><div class="col-md-2 bottom-slider">
                    <i class="fa fa-clipboard"></i> Студентам
                </div></a>
            <a href="/aspirantam/"><div class="col-md-2 bottom-slider">
                    <i class="fa fa-graduation-cap"></i> Аспирантам
                </div></a>
            <a href="<?php echo home_url();?>/trudoviye-otnosheniya/"><div class="col-md-2 bottom-slider">
                    <i class="fa fa-users"></i>  Сотрудникам
                </div></a>
            <a href="/prepodavatelyam/"><div class="col-md-2 bottom-slider">
                    <i class="fa fa-suitcase"></i> Преподавателям
                </div></a>

        </div>
    </div>
    <div class="neves">
        <div class="container-fluid block-content">
            <!--div class="col-sm-9  posts hidden-xs" style="margin-top:20px">
                    <i class="fa fa-exclamation-circle" style="color: #eea236;font-size:100px;float: left;margin-right:10px;"></i>

                <b>Уважаемые студенты и сотрудники!  Открыт прием помощи пострадавшим от паводка в Алтайском крае</b>
                <br>Пункты по сбору гуманитарной помощи размещаются на базе комплексного центра социального обслуживания населения  г. Бийска ул. Вагонная, 65.
                <br>Тел. 40-55-41, 40-55-33
                <br>Пункт работает с 28.03.2018 г. с 8-00 до 17-00 час.

            </div-->
            <div class="col-sm-8 col-sm-offset-2 text-center" style="margin-top: 20px;
background: #fff;
padding-bottom: 17px;">
                <!--img src="http://old.bti.secna.ru/img_bti/12.jpg" width="100px"-->
                <h4 style="color: #0162a7;padding-top: 15px;">Приглашаем принять участие в Конференции ИАМП-2018
                </h4>
                <a href="http://www.bti.secna.ru/events/trinadtsataya-vserossijskaya-nauchno-tehnicheskaya-konferentsiya-studentov-aspirantov-i-molodyh-uchenyh-s-mezhdunarodnym-uchastiem-izmereniya-avtomatizatsiya-i-modelirovanie-v-promyshlennosti-i-nauchn/" class="btn btn-lg btn-danger">Зарегистрироваться</a>
            </div>

            <div class="col-sm-12 posts">
                <br>

                <h4><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h">НОВОСТИ</span></h4>


                <style>
                    .service-item img{
                        width:100% !important;
                        height:150px !important;
                    }
                    .ei11{
                        color:#337ab7 !important;
                    }
                    .ei11:hover{
                        text-decoration: underline;
                    }
                </style>
                <div class="row services neves-o">
                    <?php
                    $args=array(
                        'category__in' => array( 3, 7, 11 ),
                        'exclude' => 17940,
                        'showposts'=>10,
                        'orderby'=>data, //сортировка по дате
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) { ?>

                        <?php
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $size == array(50,50);
                            ?>

                            <div class="service-item col-xs-12  col-sm-6  col-md-3 col-lg-3 wow zoomIn news" data-wow-delay="0.3s">
                                <a href="<?php echo get_permalink($post->ID); ?>"><?php
                                    //echo get_the_post_thumbnail($id, array(9999,150))
                                    if ( has_post_thumbnail() ): // если миниатюра есть
                                        the_post_thumbnail($id, array(9999,150)); // выводим ее
                                    else:?>
                                        <img src="<?php bloginfo('template_url'); ?>/img/no-img.jpg" width="100%" alt="Новости института">
                                    <?endif;


                                    ?></a>
                                <span class="news-date"><?php the_time('d.m.Y'); ?></span>
                                </a>
                                <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                                    <?php trim_title_chars(135, '...'); ?></a>

                            </div>
                        <?php }}
                    wp_reset_query(); ?>


                </div>
                <div class="col-md-12 text-right" style="padding-bottom:10px;">
                    <a href="/news/" style="color:#666"><i class="fa fa-newspaper-o"></i> Все новости</a>
                </div>

            </div>

        </div>	</div>

    </div>
    </div>




    <br>
    <div class="block-content blog-section">
    <div class="container-fluid" style="margin-bottom:30px;">

        <div class="row">


            <div class="col-md-9">
                <h4><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h">ОБЪЯВЛЕНИЯ</span></h4>
                <div class="adress-details wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">



                    <?php
                    $args=array(
                        'category__in' => array( 4, 8 ),
                        'showposts'=>8,
                        'orderby'=>data,
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ): ?>

                        <?php
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $size == array(50,50);
                            ?>

                            <div style="background:#f7f7f7;width: 100%;">
                                <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <div>
                                    <div style="padding:15px 5px;">

                                        <span><?php the_time('d.m.Y'); ?></span>

                                        <a href="<?php echo get_permalink($post->ID); ?>" style="color:#23527c;font-size:14px;">
                                            <?php echo $post->post_title; ?></a>

                                    </div>

                                </div>
                            </div>
                        <?php }
                    endif;
                    wp_reset_query(); ?>












                </div>
                <div align=right>
                    <a href="/advert/" style="color:#666"><i class="fa fa-newspaper-o"></i> Все объявления</a>
                </div>

            </div>

            <div class="col-md-3">
                <!--img src="http://cs01.services.mya5.ru/DwABAIQAzQFyAc0BzP_D-w8/PWHZhBAjqTNoIFDYRnd6WQ/sv/image/6e/c4/f9/324591/7/bigstock_globe_with_network_cables_and__26792129.jpg?1462536834" width=100% style="margin-top:50px;"-->
                <img src="<?php bloginfo('template_url'); ?>/img/1253551080_mxmix12072.jpg" width=100% style="margin-top:50px;" alt="Быстрый доступ">


                <div class="sidebar-container">
                    <div style="background-color: #df5410;width:100%;padding:15px;">
                        <h4 style="color:#fff;margin-bottom:10px;"><span style="border-bottom:2px solid #fff;">
								БЫСТРЫЙ ДОСТУП</span></h4>
                        <a href="https://student.altstu.ru/login/" style=""><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Личный кабинет студента</a>
                        <br><a href="http://teacher.altstu.ru/auth/login/"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Личный кабинет преподавателя</a>
                        <br><a href="https://app.bti.secna.ru:8443/kab/emp.reg"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Личный кабинет сотрудника</a>
                        <br><a href="http://db.biysk.secna.ru/guest/rp.smc_docum.main"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Документы СМК</a>
                        <br><a href="http://www.bti.secna.ru/students/rasp/"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Расписание занятий</a>
                        <br><a href="http://eios.bti.secna.ru/"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Электронная информационно-образовательная среда </a>
                        <!--br><a href="http://db.biysk.secna.ru/umkr/view_umkr.stat"><i class="fa fa-caret-right" aria-hidden="true"></i>
                    Учебно-организационная и методическая обеспеченность основных образовательных программ (ФГОС) 	</a-->
                        <br><a href="http://portal.bti.secna.ru/"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Внутренний портал БТИ АлтГТУ	</a>
                        <br><a href="http://www.astu/"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Внутренний портал АлтГТУ	</a>
                        <br><a href="http://www.bti.secna.ru/nauka/effect17.shtml"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            Результаты мониторинга БТИ АлтГТУ	</a>

                    </div>
                </div>


            </div>


        </div>
    </div>

    <div class="fleet-gallery block-content bg-image inner-offset">
        <div class="container-fluid inner-offset">
            <div class="hgroup wow zoomInUp" data-wow-delay="0.3s" style="margin-left: 15px;">
                <h4 class="white">СОБЫТИЯ</h4>

            </div>




            <div class="col-md-9">


                <?php
                $args=array(
                    'category__in' => 5,
                    'showposts'=>4,
                    'orderby'=>data,
                    'caller_get_posts'=>1);
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) { ?>

                    <?php
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        $size == array(50,50);
                        ?>
                        <div class="col-md-5 event-sm">

                            <span class="date-event"><?php the_date(); ?></span>
                            <br>
                            <a href="<?php echo get_permalink($post->ID); ?>" >
                                <?php echo $post->post_title; ?></a>
                        </div>
                    <?php }}
                wp_reset_query(); ?>

            </div>


            <div class="col-md-3 event-big">
                <span class="date-event">15.03.2018 г.</span>
                <br>
                <a href="http://www.bti.secna.ru/events/trinadtsataya-vserossijskaya-nauchno-tehnicheskaya-konferentsiya-studentov-aspirantov-i-molodyh-uchenyh-s-mezhdunarodnym-uchastiem-izmereniya-avtomatizatsiya-i-modelirovanie-v-promyshlennosti-i-nauchn/">
                    <b> Тринадцатая Всероссийская научно-техническая конференция студентов, аспирантов и молодых ученых с международным участием «Измерения, автоматизация и моделирование в промышленности и научных исследованиях» (ИАМП-2018)</b>
                    <br>
                    Организационный комитет Всероссийской научно-технической конференции студентов, аспирантов и молодых ученых с Международным участием «Измерения, автоматизация и моделирование в промышленности и научных исследованиях» приглашает Вас пройти регистрацию на сайте конференции www.bti.secna.ru в срок до 25 мая 2018 г.
                    <div align="center"><img src="http://old.bti.secna.ru/img_bti/12.jpg" width="100px"></div>
                </a>
            </div>

            <div style="clear:both;margin-top:20px;"></div>
            <div align=right>
                <br>
                <a href="/events/"><i class="fa fa-newspaper-o"></i> Все события</a>
            </div>
        </div>
    </div>



    <div class="block-content blog-section hidden-visible-eye" style="margin-top:30px;">
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">



                    <div style="background-image:url(<?php bloginfo('template_url'); ?>/img/mon.png););">
                        <div>
                            <a href="http://eios.bti.secna.ru/"><h3 class="ei11">Электронная информационно-образовательная среда</h3></a>


                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                    <div class="news-item row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div style="background-image:url(<?php bloginfo('template_url'); ?>/img/AP1.jpg);"></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div>
                                <a href="http://portal.bti.secna.ru/"><h3 class="ei11">Внутренний портал БТИ АлтГТУ</h3></a>
                                <a href="http://www.astu/"><h3 class="ei11">Внутренний портал АлтГТУ</h3></a>

                            </div>
                        </div>
                    </div>
                    <div class="news-item row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div style="background-image:url(<?php bloginfo('template_url'); ?>/img/EIOS.jpg);"></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div>
                                <br><a href="http://old.bti.secna.ru/nauka/effect17.shtml"><h3 class="ei11">Результаты мониторинга</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid partners block-content">
        <div class="title-space wow fadeInLeft" data-wow-delay="0.3s">
            <div class="hgroup">
                <h4 style="margin-top:40px;"><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h">Библиотечные ресурсы</span></h4>

            </div>
        </div>
        <div id="partners" class="owl-carousel enable-owl-carousel none-bg" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="http://irbis.bti.secna.ru/irbis64r_12/index.html"><img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/11.png" alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="http://elib.altstu.ru/elib/main.htm"><img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/13.png" alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="http://www.elibrary.ru/"><img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/15.png" alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="http://e.lanbook.com/"><img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/14.png" alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="http://www.biblioclub.ru/index.php?page=main_ub"><img src="http://www.bti.secna.ru/wp-content/uploads/2018/03/16.png" alt="Img"></a></div>

        </div>
    </div>


    <!--div class="block-content inner-offset">
<div class="info-texts wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <p >Научные разработки сотрудников коммерциализуются в 12 малых инновационных предприятиях, созданные в соответствии с Федеральным законодательством.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <p>В 2014 году институт (в составе университета) стал победителем конкурса федерального проекта "Новые кадры ОПК", организованного Минобрнауки РФ в соответствии с поручением Военно-промышленной комиссии.</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <p>БТИ АлтГТУ включен в реестр профессиональных образовательных организаций и образовательных организаций высшего образования для авиационной промышленности, государственной, гражданской и экспериментальной авиации./p>
            </div>
        </div>
    </div>
</div>
</div-->





    <div class="container-fluid partners block-content">

        <div class="small-posts">
            <div class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="post-info hidden-visible-eye" style="border: 1px solid #fff;">

                </div>
                <img src="https://st03.kakprosto.ru/tumb/680/images/article/2013/10/11/1_528e20294587d528e2029458b7.jpg" class="img-obinst">
                <h4><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h">БТИ АлтГТУ сегодня</span></h4>
                <div class="post-content">
                    <p> Бийский технологический институт (филиал) федерального государственного бюджетного образовательного учреждения высшего образования <a href="https://www.altstu.ru/" style="color: #337ab7;">"Алтайский государственный технический университет им. И.И. Ползунова" </a>находится в городе Бийске, который был основан в 1709 году по Указу Петра Первого.
                        Реализует все уровни высшего образования: бакалавриат, специалитет, магистратуру и подготовку кадров высшей квалификации.
                        Обучение проводится по образовательным программам, реализуемым по очной, очно-заочной и заочной формам обучения на следующих факультетах и отделении.</p>
                </div>
                <a href="/ob-institute/" class="btn btn-success btn-default read-more">Подробнее</a>
            </div>




        </div>



    </div>

    <div class="container-fluid block-content">
        <div class="row stats percent-blocks" data-waypoint-scroll="true">
            <div class="col-sm-6 col-md-3">
                <div class="chart" data-percent="90">
                    <span><i class="fa fa-folder-open"></i></span>
                    <span class="percent">90</span>Ставок НПР
                    <canvas height="0" width="0"></canvas></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="chart" data-percent="1">
                    <span><i class="fa fa-male"></i></span>
                    <span class="percent">1</span>Академик РАН
                    <canvas height="0" width="0"></canvas></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="chart" data-percent="17">
                    <span><i class="fa fa-users"></i></span>
                    <span class="percent">17</span>Докторов наук
                    <canvas height="0" width="0"></canvas></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="chart" data-percent="77">
                    <span><i class="fa fa-users"></i></span>
                    <span class="percent">77</span>Кандидатов наук
                    <canvas height="0" width="0"></canvas></div>
            </div>
        </div>

<?php get_footer(); ?>