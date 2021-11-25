<?php /*
$tags = get_tags(array(
  'hide_empty' => false
));
foreach ($tags as $tag) {
  echo '<button type="submit" class="btn btn-primary mr-1 mb-1">' . $tag->name . '</button>';
}*/


$categories = get_categories();
foreach ( $categories as $category ) {
    $category_link = get_category_link( $category->term_id );

    echo "<a href='{$category_link}' title='{$category->name} Tag'>{$category->name} <br></a>";

}

?>
