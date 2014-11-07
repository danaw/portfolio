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

<div class="portfolio">
  <div class="container">
    <h2>Portfolio</h2>
    <img src="" alt="portfolio1">
    <img src="" alt="portfolio2">
    <img src="" alt="portfolio3">
    <img src="" alt="portfolio4">
  </div> <!-- .container -->
</div> <!-- .portfolio -->

<div class="skills">
  <div class="container">
    <h2>Skills</h2>
    <p>I got skills, they're multiplying. And I'm losing control.</p>
  </div> <!-- .container -->
</div> <!-- .skills -->

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<div class="contact">
<div class="container">
  <h2>Say Hello</h2>
  <p>Please direct all inquiries to hello@danawerpny.com or fill out the form below. I will respond within 24 hours (or 1 business day), usually much sooner.</p>
  </div> <!-- .container -->
</div> <!-- .contact -->

<?php get_footer(); ?>