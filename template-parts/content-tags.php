<?php /*
$tags = get_tags(array(
  'hide_empty' => false
));
foreach ($tags as $tag) {
  echo '<button type="submit" class="btn btn-primary mr-1 mb-1">' . $tag->name . '</button>';
}*/


$tags = get_tags();
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );

    echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='btn btn-primary mr-1 mb-1 text-light'>{$tag->name}</a>";

}

?>
