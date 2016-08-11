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
<div class="main-container">
    <div class="menu-cubugu col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="logo">
        </div>
        <?php
        echo $this->loadedModules['login'];
        ?>
    </div>
    <!-- -------------------------------------------------------------------------------BORTAL- -->
    <div class="portal container">
        <!-- -------------------------------------------------------------------------------SOL SUTUN- -->
        <div class="sol-sutun">
            <div class="profil-resmi">
                <?php
                echo $this->loadedModules['mod_ogretmen_agi_profil_resmi'];
                ?>
            </div>
            &nbsp;
            <?php
            if($this->request['layout']!='duvar'){
                echo $this->loadedModules['mod_ogretmen_agi_hesap_yonetimi'];
            }
                echo $this->loadedModules['mod_ogretmen_agi_anamenu'];
            ?>
        </div>

        <!-- -------------------------------------------------------------------------------ORTA SUTUN- -->
        <div class="orta-sutun">
            <div class="component-border">
                <?php
                echo $this->showMessages();
                echo $this->component_output;
                ?>
            </div>
        </div>

        <!-- -------------------------------------------------------------------------------SAĞ SUTUN- -->
        <div class="sag-sutun">
            <?php

            ?>
        </div>

    </div>

</div>


</body>
</html>