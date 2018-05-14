<?php
/*
Template Name: trud
*/
?>
<?php get_header(); ?>
<div class="row" style="margin-bottom:50px;">
 <div class="container" style="">
     <div class="bread_cr">
         <?php
         if(function_exists('bcn_display'))
         {
             bcn_display();
         }
         ?>
     </div>
<div class="col-md-9">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> <?php the_title(); ?></span></h4> 
 <?php the_content(); ?>
 <?php endwhile; else: ?> 
 <p>
 <?php _e('  сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div>
     <div class="col-md-3" style="padding-right: 0px; margin-top: 10px;">
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ГРУППА ПО КАДРОВОМУ УЧЕТУ</div>
         <div class="menu_r"><a href="http://www.bti.secna.ru/trudoviye-otnosheniya/gruppa-po-kadrovomu-uchetu/">Направления деятельности</a></div>
         <div class="menu_r"><a href="http://www.bti.secna.ru/trudoviye-otnosheniya/gruppa-po-kadrovomu-uchetu/"> Режим рабочего времени</a></div>
         <div class="menu_r"><a href="http://www.bti.secna.ru/trudoviye-otnosheniya/gruppa-po-kadrovomu-uchetu/">Работники</a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ПРИЕМ НА РАБОТУ В БТИ АлтГТУ</div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/priem/doc_npr.doc">Документы для приема на должность научно-педагогического работника</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/priem/doc.doc">Документы для приема на должности других категорий работников</a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ОБРАЗЦЫ ДОКУМЕНТОВ</div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/trud/tabel_tit_list.doc"> Табель учета рабочего времени (титульный лист) </a></div>
         <div class="menu_r"><a href="http://db.biysk.secna.ru/umk/rp.smc_docum_down.doc_download?id_doc_dl=2721&amp;pdf_word=1"> Табель учета рабочего времени (табель)</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/trud/listok.doc"> Личный листок по учету кадров</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/trud/ar_form.doc">Архивная справка о переименовании БТИ АлтГТУ </a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/dov_zar_plat.doc">Доверенность на получение заработной платы </a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/dov_diplom.doc">Доверенность на получение диплома</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/trud/nsmail.doc">Служебная записка о привлечении работников к работе в выходные и праздничные дни </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ОТПУСКА</div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/grafik_otp2018.xls">График отпусков на 2018 год</a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/prN814.doc">Информация о предоставлении отпусков, связанных с подготовкой докторской и кандидатской диссертации. Приказ Минобразования РФ от 27.03.1998 N 814 </a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/prikaz3570.doc">Приказ МО РФ об утверждении положения о порядке предоставления педагогическим работникам длительного отпуска сроком до 1 года </a></div>
         <div class="menu_r"><a href="http://old.bti.secna.ru/total/ok/docs/otpusk/polozhenie.doc">Положение о порядке предоставления педагогическим работникам БТИ АлтГТУ длительного отпуска сроком до 1 года</a></div>
     </div>
 </div>
 </div>

<?php get_footer(); ?>