<?php
/*
Template Name: abitur
*/
?>
<?php get_header(); ?>

<div class="row">
 <div class="container" style="margin-bottom:50px;">
     <div class="bread_cr">
         <?php
         if(function_exists('bcn_display'))
         {
             bcn_display();
         }
         ?>
     </div>
     <div class="col-md-9">
         <div class="posts">
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
                     'category__in' => array( 11 ),
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

                         <div class="service-item col-xs-12  col-sm-6  col-md-4 col-lg-4 wow zoomIn news" data-wow-delay="0.3s">
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
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> <?php the_title(); ?></span></h4> 
 <?php the_content(); ?>
     </div>
     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;ДОПОЛНИТЕЛЬНО</div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/podgotovitelnye-kursy/">Подготовительные курсы</a></div>
         <div class="menu_r">  <a href="http://old.bti.secna.ru/abitur/prof-test.php"> Профориентационное тестирование</a></div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/sveden/paid_edu/"> Платные образовательные услуги</a></div>
         <div class="menu_r">  <a href="http://old.bti.secna.ru/abitur/celevoj_priem.php">Целевой прием </a></div>
         <div class="menu_r">  <a href="http://old.bti.secna.ru/abitur/inostr_gr.php">Прием иностранных граждан</a></div>
         <div class="menu_r">  <a href="http://old.bti.secna.ru/abitur/doc/2016/BTI_-_Booklet_Abiturient_2016.pdf">Справочник абитуриента </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;ВОССТАНОВЛЕНИЕ, ПЕРЕХОД И ПЕРЕВОД</div>
         <div class="menu_r">  <a href="http://db.biysk.secna.ru/umk/rp.smc_docum_down.doc_download?id_doc_dl=7829&pdf_word=2 "> Порядок перехода, перевода и восстановления в ФГБОУ ВО Алтайский государственный технический университет им. И.И. Ползунова</a></div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/sveden/vacant/"> Сведения об имеющихся вакантных бюджетных местах</a></div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/sveden/education/">Сведения о результатах перевода, восстановления и отчисления </a></div>
         <div class="menu_r">  <a href="http://abitur.cbias.ru/universities/2441">Поступай правильно: Каталог вузов </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;РЕЗУЛЬТАТЫ ПРИЕМА</div>
         <div class="menu_r"><a href="http://www.bti.secna.ru/abitur/prikazy-o-zachislenii-2017/">Приказы о зачислении 2017 года</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/abitur/doc/2017/rez-priem2017.pdf">Результаты приема в БТИ АлтГТУ в 2017 году</a></div>
         <div class="menu_r"> <a href="http://www.bti.secna.ru/abitur/prikazy-o-zachislenii-2016-goda/">Приказы о зачислении 2016 года</a></div>
         <div class="menu_r"><a href="http://www.bti.secna.ru/abitur/rezultaty-priema-v-bti-altgtu-v-2016-godu/">Результаты приема в БТИ АлтГТУ в 2016 году</a></div>
         <div class="menu_r"><a href=" http://www.bti.secna.ru/abitur/prikazy-o-zachislenii-2015-goda/">Приказы о зачислении 2015 года</a></div>
         <div class="menu_r"> <a href="http://www.bti.secna.ru/abitur/rezultaty-priema-v-bti-altgtu-v-2015-godu/">Результаты приема в БТИ АлтГТУ в 2015 году</a></div>
         <div class="menu_r"> <a href=" http://www.bti.secna.ru/abitur/prikazy-o-zachislenii-2014-goda/">Приказы о зачислении 2014 года</a></div>
         <div class="menu_r"> <a href="http://www.bti.secna.ru/abitur/rezultaty-priema-v-bti-altgtu-v-2014-godu/">Результаты приема в БТИ АлтГТУ в 2014 году</a></div>
          <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;АКТУАЛЬНО</div>
         <div class="menu_r_none_link"><p itemprop="blankNum">Информация о количестве поданных заявлений о приеме</p><span>Доступно со дня начала приемной кампании</span></div>
         <div class="menu_r_none_link"><p itemprop="priemList">Списки лиц, подавших документы, необходимые для поступления</p><span>Доступно со дня начала приемной кампании</span></div>
         <div class="menu_r_none_link"><p itemprop="priemListKontr">Списки лиц, поступающих на места в рамках контрольных циф</p>
             <span>Доступно со дня начала приемной кампании</span>
             <span itemprop="priemListKontr"></span>
             <span itemprop="priemListQuota"></span>
             <span itemprop="priemListTarget"></span>
             <span itemprop="priemListCommon"></span></div>
         <div class="menu_r_none_link"><p itemprop="priemListContract">Списки лиц, поступающих на места по договорам об оказании платных образовательных услуг </p>
             <span>Доступно со дня начала приемной кампании</span></div>
         <div class="menu_r_none_link"><p itemprop="priemListNoExam">Списки лиц, поступающих без вступительных испытани </p>
             <span>Доступно со дня начала приемной кампании</span></div>
         <div class="menu_r_none_link"><p itemprop="priemAcceptRefusing">Список лиц, подавших документы, необходимые для поступления, с указанием сведений о приеме или об отказе в приеме документов </p>
             <span>Доступно со дня начала приемной кампании</span></div>
         <div class="menu_r_none_link"><p itemprop="priemEnrol">Приказы о зачислении на обучение  </p>
             <span>Размещаются в день их издания</span></div>
         <div class="menu_r_none_link"><p itemprop="priemAdditional">Информация о дополнительном приеме </p>
             <span>Размещаются 15.08.2018 г.</span></div>
     </div>


 <?php endwhile; else: ?> 
 <p>
 <?php _e('К сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div> </div>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".hider").click(function(){
                $("#hidden").slideToggle("slow");
                return false;
            });
            $(".hider1").click(function(){
                $("#hidden1").slideToggle("slow");
                return false;
            });
            $(".hider2").click(function(){
                $("#hidden2").slideToggle("slow");
                return false;
            });
            $(".hider3").click(function(){
                $("#hidden3").slideToggle("slow");
                return false;
            });
            $(".hider4").click(function(){
                $("#hidden4").slideToggle("slow");
                return false;
            });
            $(".hider5").click(function(){
                $("#hidden5").slideToggle("slow");
                return false;
            });
            $(".hider6").click(function(){
                $("#hidden6").slideToggle("slow");
                return false;
            });
            $(".hider7").click(function(){
                $("#hidden7").slideToggle("slow");
                return false;
            });
        });
    </script>
<?php get_footer(); ?>