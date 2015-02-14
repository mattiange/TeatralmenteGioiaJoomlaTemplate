<?php
  defined('_JEXEC') or die;
  JHtml::_('behavior.framework', true);

  $app = JFactory::getApplication();
?>

<?php
$config = JFactory::getConfig();
$site_name = $config->get('sitename');

//Get parameters
$visible                    = $this->params->get('visible');
$fb_comments                = $this->params->get('fbcomments');
$fb_like_box                = $this->params->get('fblikebox');
$fb_like_box_href           = $this->params->get('fblikebox_href');
$fb_like_box_width          = $this->params->get('fblikebox_width');
$fb_like_box_height         = $this->params->get('fblikebox_height');
$fb_like_box_colorscheme    = $this->params->get('fblikebox_colorscheme');
$fb_like_box_show_faces     = $this->params->get('fblikebox_show_faces');
$fb_like_box_border_color   = $this->params->get('fblikebox_border_color');
$fb_like_box_stream         = $this->params->get('fblikebox_stream');
$fb_like_box_header         = $this->params->get('fblikebox_header');
$gp_comments                = $this->params->get('gpcomments');
$tw_comments                = $this->params->get('twcomments');

$app_theme          = $this->params->get('app_theme');
$dimension_theme    = $this->params->get('dimension_theme');
?>

<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/menu.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors/<?php echo $app_theme; ?>.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/dimensions/template/<?php echo $dimension_theme; ?>.css" type="text/css" />
    
    
    
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jQuery.js"></script>
    <script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.easing.1.3.js'></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/ora.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/sidebar.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/menu.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/cerca.js"></script>
    <!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/sizeSidebar.js"></script>-->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/social.js"></script>
    <!-- Posiziona questo tag all'interno del tag head oppure subito prima della chiusura del tag body. -->
    <script type="text/javascript" src="https://apis.google.com/js/platform.js">
      {lang: 'it'}
    </script>
  </head>

  <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        
        <div id="header">
            <div class="sitename">
                <h1><a href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/index.php"><?php echo $site_name; ?></a></h1>
            </div>
            
            <div class="mainmenu">
                <jdoc:include type="modules" name="mainmenu" style="none" />
            </div>
        </div>
        
        
        
        <div id="page">
            <div class="header">
                <div class="language">
                    <jdoc:include type="modules" name="language" style="none" />
                </div>
                

                <div class="bar">
                    <div class="date">
                        <b></b>
                    </div>
                    
                    <!-- MODULO CERCA -->
                    <div class="search">
                        <jdoc:include type="modules" name="cerca" style="none" />
                    </div>
                    <!-- FINE MODULO CERCA -->
                </div>
                <!-- FINE MODULO DEL MENU PRINCIPALE-->
            </div>
	    
            <div class="body">
                <div id="content" class="content">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />

                    <jdoc:include type="modules" name="content" style="none" />
		    
		    
		    <div id="social">
                        <div class="titles">
                            <?php if($fb_comments=='yes'){?><div class="fb this"></div><?php } ?>
                            <?php if($gp_comments=='yes'){?><div class="gp"></div><?php } ?>
                            <?php if($tw_comments=='yes'){?><div class="tw"></div><?php } ?>
                            <div class="tg"></div>
                        </div>

                        <div class="body">
                            <?php if($fb_comments=='yes'){ ?>
                            <div class="fb">
                                <?php $url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>

                                <div class="fb-like" data-href="<?php echo $url; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="fb-comments" data-href="<?php echo $url; ?>" data-numposts="10" data-colorscheme="dark"></div>

                                <jdoc:include type="modules" name="fbcomments" style="none" />
                            </div>
                            <?php } ?>
                            
                            <?php if($gp_comments=='yes'){ ?>
                            <div class="gp">
                                <div class="g-plusone" data-annotation="inline" data-width="300"></div>
                            </div>
                            <?php } ?>
                            
                            <?php if($tw_comments=='yes'){ ?>
                            <div class="tw">
                                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="it">Tweet</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                            <?php } ?>
                            
                            <div class="tg">
                                <b>Nessuna azione disponibile</b>
                            </div>
                          </div>
		    </div>
                </div>
            </div>
                
            <div id="right" class="right">		    
                <?php if ($visible == "yes" && $this->countModules('sidebar')) {?>
                <div class="sidebar">
                    <jdoc:include type="modules" name="sidebar" style="none" />

                    <?php if($fb_like_box == 'yes'){ ?>
                    <div 
                        class="fb-like-box" 
                        data-href="<?php echo ($fb_like_box_href!='')?$fb_like_box_href:'' ?>" 
                        data-width="<?php echo ($fb_like_box_width!='')?$fb_like_box_width:'' ?>" 
                        data-height="<?php echo ($fb_like_box_height!='')?$fb_like_box_height:'' ?>" 
                        data-colorscheme="<?php echo ($fb_like_box_colorscheme!='')?$fb_like_box_colorscheme:'' ?>" 
                        data-show-faces="<?php echo ($fb_like_box_show_faces=='true')?'true':'false' ?>" 
                        data-border-color="<?php echo ($fb_like_box_border_color!='')?$fb_like_box_border_color:'' ?>" 
                        data-stream="<?php echo ($fb_like_box_stream=='true')?'true':'false' ?>" 
                        data-header="<?php echo ($fb_like_box_header=='true')?'true':'false' ?>"></div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

            <div class="footer">
                <div class="footermenu">
                    <jdoc:include type="modules" name="footer" style="none" />
                </div>

                <div class="footerdescription">
                    <jdoc:include type="modules" name="dati" style="none" />
                </div>
            </div>
        </div>
  </body>
</html>