</div>
  <footer class='w-full text-center border-t border-grey p-4 pin-b'>
		<p class="footer-copyright">&copy;
			<?php
			echo date_i18n(
				_x( 'Y', 'copyright date format', 'wp-vanilla' )
			);
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
		</p>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
