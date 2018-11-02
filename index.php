<?php get_header(); ?>


<?php if (is_front_page() && !is_paged() )
     $posts = query_posts($query_string . '&cat=-174'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog"><?php if(the_title( '', '', false ) !='') the_title(); else echo '(Untitled)';?> </a></h6>
<h3>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time('h:i a') ?> <?php edit_post_link('Edit', '| '); ?></span></h3>

<?php the_content( '<div class="more">Read more &raquo;</div>' , TRUE, '' ); ?> 

<h3><span class="right"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments');?> | <a href="<?php the_permalink() ?>#respond">Leave a comment &raquo;</a></span></h3>

<br />

<?php endwhile; ?>

<?php next_posts_link('<span class="drr">&laquo; Previous</span>') ?>
<?php previous_posts_link('<span class="dr">Next &raquo;</span>') ?>

<?php else : ?>

<h1>Aw, hamburgers!</h1>

<div id="entry">
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>

</div>
<?php endif; ?>
</div>

<?php get_footer(); ?>