<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="ブロックチェーン, 仮想通貨,データ, データビジュアライゼーション,スタートアップ, 育成 ,アンチマネーロンダリング, メディア,インキュベーション,ミートアップ,ハッカソン" />
<meta name="description" content="ブロックチェーンがもたらす本来のビジネスモデルと経済圏の革新をもっと世間に知ってもらいたいと考えており、ブロックチェーンのあるべき姿を、規制を作っていく政府も交えて、世の中にブロックチェーンの本当の素晴らしさと可能性を伝えていきます。" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<html prefix="og: http://ogp.me/ns#">
<meta property="og:title" content="k.k LONGHASH | BLOCKCHAIN Advancing the understanding and development of blockchain technology"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="http://longhash.co.jp/"/>
<meta property="og:image" content="http://longhash.sakura.ne.jp/wp/wp-content/themes/longhash/images/og_longhash.jpg"/>
<meta property="og:site_name"  content="株式会社LONGHASH | ブロックチェーンによって人と情報とお金をつなぎ革新的な信頼社会を目指す。"/>
<meta property="og:description" content="ブロックチェーンがもたらす本来のビジネスモデルと経済圏の革新をもっと世間に知ってもらいたいと考えており、ブロックチェーンのあるべき姿を、規制を作っていく政府も交えて、世の中にブロックチェーンの本当の素晴らしさと可能性を伝えていきます。"/>

<link rel="shortcut icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/MyFontsWebfontsKit.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114528658-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

　gtag('config', 'UA-114528658-2', {
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
    <div class="inner">
      <?php if ( is_home() || is_front_page() ) : ?>
      <div class="logo"><a href="#container"><img src="<?php echo get_template_directory_uri(); ?>/images/log_longhash.png" alt="LONGHASH"></a></div>
      <?php else : ?>
      <div class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/log_longhash.png" alt="LONGHASH"></a></div>
      <?php endif; ?>
      <ul class="pcNav">
        <?php if ( is_home() || is_front_page() ) : ?>
        <li><a href="#topNews">NEWS</a></li>
        <li><a href="#company">COMPANY</a></li>
        <li><a href="#careers">CAREERS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php else : ?>
        <li><a href="<?php echo home_url('/'); ?>#topNews">NEWS</a></li>
        <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
        <li><a href="<?php echo home_url('/'); ?>#careers">CAREERS</a></li>
        <li><a href="<?php echo home_url('/'); ?>#contact">CONTACT</a></li>
        <?php endif; ?>
      </ul>

      <ul class="language">
        <li><a href="http://longhash.co.jp/en/">EN</a></li>
        <li>|</li>
        <li class="current"><a href="<?php echo home_url('/'); ?>">日本語</a></li>
      </ul>

      <ul class="sns">
        <li><a href="https://twitter.com/longhash_jp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
        <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
      </ul>
      <div id="sideOpenBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_menu_sp.png" alt="MENU" ></div>
    </div>
  </header>