<!-- Sidebar -->
  <div class="sidebar">
  <?php 
  	$parent_id_1 = 24;
  	$childs_1 = get_posts(array(
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_parent' => 24,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'nopaging' => true));

    $html = '<p class="titleblock">'. get_the_title($parent_id_1) .'</p>';
    if (count($childs_1) > 0) {
    	$html.='<ul class="listblock">';
    	foreach ($childs_1 as $child_1) {
    		$id = $child_1->ID;
	    	$title = $child_1->post_title;
	    	$url = get_permalink($id);
	    	$sub_childs_1 = get_posts(array(
          'post_status' => 'publish',
          'post_type' => 'page',
          'post_parent' => $id,
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'nopaging' => true));
	    	if (count($sub_childs_1) > 0) {
	    		$html.='<li><a class="nomal">'.$title.'</a>';
	    		$html.='<ul class="sublist">';
	    		foreach ($sub_childs_1 as $sub_child_1) {
    				$html.='<li><a href="'.get_permalink($sub_child_1->ID).'">'.$sub_child_1->post_title.'</a></li>';	
	    		}
	    		$html.='</li></ul>';
	    	}
	    	else{
    			$html.='<li><a href="'.$url.'">'.$title.'</a></li>';
	    	}
	    }
	    $html.='</ul>';
	}
   
    echo $html;
  ?>
    <p class="titleblock">Insurance Products</p>
    <ul class="listblock">
      <li><a href="/index.html">Auto</a></li>
      <li><a class="nomal">Home</a>
        <ul class="sublist">
          <li><a href="#"> Home Owners </a></li>
          <li><a href="#"> Basic Dwelling </a></li>
          <li><a href="#">Renters </a></li>
          <li><a href="#"> Mobile Home </a></li>
        </ul>
      </li>
      <li><a class="nomal">Commercial</a>
        <ul  class="sublist">
          <li><a href="#"> General Liability </a></li>
          <li><a href="#"> Workers Compensation </a></li>
          <li><a href="#"> Commercial Auto </a></li>
          <li><a href="#"> Commercial Property </a></li>
          <li><a href="#"> Restaurant Insurance </a></li>
          <li><a href="#"> Bonds </a></li>
          <li><a href="#"> E&O </a></li>
        </ul>
      </li>
      <li><a href="#">Life</a></li>
      <li><a class="nomal">Health</a>
        <ul  class="sublist">
          <li><a href="#"> Individual PPO </a></li>
          <li><a href="#"> HSA </a></li>
          <li><a href="#"> Short Term </a></li>
          <li><a href="#"> Dental </a></li>
          <li><a href="#"> Vision </a></li>
          <li><a href="#"> Medical Supplements </a></li>
          <li><a href="#"> Group Insurance </a></li>
          <li><a href="#"> AFLAC </a></li>
        </ul>
      </li>
      <li><a href="#">Boat</a></li>
      <li><a href="#">Motorcycle</a></li>
    </ul>
    <p class="titleblock">Business Insurance Products</p>
    <ul class="listblock">
      <li> <a href="insurance_detail.html"> Apartment / Habitational Insurance</a></li>
      <li><a href="insurance_detail.html">Artisan/Contractor Insurance</a></li>
      <li><a href="insurance_detail.html">Automotive Service & Repair</a></li>
      <li><a href="insurance_detail.html">Business Auto Insurance</a></li>
      <li><a href="insurance_detail.html">Commercial Real Estate Insurance</a></li>
      <li><a href="insurance_detail.html">Commercial Umbrella Insurance</a></li>
      <li><a href="insurance_detail.html">Institutional Insurance</a></li>
      <li><a href="insurance_detail.html">Hospitality Insurance</a></li>
      <li><a href="insurance_detail.html">Manufacturing Insurance</a></li>
      <li><a href="insurance_detail.html">Retail Store / Service Insurance</a></li>
      <li><a href="insurance_detail.html">Restaurant Insurance</a></li>
      <li><a href="insurance_detail.html">Wholesale/Distribution Insurance</a></li>
    </ul>
    <p class="titleblock">Miscellaneous</p>
    <ul class="listblock">
      <li> <a href="insurance_detail.html"> Workers Compensation Insurance</a></li>
      <li> <a href="insurance_detail.html">EPLI</a></li>
      <li> <a href="insurance_detail.html">Bonds</a></li>
    </ul>
    <p class="titleblock">Secondary Markets</p>
    <ul class="listblock">
      <li> <a href="insurance_detail.html"> Adult Day Care Insurance</a></li>
      <li> <a href="insurance_detail.html">Alarm Installer Insurance</a></li>
      <li> <a href="insurance_detail.html">Amusement Insurance</a></li>
      <li> <a href="insurance_detail.html">Animal Services Insurance</a></li>
      <li> <a href="insurance_detail.html">Bakery Insurance</a></li>
      <li> <a href="insurance_detail.html">Bar/Tavern Insurance</a></li>
      <li> <a href="insurance_detail.html">Beauty/Barber Shop Insurance</a></li>
      <li> <a href="insurance_detail.html">Bed and Breakfast Insurance</a></li>
      <li> <a href="insurance_detail.html">Caterers Insurance</a></li>
      <li> <a href="insurance_detail.html">Church Insurance</a></li>
      <li> <a href="insurance_detail.html">Club Insurance</a></li>
      <li> <a href="insurance_detail.html">Communications Insurance</a></li>
      <li> <a href="insurance_detail.html">Day Care Insurance</a></li>
      <li> <a href="insurance_detail.html">Detective Agency Insurance</a></li>
      <li> <a href="insurance_detail.html">Event Planners Insurance</a></li>
      <li> <a href="insurance_detail.html">Excavation Insurance</a></li>
      <li> <a href="insurance_detail.html">Exercise/Health/Personal Trainer</a></li>
      <li> <a href="insurance_detail.html">Insurance</a></li>
      <li> <a href="insurance_detail.html">Exterminators/Pest Control Insurance</a></li>
      <li> <a href="insurance_detail.html">Golf Course & Driving Range Insurance</a></li>
      <li> <a href="insurance_detail.html">Grocery Store Insurance</a></li>
      <li> <a href="insurance_detail.html">Halfway House Insurance</a></li>
      <li> <a href="insurance_detail.html">Home Health Care Agencies</a></li>
      <li> <a href="insurance_detail.html">Janitorial Insurance</a></li>
      <li> <a href="insurance_detail.html">Landowners Insurance</a></li>
      <li> <a href="insurance_detail.html">Landscaping Insurance</a></li>
      <li> <a href="insurance_detail.html">Laundries Insurance</a></li>
      <li> <a href="insurance_detail.html">Lessor’s Risk Insurance</a></li>
      <li> <a href="insurance_detail.html">Liquor Liability Insurance</a></li>
      <li> <a href="insurance_detail.html">Martial Arts Studio Insurance</a></li>
      <li> <a href="insurance_detail.html">Medical Equipment Supply Stores</a></li>
      <li> <a href="insurance_detail.html">Insurance</a></li>
      <li> <a href="insurance_detail.html">Mobile Home Park Insurance</a></li>
      <li> <a href="insurance_detail.html">Motel/Hotel Insurance</a></li>
      <li> <a href="insurance_detail.html">Office Building Insurance</a></li>
      <li> <a href="insurance_detail.html">Parking Lot and Driveway Insurance</a></li>
      <li> <a href="insurance_detail.html">Pawn Shop Insurance</a></li>
      <li> <a href="insurance_detail.html">Pressure Cleaning Insurance</a></li>
      <li> <a href="insurance_detail.html">Recycler Insurance</a></li>
      <li> <a href="insurance_detail.html">Security Guards Insurance</a></li>
      <li> <a href="insurance_detail.html">Special Events Insurance</a></li>
      <li> <a href="insurance_detail.html">Sports Camps Insurance</a></li>
      <li> <a href="insurance_detail.html">Swimming Pool Contractors Insurance</a></li>
      <li> <a href="insurance_detail.html">Swimming Pool Maintenance Insurance</a></li>
      <li> <a href="insurance_detail.html">Tanning Salon Insurance</a></li>
      <li> <a href="insurance_detail.html">Tree Trimmers Insurance</a></li>
      <li> <a href="insurance_detail.html">Truckers Insurance</a></li>
      <li> <a href="insurance_detail.html">Vacant Building Insurance</a></li>
      <li> <a href="insurance_detail.html">Warehouse Insurance</a></li>
      <li> <a href="insurance_detail.html">Woodworking / Cabinetmaking Insurance </a></li>
    </ul>
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