<?php 
	$items = Array('bg_contact.jpg','bg_getaquote.jpg','bg_insur.jpg','bg_partners.jpg');
?>
 <div class="banner"> 
 	<img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $items[array_rand($items)] ?>"> 
</div>