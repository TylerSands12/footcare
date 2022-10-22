<div class="search_area">
	<form method="get" class="searchform" action="<?= esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="search_field autocomplete" name="s" placeholder="<?php esc_attr_e('Search...'); ?>" />
        <input class="search_icon_btn" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/assets/images/search.png" />
	</form>
</div>