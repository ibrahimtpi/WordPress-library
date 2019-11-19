# WP List Pages

** Display all the pages **
<?php
wp_list_pages(); //Display all the pages with a title at top 'Pages'
?>


** Show Child pages of Parant page **
<?php
  $parentPageId = wp_get_post_parent_id( get_the_ID() );

  $pageHasChild = get_pages(array(
    'child_of'  => get_the_id
  ));

  if( $parentPageId or $pageHasChild) {
?>

    <div class="page-links">
      <h2 class="page-links-title"><a href="<?php echo get_permalink($parentPageId);?>"><?php echo get_the_title($parentPageId);?></a></h2>
      <ul class="min-list">
        <?php
        if( $parentPageId ) {
          $childPageId = $parentPageId;
        } else {
          $childPageId = get_the_ID;
        }

        wp_list_pages(array(
          'title_li'  => NULL,
          'child_of'  => $childPageId,
          'sort_column'	=> 'menu_order' //has options under Page Attributes
        ));
        ?>
      </ul>
    </div>

<?php } ?>
