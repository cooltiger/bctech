<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="ブロックチェーン, 仮想通貨,メディア事業,ビッグデータ事業,コンサルティング,デジタルデバイス販売,アンチマネーロンダリング" />
<meta name="description" content="ブロックチェーンがもたらす分散型経済圏の安全を保障します！制側と既存の金融機関からブロックチェーン技術がまだ不安定かつ違法な用途に使われやすいという認識が強い一方、ブロックチェーン技術を使ってブロックチェーンの透明性、追跡可能かつ改ざん不可な特徴を最大限に活かし安全な取引を可能にする技術をTOKEXは提供します。より安心な環境を作ることによって、ブロックチェーンによる分散型経済圏の普及を目指します！" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<html prefix="og: http://ogp.me/ns#">
<meta property="og:title" content="k.k TOKEX | BLOCKCHAIN Advancing the understanding and development of blockchain technology"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="http://tokex.jp/"/>
<meta property="og:image" content="http://tokex.jp/wp-content/themes/longhash/images/Tokex_20180306_v1.png"/>
<meta property="og:site_name"  content="株式会社TOKEX | ブロックチェーンがもたらす分散型経済圏の安全を保障します！"/>
<meta property="og:description" content="ブロックチェーンがもたらす分散型経済圏の安全を保障します！制側と既存の金融機関からブロックチェーン技術がまだ不安定かつ違法な用途に使われやすいという認識が強い一方、ブロックチェーン技術を使ってブロックチェーンの透明性、追跡可能かつ改ざん不可な特徴を最大限に活かし安全な取引を可能にする技術をTOKEXは提供します。より安心な環境を作ることによって、ブロックチェーンによる分散型経済圏の普及を目指します！"/>

<!-- <link rel="shortcut icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/MyFontsWebfontsKit.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v8">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.simplesidebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114528658-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

　gtag('config', 'UA-114528658-1', {
  'linker': {
    'domains': ['www.longhash.com', 'www.longhash.co.jp']
  }
});
</script>




</head>
<?php wp_head(); ?>
<body>

<div id="container">

  <header id="header">
    <div class="headerWrap">
      <div class="inner">
      <?php if ( is_home() || is_front_page() ) : ?>
      <div class="logo"><a href="#container"><img src="<?php echo get_template_directory_uri(); ?>/images/Tokex_20180306_v1.png" alt="Tokex" width = "" height = ""></a></div>
      <?php else : ?>
      <div class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Tokex_20180306_v1.png" alt="Tokex" width = "" height = "" ></a></div>
      <?php endif; ?>

      <!-- <ul class="sns">
        <li><a href="https://twitter.com/longhash_jp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
        <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
      </ul> -->
      <!-- <ul class="language"> -->
        <!-- <li><a href="http://longhash.co.jp/en/">EN</a></li> -->
        <!-- <li>|</li> -->
        <!-- <li class="current"><a href="<?php echo home_url('/'); ?>">日本語</a></li> -->
      <!-- </ul> -->
      <!-- <ul class="subNav"> -->
        <!-- <li><a href="http://longhash.co.jp/meetup/" target="_blank"><span>- NEW -</span>MEETUP</a></li> -->
      <!-- </ul> -->
      <div id="sideOpenBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_menu_sp.png" alt="MENU" ></div>
      </div>

    </div>

    <div class="navWrap">
      <div class="inner">
        <ul>
          <?php if ( is_home() || is_front_page() ) : ?>
          <li><a href="#topNews">SERVICE</a></li>
          <!-- <li><a href="#media">MEDIA</a></li> -->
          <li><a href="#company">COMPANY</a></li>
          <li><a href="#member">MEMBER</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <?php else : ?>
          <li><a href="<?php echo home_url('/'); ?>#topNews">SERVICE</a></li>
          <!-- <li><a href="<?php echo home_url('/'); ?>#media">MEDIA</a></li> -->
          <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
          <li><a href="<?php echo home_url('/'); ?>#member">MEMBER</a></li>
          <li><a href="<?php echo home_url('/'); ?>#contact">CONTACT</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>

  </header>
