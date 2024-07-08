<footer id="footer">
	<div class="container">
		<p>Copyright &copy;<?php echo date('Y') ?> Jensen Tabangcura; all rights reserved.<br>
		The featured websites are copyright &copy;<?php echo date('Y') ?> to their respected owners.</p>
	</div>
</footer>

<script>
jQuery(document).ready(function($) {
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