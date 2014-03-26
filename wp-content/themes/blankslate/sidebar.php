<!-- Sidebar -->
 <?php 
  include(get_template_directory().'/includes/general.php');
  $instance = new General();
  $html = '';
  //Insurance Products
  $html.= $instance->get_pages_by_parent_id(24);
  //Business Insurance Products
  $html.= $instance->get_pages_by_parent_id(42);
  //Miscellaneous
  $html.= $instance->get_pages_by_parent_id(152);
  //Secondary Markets
  $html.= $instance->get_pages_by_parent_id(156);
?>
<div class="sidebar">
  <?php echo $html; ?>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    // for moblie
    $('.sidebar').slicknav({allowParentLinks:true});
    //end===  
    $('.sidebar .listblock li ul').hide();
    $('.sidebar > .listblock > li > a').click(function(){
      if ($(this).attr('class') != 'active'){
        $('.sidebar li ul').slideUp();
        $(this).next().slideToggle();
        $('.sidebar .listblock li a').removeClass('active');
        $(this).addClass('active');
      
      }
    });
  });
</script> 