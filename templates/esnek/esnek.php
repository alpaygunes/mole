<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->baslik;?></title>
    <link rel="stylesheet" href="<?php echo 'templates/'.$this->template.'/css/ff.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo configuration::$site_url.'/library/jvalidator/css/screen.css';?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo configuration::$site_url.'/library/Pagination/pagination.css';?>" type="text/css" />

    <script type="text/javascript" src="<?php echo configuration::$site_url.'/library/jquery/jquery-2.0.2.js';?>"></script>
    <script type="text/javascript" src="<?php echo configuration::$site_url.'/library/jscript.js';?>"></script>
    <script type="text/javascript" src="<?php echo configuration::$site_url.'/library/jvalidator/jquery.validate.js';?>"></script>
    <script type="text/javascript" src="<?php echo configuration::$site_url.'/library/jvalidator/localization/messages_tr.js';?>"></script>
    <script type="text/javascript" src="<?php echo configuration::$site_url.'/library/TBjavascript.js';?>"></script>
    <script type="text/javascript" src="<?php echo configuration::$site_url.'/editor/tinymce/tinymce.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo 'templates/'.$this->template.'/js.js';?>"></script>
    <script type="text/javascript" src="<?php echo 'templates/'.$this->template.'/angular.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo 'templates/'.$this->template.'/ui-bootstrap-tpls-0.13.0.min.js';?>"></script>

    <link href="<?php echo 'templates/'.$this->template.'/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet"  type="text/css">
    <script   src="<?php echo 'templates/'.$this->template.'/bootstrap/js/bootstrap.min.js';?>"></script>
</head>

<body>


<!-- ---------------------------------- main container ---------------------------------------- -->
<div class="main-container container">
    <!-- -------------------------------------------------------------------------------BORTAL- -->
    <div class="portal container">
        <!-- -------------------------------------------------------------------------------SOL SUTUN- -->
        <div class="sol-sutun">
            <div class="logo">
                <span class="site_adi">
                </span>
                <hr class="yataycizgi" />
                <span class="slogan">
                    Öğretmenin farklı yolu...
                </span>
            </div>
            <?php
            echo $this->loadedModules['mod_blog_ag_linkleri'];
            echo $this->loadedModules['anamenu'];
            ?>

        </div>

        <!-- -------------------------------------------------------------------------------ORTA SUTUN- -->
        <div class="orta-sutun">
	        <div class="menu-cubugu">
	            <?php
	                echo $this->loadedModules['ust_anamenu'];
	                echo $this->loadedModules['login'];
	            ?>
	        </div>

            <div class="component-border">
                <?php
                echo $this->showMessages();
                echo $this->component_output;
                ?>
            </div>
        </div>


        <!-- ----------------------------------------------------------------------------------- SAĞ SÜTÜN -->
        <div class="sag-sutun">
            <?php
            echo $this->loadedModules['mod_sagmodul1'];
            ?>
        </div>

        <!-- -------------------------------------------------------------------------------BOTTOM- -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bottom">
            www.okulcan.com
        </div>


    </div>
</div>


</body>
</html>