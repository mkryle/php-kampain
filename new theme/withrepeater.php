<?php 
/* Template Name: kampain*/
 ?>
<?php get_header(); ?>
<br>
<div>
    <div class="carousel">
        <ul class="slides">
   
   <?php
   var_dump(get_field('kampain_sida'));

   $currentPage = 1;
   ?>

 <?php if( have_rows('kampain_sida') ): 
       while( have_rows('kampain_sida') ): the_row(); ?>

        <input type="radio" name="radio-buttons" id="img-<?php echo $currentPage; ?>" checked />
            <li class="slide-container">
                <div class="slide-image">
                    <img src="<?php the_sub_field('bild');?>">
                        <div class="imgtext">       
                        <h1><?php the_sub_field('rubrik');?></h1>
                        <p><?php  the_sub_field('text');?></p></div>
                        <div class="imageshadow">
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-<?php echo $currentPage - 1; ?>" class="prev-slide">
                    <span>&lsaquo;</span>
                    </label>
                    <label for="img-<?php echo $currentPage + 1; ?>" class="next-slide">
                     <span>&rsaquo;</span>
                    </label>
                </div>
            </li>';

     <?php
        $currentPage =  $currentPage + 1;

       endwhile; 
       endif; ?>


        </ul>
    </div>
</div>
<?php get_footer(); ?>
