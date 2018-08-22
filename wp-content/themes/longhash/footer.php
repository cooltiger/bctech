  <footer class="footer">
    <div class="inner">
      <ul class="nav01">
        <?php if ( is_home() || is_front_page() ) : ?>
        <li><a href="#container">TOP</a></li>
        <li><a href="#topNews">SERVICE</a></li>
        <!-- <li><a href="#media">MEDIA</a></li> -->
        <li><a href="#company">COMPANY</a></li>
        <li><a href="#member">MEMBER</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php else : ?>
        <li><a href="<?php echo home_url('/'); ?>#container">TOP</a></li>
        <li><a href="<?php echo home_url('/'); ?>#topNews">SERVICE</a></li>
        <!-- <li><a href="<?php echo home_url('/'); ?>#media">MEDIA</a></li> -->
        <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
        <li><a href="<?php echo home_url('/'); ?>#member">MEMBER</a></li>
        <li><a href="<?php echo home_url('/'); ?>#contact">CONTACT</a></li>
        <?php endif; ?>
      </ul>
      <div class="logo">
        <a href="#container"><img src="<?php echo get_template_directory_uri(); ?>/images/Tokex_20180306_v1.png" alt="Tokex"></a>
      </div>
      <ul class="nav02">
        <!-- <li><a href="http://www.longhash.com" target="_blank">LONGHASH.com（海外版）</a></li> -->
        <!-- <li><a href="http://jp.longhash.com/" target="_blank">JP.LONGHASH(日本版)</a></li> -->
        <li><a href="<?php echo home_url('/'); ?>privacy">PRIVACY POLICY</a></li>
        <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li>
      </ul>
      <!-- <ul class="sns">
        <li><a href="https://twitter.com/longhash_jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
        <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
      </ul> -->
      <p class="copyright">© 2018 TOKEX. All rights reserved.</p>
    </div>
  </footer>

</div><!-- container -->

<nav id="side">
  <ul class="mainNav">
    <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
    <li><a href="<?php echo home_url('/'); ?>#topNews">SERVICE</a></li>
    <!-- <li><a href="<?php echo home_url('/'); ?>#media">MEDIA</a></li> -->
    <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
    <li><a href="<?php echo home_url('/'); ?>#member">MEMBER</a></li>
    <li><a href="<?php echo home_url('/'); ?>#contact">CONTACT</a></li>
    <!-- <li><a href="http://longhash.co.jp/meetup/" target="_blank" class="meetup"><span>- NEW -</span>MEETUP</a></li> -->
  </ul>
  <ul class="subNav">
    <!-- <li><a href="http://www.longhash.com" target="_blank">LONGHASH.com（海外版）</a></li> -->
    <!-- <li><a href="http://jp.longhash.com/" target="_blank">JP.LONGHASH(日本版)</a></li> -->
    <li><a href="<?php echo home_url('/'); ?>privacy">PRIVACY POLICY</a></li>
    <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li>
  </ul>
  <!-- <ul class="sns">
    <li><a href="https://twitter.com/longhash_jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
    <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
  </ul> -->
</nav>
<?php wp_footer(); ?>
</body>
</html>
