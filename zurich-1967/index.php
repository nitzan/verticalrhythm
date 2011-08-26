<?php
get_header(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />

<?php if (have_posts()) : ?>


<div id="yellow-box">

<?php
 $lastposts = get_posts('numberposts=2');
 foreach($lastposts as $post) :
    setup_postdata($post);
 ?>
 
 <div class="column">
 
 <h3><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
 <?php the_content(); ?>
 </div>
 <?php endforeach; ?>
 
 <?php
 $lastposts = get_posts('numberposts=1&offset=-2');
 foreach($lastposts as $post) :
    setup_postdata($post);
 ?>
 
 <div class="column-3">
 
 <h3><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
 <?php the_content(); ?>
 </div>
 <?php endforeach; ?>

<div class="sub-column">
<p>
Voverkaufsstellen:<br />
Tonhallekasse, Hug & Co, Limmaalquai,<br />
Planchaus jecklin, Pfauen<br />
Reisbüro Kuoni AG, Bahnhofplatz<br /><br />

Preise der Einzelkarten<br />
a) für die fünf Orchesterkonzerte Fr, 9.-<br />
bis 24.-<br />
b) für den Liederabend Fr, 4.50 bis 15.-<br />
c) für don Kammermusikabend Fr, 4.40<br />
bis 9.90
</p>


</div>



</div>

<div>
  <?php get_footer(); ?>

</div>

<?php endif; ?>

</body>