    <footer>
      <div class="container">

        <div class="row pad-b">
          <div class="span6">
            <ul class="list-middle-align">
              <li class="pad-r--10"><i class="icon icon-tree"></i></li>
              <li>proudly designed and built in the Pacific Northwest</li>
            </ul>
          </div>
          <div class="span6">
            <nav class="nav-footer-social">
              <ul class="list-middle-align">
                <li><a href="#" class="twitter"><i class="icon icon-twitter"></i></a></li>
                <li><a href="#" class="email"><i class="icon icon-envelope"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <ul class="list-inline text-white">
              <li class="pad-r--10"><a href="<?php echo home_url(); ?>" class="logo-footer"><img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/hidden-pineapple-tagline.svg" alt="Hidden Pineapple"></a></li>
              <li><small>Copyright &copy; <?php echo date('Y'); ?> Hidden Pineapple, all rights reserved</small></li>
            </ul>
          </div>
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>