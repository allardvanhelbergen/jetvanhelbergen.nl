<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>
      <?php if (isset($this->title)) {echo $this->title . ' - ';}
          echo CHtml::encode(Yii::app()->name); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="<?php
        if (isset($this->description)) {
          echo $this->description;
        } else {
          echo 'Offici&euml;le site van Jet van Helbergen, Sopraan. '.
              'Afgestudeerd aan het Conservatorium van Rotterdam werkt zij '.
              'vanuit haar studio in Amsterdam.';}
        ?>">
    <meta name="author"
        content="Allard van Helbergen, http://www.vanhelbergen.com/">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"
        rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css"
        rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox.css"
        rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/lightbox.js"></script>
</head>

<body>
  <div class="container">

    <header>
      <div id="title" class="hero-unit">
        <h1>
          Jet van Helbergen
          <small>Sopraan</small>
        </h1>
      </div>
    </header>

    <div id="main-content" class="row">

      <?php echo $content; ?>

      <div class="span3 offset1">
        <div class="row">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>
            <a class="btn btn-primary btn-large btn-success span2"
                target="_blank"
                href="https://vimeo.com/70042532">
              <i class="icon-facetime-video icon-white"></i>&nbsp;
              Bekijk de Promo van <br>
              <i>Jamaica Farewell</i><br>
              op Vimeo</a>
          </p>
        </div>
        <div class="row">
          <p>&nbsp;</p>
          <p>
            <a class="btn btn-primary btn-large btn-success span2"
                target="_blank"
                href="http://soundcloud.com/jetvanhelbergen">
              <i class="icon-headphones icon-white"></i>&nbsp;
              Luister naar Jet op Soundcloud</a>
          </p>
        </div>
        <div class="row">
          <p>&nbsp;</p>
          <p>
            <a class="btn btn-large btn-primary span2"
                target="_blank"
                href="http://www.adelinevanlier.nl/programma/theater-muziek-jamaica-farewell-jet-van-helbergen/">
              Recensie Jamaica Farewell op KRO</a>
          </p>
        </div>
        <div class="row">
          <p>&nbsp;</p>
          <p>
            <a class="btn btn-large btn-primary span2"
                target="_blank"
                href="http://www.adelinevanlier.nl/programma/theater-step-by-step-by-wheelsluc-boyer/">
              Recensie Step by Step by Wheels</a>
          </p>
        </div>
        <div class="row">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <address>
            <strong>Jet van Helbergen</strong>
            <br>
            <a href="mailto:info@jetvanhelbergen.nl">
              info@jetvanhelbergen.nl</a>
            <i class="icon-envelope"></i>
          </address>
        </div>
      </div>
    </div>

    <hr>

    <footer>
      <p class="pull-right silent">
        <a class="silent" href="//www.vanhelbergen.com">Webdesign door Allard van Helbergen</a>
      </p>
      <p>&copy; Jet van Helbergen, 2012</p>
    </footer>
  </div>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-31265155-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ?
          'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>
</html>