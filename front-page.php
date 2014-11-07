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

    <div class="overview">
      <img src="" alt="This is where the image will go">
    </div> <!-- .overview -->

    <div class="overview">
      <h3>General Overview</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam animi, recusandae inventore aliquam fugiat neque commodi autem mollitia officia, nemo dolorem, sit quas iure magni sint sed alias  dignissimos. Excepturi.</p>
    </div> <!-- .overview -->

  </div> <!-- .container -->
</div> <!-- .about -->

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>