<?php get_header(); ?>

<section id="intro">
	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="content">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</section>
<hr />

<?php

wp_reset_query();
wp_reset_postdata();

$portfolio = new WP_Query(array('post_type'=>'post'));

if ($portfolio->have_posts()) : ?>
	<section id="portfolio">

		<div class="container">
			<h2>Web Development Portfolio</h2>
		</div>

		<div class="grid align-items-stretch flex-wrap">
			<?php while ($portfolio->have_posts()) : $portfolio->the_post() ?>

				<div class="project animate">

					<a class="block animate" href="#<?php echo sanitize_title(get_the_title()) ?>" style="background-image:url('<?php the_post_thumbnail_url('2048X2048') ?>')" data-lity><?php the_title() ?></a>

					<div class="lity-hide">
						<div id="<?php echo sanitize_title(get_the_title()) ?>" class="project-details d-md-flex align-items-stretch">

							<div class="col-md-6 preview" style="background-image:url('<?php the_post_thumbnail_url() ?>')"></div>

							<div class="col-md-6 info d-md-flex justify-content-end">
								<div class="wrapper">
									<h6>Project</h6>
									<h3><a href="<?php the_field('jt_project_url') ?>" target="_blank" rel="nofollow"><?php the_title() ?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></h3>
									<h5>Features</h5>
									<?php the_content() ?>
									<div class="ctas"><button data-lity-close>Exit <i class="fa-regular fa-circle-xmark"></i></button></div>
								</div>
							</div>

						</div>
					</div>

				</div>

			<?php endwhile ?>
		</div>

	</section>
<?php endif;

wp_reset_query();
wp_reset_postdata(); ?>

<?php
if (have_rows('jt_page_rows')) : while (have_rows('jt_page_rows')) : the_row();

	$head = get_sub_field('header');
	$page = get_sub_field('page');

	?>
	<section id="<?php echo sanitize_title($head) ?>">
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="content">

					<?php //if ($head) echo '<h2>'.$head.'</h2>' ?>

					<?php if ($page) echo apply_filters('the_content',get_post($page)->post_content) ?>

				</div>
			</div>
		</div>
	</section>
	<hr />
<?php endwhile; endif ?>

<?php get_footer(); ?>