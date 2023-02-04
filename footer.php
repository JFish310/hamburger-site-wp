	<footer class="l-footer">
		<?php
		wp_nav_menu( array(
			'theme_location'	=> 'footer_nav' ,
			'container'		=> false			// ulを囲う要素を指定。div or nav。なしの場合には false
			)
		);
		?>
		<p>
			<small>Copyright: RaiseTech</small>
			<!-- Copyright: RaiseTech -->
		</p>
	</footer>

	<script src="/js/menu.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>
