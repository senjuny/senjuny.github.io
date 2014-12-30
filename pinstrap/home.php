<?php
/**
 * Front Page
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
<?php get_header(); ?>

<!-- start infinite scroll function  -->

<script type="text/javascript">
    jQuery(document).ready(function($) {

        var count = 2;
        var total = <?php echo $wp_query->max_num_pages; ?>;
        $(window).scroll(function(){
                if  ($(window).scrollTop() == $(document).height() - $(window).height()){
                   if (count > total){
                   	  	return false;
                   }else{
                   		loadArticle(count);
                   }
                   count++;
                }
        }); 

        function loadArticle(pageNumber){ 

                $('a#inifiniteLoader').show('fast');

                $.ajax({
                    url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
                    type:'POST',
                    data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop', 
                    success: function(html){
                        $('a#inifiniteLoader').hide('1000');
        
                        $("#tiles").append(html);    // This will be the div where our content will be loaded
                        $("a[rel='colorbox']").colorbox({
                                transition:'elastic', 
                                opacity:'0.7', 
                                maxHeight:'90%'
                        });
                    }
                });
            return false;
        }

    });


</script>

<!-- end infinite scroll pagination -->


<div class="container">
	<div class="row">


		<div class="span12">
			<div id="main" role="main">
			<ul id="tiles" class="unstyled">


                <?php
            /* Run the loop to output the posts.
             * If you want to overload this in a child theme then include a file
             * called loop-index.php and that will be used instead.
             */
             get_template_part( 'loop' );
            ?>

        </ul>
        </div>


		</div>

            </div>




</div>

 <a id="inifiniteLoader">Loading... <img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif"></a>





<?php get_footer(); ?>

