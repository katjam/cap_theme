<?php
  global $wp_query;
  global $post_id;
  $post_id = $wp_query->post->ID;
  $gallery_id = get_post_meta( $post_id, 'cap_film_prod_galleryid', true );
?>
<?php if (get_page_template_slug($post_id) === 'dosn-page-template.php'): ?>
	<?php $gallery_id = 102;?>
<?php endif;?> 

        <div id="sidebar-capfilm" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
        <?php if ($gallery_id): ?>
          <?php echo do_shortcode('[print_gllr id='. $gallery_id . ']');?>
        <?php endif; ?>
	</div>
