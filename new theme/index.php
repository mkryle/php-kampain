<?php 
/* Template Name: kampain index*/
 ?>
<?php get_header(); ?>
<br>
<div>
    <div class="carousel">
        <ul class="slides">
   
   <?php
   var_dump(get_field('bild1'));
   ?>

        <input type="radio" name="radio-buttons" id="img-1" checked />
            <li class="slide-container">
                <div class="slide-image">
                    <img src="<?php the_field('bild1');?>">
                        <div class="imgtext">       
                        <h1><?php the_field('rubrik1');?></h1>
                        <p><?php the_field('text1');?></p></div>
                        <div class="imageshadow">
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-3" class="prev-slide">
                    <span>&lsaquo;</span>
                    </label>
                    <label for="img-2" class="next-slide">
                     <span>&rsaquo;</span>
                    </label>
                </div>
            </li>

  <input type="radio" name="radio-buttons" id="img-2" checked />
            <li class="slide-container">
                <div class="slide-image">
                    <img src="<?php the_field('bild2');?>">
                        <div class="imgtext">       
                        <h1><?php the_field('rubrik2');?></h1>
                        <p><?php the_field('text2');?></p></div>
                        <div class="imageshadow">
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-1" class="prev-slide">
                    <span>&lsaquo;</span>
                    </label>
                    <label for="img-3" class="next-slide">
                     <span>&rsaquo;</span>
                    </label>
                </div>
            </li>

  <input type="radio" name="radio-buttons" id="img-3" checked />
            <li class="slide-container">
                <div class="slide-image">
                    <img src="<?php the_field('bild3');?>">
                        <div class="imgtext">       
                        <h1><?php the_field('rubrik3');?></h1>
                        <p><?php the_field('text3');?></p></div>
                        <div class="imageshadow">
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-controls">
                    <label for="img-2" class="prev-slide">
                    <span>&lsaquo;</span>
                    </label>
                    <label for="img-1" class="next-slide">
                     <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>
