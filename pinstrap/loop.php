<?php
/**
 * Front Page Loop
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        PinStrap 
 * @author         Brad Williams 
 * @copyright      2011 - 2013 Brag Themes
 * @license        license.txt
 * @version        Release: 2.3.0
 * @link           N/A
 * @since          available since Release 1.0
 */
?>
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		
        
            <li><div id="post-<?php the_ID(); ?>">
                
                <div class="post-home">

                	 <?php
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
                        $url = $thumb['0'];
                    ?>

                    <div class="view view-first">
                    <?php if ( has_post_thumbnail()) : ?>
                        <a href="<?php echo $url ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('hp-thumb'); ?>
                        </a>
                    <?php endif; ?>
                    <div class="mask">
                        <h2><?php the_title(); ?></h2>
                    <p class="link-btn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><i class="icon-link"></i></a>
                        <a href="<?php echo $url ?>" title="<?php the_title_attribute(); ?>" rel="colorbox"><i class=" icon-zoom-in"></i></a>
                    </p>
                    </div>
                    </div>


                </div><!-- end of .post-home-->             
            </div><!-- end of #post-<?php the_ID(); ?> -->
        	</li>
       
            
        <?php endwhile; ?> 
        <?php endif; ?> 

  


