<?php 
/**
*
* Define Constants
*
**/
define('THEMEROOT', get_stylesheet_directory_uri() );
define('IMAGES', THEMEROOT.'/images');

/*=================================
=            Add Menus            =
=================================*/

function register_my_menus()
{
	register_nav_menus(array(
			'main-menu' => 'Main Menu',
			'category-menu' => 'Category Menu'
		)
	);
}

add_action( 'init', 'register_my_menus' );

/*-----  End of Add Menus  ------*/

/*=============================================================
=            Add Theme Support for Post Thumbnails            =
=============================================================*/

if ( function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 362, 209 );
}

/*-----  End of Add Theme Support for Post Thumbnails  ------*/

/*=====================================
=            Load JS Files            =
=====================================*/
    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function load_custom_scripts() {
		wp_enqueue_script( 'custom_scripts', THEMEROOT . '/js/custom.js', array( 'jquery' ), false, true);
	}

	add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );




/*-----  End of Load JS Files  ------*/





/*===================================================
=            Add Meta Boxes to the Posts            =
===================================================*/

add_action( 'add_meta_boxes', 'custom_add_meta_box' );

function custom_add_meta_box()
{
	add_meta_box( 
		'portfolio_details',  		//ID
		'Portfolio Entry Details',  //Title
		'custom_display_meta_box', 	//Callback
		'post', 					//Targeted post type
		'normal' 					//Position
	);

}

function custom_display_meta_box($post)
{
	$portfolio_description = get_post_meta( $post->ID, 'portfolio_description', true );
	$portfolio_link = get_post_meta( $post->ID, 'portfolio_link', true );
	$portfolio_quote = get_post_meta( $post->ID, 'portfolio_quote', true );
	$portfolio_quote_author = get_post_meta( $post->ID, 'portfolio_quote_author', true );

	//Security check 
	wp_nonce_field( 'portfolio_meta_nonce', 'portfolio_nonce' );

	//Display fields
	?>

	<p>
		<label for="portfolio_description">Project Description:</label>
		<textarea name="portfolio_description" id="portfolio_description" cols="30" rows="10" class="widefat">
			<?php echo $portfolio_description ?>
		</textarea>
	</p>
	<p>
		<label for="portfolio_link">Link:</label>
		<input type="text" name="portfolio_link" id="portfolio_link" class="widefat" value="<?php echo $portfolio_link ?>">
	</p>
	<p>
		<label for="portfolio_quote">Project Quote:</label>
		<textarea name="portfolio_quote" id="portfolio_quote" cols="30" rows="10" class="widefat">
			<?php echo $portfolio_quote ?>
		</textarea>
	</p>
	<p>
		<label for="portfolio_quote_author">Quote Author:</label>
		<input type="text" name="portfolio_quote_author" id="portfolio_quote_author" class="widefat" value="<?php echo $portfolio_quote_author ?>">
	</p>


	<?php
}

add_action( 'save_post', 'customize_save_portfolio_details' );

function customize_save_portfolio_details($post_id)
{
	// If we're doing an autosave, return 
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

	// If nonce if not present or invalid, return 
	if ( !isset($_POST[ 'portfolio_nonce' ]) || !wp_verify_nonce( $_POST['portfolio_nonce'], 'portfolio_meta_nonce' ) ) return;

	// Save/Update Data 
	if (isset($_POST['portfolio_description']) && $_POST['portfolio_description'] != '') {
		update_post_meta( $post_id, 'portfolio_description', esc_html($_POST['portfolio_description']) );
	}

	if (isset($_POST['portfolio_link']) && $_POST['portfolio_link'] != '') {
		update_post_meta( $post_id, 'portfolio_link', esc_html($_POST['portfolio_link']) );
	}

	if (isset($_POST['portfolio_quote']) && $_POST['portfolio_quote'] != '') {
		update_post_meta( $post_id, 'portfolio_quote', esc_html($_POST['portfolio_quote']) );
	}

	if (isset($_POST['portfolio_quote_author']) && $_POST['portfolio_quote_author'] != '') {
		update_post_meta( $post_id, 'portfolio_quote_author', esc_html($_POST['portfolio_quote_author']) );
	}
}

/*-----  End of Add Meta Boxes to the Posts  ------*/

	






























