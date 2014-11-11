<?php

/*
	Template Name: Static Front Page
*/

get_header('static');  ?>

<div class="hero">
<div class="container-hero vertical-centering">
  <h1>Hi, I'm Dana.</h1>
  <h2>I'm a Front-End Developer with a background in Graphic Design and Communication Studies.</h2>

  <div class="scroll-indicator">
    <a href="#about"><i class="fa fa-angle-down fa-5x"></i></a>
  </div> <!-- .scroll-indicator -->
</div> <!-- .container -->
</div> <!-- .hero -->

<header>
  <div class="logo">
    <div class="container">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php echo wp_get_attachment_link( 34, small ); ?>
        </a>
    </div> <!-- .logo -->

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>

    <!-- <div class="social">
     <i class="fa fa-twitter"></i>
     <i class="fa fa-github"></i>
     <i class="fa fa-linkedin"></i>
    </div> -->

  </div> <!-- /.container -->
</header><!--/.header-->

<div class="about" id="about">
  <div class="container">

    <div class="overview-img">
      <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/dana.jpg" alt="Dana Werpny">
    </div> <!-- .overview -->

    <div class="overview">
    <h3>From Design to Front-End Development</h3>
      <p>I am a graphic designer turned front-end developer based in Toronto, Canada. As a designer, I strive to build websites that are both visually beautiful and user-friendly. As a developer, I believe that clean, semantic code matters just as much as the user interface design.</p>
      <h4>More Info...</h4>
      <ul>
        <li>I coded my first website (a personal site) when I was 11 years old.</li>
        <li>I taught myself HTML, CSS, Photoshop, WordPress, InDesign, and Illustrator (in that order).</li>
        <li>I have a degree in Communication Studies from York University.</li>
        <li>I am a graduate of the Full-Time Front-End Development Immersive at HackerYou.</li>
      </ul>

    </div> <!-- .overview -->

  </div> <!-- .container -->
</div> <!-- .about -->

<div class="portfolio clearfix" id="portfolio">
  <div class="container">
    <h2>Featured Work</h2>
     <div class="line"></div>

      <div class="portfolio-right">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio1.png" alt="DapperBox">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-left">
        <h3>DapperBox</h3>
        <h4>A jQuery Photo Gallery for Photographers</h4>
        <p>DapperBox is a responsive photo gallery lightbox that allows for a large quanity of work to be displayed via multiple categories. This project was my first experience with pair programming.</p>
        <ul>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>Sass</li>
          <li>JavaScript</li>
          <li>jQuery</li>
        </ul>
      </div> <!-- .portfolio-img -->

      <div class="portfolio-left">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio2.png" alt="My Movie Star Baby">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-right">
      <h3>My Movie Star Baby</h3>
        <h4>A Hollywood Baby Name Generator</h4>
        <p>This project required API integration from The Movie Database. Some of the names that get generated can be downright ridiculous. Other names actually work really well. Try it out for yourself!</p>
        <ul>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>JavaScript</li>
        </ul>
      </div> <!-- .portfolio-img -->

      <div class="portfolio-right">
        <img class="circle" src="<?php bloginfo('template_directory'); ?>/img/portfolio3.png" alt="DapperBox">
      </div> <!-- .portfolio-display -->

      <div class="portfolio-left">
        <h3>Turning Gears</h3>
        <h4>A JQuery Plugin for Creating a Rotating Animation Effect</h4>
        <p>A small snippet of JQuery combined with the power of the rotating CSS3 animation effect. This plugin is effective in getting the message across that you are a hardworking person or agency whose gears are always turning.</p>
        <ul>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>jQuery</li>
        </ul>
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
      <p>I enjoy building websites. There are so many technologies to learn and improve on, and I work everyday to hone my skills.</p>
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
    <p><a href="mailto:hello@danawerpny.com"><i class="fa fa-envelope fa-2x"></i> &nbsp; hello@danawerpny.com</a></p>
    <p><a href="http://twitter.com/danawerpny"><i class="fa fa-twitter fa-2x"></i> &nbsp; @danawerpny</p>
    <p><a href="http://github.com/danaw"><i class="fa fa-github fa-2x"></i> &nbsp; github.com/danaw</a></p>
    <p><a href="http://ca.linkedin.com/in/danawerpny"><i class="fa fa-linkedin fa-2x"></i> &nbsp; linkedin.com/in/danawerpny</a></p>
  </div>
<div class="contact-right">
  <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
</div>
  </div> <!-- .container -->
</div> <!-- .contact -->

<?php get_footer(); ?>