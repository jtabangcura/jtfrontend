<?php get_header(); ?>

<section id="page">
	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="content">

				<h1><?php the_title() ?></h1>

				<?php the_content() ?>

			</div>
		</div>
	</div>
</section>
<hr />

<?php get_footer(); ?>