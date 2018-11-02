<?php get_header(); ?>


<h6>Search Results</h6>


<p>Here are the results for the <?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?></b> total search result(s), in the order of most recent to least
recent! There are seven results per page, in case you wanted to know ;) Hopefully you found what you
were looking for. :) These results include both <u>posts</u>
and <u>pages</u>.</p>
<br />
<?php $posts=query_posts($query_string .
'&posts_per_page=7'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h4><?php if(the_title( '', '', false ) !='') the_title(); else echo '(Untitled)';?></h4>
<?php the_excerpt(); ?>
<div class="more"><a href="<?php echo get_permalink(); ?>">Read more...</a></div>
<br />
<?php endwhile; ?>

<?php next_posts_link('<span class="drr">&laquo; Backward</span>') ?>
<?php previous_posts_link('<span class="dr">Forward &raquo;</span>') ?>

<?php else : ?>
<br />
<h1>Poop!</h1>
<p>Apparently your search results came up with nothing! D: Perhaps you made a spelling error? You can always try again :)</p>

<?php get_search_form(); ?>

</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>