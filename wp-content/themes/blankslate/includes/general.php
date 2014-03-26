<?php
class General
{
    public function get_pages_by_parent_id($parent_id) {
  		$childs = get_posts(array(
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_parent' => $parent_id,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'nopaging' => true));

    $html = '<p class="titleblock">'. get_the_title($parent_id) .'</p>';
    if (count($childs) > 0) {
    	$html.='<ul class="listblock">';
    	foreach ($childs as $child) {
    		$id = $child->ID;
	    	$title = $child->post_title;
	    	$url = get_permalink($id);
	    	$sub_childs = get_posts(array(
          'post_status' => 'publish',
          'post_type' => 'page',
          'post_parent' => $id,
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'nopaging' => true));
	    	if (count($sub_childs) > 0) {
	    		$html.='<li><a class="nomal">'.$title.'</a>';
	    		$html.='<ul class="sublist">';
	    		foreach ($sub_childs as $sub_child) {
    				$html.='<li><a href="'.get_permalink($sub_child->ID).'">'.$sub_child->post_title.'</a></li>';	
	    		}
	    		$html.='</li></ul>';
	    	}
	    	else{
    			$html.='<li><a href="'.$url.'">'.$title.'</a></li>';
	    	}
	    }
	    $html.='</ul>';
	 }
	 return $html;
    }
}
?>