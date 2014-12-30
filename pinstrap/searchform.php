<?php
/**
 * Search Form Template
 *
 *
 * @file           searchform.php
 * @package        PinStrap 
 * @author         Brad Williams 
 * @copyright      2011 - 2013 Brag Themes
 * @license        license.txt
 * @version        Release: 2.3.0
 * @link           http://codex.wordpress.org/Function_Reference/get_search_form
 * @since          available since Release 1.0
 */
?>
	<?php /*<form method="get" class="form-search form-inline" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="input-small search-query" name="s" placeholder="<?php esc_attr_e('search here &hellip;', 'responsive'); ?>" />
		<button type="submit" class="btn" name="submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'responsive'); ?>">Search</button>
	</form> */ ?>

	<form method="get" class="form-search" action="<?php echo home_url( '/' ); ?>">
  <div class="input-append">
    <input type="text" class="span8 search-query" name="s" placeholder="<?php esc_attr_e('Search Here &hellip;', 'responsive'); ?>" />
    <button type="submit" class="btn" name="submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'responsive'); ?>">Search</button>
  </div>
</form>