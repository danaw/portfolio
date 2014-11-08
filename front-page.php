<?php

/*
	Template Name: Static Front Page
*/

get_header();  ?>

<div class="hero">
<div class="container-hero vertical-centering">
  <h1>Hi, I'm Dana</h1>
  <h2>I'm a Front-End Developer with a background in Graphic Design and Communication Studies</h2>
  <a href="#portfolio"><button class="action">View My Portfolio</button></a>
  <a href=""><button class="action">Download My CV</button></a>
  <a href="#contact"><button class="action">Contact Me</button></a>
  <div class="scroll-indicator">
    <a href="#about"><i class="fa fa-angle-down fa-5x"></i></a>
  </div> <!-- .scroll-indicator -->
</div> <!-- .container -->
</div> <!-- .hero -->

<div class="about" id="about">
  <div class="container">

    <div class="overview-img">
      <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/dana.jpg" alt="Dana Werpny">
    </div> <!-- .overview -->

    <div class="overview">
      <h3>General Overview</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam animi, recusandae inventore aliquam fugiat neque commodi autem mollitia officia, nemo dolorem, sit quas iure magni sint sed alias  dignissimos. Excepturi.</p>
    </div> <!-- .overview -->

  </div> <!-- .container -->
</div> <!-- .about -->

<div class="portfolio clearfix" id="portfolio">
  <div class="container">
    <h2>Portfolio</h2>
     <div class="line"></div>
      <div class="portfolio-right">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio4.jpg" alt="Dana Werpny">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-left">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odit velit dolore obcaecati cupiditate quaerat ab inventore dolores maiores, voluptas, voluptates enim, harum nemo ipsa repudiandae a temporibus quis tempore.</p>
      </div> <!-- .portfolio-img -->

      <div class="portfolio-left">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio4.jpg" alt="Dana Werpny">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odit velit dolore obcaecati cupiditate quaerat ab inventore dolores maiores, voluptas, voluptates enim, harum nemo ipsa repudiandae a temporibus quis tempore.</p>
      </div> <!-- .portfolio-img -->

  </div> <!-- .container -->
</div> <!-- .portfolio -->

<div class="skills" id="skills">
  <div class="container">
    <!-- <h2>Skills</h2> -->
    <div class="skills-list">
      <i class="fa fa-code fa-4x"></i>
      <h2>Development</h2>
      <p>HTML5, CSS3, Sass</p>
      <p>Javascript Fundamentals, JQuery</p>
      <p>AJAX API Integration</p>
      <p>WordPress, PHP</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-paint-brush fa-4x"></i>
      <h2>Design</h2>
      <p>Illustrator</p>
      <p>Photoshop</p>
      <p>InDesign</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-cog fa-4x"></i>
      <h2>Workflow</h2>
      <p>Sublime Text 3</p>
      <p>Gulp</p>
      <p>Git Hub</p>
      <p>Cross-Browser Testing</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-heart fa-4x"></i>
      <h2>Passion</h2>
      <p>I enjoy building electronic landscapes. I am always working towards proficiency - learning to be better than I was the day before.</p>
    </div> <!-- .skills-list -->
  </div> <!-- .container -->
</div> <!-- .skills -->

<div class="reading" id="blog">
  <div class="main">
    <div class="container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.main -->
  </div> <!-- /.container -->
</div> <!-- .reading -->

<div class="contact clearfix" id="contact">
<div class="container">
  <h1>Say Hello</h1>
  <div class="line"></div>
  <div class="contact-left">
    <h2>Connect with me on social media.</h2>
    <p><i class="fa fa-envelope fa-2x"></i> &nbsp; hello@danawerpny.com</p>
    <p><i class="fa fa-twitter fa-2x"></i> &nbsp; @danawerpny</p>
    <p><i class="fa fa-github fa-2x"></i> &nbsp; github.com/danaw</p>
    <p><i class="fa fa-linkedin fa-2x"></i> &nbsp; linkedin.com/in/danawerpny</p>
  </div>
<div class="contact-right">
  <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
</div>
  </div> <!-- .container -->
</div> <!-- .contact -->

<?php get_footer(); ?>