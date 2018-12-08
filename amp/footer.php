<footer class="amp-wp-footer">
	<div>
		<h2><?php echo esc_html( wptexturize( $this->get( 'blog_name' ) ) ); ?></h2>
		<p>
			<a href="<?php echo esc_url( esc_html__( 'https://www.samkillermann.com/overthinking-everything-so-you-dont-have-to/', 'amp' ) ); ?>">
				<?php
				// translators: %s is WordPress.
				echo esc_html( sprintf( __( '%s', 'amp' ), 'Overthinking everything so you don\'t have to.' ) );
				?>
			</a>
		</p>
		<a href="#top" class="back-to-top"><?php esc_html_e( 'Back to top', 'amp' ); ?></a>
	</div>
</footer>
