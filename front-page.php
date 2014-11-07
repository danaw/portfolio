<?php

/*
	Template Name: Static Front Page
*/

get_header();  ?>

<div class="hero">
<div class="container-hero vertical-centering">
  <h1>Hi, I'm Dana</h1>
  <h2>I'm a Front-End Developer with a background in Graphic Design and Communication Studies</h2>
  <button class="action"><a href="">View My Portfolio</a></button>
  <button class="action"><a href="">Download My CV</a></button>
  <button class="action"><a href="">Contact Me</a></button>
</div> <!-- .container -->
</div> <!-- .hero -->

<div class="about">
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

<div class="portfolio clearfix">
  <div class="container">
    <h2>Portfolio</h2>

      <div class="portfolio-right">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio4.jpg" alt="Dana Werpny">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-left">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odit velit dolore obcaecati cupiditate quaerat ab inventore dolores maiores, voluptas, voluptates enim, harum nemo ipsa repudiandae a temporibus quis tempore.</p>
      </div> <!-- .portfolio-img -->

  </div> <!-- .container -->
</div> <!-- .portfolio -->

<div class="skills">
  <div class="container">
    <!-- <h2>Skills</h2> -->
    <div class="skills-list">
      <i class="fa fa-code fa-5x"></i>
      <h2>Development</h2>
      <p>HTML5, CSS3, Sass</p>
      <p>Javascript Fundamentals, JQuery</p>
      <p>AJAX API Integration</p>
      <p>WordPress, PHP</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-paint-brush fa-5x"></i>
      <h2>Design</h2>
      <p>Illustrator</p>
      <p>Photoshop</p>
      <p>InDesign</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-cog fa-5x"></i>
      <h2>Workflow</h2>
      <p>Sublime Text 3</p>
      <p>Gulp</p>
      <p>Git Hub</p>
      <p>Cross-Browser Testing</p>
    </div> <!-- .skills-list -->
    <div class="skills-list">
      <i class="fa fa-heart fa-5x"></i>
      <h2>Passion</h2>
      <p>I enjoy building electronic landscapes. I am always working towards proficiency - learning to be better than I was the day before.</p>
    </div> <!-- .skills-list -->
  </div> <!-- .container -->
</div> <!-- .skills -->

<div class="reading">
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

<div class="contact">
<div class="container">
  <h2>Say Hello</h2>
  <p>Please direct all inquiries to hello@danawerpny.com or fill out the form below. I will respond within 24 hours (or 1 business day), usually much sooner.</p>
  </div> <!-- .container -->
</div> <!-- .contact -->

<?php get_footer(); ?>