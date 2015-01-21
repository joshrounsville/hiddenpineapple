<?php
/*
 Template Name: Home Page
 *
*/
?>



<?php get_header(); ?>

  <section class="bg-white pad-v">
    <div class="container">

      <div class="row mar-b">
        <div class="span12">
          <h2>Product Development is our Bread and Butter.</h2>
        </div>
      </div>

      <div class="row check-visible">
        <div class="span3">
          <i class="icon icon-lightbulb mar-b--20 fade-in-left delay-1"></i>
          <h4 class="pad-b--10">Concept</h4>
          <p>This is the fun part. We love working from concept to help dream up meaningful products or app ideas.</p>
        </div>
        <div class="span3">
          <i class="icon icon-compass mar-b--20 fade-in-left delay-2"></i>
          <h4 class="pad-b--10">Strategy</h4>
          <p>It’s not just about a good idea. We take the inspiration and find ways to make it even more effective.</p>
        </div>
        <div class="span3">
          <i class="icon icon-gear mar-b--20 fade-in-left delay-3"></i>
          <h4 class="pad-b--10">Execution</h4>
          <p>We’re committed to excellence in design and development to make the final product stand out from the crowd.</p>
        </div>
        <div class="span3">
          <i class="icon icon-sailboat mar-b--20 fade-in-left delay-4"></i>
          <h4 class="pad-b--10">Launch</h4>
          <p>We know how to prioritize our talents to make sure our products ship on time for our users.</p>
        </div>
      </div>

    </div>
  </section>


  <section class="bg-gray pad-t--40 pad-b--40">
    <div class="container">

      <div class="row">
        <div class="span12">
          <ul class="list-middle-align list-spacer-right">
            <li>
              <h5>featured by:</h5>
            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/microsoft.png" alt="Microsoft" width="166" height="36"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/the-verge.png" alt="The Verge" width="174" height="30"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/nokia.png" alt="Nokia" width="144" height="30"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/wp-central.png" alt="Windows Phone Central" width="50" height="47"></li>
          </ul>
        </div>
      </div>

    </div>
  </section>


  <!-- <section class="bg-white pad-v">
    <div class="container">

      <div class="row pad-b--20">
        <div class="span12">
          <h2 class="pad-b--10">Who we are:</h2>
          <p class="highlight"><span class="break">Two tech-enthused guys from the Pacific Northwest who love</span> making awesome stuff for everyday folks. </p>
        </div>
      </div>

      <div class="row">
        <div class="span6">
          <div class="row">
            <div class="span4">
              <a href="#" class="bio-twitter">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/team/porter.png" alt="Erik Porter" width="164" height="164">
                <span class="twitter-overlay"><i class="fa fa-twitter"></i></span>
              </a>
            </div>
            <div class="span8">
              <div class="bio">
                <h4>Erik Porter</h4>
                <h5>Development</h5>
                <p>An Ex-Microsofter, Erik uses his years of experience to build rock-solid interactive apps and experiences. Outside of work, he enjoys spending time with his wife and kids, watching movies and TV shows.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="span6">
          <div class="row">
            <div class="span4">
              <a href="#" class="bio-twitter">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/team/krogh.png" alt="Ben Krogh" width="164" height="164">
                <span class="twitter-overlay"><i class="fa fa-twitter"></i></span>
              </a>
            </div>
            <div class="span8">
              <div class="bio">
                <h4>Ben Krogh</h4>
                <h5>Design</h5>
                <p>Ben has designed a slew of apps and websites for clients such as Spotify and Microsoft, and brings his interactive expertise to Hidden Pineapple. He lives in Portland, Oregon with his wife and daughter.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->


  <section class="pad-v bg-photo">
    <div class="container">

      <div class="row">
        <div class="span8">

          <div class="twitter-feed-wrap">
            <i class="fa fa-twitter"></i>
            <div class="twitter-feed" id="twitter-feed"></div>
            <a href="https://twitter.com/thehp" class="btn btn--outline btn--twitter" target="_blank">Follow Us</a>
          </div>


        </div>
      </div>

    </div>
  </section>

<?php get_footer(); ?>