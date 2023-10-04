<?php get_header()?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div>
				<div class="wrap-col">
                    <h3>This is Search Page</h3>

                    <?php 
                    $s = $_GET['s'];
                    global $wp_query;
                    $total_result = $wp_query->found_posts;
                    echo "<h2>Total $total_result match found with '$s'  keyword</h2>"
                    ?>
                    <?php 
                        if(have_posts()):
                            while(have_posts()): 
                                the_post();
                    ?>

					<article>

						<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

						<?php 
							//the_content();
							the_excerpt();
						?>
					</article>

					<?php 
                        endwhile;
                        endif;
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer()?>