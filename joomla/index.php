<?php
/**
 * @version    $Id: index.php 21720 2011-07-01 08:31:15Z chdemko $
 * @package    Joomla.Site
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="pt-br"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>
    <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
    <jdoc:include type="head" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/portal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/casamento.css" type="text/css" media="screen, projection" />

    <!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modernizr-1.7.min.js"></script>  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.countdown-pt-BR.js"></script>
    <script type="text/javascript">
    $(function () {
      var austDay = new Date();
      austDay = new Date(2012, 12 - 1, 21);
      $('#countdown').countdown({until: austDay, format: 'd', layout: 'Faltam {dn} {dl}'});
      $('#year').text(austDay.getFullYear());
    });
    </script>
  </head>
  <body>
    <div id="counter"><span id="countdown"></span></div>
  <header>
    <div id="pics">Fotos que marcaram nossa vida...</div>
    <div id="media">
    </div>
    <div id="wishes">
      <div id="title"></div>
      <div id="names">Claudia e João</div>  
    </div>
  </header>
  <div id="portal">
    <nav class="portal">
      <h3>Navegação</h3>
      <?php if($this->countModules('claudiaejoao-menu')) : ?>
          <jdoc:include type="modules" name="claudiaejoao-menu" style="container" />
      <?php endif; ?>
    </nav>
    
    <article>
      <?php if($this->countModules('claudiaejoao-topquote')) : ?>
        <jdoc:include type="modules" name="claudiaejoao-topquote" style="none" />
      <?php endif; ?>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      <?php if($this->countModules('claudiaejoao-bottomquote')) : ?>
        <jdoc:include type="modules" name="claudiaejoao-bottomquote" style="none" />
      <?php endif; ?>
<!--<div class="media">
<iframe src="http://www.facebook.com/plugins/like.php?app_id=138318976249824&amp;href&amp;send=false&amp;layout=standard&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=segoe+ui&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:35px;" allowTransparency="true"></iframe>
</div>-->
    </article>
    <footer>
    
    <!--<p>&copy; Copyright Your Name Here 2011. All Rights Reserved.</p>-->
    <p>Desenvolvido, com muito amor a carinho, por João Carlos Nunes Bittencourt, 
      sob licença <a href="http://creativecommons.org/licenses/by/2.0/br/">Creative Commons 
        Atribuído</a>.</p>
    
    </footer>  
  </div>
  <div id="spacer"></div>
  </body>
</html>
