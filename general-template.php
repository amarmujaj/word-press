<?php
/*
    Template Name:General Template
*/
?>\

<?php get_header();?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
             <div class="container">
                 <?php
                 if(have_posts()): the_post();
                 ?>
                 <article>
                    <h1>
                          <?php the_title(); ?>
                    </h1>
                    <?php the_content();?>
                 </article>
                 <?php endwhile;
                 else: ?>
                  <p>Nothink yet to be displayed!</p>
                  <?php endif;?>
             </div>
        </main>

    </div>

</div>
<?php get_footer(); ?>