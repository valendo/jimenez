<?php get_header(); ?>

<!--sgsdg
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
-->

<!-- banner-->
<div class="banner" > <img src="<?php bloginfo('template_directory'); ?>/img/index_banner.jpg">
  <div class="quotebox">    
      <div class="quotetop effect">
      	<div class="boxcont">
        <p class="text1">Fast & Free</p>
        <p class="text2">Health insurance quotes
          From multiple carries</p>
        <a class="btn" href="http://texashealthinsurancetoday.com/" target="_blank">Get a quote</a> </div>
        </div>
    </div>  
</div>

<!-- get a quote -->
<div class="pagewrap">
  <div class="boxquote">
    <div class="boximg"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/car.jpg"></a></div>
    <div class="boxtext car">
      <p class="title">AUTO</p>
      <p>Auto insurance protects you against financial loss if you have an accident. </p>
      <p>It is a contract between you and the insurance company agreeing to pay your losses as defined in your policy</p>
      <p class="btquote"><a href="#">GET A QUOTE</a></p>
    </div>
  </div>
  <div class="boxquote">
    <div class="boximg"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/home.jpg"></a></div>
    <div class="boxtext home">
      <p class="title">HOME</p>
      <p>Auto insurance protects you against financial loss if you have an accident.</p>
      <p> It is a contract between you and the insurance company agreeing to pay your losses as defined in your policy</p>
      <p class="btquote"><a href="#">GET A QUOTE</a></p>
    </div>
  </div>
  <div class="boxquote">
    <div class="boximg"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/life.jpg"></a></div>
    <div class="boxtext life">
      <p class="title">LIFE</p>
      <p>The first step in learning about life insurance is understanding its necessity and importance. </p>
      <p>It is essential for a number of reasons, especially knowing your family will be cared for after you are gone.</p>
      <p class="btquote"><a href="#">GET A QUOTE</a></p>
    </div>
  </div>
  <div class="boxquote">
    <div class="boximg"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/commercial.jpg"></a></div>
    <div class="boxtext commercial">
      <p class="title">COMMERCIAL</p>
      <p>Your business needs protection from many angles and should cover all your assets with the correct types of policies to protect your employees and your business against any liabilities.</p>
      <p class="btquote"><a href="#">GET A QUOTE</a></p>
    </div>
  </div>
</div>
<!-- infomationg -->
<div class="boxinfo">
  <div class="pagewrap">
    <h1 class="acticle"><span>Who is Jason Jimenez?</span></h1>
    <p>A real person with a real passion for my business and insurance, I am a second generation insurance agent, I started working with my father when I was 15. It was a job I thought I could never get fired from, and one that allowed me to make an easy living. But as time went on, I realized what my father and mother did for a living was more important than just selling insurance.</p>
    <p> One day, my father did something that would alter my life forever. He told me to put on a suit and tie because we were going to an appointment. I asked my father what the appointment was about. "You will see," he said. When we arrived, my father knocked on the door and a women answered. They began to hug and a few seconds later the woman began to cry uncontrollably as my father consoled her. It turned out her husband had died a few weeks earlier. Seeing my father give her $100,000 could not bring her husband back, but it took some weight off her shoulders regarding how she would pay for her bills, her mortgage and especially the funeral. I saw my father become more than just an insurance agent. I saw him become my hero!</p>
    <p>On that day, I became aware of how important it was to be insured and more importantly, why my father took so much pride in helping people. So I opened my own agency at the age of 21 in November, 1999. Today, my agency has been ranked in the top 3% in the nation with Farmers Insurance more than once (Championship Award Winner). And I take pride in what I do. I want be one of the best agents in Texas!</p>
  </div>
</div>
<?php get_footer(); ?>