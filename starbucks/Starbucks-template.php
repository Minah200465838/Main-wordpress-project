<?php
/* 
Template Name: Starbucks(Advanced Custom Fields) 
Template Post Type: Page 
*/
get_header();
?>
<!-- adding content using advanced custom fields -->
<!-- main -->
<main>
      
      <div class="home-row home-row-1">
        <img class="goalimg" src="<?php the_field("landingmaindrink"); ?>" alt="drinks" />
        <h3 class="title-1"><?php the_field("texth1"); ?></h3>
        <p class="home-desc-1"><?php the_field("p1"); ?></p>
        <button href="#" class="btn btn-outline-success btn-1"><?php the_field("seemore"); ?></button>
      </div>

      <div class="home-row home-row-2">
        <img class="codinggif" src="<?php the_field("landingimagebean"); ?>" alt="bean" />
        <h3 class="title-2"><?php the_field("buyyourlove"); ?></h3>
        <p class="home-desc-2"><?php the_field("p2"); ?></p>
        <button href="#" class="btn btn-outline-danger btn-2"><?php the_field("seemmoretwo"); ?></button>
      </div>

      <div class="home-row home-row-3">
        <img src="<?php the_field("landingimagebrown"); ?>" alt="brown" class="goalimg" />
        <h3 class="title-3"><?php the_field("pickyourfavorite"); ?></h3>
        <p class="home-desc-3"><?php the_field("p3"); ?></p>
        <button href="#" class="btn btn-outline-secondary btn-3"><?php the_field("seemorethree"); ?></button>
     </div>
</main>
<?php
get_footer();
?>