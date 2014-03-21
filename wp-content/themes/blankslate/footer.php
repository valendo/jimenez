<!-- footer -->
<div class="footer">
  <div class="subfooter">
    <p> 
      <?php
        $menu_name = 'main-menu';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          $i = 0;
          $len = count($menu_items);
          foreach ( (array) $menu_items as $key => $menu_item ) {
              $title = $menu_item->title;
              $url = $menu_item->url;
              $menu_list .= '<a href="' . $url . '">' . $title . '</a>';
              if ($i != $len - 1) {
                $menu_list.= '<span>| </span>';
              }
              $i++;
          }
        } 
        echo $menu_list;
      ?>
      <!--<a href="index.html" class="active" >Home </a> <span>| </span> <a href="about.html" > About </a> <span>| </span> <a href="getaquote.html"> Get a Quote </a> <span>| </span> <a href="insuranceproduct.html" >Insurance Product </a><span class="hide">| </span> <a href="partners.html" >Partners </a> <span>| </span> <a href="blog.html" >Blog </a> <span>| </span> <a href="contact.html" >Contact Us </a> -->
    </p>
    <p>Email Marketing you can trust  |  Subscribe to our newsletter</p>
    <p class="subscribe">
      <input class="input" type="text" value="Name.." id="Username"  onfocus="if(this.value == 'Name..') this.value = '';" onblur="if(this.value == '') this.value = 'Name..';"  />
      <input class="input" type="text" value="Inter your E-mail.." id="Username"  onfocus="if(this.value == 'Inter your E-mail..') this.value = '';" onblur="if(this.value == '') this.value = 'Inter your E-mail..';"  />
      <input name="" type="button" value="Submit" class="btsubmit">
    </p>
    <p>©2014 Jason Jimenez Insurance Agency INC. All rights reserved. </p>
    <p class="social"> <a id="facebook" href="https://www.facebook.com/jasonjimenezinsuranceagency" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/f.png"></a> <a id="sweeter" href="https://twitter.com/JasonJimenezIns" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/t.png"></a> <a id="in" href="http://www.linkedin.com/pub/jason-jimenez/12/106/202" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/i.png"></a></p>
  </div>
</div>
<!-- box chat with me --> 
<a class="btlivechat" href="#">Live chat with me</a>
<div class="live-chat">
  <div class="block-heading"> <a class="btn-close" href="javascript:;">&nbsp;</a> <strong>Live Chat</strong> </div>
  <div class="block-content">
    <div class="box-monster">
      <figure class="img-monster"><img alt="" src="img/support-icon.png"></figure>
      <span>Hello! Can I help you choose a insurrane product?</span> </div>
    <form class="live-chat-form" id="live-chat-form" name="live_chat" method="POST" action="">
      <div class="erro" style="display:none"></div>
      <div class="form-group ">
        <input class="input" type="text" value="Name.." id="Username"  onfocus="if(this.value == 'Name..') this.value = '';" onblur="if(this.value == '') this.value = 'Name..';"  />
      </div>
      <div class="erro" style="display:none"></div>
      <div class="form-group">
        <input class="input" type="text" value="Inter your E-mail.." id="Username"  onfocus="if(this.value == 'Inter your E-mail..') this.value = '';" onblur="if(this.value == '') this.value = 'Inter your E-mail..';"  />
      </div>
      <div class="form-group">
        <input name="" type="button" class=" btn" value="Star chat">
      </div>
    </form>
    <div class="call">if you have questions? you can call for me <strong>866-835-9301</strong></div>
  </div>
</div>
<p id="back-top"> <a href="#top"><span></span>Back to Top</a> </p>
<!-- sript ---> 
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsivemobilemenu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

</body>

</html>