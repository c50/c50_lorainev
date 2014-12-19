<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
<title><?php print $head_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" lang="fr" content="Artiste uccloise qui manie aussi bien les couleurs que les matières, évolue et crée dans un monde passionné et passionnel.">
<meta name="keywords" content="lorainev, loraine vanderhaege, artiste peintre, tableau acrylique, peinture à l'huile, atelier de peinture Uccle">
<meta name="author" content="lorainev.be">
<meta name="identifier-url" content="http://www.lorainev.be">
<meta name="revisit-after" content="30 days">
<meta name="publisher" content=" lorainev.be ">
<meta name="copyright" content=" lorainev.be ">
<meta name="robots" content="index, follow, all">
 <?php print $head; ?>
  
  <link href='http://fonts.googleapis.com/css?family=Exo:100,200,400' rel='stylesheet' type='text/css'>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Exo+2::latin,latin-ext' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3472351-23']);
  _gaq.push(['_setDomainName', 'lorainev.be']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body<?php print $attributes;?>>
  <div id="decor">
    <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  </div>
</body>
</html>
