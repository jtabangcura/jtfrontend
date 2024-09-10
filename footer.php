<footer id="footer">
	<div class="container">

		<?php
		$social = get_field('jt_footer_sm','option');
		if ($social) :?>
			<ul id="sm" class="d-flex align-items-center justify-content-center">
				<?php
				foreach ($social as $sm)
					echo '<li><a href="'.$sm['url'].'" target="_blank" class="animate">'.$sm['fa'].'<span>'.$sm['label'].'</span></a></li>' ?>
			</ul>
		<?php endif ?>

		<?php the_field('jt_footer','option') ?>

		<?php
			$last = new WP_query(array('post_type'=>array('page','post'),'posts_per_page'=>1,'orderby'=>'modified','order'=>'desc'));
			if ($last->have_posts()) :
				while ($last->have_posts()) : $last->the_post();
					echo '<p><em>last modified '.get_the_modified_time('F j, Y').'</p>';
				endwhile;
			endif
		?>

	</div>
</footer>

<script>
jQuery(document).ready(function($) {

	$('#nav-toggle').on('click',function(){
		$(this).closest('#header').toggleClass('active');
	});

	$(window).scroll(function(){

    if ($(this).scrollTop() > 10) $('#header').addClass('lined');
    else $('#header').removeClass('lined');
    
    if ($(this).scrollTop() > 100) $('#header').addClass('scrolled');
    else $('#header').removeClass('scrolled');
    
	});

});
</script>

<?php wp_footer() ?>

</body>
</html>