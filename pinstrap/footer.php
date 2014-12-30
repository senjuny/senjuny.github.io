<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        PinStrap 
 * @author         Brad Williams 
 * @copyright      2011 - 2013 Brag Themes
 * @license        license.txt
 * @version        Release: 2.3.0
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of wrapper-->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
    
   
</div><!-- end of container -->
 <?php responsive_container_end(); // after container hook ?>
<div id="footer-widgets">
<div class="container">
      <div id="widgets" class="row">
        <div class="span12">
            <div class="row-fluid">
        <div class="span4">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('footer-widget-1')) : ?>
            
                <div class="widget-title"><h3><?php _e('Widget 1', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your first footer widget box. To edit please go to Appearance > Widgets and choose 4th widget from the top in area called Footer Widget 1. Title is also managable from widgets as well.','responsive'); ?></div>
            
      <?php endif; //end of home-widget-1 ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of span4 -->

        <div class="span4">
        <?php responsive_widgets(); // responsive above widgets hook ?>
            
      <?php if (!dynamic_sidebar('footer-widget-2')) : ?>
            
                <div class="widget-title"><h3><?php _e('Widget 2', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your second footer widget box. To edit please go to Appearance > Widgets and choose 5th widget from the top in area called Footer Widget 2. Title is also managable from widgets as well.','responsive'); ?></div>
            
      <?php endif; //end of home-widget-2 ?>
            
            <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of span4 -->

        <div class="span4">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('footer-widget-3')) : ?>
            
                <div class="widget-title"><h3><?php _e('Widget 3', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your third footer widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area called Footer Widget 3. Title is also managable from widgets as well.','responsive'); ?></div>
        
        <?php endif; //end of home-widget-3 ?>
            
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end span4-->
    </div><!-- end of row-fluid -->
    </div><!-- end of span12 -->
    </div><!-- end of #widgets -->
  </div>
</div>
 

<div id="footer" class="clearfix">
    <div class="container">
     
    <div id="footer-wrapper">
    
    <div class="span12">

      <div class="row-fluid">

        <div class="span6">
          <?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
          <?php wp_nav_menu(array(
            'container'       => '',
          'menu_class'      => 'footer-menu',
          'theme_location'  => 'footer-menu')
          ); 
              ?>
         <?php } ?>
        </div><!-- span6 -->

        <div class="span6 powered">
           <?php
                $powered_text = of_get_option('powered_text');
                  if ($powered_text){ ?> 
                <?php echo $powered_text ?>
                <?php } else { ?>
                    <?php printf('PinStrap'); ?>
            developed by <a href="<?php echo esc_url(__('http://bragthemes.com','responsive')); ?>" title="<?php esc_attr_e('Brag Themes', 'responsive'); ?>">
                    <?php printf('Brag Themes'); ?></a>
              <?php } ?>    
        </div><!-- end .powered -->
      </div>
        
    </div><!-- span12-->
  </div><!-- end #footer-wrapper -->
    </div>
</div><!-- end #footer -->


<?php wp_footer(); ?>


</body>
</html>