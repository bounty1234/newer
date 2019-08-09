<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Coming Soon</title>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content=" Coming Soon / ">
	<meta name="keywords" content="Enter, your, keywords">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="<?=$this_folder;?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$this_folder;?>/css/normalize.min.css">
  <link rel="stylesheet" href="<?=$this_folder;?>/css/reveal.css">
  <link rel="stylesheet" href="<?=$this_folder;?>/css/style.css">
</head>
<body>
<!--   <header>
    <span class="btn-menu"><img src="<?=$this_folder;?>/images/menu.svg" /></span>
  </header>
 -->  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <a class="logo" href="#">
            <!-- <img src="images/logo.png" /> -->
            <!-- <img src="<?=$logo;?>" /> -->
          </a>
          <div id="countdown" data-time="2019/09/01 07:03:27"></div><!-- change data-time -->
          <h2>Something big is Coming Soon!</h2>
          <a class="btn" href="#">Go back to our Homepage</a>
        </div>
      </div>
    </div>
  </div>

  <nav class="menu col-xs-12 col-sm-6 block-revealer">
    <div class="revealer-content">
      <span class="btn-close"><img src="<?=$this_folder;?>/images/close.svg" /></span>
      <ul class="menu-inner">
        <li class="menu-item"><a class="menu-link" href="#">Home</a></li>
        <li class="menu-item"><a class="menu-link" href="#">How it works</a></li>
        <li class="menu-item"><a class="menu-link" href="#">About</a></li>
        <li class="menu-item"><a class="menu-link" href="#">Contact</a></li>
      </ul>
    </div>
    <div class="revealer-animation"></div>
  </nav>

  <div data-stage></div>

  <script type="text/javascript" src="<?=$this_folder;?>/js/jquery.min.js"></script>
  <script type="text/javascript" src='<?=$this_folder;?>/js/jquery.countdown.min.js'></script>
  <script type="text/javascript" src="<?=$this_folder;?>/js/anime.min.js"></script>
  <script type="text/javascript" src="<?=$this_folder;?>/js/reveal.js"></script>
  <script type="text/javascript" src="<?=$this_folder;?>/js/three.min.js"></script>
  <script type="text/javascript" src="<?=$this_folder;?>/js/TweenMax.min.js"></script>
  <script type="text/javascript" src="<?=$this_folder;?>/js/index.js"></script>
</body>

</html>